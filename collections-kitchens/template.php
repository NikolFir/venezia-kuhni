<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<div class="catalog-section">

<?if($arParams["DISPLAY_TOP_PAGER"]):?>
	<?=$arResult["NAV_STRING"]?><br />
<?endif;?>



<section>
	<div class="container">



		<div class="row">
			<?$this->AddEditAction($arElement['ID'], $arElement['EDIT_LINK'], CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "ELEMENT_EDIT"));
			$this->AddDeleteAction($arElement['ID'], $arElement['DELETE_LINK'], CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BCS_ELEMENT_DELETE_CONFIRM')));?>
			<?foreach($arResult["ITEMS"] as $cell=>$arElement):
		                $img = CFile::ResizeImageGet($arElement["PREVIEW_PICTURE"]['ID'], array('width'=>263, 'height'=>188), BX_RESIZE_IMAGE_EXACT, true); 


?>
				<div class="col-md-3">
					<div class="collection_item" id="<?=$this->GetEditAreaId($arElement['ID']);?>">
						<a href="<?=$arElement["DETAIL_PAGE_URL"]?>">
							<div class="img_box">
								<img border="0" src="<?=$img["src"]?>" width="<?=$arElement["PREVIEW_PICTURE"]["WIDTH"]?>" height="<?/*=$arElement["PREVIEW_PICTURE"]["HEIGHT"]*/?>" alt="<?=$arElement["NAME"]?>" title="<?=$arElement["NAME"]?>" class="collection_item_img"/>
								<div class="collection_item_name">
									<span><?=$arElement["NAME"]?></span>
								</div>
							</div>
						</a>
					</div>
				</div>	
			<?endforeach;?>
		</div>



		<div class="row">
			<div class="col-md-12">
				<div class="collection_description">
					<p><?echo $arResult["DESCRIPTION"];?></p>
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
								<button onclick="yaCounter45577785.reachGoal('send'); return true;">Отправить</button>
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

<!--
<table cellpadding="0" cellspacing="0" border="0">
		<?echo $arResult["DESCRIPTION"];?>
		<?foreach($arResult["ITEMS"] as $cell=>$arElement):?>
		<?
		$this->AddEditAction($arElement['ID'], $arElement['EDIT_LINK'], CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "ELEMENT_EDIT"));
		$this->AddDeleteAction($arElement['ID'], $arElement['DELETE_LINK'], CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BCS_ELEMENT_DELETE_CONFIRM')));
		?>
		<?if($cell%$arParams["LINE_ELEMENT_COUNT"] == 0):?>
		<tr>
		<?endif;?>

		<td valign="top" width="<?=round(100/$arParams["LINE_ELEMENT_COUNT"])?>%" id="<?=$this->GetEditAreaId($arElement['ID']);?>">

			<table cellpadding="0" cellspacing="2" border="0">
				<tr>
					<?if(is_array($arElement["PREVIEW_PICTURE"])):?>
						<td valign="top pr">
						<a href="<?=$arElement["DETAIL_PAGE_URL"]?>"><img border="0" src="<?=$arElement["PREVIEW_PICTURE"]["SRC"]?>" width="<?=$arElement["PREVIEW_PICTURE"]["WIDTH"]?>" height="<?=$arElement["PREVIEW_PICTURE"]["HEIGHT"]?>" alt="<?=$arElement["NAME"]?>" title="<?=$arElement["NAME"]?>" /></a><br />
						</td>
					<?elseif(is_array($arElement["DETAIL_PICTURE"])):?>
						<td valign="top det">
						<a href="<?=$arElement["DETAIL_PAGE_URL"]?>"><img border="0" src="<?=$arElement["DETAIL_PICTURE"]["SRC"]?>" width="<?=$arElement["DETAIL_PICTURE"]["WIDTH"]?>" height="<?=$arElement["DETAIL_PICTURE"]["HEIGHT"]?>" alt="<?=$arElement["NAME"]?>" title="<?=$arElement["NAME"]?>" /></a><br />
						</td>
					<?endif?>
					<td valign="top tx"><a href="<?=$arElement["DETAIL_PAGE_URL"]?>"><?=$arElement["NAME"]?></a><br />
						<?foreach($arElement["DISPLAY_PROPERTIES"] as $pid=>$arProperty):?>
							<?=$arProperty["NAME"]?>:&nbsp;<?
								if(is_array($arProperty["DISPLAY_VALUE"]))
									echo implode("&nbsp;/&nbsp;", $arProperty["DISPLAY_VALUE"]);
								else
									echo $arProperty["DISPLAY_VALUE"];?><br />
						<?endforeach?>
						<br />
						<?=$arElement["PREVIEW_TEXT"]?>
					</td>
				</tr>
			</table>

			<?foreach($arElement["PRICES"] as $code=>$arPrice):?>
				<?if($arPrice["CAN_ACCESS"]):?>
					<p><?=$arResult["PRICES"][$code]["TITLE"];?>:&nbsp;&nbsp;
					<?if($arPrice["DISCOUNT_VALUE"] < $arPrice["VALUE"]):?>
						<s><?=$arPrice["PRINT_VALUE"]?></s> <span class="catalog-price"><?=$arPrice["PRINT_DISCOUNT_VALUE"]?></span>
					<?else:?><span class="catalog-price"><?=$arPrice["PRINT_VALUE"]?></span><?endif;?>
					</p>
				<?endif;?>
			<?endforeach;?>
			<?if(is_array($arElement["PRICE_MATRIX"])):?>
				<table cellpadding="0" cellspacing="0" border="0" width="100%" class="data-table">
				<thead>
				<tr>
					<?if(count($arElement["PRICE_MATRIX"]["ROWS"]) >= 1 && ($arElement["PRICE_MATRIX"]["ROWS"][0]["QUANTITY_FROM"] > 0 || $arElement["PRICE_MATRIX"]["ROWS"][0]["QUANTITY_TO"] > 0)):?>
						<td valign="top" nowrap><?= GetMessage("CATALOG_QUANTITY") ?></td>
					<?endif?>
					<?foreach($arElement["PRICE_MATRIX"]["COLS"] as $typeID => $arType):?>
						<td valign="top" nowrap><?= $arType["NAME_LANG"] ?></td>
					<?endforeach?>
				</tr>
				</thead>
				<?foreach ($arElement["PRICE_MATRIX"]["ROWS"] as $ind => $arQuantity):?>
				<tr>
					<?if(count($arElement["PRICE_MATRIX"]["ROWS"]) > 1 || count($arElement["PRICE_MATRIX"]["ROWS"]) == 1 && ($arElement["PRICE_MATRIX"]["ROWS"][0]["QUANTITY_FROM"] > 0 || $arElement["PRICE_MATRIX"]["ROWS"][0]["QUANTITY_TO"] > 0)):?>
						<th nowrap><?
							if (IntVal($arQuantity["QUANTITY_FROM"]) > 0 && IntVal($arQuantity["QUANTITY_TO"]) > 0)
								echo str_replace("#FROM#", $arQuantity["QUANTITY_FROM"], str_replace("#TO#", $arQuantity["QUANTITY_TO"], GetMessage("CATALOG_QUANTITY_FROM_TO")));
							elseif (IntVal($arQuantity["QUANTITY_FROM"]) > 0)
								echo str_replace("#FROM#", $arQuantity["QUANTITY_FROM"], GetMessage("CATALOG_QUANTITY_FROM"));
							elseif (IntVal($arQuantity["QUANTITY_TO"]) > 0)
								echo str_replace("#TO#", $arQuantity["QUANTITY_TO"], GetMessage("CATALOG_QUANTITY_TO"));
						?></th>
					<?endif?>
					<?foreach($arElement["PRICE_MATRIX"]["COLS"] as $typeID => $arType):?>
						<td><?
							if($arElement["PRICE_MATRIX"]["MATRIX"][$typeID][$ind]["DISCOUNT_PRICE"] < $arElement["PRICE_MATRIX"]["MATRIX"][$typeID][$ind]["PRICE"]):?>
								<s><?=FormatCurrency($arElement["PRICE_MATRIX"]["MATRIX"][$typeID][$ind]["PRICE"], $arElement["PRICE_MATRIX"]["MATRIX"][$typeID][$ind]["CURRENCY"])?></s><span class="catalog-price"><?=FormatCurrency($arElement["PRICE_MATRIX"]["MATRIX"][$typeID][$ind]["DISCOUNT_PRICE"], $arElement["PRICE_MATRIX"]["MATRIX"][$typeID][$ind]["CURRENCY"]);?></span>
							<?else:?>
								<span class="catalog-price"><?=FormatCurrency($arElement["PRICE_MATRIX"]["MATRIX"][$typeID][$ind]["PRICE"], $arElement["PRICE_MATRIX"]["MATRIX"][$typeID][$ind]["CURRENCY"]);?></span>
							<?endif?>&nbsp;
						</td>
					<?endforeach?>
				</tr>
				<?endforeach?>
				</table><br />
			<?endif?>
			<?if($arParams["DISPLAY_COMPARE"]):?>
				<noindex>
				<a href="<?echo $arElement["COMPARE_URL"]?>" rel="nofollow"><?echo GetMessage("CATALOG_COMPARE")?></a>&nbsp;
				</noindex>
			<?endif?>
			&nbsp;
		</td>

		<?$cell++;
		if($cell%$arParams["LINE_ELEMENT_COUNT"] == 0):?>
			</tr>
		<?endif?>

		<?endforeach; // foreach($arResult["ITEMS"] as $arElement):?>

		<?if($cell%$arParams["LINE_ELEMENT_COUNT"] != 0):?>
			<?while(($cell++)%$arParams["LINE_ELEMENT_COUNT"] != 0):?>
				<td>&nbsp;</td>
			<?endwhile;?>
			</tr>
		<?endif?>

</table>
-->
<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
	<br /><?=$arResult["NAV_STRING"]?>
<?endif;?>
</div>
