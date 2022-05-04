<?
use \Bitrix\Main\Localization\Loc;

$bTab = isset($tabCode) && $tabCode === 'techar';
?>
<?//show char block?>
<?if($templateData['TECHAR']):?>
    <?if($bTab):?>
        <?if(!isset($bShow_techar)):?>
            <?$bShow_techar = true;?>
        <?else:?>
            <div class="tab-pane <?=(!($iTab++) ? 'active' : '')?>" id="techar">
                <div class="ordered-block__title switcher-title font_22"><?=$arParams["T_TECHAR"]?></div>
                <?= html_entity_decode($templateData['TECHAR']['VALUE']['TEXT']) ?>
            </div>
        <?endif;?>
    <?else:?>
        <div class="detail-block ordered-block char">
            <div class="ordered-block__title switcher-title font_22"><?=$arParams["T_TECHAR"]?></div>
            <?= html_entity_decode($templateData['TECHAR']['VALUE']['TEXT']) ?>
        </div>
    <?endif;?>
<?endif;?>