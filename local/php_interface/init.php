<?php
$mainDomain = 'oikos-decopaint.ru';
if(strpos($_SERVER['HTTP_HOST'], $mainDomain) === false){
    header('Location: http://' . $mainDomain . $_SERVER['REQUEST_URI'], true, 301);
    die;
}

require_once __DIR__ . '/autoload.php';
$instance = Bitrix\Main\EventManager::getInstance();

$instance->addEventHandler("iblock", "OnAfterIBlockElementAdd", ['Oikos\Events', 'sendForm2BX']);
