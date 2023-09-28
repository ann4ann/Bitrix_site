<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true){
  die();
}

$arResult = array();
global $USER;
$userId = $USER->GetID();
$arFilter = array("CREATED_BY"=>$userId, "IBLOCK_CODE"=>"announcements");

if(CModule::IncludeModule("iblock"))
		$db_elems = CIBlockElement::GetList(array(), $arFilter);
		
		while($ar_props = $db_elems->Fetch()){
			$arResult['ITEMS']=$ar_props;
	 } 

$this->IncludeComponentTemplate();
?>