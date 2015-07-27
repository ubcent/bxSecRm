<?php
ini_set("display_errors",1);
error_reporting(E_ALL);
set_time_limit(0);
ini_set('mbstring.func_overload', "2");
ini_set('mbstring.internal_encoding', "UTF-8");

$_SERVER["DOCUMENT_ROOT"] = "/home/bitrix/www";
$DOCUMENT_ROOT = $_SERVER["DOCUMENT_ROOT"];

define("BX_UTF", true);
define("NO_KEEP_STATISTIC", true);
define("NOT_CHECK_PERMISSIONS", true);
define("BX_BUFFER_USED", true);

require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php");
while (ob_get_level())
    ob_end_flush();

CModule::IncludeModule("iblock");

$sections_list = CIBlockSection::GetTreeList(
	array(), 
    array('IBLOCK_ID' => 4), true
);

while($arResult = $sections_list->GetNext()) {
	$nav = CIBlockSection::GetNavChain(4, $arResult["ID"]);
	$nav->ExtractFields("nav_");
	if($nav_ID == 59 && CIBlockSection::GetSectionElementsCount($arResult["ID"]) == 0) {
		if(!CIBlockSection::Delete($arResult["ID"])){
			echo $arResult["NAME"] . " removed" . "\n";
		}
	}
}

require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/epilog_after.php");
?>