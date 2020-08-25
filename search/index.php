<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Диалог - Результаты по запросу");
$APPLICATION->SetTitle("Поиск");
?><?$APPLICATION->IncludeComponent(
	"bitrix:search.page",
	"",
	Array(
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_TIME" => "3600",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "N",
		"DEFAULT_SORT" => "rank",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_TOP_PAGER" => "Y",
		"FILTER_NAME" => "",
		"NO_WORD_LOGIC" => "N",
		"PAGER_SHOW_ALWAYS" => "Y",
		"PAGER_TEMPLATE" => "",
		"PAGER_TITLE" => "Результаты поиска",
		"PAGE_RESULT_COUNT" => "50",
		"RESTART" => "N",
		"SHOW_WHEN" => "N",
		"SHOW_WHERE" => "Y",
		"USE_LANGUAGE_GUESS" => "Y",
		"USE_SUGGEST" => "N",
		"USE_TITLE_RANK" => "Y",
		"arrFILTER" => array("iblock_events","iblock_produkciya"),
		"arrFILTER_iblock_events" => array("1","4"),
		"arrFILTER_iblock_produkciya" => array("2"),
		"arrWHERE" => array("iblock_events","iblock_produkciya")
	)
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>