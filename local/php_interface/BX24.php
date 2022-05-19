<?php
/**
 * Created by PhpStorm.
 * User: semyonchick
 * Date: 07.12.2017
 * Time: 13:24
 */
namespace Oikos;

class BX24
{
    public $url = false;
    public $next = false;
    public $total = false;
    private $bxLog = [];

    function __construct($url)
    {
        $this->url = $url;
    }

    public function getDomain()
    {
        if (preg_match('#\/([^\/]+)\/rest\/(\d+)\/([\d\w]+)\/#', $this->url, $match))
            return $match[1];
        return false;
    }

    public function getUser()
    {
        if (preg_match('#\/([^\/]+)\/rest\/(\d+)\/([\d\w]+)\/#', $this->url, $match))
            return $match[2];
        return false;
    }

    public function getKey()
    {
        if (preg_match('#\/([^\/]+)\/rest\/(\d+)\/([\d\w]+)\/#', $this->url, $match))
            return $match[3];
        return false;
    }

    public function runWithNext($method, $get = false)
    {
        $this->next = false;
        $this->total = false;
        $result = [];
        while ($this->total === false || count($result) < $this->total) {
            $result = array_merge($result, $this->run($method, $get));
            if ($this->total === false) $this->total = count($result);
        }
        return $result;
    }

    public function run($method, $get = false, $post = false)
    {
        $cl = count($this->bxLog);
        if ($cl > 2 && ($spend = microtime(true) - $this->bxLog[$cl - 2]) && $spend < 1) {
            usleep((1 - $spend) * 1000000);
            return self::run($method, $get, $post);
        }

        $url = $this->url;
        $url .= $method . '/';
        if ($get) $url .= '?' . http_build_query($get);

        try {
            $result = $this->curl($url, $post);
        } catch (\Exception $e) {
            print_r('bitrix error');
            sleep(3);
            return self::run($method, $get, $post);
        }

        if (!isset($result['result'])) {
            if ($result['error'] == 'QUERY_LIMIT_EXCEEDED') {
                sleep(5);
                return $this->run($method, $get, $post);
            }
            throw new \Exception(print_r($result, 1));
        }

        if ($result['next']) $this->next = $result['next'];
        if ($result['total']) $this->total = $result['total'];

        $this->bxLog[] = microtime(true);

        return (array)$result['result'];
    }

    public function curl($url, $post = [])
    {
        $curl = curl_init($url);
        curl_setopt_array($curl, array(
            CURLOPT_SSL_VERIFYPEER => 0,
            CURLOPT_POST => !empty($post),
            CURLOPT_HEADER => 0,
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_POSTFIELDS => http_build_query($post),
        ));

        $result = curl_exec($curl);
        curl_close($curl);

        return json_decode($result, 1);
    }

    public function all($method, $get = false, $post = false)
    {
        $result = [];
        $next = false;
        while (!$next || $this->next !== $next) {
            $next = $this->next;
            if ($this->next) $get['start'] = $this->next;
            foreach ($this->run($method, $get, $post) as $row)
                $result[] = $row;
        }
        return $result;
    }

}