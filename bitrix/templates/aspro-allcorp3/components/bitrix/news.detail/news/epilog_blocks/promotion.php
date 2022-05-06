<?
use \Bitrix\Main\Localization\Loc;

$tab = 'PROMOTION';
$tabKey = strtolower($tab);

$bTab = isset($tabCode) && $tabCode === $tabKey;
$bShowVar = 'bShow_'.$tabCode;
?>
<?//show brochure block?>
<?if($templateData[$tab]):?>
    <?if($bTab):?>
        <?if(!isset($$bShowVar)):?>
            <?$$bShowVar = true;?>
        <?else:?>
            <div class="tab-pane <?=(!($iTab++) ? 'active' : '')?>" id="<?= $tabKey ?>">
                <?= html_entity_decode($templateData[$tab]['TEXT']) ?>
            </div>
        <?endif;?>
    <?else:?>
        <div class="detail-block ordered-block <?= $tabKey ?>">
            <?= html_entity_decode($templateData[$tab]['TEXT']) ?>
        </div>
    <?endif;?>
<?endif;?>