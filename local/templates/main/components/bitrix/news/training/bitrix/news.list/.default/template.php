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
<div class="news-list">
<?if($arParams["DISPLAY_TOP_PAGER"]):?>
	<?=$arResult["NAV_STRING"]?><br />
<?endif;?>
<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
		<div class="flex train_card animon full-visible" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
			<div class="fl_sp_a photo_training">
				<a href="<?=$arItem["DETAIL_PAGE_URL"]?>">
					<img width="280" height="280" 
						class="attachment-full size-full wp-post-image"
						src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>"
						width="<?=$arItem["PREVIEW_PICTURE"]["WIDTH"]?>"
						height="<?=$arItem["PREVIEW_PICTURE"]["HEIGHT"]?>"
						alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>"
						title="<?=$arItem["PREVIEW_PICTURE"]["TITLE"]?>"
					>
				</a>
			</div>
			<div class="fl_sp_a fg1">
				<span class="title_training block text-right"><?echo $arItem["NAME"]?></span>
				<span class="gray_txt block text-right">Лектор:</span>
				<?if ($arItem["DISPLAY_PROPERTIES"]["lectorTraning"]): ?><span class="lector block text-right"><? echo $arItem["DISPLAY_PROPERTIES"]["lectorTraning"]["DISPLAY_VALUE"]; ?></span><?endif; ?>
				<? if ($arItem["DISPLAY_PROPERTIES"]["profTraning"]): ?><span class="prof_lektor block text-right"><? echo $arItem["DISPLAY_PROPERTIES"]["profTraning"]["DISPLAY_VALUE"]; ?></span><? endif; ?>
				<div class="flex bottom_tranin_card">
					<div class="left_b_tran"><? if ($arItem["DISPLAY_PROPERTIES"]["typeTraning"]): ?><span class="traning_type"><? echo $arItem["DISPLAY_PROPERTIES"]["typeTraning"]["DISPLAY_VALUE"]; ?></span><br><? endif; ?>
						<? if ($arItem["DISPLAY_PROPERTIES"]["dateTraning"]): ?><span class="data_city font-bold"><? echo $arItem["DISPLAY_PROPERTIES"]["dateTraning"]["DISPLAY_VALUE"]; ?></span><? endif; ?>
					</div>
					<div class="text-right podr-btn">
						<a href="<?=$arItem["DETAIL_PAGE_URL"]?>" rel="bookmark" class="btn_w-o">Подробнее</a>
					</div>
				</div>			
			</div>
		</div>
<?endforeach;?>
<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
	<br /><?=$arResult["NAV_STRING"]?>
<?endif;?>
</div>
