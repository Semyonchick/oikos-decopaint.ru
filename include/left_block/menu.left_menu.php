<?$APPLICATION->IncludeComponent(
	"bitrix:menu",
	"left",
	array(
		"ROOT_MENU_TYPE" => "left",
		"MENU_CACHE_TYPE" => "A",
		"MENU_CACHE_TIME" => "3600000",
		"MENU_CACHE_USE_GROUPS" => "N",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MAX_LEVEL" => CAllcorp3::GetFrontParametrValue('MAX_DEPTH_MENU'),
		"CHILD_MENU_TYPE" => "left",
		"USE_EXT" => "Y",
		"DELAY" => "N",
		"ALLOW_MULTI_SELECT" => "Y",
		"COMPONENT_TEMPLATE" => "left"
	),
	false, ['HIDE_ICONS' => 'N']
);?>

<?php if(CSite::InDir('/kollektsii-effektov/')): ?>
       <p style="text-align: center;">
        <img width="205" alt="максим (1).jpg" src="/upload/medialibrary/2ba/5j558qq7yhnzefgylrzvfh9p2cz3tfxu/maksim-_1_.jpg" height="136" title="максим (1).jpg" style="color: var(--white_text_black); font-size: 1.2em;">
    </p>
    <p style="text-align: center;">
        Сделаем выкрас специально для вас!
    </p>
<?php endif ?>