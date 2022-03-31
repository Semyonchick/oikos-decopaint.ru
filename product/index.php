<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Каталог");
?>
<?$APPLICATION->IncludeComponent(
	"bitrix:catalog", 
	"main", 
	array(
		"IBLOCK_ID" => "42",
		"IBLOCK_TYPE" => "aspro_allcorp3_catalog",
		"COMPONENT_TEMPLATE" => "main",
		"SECTIONS_TYPE_VIEW" => "FROM_MODULE",
		"SECTION_TYPE_VIEW" => "FROM_MODULE",
		"SECTION_ELEMENTS_TYPE_VIEW" => "FROM_MODULE",
		"ELEMENTS_PRICE_TYPE_VIEW" => "FROM_MODULE",
		"ELEMENTS_LIST_TYPE_VIEW" => "FROM_MODULE",
		"ELEMENTS_TABLE_TYPE_VIEW" => "FROM_MODULE",
		"ELEMENT_TYPE_VIEW" => "FROM_MODULE",
		"ADD_PICT_PROP" => "PHOTOS",
		"USER_CONSENT" => "N",
		"USER_CONSENT_ID" => "0",
		"USER_CONSENT_IS_CHECKED" => "Y",
		"USER_CONSENT_IS_LOADED" => "N",
		"SEF_MODE" => "Y",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "36000000",
		"CACHE_FILTER" => "Y",
		"CACHE_GROUPS" => "Y",
		"USE_MAIN_ELEMENT_SECTION" => "N",
		"DETAIL_STRICT_SECTION_CHECK" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_TITLE" => "Y",
		"ADD_SECTIONS_CHAIN" => "Y",
		"ADD_ELEMENT_CHAIN" => "Y",
		"SHOW_GALLERY" => "Y",
		"MAX_GALLERY_ITEMS" => "5",
		"SHOW_HINTS" => "Y",
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "AUTO",
		"USE_FILTER" => "N",
		"ACTION_VARIABLE" => "action",
		"PRODUCT_ID_VARIABLE" => "id",
		"USE_COMPARE" => "N",
		"PRICE_CODE" => array(
		),
		"USE_PRICE_COUNT" => "N",
		"SHOW_PRICE_COUNT" => "1",
		"PRICE_VAT_INCLUDE" => "Y",
		"PRICE_VAT_SHOW_VALUE" => "N",
		"BASKET_URL" => "/personal/basket.php",
		"USE_PRODUCT_QUANTITY" => "N",
		"PRODUCT_QUANTITY_VARIABLE" => "quantity",
		"ADD_PROPERTIES_TO_BASKET" => "Y",
		"PRODUCT_PROPS_VARIABLE" => "prop",
		"PARTIAL_PRODUCT_PROPERTIES" => "N",
		"SHOW_TOP_ELEMENTS" => "N",
		"TOP_ELEMENT_COUNT" => "9",
		"TOP_LINE_ELEMENT_COUNT" => "3",
		"TOP_ELEMENT_SORT_FIELD" => "sort",
		"TOP_ELEMENT_SORT_ORDER" => "asc",
		"TOP_ELEMENT_SORT_FIELD2" => "id",
		"TOP_ELEMENT_SORT_ORDER2" => "desc",
		"SECTION_TOP_BLOCK_TITLE" => "Лучшие предложения",
		"SECTION_COUNT_ELEMENTS" => "Y",
		"SECTION_TOP_DEPTH" => "2",
		"SECTIONS_LIST_PREVIEW_DESCRIPTION" => "Y",
		"SHOW_CHILD_SECTIONS" => "Y",
		"PAGE_ELEMENT_COUNT" => "12",
		"LINE_ELEMENT_COUNT" => "3",
		"ELEMENT_SORT_FIELD" => "sort",
		"ELEMENT_SORT_ORDER" => "asc",
		"ELEMENT_SORT_FIELD2" => "id",
		"ELEMENT_SORT_ORDER2" => "desc",
		"INCLUDE_SUBSECTIONS" => "Y",
		"LIST_META_KEYWORDS" => "-",
		"LIST_META_DESCRIPTION" => "-",
		"LIST_BROWSER_TITLE" => "-",
		"SECTION_BACKGROUND_IMAGE" => "-",
		"LANDING_IBLOCK_ID" => "43",
		"LANDING_TIZER_IBLOCK_ID" => "1",
		"LANDING_SECTION_COUNT" => "20",
		"LANDING_SECTION_COUNT_VISIBLE" => "3",
		"SORT_PROP" => array(
			0 => "name",
			1 => "sort",
			2 => "FILTER_PRICE",
		),
		"COMPARE_NAME" => "CATALOG_COMPARE_LIST",
		"COMPARE_PROPERTY_CODE" => array(
			0 => "STATUS",
			1 => "ARTICLE",
			2 => "BRAND",
			3 => "GRUZ",
			4 => "GRUZ_STRELI",
			5 => "DLINA",
		),
		"SORT_PROP_DEFAULT" => "sort",
		"SORT_DIRECTION" => "desc",
		"VIEW_TYPE" => "table",
		"SECTION_DISPLAY_PROPERTY" => "UF_VIEWTYPE",
		"SHOW_SECTION_DESC" => "Y",
		"SECTION_LIST_PREVIEW_DESCRIPTION" => "Y",
		"SHOW_LANDINGS" => "Y",
		"SECTION_LIST_DISPLAY_TYPE" => "3",
		"OPT_BUY" => "Y",
		"SHOW_ONE_CLINK_BUY" => "Y",
		"SECTION_ITEM_LIST_OFFSET_CATALOG" => "Y",
		"SECTION_ITEM_LIST_IMG_CORNER" => "N",
		"SECTION_ITEM_LIST_TEXT_CENTER" => "N",
		"DETAIL_META_KEYWORDS" => "-",
		"DETAIL_META_DESCRIPTION" => "-",
		"DETAIL_BROWSER_TITLE" => "-",
		"DETAIL_SET_CANONICAL_URL" => "N",
		"SECTION_ID_VARIABLE" => "SECTION_ID",
		"DETAIL_CHECK_SECTION_ID_VARIABLE" => "N",
		"DETAIL_BACKGROUND_IMAGE" => "-",
		"SHOW_DEACTIVATED" => "N",
		"T_DESC" => "",
		"T_CHAR" => "",
		"T_TECHAR" => "Технические характеристики",
		"T_INSTRUCT" => "Инструкция по применению",
		"T_PRICE" => "Цены",
		"SHOW_BIG_GALLERY" => "Y",
		"T_BIG_GALLERY" => "",
		"BIG_GALLERY_PROP_CODE" => "GALLEY_BIG",
		"TYPE_BIG_GALLERY" => "BIG",
		"T_VIDEO" => "",
		"T_DOCS" => "",
		"DOCS_PROP_CODE" => "DOCUMENTS",
		"T_FAQ" => "",
		"T_REVIEWS" => "",
		"T_VACANCY" => "",
		"T_STAFF" => "",
		"T_SALE" => "",
		"T_NEWS" => "",
		"T_ARTICLES" => "",
		"T_SERVICES" => "",
		"T_PROJECTS" => "",
		"T_PARTNERS" => "",
		"T_GOODS" => "Вам может понравиться",
		"SHOW_BUY" => "N",
		"T_BUY" => "",
		"SHOW_PAYMENT" => "N",
		"T_PAYMENT" => "",
		"SHOW_DELIVERY" => "N",
		"T_DELIVERY" => "",
		"SHOW_DOPS" => "N",
		"T_DOPS" => "",
		"DETAIL_USE_COMMENTS" => "N",
		"SHOW_ASK_BLOCK" => "Y",
		"ASK_FORM_ID" => "",
		"PROPERTIES_DISPLAY_TYPE" => "TABLE",
		"VISIBLE_PROP_COUNT" => "0",
		"LINKED_ELEMENT_TAB_SORT_FIELD" => "sort",
		"LINKED_ELEMENT_TAB_SORT_ORDER" => "asc",
		"LINKED_ELEMENT_TAB_SORT_FIELD2" => "id",
		"LINKED_ELEMENT_TAB_SORT_ORDER2" => "desc",
		"USE_SHARE" => "Y",
		"LINK_IBLOCK_TYPE" => "",
		"LINK_IBLOCK_ID" => "",
		"LINK_PROPERTY_SID" => "",
		"LINK_ELEMENTS_URL" => "link.php?PARENT_ELEMENT_ID=#ELEMENT_ID#",
		"USE_STORE" => "N",
		"PAGER_TEMPLATE" => "main",
		"DISPLAY_TOP_PAGER" => "N",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"PAGER_TITLE" => "Товары",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"SET_STATUS_404" => "Y",
		"SHOW_404" => "Y",
		"MESSAGE_404" => "",
		"COMPATIBLE_MODE" => "Y",
		"USE_ELEMENT_COUNTER" => "Y",
		"DISABLE_INIT_JS_IN_COMPONENT" => "N",
		"SEF_FOLDER" => "/product/",
		"FILE_404" => "",
		"DETAIL_BLOG_USE" => "Y",
		"DETAIL_BLOG_URL" => "catalog_comments",
		"COMMENTS_COUNT" => "5",
		"DETAIL_BLOG_TITLE" => "Комментарии",
		"DETAIL_BLOG_EMAIL_NOTIFY" => "N",
		"DETAIL_VK_USE" => "Y",
		"DETAIL_VK_TITLE" => "ВКонтакте",
		"DETAIL_VK_API_ID" => "API_ID",
		"DETAIL_FB_USE" => "Y",
		"DETAIL_FB_TITLE" => "Facebook",
		"DETAIL_FB_APP_ID" => "APP_ID",
		"DETAIL_BLOCKS_ORDER" => "tabs,sku,sale,big_gallery,services,projects,news,articles,staff,partners,vacancy,goods,comments",
		"DETAIL_BLOCKS_TAB_ORDER" => "desc,techar,instruct,price,char,video,tariffs,docs,faq,reviews,buy,payment,delivery,dops",
		"DETAIL_BLOCKS_ALL_ORDER" => "sale,desc,char,reviews,big_gallery,video,sku,tariffs,services,projects,news,articles,docs,staff,faq,partners,vacancy,goods,buy,payment,delivery,dops,comments",
		"USE_DETAIL_TABS" => "FROM_MODULE",
		"PRODUCT_PROPERTIES" => "",
		"TOP_PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"LIST_PROPERTY_CODE" => array(
			0 => "STATUS",
			1 => "LINK_SKU",
			2 => "ARTICLE",
			3 => "FORM_QUESTION",
			4 => "PRICE",
			5 => "FORM_ORDER",
			6 => "PRICE_CURRENCY",
			7 => "PRICEOLD",
			8 => "ECONOMY",
			9 => "FILTER_PRICE",
			10 => "DATE_COUNTER",
			11 => "HIT",
			12 => "BEST_ITEM",
			13 => "BRAND",
			14 => "DEPTH",
			15 => "GRUZ_STRELI",
			16 => "GRUZ",
			17 => "DLINA_STRELI",
			18 => "VOLUME",
			19 => "RECOMMEND",
			20 => "SPEED",
			21 => "WIDTH_PROHOD",
			22 => "WIDTH_PROEZD",
			23 => "",
		),
		"DETAIL_PROPERTY_CODE" => array(
			0 => "BLOG_POST_ID",
			1 => "POPUP_VIDEO",
			2 => "BLOG_COMMENTS_CNT",
			3 => "SHOW_ON_INDEX_PAGE",
			4 => "LINK_REGION",
			5 => "STATUS",
			6 => "LINK_SKU",
			7 => "ARTICLE",
			8 => "FORM_QUESTION",
			9 => "PRICE",
			10 => "FORM_ORDER",
			11 => "PRICE_CURRENCY",
			12 => "PRICEOLD",
			13 => "ECONOMY",
			14 => "FILTER_PRICE",
			15 => "BNR_TOP",
			16 => "DATE_COUNTER",
			17 => "INCLUDE_TEXT",
			18 => "VIDEO",
			19 => "HIT",
			20 => "VIDEO_IFRAME",
			21 => "BEST_ITEM",
			22 => "LINK_STUDY",
			23 => "LINK_PARTNERS",
			24 => "LINK_PROJECTS",
			25 => "LINK_STAFF",
			26 => "LINK_ARTICLES",
			27 => "BRAND",
			28 => "LINK_TARIF",
			29 => "LINK_TIZERS",
			30 => "LINK_VACANCY",
			31 => "LINK_REVIEWS",
			32 => "LINK_NEWS",
			33 => "LINK_SERVICES",
			34 => "LINK_FAQ",
			35 => "LINK_SALE",
			36 => "LINK_GOODS_FILTER",
			37 => "LINK_GOODS",
			38 => "SUPPLIED",
			39 => "AGE",
			40 => "KARTOPR",
			41 => "HEIGHT",
			42 => "DEPTH",
			43 => "DEEP",
			44 => "GRUZ_STRELI",
			45 => "GRUZ",
			46 => "DIAGONAL",
			47 => "DLINA_STRELI",
			48 => "DLINA",
			49 => "CATEGORY",
			50 => "CLASS",
			51 => "CLIMAT_CLASS",
			52 => "KOL_FORMULA",
			53 => "USERS",
			54 => "EXTENSION",
			55 => "MARK_STEEL",
			56 => "MASS",
			57 => "MODEL",
			58 => "POWER",
			59 => "UPDATES",
			60 => "VOLUME",
			61 => "SIZE",
			62 => "PLACE",
			63 => "RESOLUTION",
			64 => "LIGHTS_LOCATION",
			65 => "RECOMMEND",
			66 => "SERIES",
			67 => "SPEED",
			68 => "DURATION",
			69 => "PROIZVODSTVO",
			70 => "TEMPERATURE",
			71 => "TYPE",
			72 => "TYPE_TUR",
			73 => "THICKNESS",
			74 => "MARK",
			75 => "INCREASE",
			76 => "COLOR",
			77 => "FREQUENCY",
			78 => "FREQUENCE",
			79 => "WIDTH_PROHOD",
			80 => "WIDTH_PROEZD",
			81 => "WIDTH",
			82 => "LANGUAGES",
			83 => "CODE_TEXT",
			84 => "",
		),
		"SHOW_LIST_TYPE_SECTION" => "Y",
		"SKU_IBLOCK_ID" => "20",
		"SKU_TREE_PROPS" => array(
			0 => "COLOR",
			1 => "DIAMETER",
			2 => "DLINA",
			3 => "VYLET_STRELY",
			4 => "THICKNESS_STEEL",
			5 => "WIDTH",
		),
		"T_SKU" => "Цена",
		"SKU_PROPERTY_CODE" => array(
			0 => "FORM_ORDER",
			1 => "STATUS",
			2 => "ARTICLE",
			3 => "PRICE_CURRENCY",
			4 => "PRICE",
			5 => "PRICEOLD",
			6 => "ECONOMY",
			7 => "COLOR",
			8 => "GOST",
			9 => "DLINA",
			10 => "VYLET_STRELY",
			11 => "MARK_STEEL",
			12 => "WIDTH",
		),
		"SKU_SORT_FIELD" => "sort",
		"SKU_SORT_ORDER" => "asc",
		"SKU_SORT_FIELD2" => "name",
		"SKU_SORT_ORDER2" => "asc",
		"T_TARIFFS" => "",
		"COMPARE_FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"COMPARE_ELEMENT_SORT_FIELD" => "sort",
		"COMPARE_ELEMENT_SORT_ORDER" => "asc",
		"DISPLAY_ELEMENT_SELECT_BOX" => "N",
		"SHOW_SKU_DESCRIPTION" => "N",
		"SEF_URL_TEMPLATES" => array(
			"sections" => "",
			"section" => "#SECTION_CODE_PATH#/",
			"element" => "#SECTION_CODE_PATH#/#ELEMENT_CODE#/",
			"compare" => "compare.php?action=#ACTION_CODE#",
			"smart_filter" => "#SECTION_CODE_PATH#/filter/#SMART_FILTER_PATH#/apply/",
		),
		"VARIABLE_ALIASES" => array(
			"compare" => array(
				"ACTION_CODE" => "action",
			),
		)
	),
	false
);?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>