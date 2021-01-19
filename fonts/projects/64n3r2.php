<?php
$bg_color = array("url(/images/banners/thumbnail_1.jpg)",
"url(/images/banners/thumbnail_2.jpg)",
"url(/images/banners/thumbnail.jpg)");

$spec_name = array('Комплект для фрезерования за<br><span style="color:#FF710D;">21 000 EUR</span>',
'При закупке BioRepair реминилизующий комплекс (12 шт.)',
'При покупке 10 имплантатов<br>АВТ (SPI, DFI, ICE) ');

$spec_text = array('<span style="color:#FF710D;">Фрезерный станок Roland DWX-52D</span><br>
+ Вытяжное устройство Silent compact CAM Renfert<br>
+ комплект фрез',
'<span style="color:#FF710D;">Набор ершиков в подарок</span>',
'<span style="color:#FF710D;">Один в подарок</span>');

$spec_img  = array('/images/banners/image2.png',
'/images/banners/image3.png',
'/images/banners/image1.png');

$slides ='';
for ($i=0; $i < count($spec_name); $i++){
$slides .= '<div style="background-size:cover;background-repeat:no-repeat;background-position:50%;background-image:'. $bg_color[$i] .';" class="swiper-slide"></div>';
}
?>