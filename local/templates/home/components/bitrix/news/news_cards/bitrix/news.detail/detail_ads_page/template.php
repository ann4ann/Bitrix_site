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

<div 
	class="site-wrap"
>
	<!-- top IMG -->
	<div 
		class="site-blocks-cover overlay" 
		style="background-image: url(<?=
			is_array($arResult["DETAIL_PICTURE"])
			? $arResult["DETAIL_PICTURE"]["SRC"]
			: "/local/templates/home/images/hero_bg_2.jpg" ?>);" 
		data-aos="fade" 
		data-stellar-background-ratio="0.5"
	>
		<div class="container">
			<div class="row align-items-center justify-content-center text-center">
				<div class="col-md-10">
					<span class="d-inline-block text-white px-3 mb-3 property-offer-type rounded">Property Details of</span>
					<h1 class="mb-2"><?echo $arResult["NAME"]?></h1>
					<p class="mb-5">
						<strong class="h2 text-success font-weight-bold">
							$<?echo $arResult["DISPLAY_PROPERTIES"]["PRICE"]["VALUE"]?>
						</strong>
					</p>
				</div>
			</div>
		</div>
	</div>

	<!-- Content -->

	<div class="site-section site-section-sm">
		<div class="container">
			<div class="row">
				<div class="col-lg-8" style="margin-top: -150px;">

					<!-- Галерея изображений -->
					<div class="mb-5">
						<div class="slide-one-item home-slider owl-carousel">
						<?foreach($arResult["DISPLAY_PROPERTIES"]["IMGS"]["FILE_VALUE"] as $img):?>
							<div>
								<?if (is_array($img)):?>
									<img src="<?=$img["SRC"]?>" alt="<?=$img["ORIGINAL_NAME"]?>" class="img-fluid">
								<?endif?>
							</div>
						<?endforeach?>
						<?if (!$arResult["DISPLAY_PROPERTIES"]["IMGS"]["FILE_VALUE"][0]):?>
							<img src="<?=$arResult["PREVIEW_PICTURE"]["SRC"]?>" alt="<?=$arResult["NAME"]?>" class="img-fluid">
						<?endif?>
						</div>
					</div>

					<div class="bg-white">
						<!-- info 1 -->
						<div class="row mb-5">
							<div class="col-md-6">
								<strong class="text-success h1 mb-3">
									$<?echo $arResult["DISPLAY_PROPERTIES"]["PRICE"]["VALUE"]?>
								</strong>
							</div>
							<div class="col-md-6">
								<ul class="property-specs-wrap mb-3 mb-lg-0  float-lg-right">
									<li>
										<span class="property-specs">Дата обновления</span>
										<span class="property-specs-number">
											<?echo mb_substr($arResult["TIMESTAMP_X"], 0, 10)?>
										</span>
										
									</li>
									<li>
										<span class="property-specs">Этажей</span>
										<span class="property-specs-number">
											<?echo $arResult["DISPLAY_PROPERTIES"]["NUM_OF_FLOORS"]["VALUE"]?>
										</span>
									</li>
									<li>
										<span class="property-specs">Площадь</span>
										<span class="property-specs-number">
										<?echo $arResult["DISPLAY_PROPERTIES"]["TOTAL_AREA"]["VALUE"]?> м<sup>2</sup>
										</span>
										
									</li>
								</ul>
							</div>
						</div>

						<!-- info 2 -->
						<div class="row mb-5">
							<div class="col-md-6 col-lg-4 text-left border-bottom border-top py-3">
								<span class="d-inline-block text-black mb-0 caption-text">Количество санузлов</span>
								<strong class="d-block">
								<?echo $arResult["DISPLAY_PROPERTIES"]["NUM_OF_BATHROOMS"]["VALUE"]?>
								</strong>
							</div>
							<div class="col-md-6 col-lg-4 text-left border-bottom border-top py-3">
								<span class="d-inline-block text-black mb-0 caption-text">Наличие гаража</span>
								<strong class="d-block">
									<?echo $arResult["DISPLAY_PROPERTIES"]["HAS_GARAGE"]["VALUE"] = "true" 
										? "Да" : "Нет" ?>
								</strong>
							</div>
						</div>

						<!-- Detail info -->
						<h2 class="h4 text-black">Детальное описание</h2>
						<p><?echo $arResult["DETAIL_TEXT"]?></p>

						<!-- Галерея изображений 2 -->
						<div class="row mt-5">
							<div class="col-12">
								<h2 class="h4 text-black mb-3">Галерея изображений</h2>
							</div>

							<?foreach($arResult["DISPLAY_PROPERTIES"]["IMGS"]["FILE_VALUE"] as $img):?>
								<div class="col-sm-6 col-md-4 col-lg-3 mb-4">
									<?if (is_array($img)):?>
										<a href="<?=$img["SRC"]?>" class="image-popup gal-item">
											<img src="<?=$img["SRC"]?>" alt="<?=$img["ORIGINAL_NAME"]?>" class="img-fluid">
										</a>
									<?endif?>
								</div>
							<?endforeach?>
						</div>

					</div>
				</div>
				<div class="col-lg-4 pl-md-5">

					<div class="bg-white widget border rounded">

						<h3 class="h4 text-black widget-title mb-3">Contact Agent</h3>
						<form action="" class="form-contact-agent">
							<div class="form-group">
								<label for="name">Name</label>
								<input type="text" id="name" class="form-control">
							</div>
							<div class="form-group">
								<label for="email">Email</label>
								<input type="email" id="email" class="form-control">
							</div>
							<div class="form-group">
								<label for="phone">Phone</label>
								<input type="text" id="phone" class="form-control">
							</div>
							<div class="form-group">
								<input type="submit" id="phone" class="btn btn-primary" value="Send Message">
							</div>
						</form>
					</div>

					<div class="bg-white widget border rounded">
						<h3 class="h4 text-black widget-title mb-3">Paragraph</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit qui explicabo, libero nam, saepe eligendi. Molestias maiores illum error rerum. Exercitationem ullam saepe, minus, reiciendis ducimus quis. Illo, quisquam, veritatis.</p>
					</div>

				</div>
				
			</div>
		</div>
	</div>

	<!-- Ссылки и доп. материалы -->
	<?$displayPropsArr = [
		$arResult["DISPLAY_PROPERTIES"]["LINKS"], 
		$arResult["DISPLAY_PROPERTIES"]["ADDITITONAL"]
	] ?>
	<?if (is_array($arResult["DISPLAY_PROPERTIES"]["LINKS"]) || is_array($arResult["DISPLAY_PROPERTIES"]["ADDITITONAL"])):?>
		<div class="site-section site-section-sm">
			<div class="container">
				<?foreach($displayPropsArr as $arProperty):?>

					<h4><?=$arProperty["NAME"]?>:&nbsp;</h4>
						<?if(is_array($arProperty["DISPLAY_VALUE"])):?>
							<?=implode("&nbsp;/&nbsp;", $arProperty["DISPLAY_VALUE"]);?>
						<?else:?>
							<?=$arProperty["DISPLAY_VALUE"];?>
						<?endif?>
					<br>
				<?endforeach;?>
			</div>
		</div>
	<?endif?>
</div>