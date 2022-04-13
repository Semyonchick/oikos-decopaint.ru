<?
use \Bitrix\Main\Localization\Loc;

$bTab = isset($tabCode) && $tabCode === 'brochure';
?>
<?//show brochure block?>
<?if($templateData['BROCHURE']):?>
    <?if($bTab):?>
        <?if(!isset($bShow_brochure)):?>
            <?$bShow_brochure = true;?>
        <?else:?>
            <div class="tab-pane <?=(!($iTab++) ? 'active' : '')?>" id="brochure">
                <?= $templateData['BROCHURE'] ?>
            </div>
        <?endif;?>
    <?else:?>
        <div class="detail-block ordered-block brochure">
            <?= $templateData['BROCHURE']?>
        </div>
    <?endif;?>
<?endif;?>