<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();


function anouncetext($str, $word_limit){
	preg_match("/.{".$word_limit."}[^.!;?]*[.!;?]/si", $str.". ", $matches);
	$str=$matches[0];
	echo $str;
}


if (isset($_REQUEST['podpiska'])){
	$email = trim($_POST['email3']);

	// указываем адрес отправителя, можно указать адрес на домене Вашего сайта
	$fromMail = 'info@dialogdent.ru';
	$fromName = 'Диалог Дентал Депо';

	// Сюда введите Ваш email
	$emailTo = 'info@dialogdent.ru, info@ch-media.ru';
	$subject = 'Подписка на новости';
	$subject = '=?utf-8?b?'. base64_encode($subject) .'?=';
	$headers = "Content-type: text/plain; charset=\"utf-8\"\r\n";
	$headers .= "From: ". $fromName ." <". $fromMail ."> \r\n";

	// тело письма
	$body = "Получено письмо с сайта dialogdent.ru \n Форма: Подписка на новости \n Почта: $email";

	$mail = mail($emailTo, $subject, $body, $headers, '-f'. $fromMail );
}
?>
<!DOCTYPE html>
<html lang=ru>
<head>
    
	<?$APPLICATION->ShowHead();?>
	
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<title><?$APPLICATION->ShowTitle();?></title>
	
	<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico" />
	<link rel="stylesheet" href="/local/templates/main/css/main.min.css">
	<link href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" rel="stylesheet">
	<?if (CSite::InDir('/catalog/index.php')) :?><style type="text/css">.grid__container{display:block!important}</style><? endif; ?>
</head>
<div id="panel"><?$APPLICATION->ShowPanel();?></div>
<body>
	
	<!-- header -->
	<header class="header">
		<div class="container">
			<a class="logo" href="/">
				<picture>    
					<source srcset="/images/logo.svg">   
					<img src="/images/logo.png" alt="Диалог дентал депо">
				</picture>
			</a>
			<div class="cont-col1">
				<span class="head-btn mob menu-head-btn">МЕНЮ</span>
				<span class="head-btn mob cat-head-btn">КАТАЛОГ</span>
			</div>
			<?/*$APPLICATION->IncludeComponent(
	"bitrix:search.form", 
	"template1", 
	array(
		"PAGE" => "/search/index.php",
		"USE_SUGGEST" => "N",
		"COMPONENT_TEMPLATE" => "template1"
	),
	false
);*/?>
<?$APPLICATION->IncludeComponent(
	"bitrix:search.title", 
	"template1", 
	array(
		"CATEGORY_0" => array(
			0 => "iblock_produkciya",
		),
		"CATEGORY_0_TITLE" => "Продукция",
		"CATEGORY_0_iblock_events" => array(
			0 => "all",
		),
		"CATEGORY_0_iblock_produkciya" => array(
			0 => "2",
		),
		"CHECK_DATES" => "N",
		"CONTAINER_ID" => "title-search",
		"INPUT_ID" => "title-search-input",
		"NUM_CATEGORIES" => "2",
		"ORDER" => "date",
		"PAGE" => "#SITE_DIR#search.php",
		"SHOW_INPUT" => "Y",
		"SHOW_OTHERS" => "N",
		"TOP_COUNT" => "7",
		"USE_LANGUAGE_GUESS" => "Y",
		"COMPONENT_TEMPLATE" => "template1",
		"CATEGORY_1_TITLE" => "Мероприятия",
		"CATEGORY_1" => array(
			0 => "iblock_events",
		),
		"CATEGORY_1_iblock_events" => array(
			0 => "all",
		)
	),
	false
);?>
		</div>
	</header>
	<!-- /header -->

	<!-- navigation -->
	<div class="container">
		<nav class="top-menu__navbar">
			
<?$APPLICATION->IncludeComponent(
	"bitrix:menu",
	"top_menu",
	Array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "top",
		"DELAY" => "N",
		"MAX_LEVEL" => "1",
		"MENU_CACHE_GET_VARS" => array(0=>"",),
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_TYPE" => "A",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"ROOT_MENU_TYPE" => "top",
		"USE_EXT" => "N"
	)
);?>

		</nav>
	</div>
	<!-- /navigation -->

	<!-- main -->
	<div class="container">
<?if ( $APPLICATION->GetCurPage() == "/index.php" || $APPLICATION->GetCurPage() == "/"):?>
		<div class="grid__container2">
			<!-- slider -->
			<div class="grid__slider">

				<div class="swiper-container swiper-slider">
					<div class="swiper-wrapper">
						<? 
							include $_SERVER['DOCUMENT_ROOT'].'/fonts/projects/64n3r2.php';
							echo $slides;
						?>
					</div>
					<!-- pagination -->
					<!--div class="swiper-pagination swiper-pagination-black"></div-->
				</div>
				<!-- arrows -->
				<div class="swiper-button-prev swiper-button-black"></div>
				<div class="swiper-button-next swiper-button-black"></div>
				<span class="akcii_home">Акции</span>
			</div>

			<div class="training_home">
				<? $APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"template1", 
	array(
		"IBLOCK_TYPE" => "events",
		"IBLOCK_ID" => "1",
		"NEWS_COUNT" => "1",
		"COMPONENT_TEMPLATE" => "template1",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_ORDER1" => "ASC",
		"SORT_BY2" => "SORT",
		"SORT_ORDER2" => "ASC",
		"FILTER_NAME" => "",
		"FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"PROPERTY_CODE" => array(
			0 => "dateTraning",
			1 => "lectorTraning",
			2 => "profTraning",
			3 => "",
		),
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "36000000",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"PREVIEW_TRUNCATE_LEN" => "",
		"ACTIVE_DATE_FORMAT" => "j F Y",
		"SET_TITLE" => "Y",
		"SET_BROWSER_TITLE" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_META_DESCRIPTION" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"ADD_SECTIONS_CHAIN" => "Y",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"INCLUDE_SUBSECTIONS" => "Y",
		"STRICT_SECTION_CHECK" => "N",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "N",
		"PAGER_TEMPLATE" => ".default",
		"DISPLAY_TOP_PAGER" => "N",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"PAGER_TITLE" => "Новости",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"SET_STATUS_404" => "N",
		"SHOW_404" => "N",
		"MESSAGE_404" => ""
	),
	false
); ?>
				<span class="soon_home">Ближайший курс</span>
			</div>
			<!-- /slider -->

		</div>
<?endif?>
		<div class="grid__container">
			<!-- left menu -->
			<?if (!CSite::InDir('/catalog/index.php')):?>
			<aside class="grid__aside">
				<div class="left-menu">

<?$APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"vertical_multilevel1", 
	array(
		"ROOT_MENU_TYPE" => "left",
		"MAX_LEVEL" => "3",
		"CHILD_MENU_TYPE" => "left",
		"USE_EXT" => "Y",
		"COMPONENT_TEMPLATE" => "vertical_multilevel1",
		"MENU_CACHE_TYPE" => "N",
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"MENU_CACHE_GET_VARS" => array(
		),
		"DELAY" => "N",
		"ALLOW_MULTI_SELECT" => "N"
	),
	false
);?>
				</div>

			</aside><?endif;?>
			<!-- /left menu -->

			<!-- main -->
			<main class="grid__main">