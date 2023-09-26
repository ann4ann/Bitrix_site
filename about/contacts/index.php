<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Контакты");
?><?$APPLICATION->IncludeComponent(
	"bitrix:news.calendar",
	"",
	Array(
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_TIME" => "36000",
		"CACHE_TYPE" => "A",
		"DATE_FIELD" => "DATE_ACTIVE_FROM",
		"DETAIL_URL" => "#SITE_DIR#/announcement/#ELEMENT_CODE#/",
		"IBLOCK_ID" => "5",
		"IBLOCK_TYPE" => "announcements",
		"MONTH_VAR_NAME" => "month",
		"NEWS_COUNT" => "0",
		"SET_TITLE" => "Y",
		"SHOW_CURRENT_DATE" => "Y",
		"SHOW_MONTH_LIST" => "Y",
		"SHOW_TIME" => "Y",
		"SHOW_YEAR" => "Y",
		"TITLE_LEN" => "0",
		"TYPE" => "EVENTS",
		"WEEK_START" => "1",
		"YEAR_VAR_NAME" => "year"
	)
);?><br>
 <?$APPLICATION->IncludeComponent(
	"bitrix:map.yandex.search",
	"",
Array()
);?><br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>