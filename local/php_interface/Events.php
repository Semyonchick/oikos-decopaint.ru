<?php


namespace Oikos;


use CIBlock;
use CIBlockProperty;
use CIBlockPropertyEnum;

class Events
{
    function sendForm2BX($arFields)
    {
        $iblock = CIBlock::GetList([], ['=ID' => $arFields['IBLOCK_ID']])->Fetch();
        if (!$iblock || $iblock['IBLOCK_TYPE_ID'] == 'aspro_allcorp3_form') {
            $text = [];

            $enum = [];
            $query = CIBlockPropertyEnum::GetList([], ['IBLOCK_ID' => $arFields["IBLOCK_ID"]]);
            while ($row = $query->Fetch())
                $enum[$row['PROPERTY_ID']][$row['ID']] = $row['VALUE'];

            $PROPERTIES = [];
            $query = CIBlockProperty::GetList([], ['IBLOCK_ID' => $arFields["IBLOCK_ID"]]);
            while ($row = $query->Fetch())
                if (!empty($arFields['PROPERTY_VALUES'][$row['ID']])) {
                    if ($enum[$row['ID']]) {
                        $value = [];
                        foreach ((array)$arFields['PROPERTY_VALUES'][$row['ID']] as $id) $value[] = $enum[$row['ID']][$id];
                        $value = implode(',', $value);
                    } else {
                        $value = $arFields['PROPERTY_VALUES'][$row['ID']];
                    }
                    $PROPERTIES[strtoupper($row['CODE'] ?: $row['ID'])] = $value;
                    $text[] = "{$row['NAME']}: {$value}";
                }

            if (!empty($text)) {
                if (isset($html)) {
                    $text[] = '';
                    $text[] = $html;
                }
                $text[] = '';
                $text[] = "Со страницы: {$_SERVER['HTTP_REFERER']}";
                $text[] = "IP адрес: {$_SERVER['REMOTE_ADDR']}";

                $toUser = 29;

                $bx = new BX24('https://pib24.bitrix24.ru/rest/1/4m2qfr4m3lbd8je4/');
                $bx->run('crm.lead.add', false, ['fields' => [
                    "TITLE" => $arFields['NAME'],
                    "NAME" => $PROPERTIES['NAME'],
                    "STATUS_ID" => "NEW",
                    "OPENED" => "Y",
                    "ASSIGNED_BY_ID" => $toUser,
                    "SOURCE_ID" => 'WEB',
                    "SOURCE_DESCRIPTION" => $iblock['NAME'],
                    "ORIGINATOR_ID" => 'oikos-decopaint.ru',
                    "ORIGIN_ID" => $arFields['ID'],
                    "COMMENTS" => implode('<br>', $text),
                    "EMAIL" => [["VALUE" => $PROPERTIES['EMAIL'], "VALUE_TYPE" => "WORK"]],
                    "PHONE" => [["VALUE" => $PROPERTIES['PHONE'], "VALUE_TYPE" => "WORK"]],
                    "CURRENCY_ID" => "RUB",
                    "OPPORTUNITY" => $PROPERTIES['PRICE'] ?: $PROPERTIES['PRODUCT_PRICE'],
                ]]);
            }
        }
    }
}