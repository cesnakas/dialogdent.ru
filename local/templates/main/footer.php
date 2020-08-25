<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)	die();
?>
			</main>
			<!-- /main -->

		</div>
	</div>
	<!-- /main -->

	<!-- footer -->
	<footer class="footer">
		<div class="container">
			<div class="footer__wrapper row">
				<div class="f-col1">
					<picture>    
						<source srcset="/images/logo.svg">   
						<img src="/images/logo.png" alt="Диалог дентал депо">
					</picture>
					<p class="podpiska">Акции и бонусы для своих<br>в один клик - и у вас в почте.<br></p>
						<form  method="post" action="">
							<input class="email-podp" type="text" name="email3" placeholder="Ваш E-mail" required>
							<input class="btn-podpiska" name="podpiska" type="submit" value="➞">
						</form>
				</div>
				<div class="f-col2">
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
				</div>
				<div class="f-col3">
					<div class="workhour">
						<span class="orange">Режим работы:</span><br>
						<p>Пн-Пт с 9.00 до 18.00<br>
							Сб-Вс – выходные</p>
					</div>
					<div class="social">
						<span class="orange">Мы в социальных сетях</span>
						<div class="icons">
							<a href="" class="fab fa-instagram"></a>
							<a href="https://vk.com/dialogdent" class="fab fa-vk"></a>
							<a href="https://www.facebook.com/dialogdent.ru/" class="fab fa-facebook-f"></a>
						</div>
					</div>
				</div>
				<div class="f-col4">
					<p class="text-right"><span class="orange">ООО «Диалог Дентал Депо», Москва</span><br>
					Адрес: 115191, г. Москва, 2-й Троицкий переулок 6А, строение 5<br>
						Телефон: <a href="tel:+74957965340">+7 (495) 796-53-40</a><br>
					E-mail: <a href="mailto:info@dialogdent.ru">info@dialogdent.ru</a></p>
					<p class="text-right"><span class="orange">ООО «Диалог Дентал Депо», Самара</span><br>
					Адрес: 443041, г. Самара, ул. Рабочая, 26<br>
						Телефон: <a href="tel:+78462002250">+7 (846) 200-22-50</a><br>
						E-mail: <a href="mailto:info@dialogdent.ru">info@dialogdent.ru</a></p>
				</div>
			</div>
			<div class="copyright_dental"><span class="copyright">© ДиалогДепо, <?php echo date ( 'Y' ) ; ?></span></div>
		</div>
	</footer>
	<!-- /footer -->

	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/swiper@5.4.1/js/swiper.min.js"></script>
	<script src="/script.js"></script>
	<script src="/local/templates/main/js/main.js"></script>
</body>
</html>