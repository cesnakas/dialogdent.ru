<?php
$bg_color = array("#ffffff",
"#F5F5F5",
"#F5F5F5");

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
$slides .= '<div class="swiper-slide" style="background:'. $bg_color[$i] .';"><div class="news-list">
	<div class="spec_name">'. $spec_name[$i] .'</div>
	<div class="spec_text">'. $spec_text[$i] .'</div>
	<img class="prev_picture_spec" src="'. $spec_img[$i] .'">
</div></div>';
}
?>