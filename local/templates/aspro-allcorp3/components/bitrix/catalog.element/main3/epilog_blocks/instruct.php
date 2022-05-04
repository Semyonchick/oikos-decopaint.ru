<?
use \Bitrix\Main\Localization\Loc;

$bTab = isset($tabCode) && $tabCode === 'instruct';
?>
<?//show char block?>
<?if($templateData['INSTRUCT']):?>
    <?if($bTab):?>
        <?if(!isset($bShow_instruct)):?>
            <?$bShow_instruct = true;?>
        <?else:?>
            <div class="tab-pane <?=(!($iTab++) ? 'active' : '')?>" id="instruct">
                <div class="ordered-block__title switcher-title font_22"><?=$arParams["T_INSTRUCT"]?></div>
                <?= html_entity_decode($templateData['INSTRUCT']['VALUE']['TEXT']) ?>
            </div>
        <?endif;?>
    <?else:?>
        <div class="detail-block ordered-block char">
            <div class="ordered-block__title switcher-title font_22"><?=$arParams["T_INSTRUCT"]?></div>
            <?= html_entity_decode($templateData['INSTRUCT']['VALUE']['TEXT']) ?>
        </div>
    <?endif;?>
<?endif;?>