<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<div class="container"> 
  <div class="row"> 
    <div class="col-md-12">
<section>
		<div class="row">
			<?
			$CURRENT_DEPTH=$arResult["SECTION"]["DEPTH_LEVEL"]+1;

/*print_r($arResult["SECTIONS"]);*/
			foreach($arResult["SECTIONS"] as $arSection):

		                $img = CFile::ResizeImageGet($arSection["PICTURE"]['ID'], array('width'=>263, 'height'=>188), BX_RESIZE_IMAGE_EXACT, true); 
				$this->AddEditAction($arSection['ID'], $arSection['EDIT_LINK'], CIBlock::GetArrayByID($arSection["IBLOCK_ID"], "SECTION_EDIT"));
				$this->AddDeleteAction($arSection['ID'], $arSection['DELETE_LINK'], CIBlock::GetArrayByID($arSection["IBLOCK_ID"], "SECTION_DELETE"), array("CONFIRM" => GetMessage('CT_BCSL_ELEMENT_DELETE_CONFIRM')));
				if($CURRENT_DEPTH<$arSection["DEPTH_LEVEL"])
					echo "<ul>";
				elseif($CURRENT_DEPTH>$arSection["DEPTH_LEVEL"])
					echo str_repeat("</ul>", $CURRENT_DEPTH - $arSection["DEPTH_LEVEL"]);
				$CURRENT_DEPTH = $arSection["DEPTH_LEVEL"];
			?>
				<!-- <li id="<?=$this->GetEditAreaId($arSection['ID']);?>"><a href="<?=$arSection["SECTION_PAGE_URL"]?>"><?=$arSection["NAME"]?><?if($arParams["COUNT_ELEMENTS"]):?>&nbsp;(<?=$arSection["ELEMENT_CNT"]?>)<?endif;?></a></li> -->
				<div class="col-md-3">
					<div class="catalog_item" id="<?=$this->GetEditAreaId($arSection['ID']);?>">
						<?$link=$arSection["SECTION_PAGE_URL"];
							if ($link=="/kitchens/?SECTION_ID=31")
								 $link="/kitchens/?SECTION_ID=31&ELEMENT_ID=228" 
							;/*/kitchens/?SECTION_ID=31*/?> 
						<a href="<?=$link?>">
							<div class="img_box">
								<img src="<?=$img["src"]?>" alt="" class="catalog_item_img">
								<div class="catalog_item_name">
									<span><?
									$str=$arSection["~NAME"];
									$str2=explode(" ", $str);
									echo $str2[0].'<br><span class="series">'.$str2[1].'</span>';
									?>
										
									</span>
									
								</div>
							</div>
							<div class="catalog_item_text">
								<?//=$arSection["DESCRIPTION"]?>
							</div>
						</a>
					</div>
				</div>
			<?endforeach?>
		</div>
</section>
</div>
   </div>
 </div>
<section>
	<div class="container-fluid catalog_on_main catalog_on_catalog">
		<div class="container">
			<div class="row extended">
					<div class="row">
						<div class="col-md-12">
							<img src="<?=SITE_TEMPLATE_PATH?>/img/venzel.png" class="venzel"  /> 	
          					<h2>Также мы реализуем</h2>
          				</div>
						<div class="col-md-five">
							<a href="/products/?SECTION_ID=6">
								<span class="filled_item"><i class="big_tables"></i></span><br>
								<p>Столешницы</p>
							</a>
						</div>
						<div class="col-md-five">
							<a href="/products/?SECTION_ID=7">
							<span class="filled_item"><i class="big_access"></i></span>
							<p>Аксессуары</p>
							</a>
						</div>
						<div class="col-md-five">
							<a href="/products/?SECTION_ID=8">
							<span class="filled_item"><i class="big_dinner"></i></span>
							<p>Обеденные зоны</p>
							</a>
						</div>
						<div class="col-md-five">
							<a href="#" style="pointer-events: none;">
							<span class="filled_item"><i class="big_ceiling"></i></span>
							<p>Натяжные потолки</p>
							</a>
						</div>
						<div class="col-md-five">
							<a href="/products/?SECTION_ID=25">
							<span class="filled_item"><i class="big_furniture"></i></span>
							<p>Корпусная мебель</p>
							</a>
						</div>

						<div class="col-md-five">
							<a href="/products/?SECTION_ID=22">
							<span class="filled_item"><i class="big_bar_stand"></i></span>
							<p>Барные стойки</p>
						
							</a>
						</div>
						<div class="col-md-five">
							<a href="/products/?SECTION_ID=26">
							<span class="filled_item"><i class="big_buffet"></i></span>
							<p>Буфеты</p>
							</a>
						</div>
						<div class="col-md-five">
							<a href="/products/?SECTION_ID=27">
							<span class="filled_item"><i class="big_derss"></i></span>
							<p>Гардеробные</p>
							</a>
						</div>
						<div class="col-md-five">
							<a href="/products/?SECTION_ID=24">
							<span class="filled_item"><i class="big_coupe"></i></span>
							<p>Шкафы купе</p>
							</a>
						</div>
						<div class="col-md-five">
							<a href="/products/?SECTION_ID=11">
							<span class="filled_item"><i class="big_bath_furniture"></i></span>
							<p>Мебель для<br>ванных комнат</p>
							</a>
						</div>
					</div>
			</div>
		</div>			
	</div>
</section>

