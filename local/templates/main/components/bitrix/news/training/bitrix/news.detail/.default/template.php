<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<?php
if (isset($_REQUEST['form4'])){
	$name = trim($_POST['fname']);
	$email = trim($_POST['fmail']);
	$phone = trim($_POST['fphone']);

	// указываем адрес отправителя, можно указать адрес на домене Вашего сайта
	$fromMail = 'info@dialogdent.ru';
	$fromName = 'Диалог Дентал Депо';

	// Сюда введите Ваш email
	$emailTo = "info@dialogdent.ru, info@ch-media.ru";
	$subject = 'Запись на курс или консультация';
	$subject = '=?utf-8?b?'. base64_encode($subject) .'?=';
	$headers = "Content-type: text/plain; charset=\"utf-8\"\r\n";
	$headers .= "From: ". $fromName ." <". $fromMail ."> \r\n";

	// тело письма
	$body = "Получено письмо с сайта dialogdent.ru \n Форма: Записаться на курс или получить бесплатную консультацию \n Имя: $name\n Телефон: $phone \n  Почта: $email";

	// сообщение будет отправлено в случае, если поле с номером телефона не пустое
	if (strlen($phone) > 0) {
		$mail = mail($emailTo, $subject, $body, $headers, '-f'. $fromMail );
	}
}
?>
<article id="post-2407" class="post-2407 post type-post status-publish format-standard has-post-thumbnail hentry category-meropriyatiya category-obuchenie-obuchenie">
	<header class="entry-header">
		<h1 class="entry-title"><?=$arResult["NAME"]?></h1>
	</header>
		<div class="entry-content">
				<div class="begin_txt"><?echo $arResult["PREVIEW_TEXT"];?>
</div>
<? if ($arResult["DISPLAY_PROPERTIES"]["lectorTraning"]): ?>
<div class="toptxttranin">
<span class="txt-orange">
<? echo $arResult["DISPLAY_PROPERTIES"]["lectorTraning"]["DISPLAY_VALUE"]; ?>
</span>
<? if ($arResult["DISPLAY_PROPERTIES"]["profTraning"]): ?><span> — <? echo $arResult["DISPLAY_PROPERTIES"]["profTraning"]["DISPLAY_VALUE"]; ?></span><? endif; ?>
</div>
<? endif; ?>	
<div class="flex">
			<div class="ava_tranin">
				<img width="280" height="280"
					class="attachment-full size-full wp-post-image detail_picture"
					src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>"
					width="<?=$arResult["DETAIL_PICTURE"]["WIDTH"]?>"
					height="<?=$arResult["DETAIL_PICTURE"]["HEIGHT"]?>"
					alt="<?=$arResult["DETAIL_PICTURE"]["ALT"]?>"
					title="<?=$arResult["DETAIL_PICTURE"]["TITLE"]?>"
				/>
			</div>
				<div class="right-col_traning">
					<?if(strlen($arResult["DETAIL_TEXT"])>0):?>
		<?echo $arResult["DETAIL_TEXT"];?>
		<?endif;?>
						</div>
		</div>
					<div class="programm">
					<div class="prog">ПРОГРАММА</div>
					<br><?echo $arResult["DISPLAY_PROPERTIES"]["progTraning"]["DISPLAY_VALUE"];?>
</div>
<div class="bottom_traning">
<? if ($arResult["DISPLAY_PROPERTIES"]["dateTraning"]): ?>
<span class="txt-orange orange-l-h">Дата: </span><? echo $arResult["DISPLAY_PROPERTIES"]["dateTraning"]["DISPLAY_VALUE"]; ?><br>
<?endif;?>
<span class="txt-orange orange-l-h">Организатор: </span><a href="/">Диалог Дентал Депо</a><br>
<? if ($arResult["DISPLAY_PROPERTIES"]["costTraning"]): ?>
<span class="txt-orange orange-l-h">Стоимость курса: </span><? echo $arResult["DISPLAY_PROPERTIES"]["costTraning"]["DISPLAY_VALUE"]; ?><br>
<?endif;?>
<span class="txt-orange orange-l-h">Регистрация: </span>онлайн или у Екатерины Наточеевой<br>
<span>Телефон | Viber | Whatsapp​: </span><a href="tel:+79371803426">+79371803426</a>
</div>			</div><!-- .entry-content -->
	
	<footer class="entry-meta">
		
		
        
		<div class="aply btn-aply tranin_form">
			<br><br>
			<form method="post">
				<div class="form_zag">Записаться на курс <br>или получить информацию</div><br>
				<input type="hidden" name="ftheme" value="ОТБЕЛИВАНИЕ ЗУБОВ С ПРИМЕНЕНИЕМ ПРОФЕССИОНАЛЬНЫХ <br>СИСТЕМ В КЛИНИЧЕСКИХ И ДОМАШНИХ УСЛОВИЯХ"><br>
				<div class="ma-form">
					<div class="form-l">
					<label class="form__label" for="fname">Имя</label>
					<input type="text" id="fname" name="fname" value="" required="required">
					</div>
					<div class="form-l">
					<label class="form__label" for="fphone">Телефон</label>
					<input type="text" id="fphone" name="fphone" value="" required="required">
					</div>
					<div class="form-l">
					<label class="form__label" for="fmail">Email</label>
					<input type="email" id="fmail" name="fmail" value="" required="required">
					</div>
					<input type="submit" name="form4" value="отправить"><br>
					<input type="checkbox" class="form__checkbox-input" style="opacity:0" id="security_agree" name="accept" checked="" required=""><label style="position:relative;top:20px;" for="security_agree" class="form__checkbox-text">Я соглашаюсь на обработку <a href="">моих персональных данных</a></label>
				</div>
			</form>
		</div>



	</footer><!-- .entry-meta -->
</article>