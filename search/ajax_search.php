<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
CModule::IncludeModule("iblock");
//http://ck21318.tmweb.ru/include/ajax/search.php?text=краб
 
\Bitrix\Main\Loader::includeModule('iblock');
$text=$_REQUEST['text'];
$dbItems = \Bitrix\Iblock\ElementTable::getList(array(
    'select' => array('ID', 'NAME', 'IBLOCK_ID' , 'PREVIEW_PICTURE', ), //,'DETAIL_PAGE_URL'
    'filter' => array('IBLOCK_ID' => 2 ,'NAME'=>'%'.strip_tags($text).'%'),
    'limit'=>10
));
$arrResult=array();
 
while ($arItem = $dbItems->fetch()){
    //DETAIL_PAGE_URL d7 не выводит!!!
 
    $el_res= CIBlockElement::GetByID( $arItem['ID'] );
    if ( $el_arr= $el_res->GetNext() ) {
        $arItem['DETAIL_PAGE_URL']= $el_arr[ 'DETAIL_PAGE_URL' ];
        $arItem['PREVIEW_PICTURE']=  CFile::GetPath( $el_arr[ 'PREVIEW_PICTURE' ]  ) ;
        }
   // debug($arItem);
    $arrResult[]=$arItem;
}
foreach ($arrResult as  $item){
    ?>
<a href="<?=$item['DETAIL_PAGE_URL']?>" class="tip">
    <div class="thumb">
        <img style="width:100%" src="<?=$item['PREVIEW_PICTURE']?>"  alt="">
        </div>
 
    <div class="info">
        <div class="name"><?=$item['NAME']?></div>
    </div>
 
    <div class="link">Перейти к товару</div>
</a>
    <?php
}
?>