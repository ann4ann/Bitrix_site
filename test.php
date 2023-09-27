<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Тестовая страница");
$APPLICATION->SetTitle("Тестовая страница");
?><?$APPLICATION->IncludeComponent(
	"bitrix:photo",
	"",
Array()
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>