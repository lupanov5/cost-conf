<div class="nx-section container">

	<div class="nx-promo-slider">
		<div class="nx-promo-slider__slider" data-promo-slider>
			<div class="swiper-wrapper nx-promo-slider__wrapper">
				<? for ($i = 0; $i < 2; $i++): ?>
					<div class="swiper-slide nx-promo-slider__slide"
						 style="background-image: url('https://via.placeholder.com/1920x1080');">
						<div class="bg-fade"></div>
						<div class="nx-promo-slider__content">
							<h3 class="nx-promo-slider__title">Новое поступление товара </h3>
							<div class="nx-promo-slider__text text content-narrow-med">
								<p>Начинаем новый сезон с распродажи! Горячие новинки и коллекции предыдущего сезона
									по
									невероятным ценам. Приходите и убедитесь в этом сами </p>
							</div>
							<div class="nx-promo-slider__actions">
								<div class="nx-actions">
									<div class="nx-actions__item">
										<a href="#" class="btn btn_lt"> Смотреть подробнее </a>
									</div>
								</div>
							</div>
						</div>
					</div>
				<? endfor; ?>
			</div>

			<div class="nx-promo-slider__dots" data-promo-dots></div>

			<div class="nx-promo-slider__prev" data-promo-prev>
				<svg class="nx-promo-slider__icon">
					<use xlink:href="#icon-arrow"></use>
				</svg>
			</div>
			<div class="nx-promo-slider__next nx-promo-slider__next" data-promo-next>
				<svg class="nx-promo-slider__icon">
					<use xlink:href="#icon-arrow"></use>
				</svg>
			</div>
		</div>
	</div>

</div>