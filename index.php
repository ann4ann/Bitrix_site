<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Главная страница");
$APPLICATION->SetTitle("Главная страница");
?>

<!-- Slider -->
<?
		GLOBAL $preferedNewsFilter;
		$preferedNewsFilter = array("PROPERTY_IS_PRIORITY_DEAL"=>5);
	?> <?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"slider", 
	array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "Y",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "#SITE_DIR#/announcement/#ELEMENT_CODE#/",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(
			0 => "PREVIEW_PICTURE",
			1 => "",
		),
		"FILTER_NAME" => "preferedNewsFilter",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "5",
		"IBLOCK_TYPE" => "announcements",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "9",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(
			0 => "IS_PRIORITY_DEAL",
			1 => "PRICE",
			2 => "",
		),
		"SET_BROWSER_TITLE" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "Y",
		"SHOW_404" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N",
		"COMPONENT_TEMPLATE" => "slider"
	),
	false
);?>

<!-- Preferences -->
<div class="py-5">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-lg-4 mb-3 mb-lg-0">
				 <?$APPLICATION->IncludeComponent(
					"bitrix:main.include",
					"",
					Array(
						"AREA_FILE_SHOW" => "file",
						"AREA_FILE_SUFFIX" => "inc",
						"EDIT_TEMPLATE" => "",
						"PATH" => "/include/advantage_range.php"
					)
				);?>
			</div>
			<div class="col-md-6 col-lg-4 mb-3 mb-lg-0">
				 <?$APPLICATION->IncludeComponent(
					"bitrix:main.include",
					"",
					Array(
						"AREA_FILE_SHOW" => "file",
						"AREA_FILE_SUFFIX" => "inc",
						"EDIT_TEMPLATE" => "",
						"PATH" => "/include/advantage_type.php"
					)
				);?>
			</div>
			<div class="col-md-6 col-lg-4 mb-3 mb-lg-0">
				 <?$APPLICATION->IncludeComponent(
						"bitrix:main.include",
						"",
						Array(
							"AREA_FILE_SHOW" => "file",
							"AREA_FILE_SUFFIX" => "inc",
							"EDIT_TEMPLATE" => "",
							"PATH" => "/include/advantage_location.php"
						)
					);?>
			</div>
		</div>
	</div>
</div>

<!-- New props for you -->
<div class="site-section site-section-sm bg-light">
		 <?$APPLICATION->IncludeComponent(
	"bitrix:news.line", 
	"galery_two_rows", 
	array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000",
		"CACHE_TYPE" => "A",
		"COMPONENT_TEMPLATE" => "galery_two_rows",
		"DETAIL_URL" => "#SITE_DIR#/announcement/#ELEMENT_CODE#/",
		"FIELD_CODE" => array(
			0 => "NAME",
			1 => "PREVIEW_TEXT",
			2 => "PREVIEW_PICTURE",
			3 => "PROPERTY_PRICE",
			4 => "PROPERTY_HAS_GARAGE",
			5 => "PROPERTY_NUM_OF_BATHROOMS",
			6 => "PROPERTY_TOTAL_AREA",
			7 => "PROPERTY_NUM_OF_FLOORS",
			8 => "",
		),
		"IBLOCKS" => array(
		),
		"IBLOCK_TYPE" => "announcements",
		"NEWS_COUNT" => "9",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC"
	),
	false
);?>
</div>

<!-- Services -->
<div class="site-section">
	<?$APPLICATION->IncludeComponent("bitrix:news.line", "links_galery_two_rows", Array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",	// Формат показа даты
			"CACHE_GROUPS" => "Y",	// Учитывать права доступа
			"CACHE_TIME" => "36000",	// Время кеширования (сек.)
			"CACHE_TYPE" => "A",	// Тип кеширования
			"COMPONENT_TEMPLATE" => ".default",
			"DETAIL_URL" => "#SITE_DIR#/references/#ELEMENT_CODE#/",	// URL, ведущий на страницу с содержимым элемента раздела
			"FIELD_CODE" => array(	// Поля
				0 => "CODE",
				1 => "PROPERTY_ICON_CODE",
			),
			"IBLOCKS" => "",	// Код информационного блока
			"IBLOCK_TYPE" => "references",	// Тип информационного блока
			"NEWS_COUNT" => "6",	// Количество новостей на странице
			"SORT_BY1" => "ACTIVE_FROM",	// Поле для первой сортировки новостей
			"SORT_BY2" => "SORT",	// Поле для второй сортировки новостей
			"SORT_ORDER1" => "DESC",	// Направление для первой сортировки новостей
			"SORT_ORDER2" => "ASC",	// Направление для второй сортировки новостей
		),
		false
	);?>
</div>

<!-- Blog -->
<div class="site-section bg-light">

	<?$APPLICATION->IncludeComponent(
	"bitrix:news.line", 
	"galery_one_row", 
	array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000",
		"CACHE_TYPE" => "A",
		"COMPONENT_TEMPLATE" => "galery_one_row",
		"DETAIL_URL" => "#SITE_DIR#/about/news/#ELEMENT_CODE#/",
		"FIELD_CODE" => array(
			0 => "PREVIEW_TEXT",
			1 => "PREVIEW_PICTURE",
			2 => "DATE_ACTIVE_FROM",
			3 => "",
		),
		"IBLOCKS" => array(
		),
		"IBLOCK_TYPE" => "news",
		"NEWS_COUNT" => "3",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC"
	),
	false
);?>
</div>
<br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>