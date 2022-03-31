<?
use \Bitrix\Main\Localization\Loc;

$bTab = isset($tabCode) && $tabCode === 'price';
?>
<?//show char block?>
<?if(1):?>
    <?if($bTab):?>
        <?if(!isset($bShow_price)):?>
            <?$bShow_price = true;?>
        <?else:?>
            <div class="tab-pane <?=(!($iTab++) ? 'active' : '')?>" id="price">
                <div class="ordered-block__title switcher-title font_22"><?=$arParams["T_PRICE"]?></div>
                Тут будут цены
            </div>
        <?endif;?>
    <?else:?>
        <div class="detail-block ordered-block char">
            <div class="ordered-block__title switcher-title font_22"><?=$arParams["T_PRICE"]?></div>
            Тут будут цены
        </div>
    <?endif;?>
<?endif;?>