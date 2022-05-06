<?
use \Bitrix\Main\Localization\Loc;

var_dump($bShow[$tabKey]);

$tabKey = strtolower($tab);
$bTab = isset($tabCode) && $tabCode === $tabKey;

?>
<?//show brochure block?>
<?if($templateData[$tab]):?>
    <?if($bTab):?>
        <?if(!isset($bShow[$tabKey])):?>
        <?php var_dump($tabKey); ?>
            <?$bShow[$tabKey] = true;?>
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