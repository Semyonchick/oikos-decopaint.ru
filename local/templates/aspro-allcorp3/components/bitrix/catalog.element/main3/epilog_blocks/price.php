<?
use \Bitrix\Main\Localization\Loc;

$bTab = isset($tabCode) && $tabCode === 'price';

if (CModule::IncludeModule('highloadblock')) {
    $arHLBlock = Bitrix\Highloadblock\HighloadBlockTable::getRow(['filter'=>['NAME'=>'Prices']]);
    $obEntity = Bitrix\Highloadblock\HighloadBlockTable::compileEntity($arHLBlock);
    $strEntityDataClass = $obEntity->getDataClass();
}
$list = $strEntityDataClass::getList(['filter'=>['UF_PRODUCT'=>$arResult['ID']]])->fetchAll();
?>
<?//show char block?>
<?if(count($list)):?>
    <?if($bTab):?>
        <?if(!isset($bShow_price)):?>
            <?$bShow_price = true;?>
        <?else:?>
            <div class="tab-pane <?=(!($iTab++) ? 'active' : '')?>" id="price">
                <div class="ordered-block__title switcher-title font_22"><?=$arParams["T_PRICE"]?></div>

                <table class="table" style="max-width: 500px">
                    <? foreach ($list as $row): ?>
                    <tr>
                        <td><?= $row['UF_NAME'] ?></td>
                        <td align="right"><?= number_format($row['UF_PRICE'], '2', '.', ' ') ?> ₽</td>
                    </tr>
            <? endforeach; ?>
                </table>
            </div>
        <?endif;?>
    <?else:?>
        <div class="detail-block ordered-block char">
            <div class="ordered-block__title switcher-title font_22"><?=$arParams["T_PRICE"]?></div>
            Тут будут цены
        </div>
    <?endif;?>
<?endif;?>