<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>




<section>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="kitchen_card">
<?//print_r($arResult);?>
					<div class="row">
						<div class="col-xs-12 col-md-8 col-md-push-4">
							<div class="row card_preview">
									<div class="col-md-12 card_preview_slider slick_prev">
										<div><a href="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>" rel="gal"><img src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>" alt=""></a></div>

										<?if(count($arResult["DISPLAY_PROPERTIES"]["photos"]["VALUE"]) > 1):?>
											<?foreach($arResult["DISPLAY_PROPERTIES"]["photos"]["FILE_VALUE"] as $photos):?>
												<div><a href="<?=$photos["SRC"]?>" rel="gal"><img src="<?=$photos["SRC"]?>" alt=""></a></div>
											<?endforeach?>
										<?else:?>
												<div><a href="<?=$arResult["DISPLAY_PROPERTIES"]["photos"]["FILE_VALUE"]["SRC"]?>" rel="gal"><img src="<?=$arResult["DISPLAY_PROPERTIES"]["photos"]["FILE_VALUE"]["SRC"]?>" alt=""></a></div>
										<?endif;?>

									</div>
									<div class="col-md-12 card_preview_navigation slick_nav gallery_slider">
										<div><img src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>" alt=""></div>
										<?if(count($arResult["DISPLAY_PROPERTIES"]["photos"]["VALUE"]) > 1):?>
											<?foreach($arResult["DISPLAY_PROPERTIES"]["photos"]["FILE_VALUE"] as $photos):?>
												<div><img src="<?=$photos["SRC"]?>" alt=""></div>
											<?endforeach?>
										<?else:?>
												<div><img src="<?=$arResult["DISPLAY_PROPERTIES"]["photos"]["FILE_VALUE"]["SRC"]?>" alt=""></div>
										<?endif;?>
									</div>									
							</div>
						</div>
						<div class="col-xs-12 col-md-4 col-md-pull-8">
							<div class="kitchen_options">
								<?=$arResult["PROPERTIES"]["options"]["~VALUE"]["TEXT"]?>	
								<h3>Цвет:</h3>																		
								<div class="row color_picker">
									<?if(count($arResult["DISPLAY_PROPERTIES"]["colors"]["VALUE"]) > 1):?>
										<?foreach($arResult["DISPLAY_PROPERTIES"]["colors"]["FILE_VALUE"] as $colors):?>
											<div class="col-md-2 col-xs-3 col-sm-2"><a href="<?=$colors["SRC"]?>" rel=fb_img_clr><img src="<?=$colors["SRC"]?>" height="100" width="100" alt=""></a></div>
										<?endforeach?>
									<?else:?>
											<div class="col-md-2 col-xs-3 col-sm-2"><a href="<?=$arResult["DISPLAY_PROPERTIES"]["colors"]["FILE_VALUE"]["SRC"]?>" rel=fb_img_clr><img src="<?=$arResult["DISPLAY_PROPERTIES"]["colors"]["FILE_VALUE"]["SRC"]?>" height="100" width="100" alt=""></a></div>
									<?endif;?>										
								</div>
								<div class="row">
									<div class="col-md-12">
									<?//print_r($arResult["PROPERTIES"]["iscombineable"]["VALUE_ENUM_ID"]);?>
										<?if($arResult["PROPERTIES"]["iscombineable"]["VALUE_ENUM_ID"] == '2'):?>
										<div class="combine">Возможно комбинирование двух типов 
										фасадов (рамочного и нерамочного)</div>
										<?endif;?>
									</div>
								</div>
							</div>	
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 kitchen_description">
						<!--<h3>Описание</h3>-->
						<p><?=$arResult["DETAIL_TEXT"]?></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section>
	<div class="container-fuid order_on_main">
		<div class="container">
			<div class="row extended">
				<div class="col-md-12">
         			<h3>Запишитесь на индивидуальную консультацию с дизайнером (это бесплатно!)</h3>
		     	    <span class="order_text">Ваши глаза разбегутся от изобилия классных фасадов, фурнитуры, столешниц.
		          		<br />Дизайнер проработает функционал и стиль будущей кухни, рассчитает разные по бюджету варианты.</span> 
          			<br />
					<img src="<?=SITE_TEMPLATE_PATH?>/img/venzel2.png" alt="" class="venzel">
					<form class="form_on_page ajax-form" id="ajax-form">
						<div class="row">
							<div class="col-md-offset-3 col-md-3">
								<input class="txt_in" type="text" placeholder="Ваше имя" id="name" name="name" required>
							</div>
							<div class="col-md-3">
								<input class="txt_in" type="text" placeholder="Телефон" id="phone" name="phone" required>
							</div>
							<div class="col-md-12">
								<div class="g-recaptcha" data-sitekey="6LdmAWkUAAAAAGVth3DH4KgHHCOHfI3CFR6QNxQQ" style="margin: 20px auto;display: inline-block;"></div>
							</div>
							<div class="col-md-12">
				                <p>
				                  <i style="font-size: 12px; color: #ffffff;">Мы перезвоним и предложим удобное для вас время и салон</i>
				                </p>
				                <a style="font-size: 14px; padding-top: 10px; color: #ffffff;" href="/images/ПОЛИТИКА-КОНФИДЕНЦИАЛЬНОСТИ.pdf" target="_blank">Соглашение о конфиденциальности</a>
								<!--<span><input type="checkbox" id="cofident" required>  С <a href="#inline1" id="inline_conf">политикой конфиденциальности</a> согласен.</span>-->
							</div>
							<div class="col-md-12">
								<button onclick="yaCounter45577785.reachGoal('order'); return true;">Отправить</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>			
	</div>
	<div id="inline1">
    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium soluta enim esse, architecto, delectus voluptatem veniam nesciunt nostrum quaerat voluptatibus temporibus nihil velit. Quasi quidem sapiente nihil optio ipsum expedita?
	</div>
</section>
<section>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="collection">
						<img class="venzel" src="<?=SITE_TEMPLATE_PATH?>/img/venzel.png">
						<h2>Смотрите также</h2>
						<div class="row">

							<?
							$arSelect = Array("ID", "NAME", "DATE_ACTIVE_FROM", "PREVIEW_PICTURE", "DETAIL_PAGE_URL");
$arFilter = Array("IBLOCK_ID"=>4);//, "SECTION_ID"=>$arResult[IBLOCK_SECTION_ID]);
							$res = CIBlockElement::GetList(Array(), $arFilter, false, Array("nTopCount"=>4), $arSelect);
							while($ob = $res->GetNextElement())
							{
							$arFields = $ob->GetFields();
							$img_path = CFile::GetPath($arFields["PREVIEW_PICTURE"]);?>
							<a href="<?=$arFields["DETAIL_PAGE_URL"];?>">
								<div class="col-md-3 col-xs-6">
									<div class="col_block">
										<div class="col_overlay"></div>
										<img src="<?=$img_path?>" alt="">
										<span class="col_name"><? echo $arFields["NAME"];?></span>
									</div>
								</div>
							</a>
							<?}
							?> 
						</div>
					</div>
				<div class="space">
				</div>

				</div>
			</div>
		</div>
</section>


<!--
<div class="catalog-element">
	<table width="100%" border="0" cellspacing="0" cellpadding="2">
		<tr>
		<?if(is_array($arResult["PREVIEW_PICTURE"]) || is_array($arResult["DETAIL_PICTURE"])):?>
			<td width="0%" valign="top">
				<?if(is_array($arResult["PREVIEW_PICTURE"]) && is_array($arResult["DETAIL_PICTURE"])):?>
					<img border="0" src="<?=$arResult["PREVIEW_PICTURE"]["SRC"]?>" width="<?=$arResult["PREVIEW_PICTURE"]["WIDTH"]?>" height="<?=$arResult["PREVIEW_PICTURE"]["HEIGHT"]?>" alt="<?=$arResult["NAME"]?>" title="<?=$arResult["NAME"]?>" id="image_<?=$arResult["PREVIEW_PICTURE"]["ID"]?>" style="display:block;cursor:pointer;cursor: hand;" OnClick="document.getElementById('image_<?=$arResult["PREVIEW_PICTURE"]["ID"]?>').style.display='none';document.getElementById('image_<?=$arResult["DETAIL_PICTURE"]["ID"]?>').style.display='block'" />
					<img border="0" src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>" width="<?=$arResult["DETAIL_PICTURE"]["WIDTH"]?>" height="<?=$arResult["DETAIL_PICTURE"]["HEIGHT"]?>" alt="<?=$arResult["NAME"]?>" title="<?=$arResult["NAME"]?>" id="image_<?=$arResult["DETAIL_PICTURE"]["ID"]?>" style="display:none;cursor:pointer; cursor: hand;" OnClick="document.getElementById('image_<?=$arResult["DETAIL_PICTURE"]["ID"]?>').style.display='none';document.getElementById('image_<?=$arResult["PREVIEW_PICTURE"]["ID"]?>').style.display='block'" />
				<?elseif(is_array($arResult["DETAIL_PICTURE"])):?>
					<img border="0" src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>" width="<?=$arResult["DETAIL_PICTURE"]["WIDTH"]?>" height="<?=$arResult["DETAIL_PICTURE"]["HEIGHT"]?>" alt="<?=$arResult["NAME"]?>" title="<?=$arResult["NAME"]?>" />
				<?elseif(is_array($arResult["PREVIEW_PICTURE"])):?>
					<img border="0" src="<?=$arResult["PREVIEW_PICTURE"]["SRC"]?>" width="<?=$arResult["PREVIEW_PICTURE"]["WIDTH"]?>" height="<?=$arResult["PREVIEW_PICTURE"]["HEIGHT"]?>" alt="<?=$arResult["NAME"]?>" title="<?=$arResult["NAME"]?>" />
				<?endif?>
				<?if(count($arResult["MORE_PHOTO"])>0):?>
					<br /><a href="#more_photo"><?=GetMessage("CATALOG_MORE_PHOTO")?></a>
				<?endif;?>
			</td>
		<?endif;?>
			<td width="100%" valign="top">
				<?foreach($arResult["DISPLAY_PROPERTIES"] as $pid=>$arProperty):?>
					<?=$arProperty["NAME"]?>:<b>&nbsp;<?
					if(is_array($arProperty["DISPLAY_VALUE"])):
						echo implode("&nbsp;/&nbsp;", $arProperty["DISPLAY_VALUE"]);
					elseif($pid=="MANUAL"):
						?><a href="<?=$arProperty["VALUE"]?>"><?=GetMessage("CATALOG_DOWNLOAD")?></a><?
					else:
						echo $arProperty["DISPLAY_VALUE"];?>
					<?endif?></b><br />
				<?endforeach?>
			</td>
		</tr>
	</table>
		<?foreach($arResult["PRICES"] as $code=>$arPrice):?>
			<?if($arPrice["CAN_ACCESS"]):?>
				<p><?=$arResult["CAT_PRICES"][$code]["TITLE"];?>&nbsp;
				<?if($arParams["PRICE_VAT_SHOW_VALUE"] && ($arPrice["VATRATE_VALUE"] > 0)):?>
					<?if($arParams["PRICE_VAT_INCLUDE"]):?>
						(<?echo GetMessage("CATALOG_PRICE_VAT")?>)
					<?else:?>
						(<?echo GetMessage("CATALOG_PRICE_NOVAT")?>)
					<?endif?>
				<?endif;?>:&nbsp;
				<?if($arPrice["DISCOUNT_VALUE"] < $arPrice["VALUE"]):?>
					<s><?=$arPrice["PRINT_VALUE"]?></s> <span class="catalog-price"><?=$arPrice["PRINT_DISCOUNT_VALUE"]?></span>
					<?if($arParams["PRICE_VAT_SHOW_VALUE"]):?><br />
						<?=GetMessage("CATALOG_VAT")?>:&nbsp;&nbsp;<span class="catalog-vat catalog-price"><?=$arPrice["DISCOUNT_VATRATE_VALUE"] > 0 ? $arPrice["PRINT_DISCOUNT_VATRATE_VALUE"] : GetMessage("CATALOG_NO_VAT")?></span>
					<?endif;?>
				<?else:?>
					<span class="catalog-price"><?=$arPrice["PRINT_VALUE"]?></span>
					<?if($arParams["PRICE_VAT_SHOW_VALUE"]):?><br />
						<?=GetMessage("CATALOG_VAT")?>:&nbsp;&nbsp;<span class="catalog-vat catalog-price"><?=$arPrice["VATRATE_VALUE"] > 0 ? $arPrice["PRINT_VATRATE_VALUE"] : GetMessage("CATALOG_NO_VAT")?></span>
					<?endif;?>
				<?endif?>
				</p>
			<?endif;?>
		<?endforeach;?>
		<?if(is_array($arResult["PRICE_MATRIX"])):?>
			<table cellpadding="0" cellspacing="0" border="0" width="100%" class="data-table">
			<thead>
			<tr>
				<?if(count($arResult["PRICE_MATRIX"]["ROWS"]) >= 1 && ($arResult["PRICE_MATRIX"]["ROWS"][0]["QUANTITY_FROM"] > 0 || $arResult["PRICE_MATRIX"]["ROWS"][0]["QUANTITY_TO"] > 0)):?>
					<td><?= GetMessage("CATALOG_QUANTITY") ?></td>
				<?endif;?>
				<?foreach($arResult["PRICE_MATRIX"]["COLS"] as $typeID => $arType):?>
					<td><?= $arType["NAME_LANG"] ?></td>
				<?endforeach?>
			</tr>
			</thead>
			<?foreach ($arResult["PRICE_MATRIX"]["ROWS"] as $ind => $arQuantity):?>
			<tr>
				<?if(count($arResult["PRICE_MATRIX"]["ROWS"]) > 1 || count($arResult["PRICE_MATRIX"]["ROWS"]) == 1 && ($arResult["PRICE_MATRIX"]["ROWS"][0]["QUANTITY_FROM"] > 0 || $arResult["PRICE_MATRIX"]["ROWS"][0]["QUANTITY_TO"] > 0)):?>
					<th nowrap>
						<?if(IntVal($arQuantity["QUANTITY_FROM"]) > 0 && IntVal($arQuantity["QUANTITY_TO"]) > 0)
							echo str_replace("#FROM#", $arQuantity["QUANTITY_FROM"], str_replace("#TO#", $arQuantity["QUANTITY_TO"], GetMessage("CATALOG_QUANTITY_FROM_TO")));
						elseif(IntVal($arQuantity["QUANTITY_FROM"]) > 0)
							echo str_replace("#FROM#", $arQuantity["QUANTITY_FROM"], GetMessage("CATALOG_QUANTITY_FROM"));
						elseif(IntVal($arQuantity["QUANTITY_TO"]) > 0)
							echo str_replace("#TO#", $arQuantity["QUANTITY_TO"], GetMessage("CATALOG_QUANTITY_TO"));
						?>
					</th>
				<?endif;?>
				<?foreach($arResult["PRICE_MATRIX"]["COLS"] as $typeID => $arType):?>
					<td>
						<?if($arResult["PRICE_MATRIX"]["MATRIX"][$typeID][$ind]["DISCOUNT_PRICE"] < $arResult["PRICE_MATRIX"]["MATRIX"][$typeID][$ind]["PRICE"])
							echo '<s>'.FormatCurrency($arResult["PRICE_MATRIX"]["MATRIX"][$typeID][$ind]["PRICE"], $arResult["PRICE_MATRIX"]["MATRIX"][$typeID][$ind]["CURRENCY"]).'</s> <span class="catalog-price">'.FormatCurrency($arResult["PRICE_MATRIX"]["MATRIX"][$typeID][$ind]["DISCOUNT_PRICE"], $arResult["PRICE_MATRIX"]["MATRIX"][$typeID][$ind]["CURRENCY"])."</span>";
						else
							echo '<span class="catalog-price">'.FormatCurrency($arResult["PRICE_MATRIX"]["MATRIX"][$typeID][$ind]["PRICE"], $arResult["PRICE_MATRIX"]["MATRIX"][$typeID][$ind]["CURRENCY"])."</span>";
						?>
					</td>
				<?endforeach?>
			</tr>
			<?endforeach?>
			</table>
			<?if($arParams["PRICE_VAT_SHOW_VALUE"]):?>
				<?if($arParams["PRICE_VAT_INCLUDE"]):?>
					<small><?=GetMessage('CATALOG_VAT_INCLUDED')?></small>
				<?else:?>
					<small><?=GetMessage('CATALOG_VAT_NOT_INCLUDED')?></small>
				<?endif?>
			<?endif;?><br />
		<?endif?>
		<?if($arResult["CAN_BUY"]):?>
			<?if($arParams["USE_PRODUCT_QUANTITY"] || count($arResult["PRODUCT_PROPERTIES"])):?>
				<form action="<?=POST_FORM_ACTION_URI?>" method="post" enctype="multipart/form-data">
				<table border="0" cellspacing="0" cellpadding="2">
				<?if($arParams["USE_PRODUCT_QUANTITY"]):?>
					<tr valign="top">
						<td><?echo GetMessage("CT_BCE_QUANTITY")?>:</td>
						<td>
							<input type="text" name="<?echo $arParams["PRODUCT_QUANTITY_VARIABLE"]?>" value="1" size="5">
						</td>
					</tr>
				<?endif;?>
				<?foreach($arResult["PRODUCT_PROPERTIES"] as $pid => $product_property):?>
					<tr valign="top">
						<td><?echo $arResult["PROPERTIES"][$pid]["NAME"]?>:</td>
						<td>
						<?if(
							$arResult["PROPERTIES"][$pid]["PROPERTY_TYPE"] == "L"
							&& $arResult["PROPERTIES"][$pid]["LIST_TYPE"] == "C"
						):?>
							<?foreach($product_property["VALUES"] as $k => $v):?>
								<label><input type="radio" name="<?echo $arParams["PRODUCT_PROPS_VARIABLE"]?>[<?echo $pid?>]" value="<?echo $k?>" <?if($k == $product_property["SELECTED"]) echo '"checked"'?>><?echo $v?></label><br>
							<?endforeach;?>
						<?else:?>
							<select name="<?echo $arParams["PRODUCT_PROPS_VARIABLE"]?>[<?echo $pid?>]">
								<?foreach($product_property["VALUES"] as $k => $v):?>
									<option value="<?echo $k?>" <?if($k == $product_property["SELECTED"]) echo '"selected"'?>><?echo $v?></option>
								<?endforeach;?>
							</select>
						<?endif;?>
						</td>
					</tr>
				<?endforeach;?>
				</table>
				<input type="hidden" name="<?echo $arParams["ACTION_VARIABLE"]?>" value="BUY">
				<input type="hidden" name="<?echo $arParams["PRODUCT_ID_VARIABLE"]?>" value="<?echo $arResult["ID"]?>">
				<input type="submit" name="<?echo $arParams["ACTION_VARIABLE"]."BUY"?>" value="<?echo GetMessage("CATALOG_BUY")?>">
				<input type="submit" name="<?echo $arParams["ACTION_VARIABLE"]."ADD2BASKET"?>" value="<?echo GetMessage("CATALOG_ADD_TO_BASKET")?>">
				</form>
			<?else:?>
				<noindex>
				<a href="<?echo $arResult["BUY_URL"]?>" rel="nofollow"><?echo GetMessage("CATALOG_BUY")?></a>
				&nbsp;<a href="<?echo $arResult["ADD_URL"]?>" rel="nofollow"><?echo GetMessage("CATALOG_ADD_TO_BASKET")?></a>
				</noindex>
			<?endif;?>
		<?elseif((count($arResult["PRICES"]) > 0) || is_array($arResult["PRICE_MATRIX"])):?>
			<?=GetMessage("CATALOG_NOT_AVAILABLE")?>
		<?endif?>
		<br />
	<?if($arResult["DETAIL_TEXT"]):?>
		<br /><?=$arResult["DETAIL_TEXT"]?><br />
	<?elseif($arResult["PREVIEW_TEXT"]):?>
		<br /><?=$arResult["PREVIEW_TEXT"]?><br />
	<?endif;?>
	<?if(count($arResult["LINKED_ELEMENTS"])>0):?>
		<br /><b><?=$arResult["LINKED_ELEMENTS"][0]["IBLOCK_NAME"]?>:</b>
		<ul>
	<?foreach($arResult["LINKED_ELEMENTS"] as $arElement):?>
		<li><a href="<?=$arElement["DETAIL_PAGE_URL"]?>"><?=$arElement["NAME"]?></a></li>
	<?endforeach;?>
		</ul>
	<?endif?>
	<?
	// additional photos
	$LINE_ELEMENT_COUNT = 2; // number of elements in a row
	if(count($arResult["MORE_PHOTO"])>0):?>
		<a name="more_photo"></a>
		<?foreach($arResult["MORE_PHOTO"] as $PHOTO):?>
			<img border="0" src="<?=$PHOTO["SRC"]?>" width="<?=$PHOTO["WIDTH"]?>" height="<?=$PHOTO["HEIGHT"]?>" alt="<?=$arResult["NAME"]?>" title="<?=$arResult["NAME"]?>" /><br />
		<?endforeach?>
	<?endif?>
	<?if(is_array($arResult["SECTION"])):?>
		<br /><a href="<?=$arResult["SECTION"]["SECTION_PAGE_URL"]?>"><?=GetMessage("CATALOG_BACK")?></a>
	<?endif?>
</div>
-->
