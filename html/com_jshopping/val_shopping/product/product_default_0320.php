<?php defined( '_JEXEC' ) or die(); ?>
<?php $product = $this->product?>
<?php include(dirname(__FILE__)."/load.js.php");?>
<div class="jshop productfull" itemscope itemtype="http://schema.org/Product">
<!--верх-->
<div  class="b1c-good" >
<div id="top_descriptin">
  <div class="oferta_top">
	       <div  class="offerta">
		   <?php 
		$document   = & JFactory::getDocument();
		$renderer   = $document->loadRenderer('modules');
        $options    = array('style' => 'xhtml');
        $position   = 'offerta';
        echo $renderer->render($position, $options, null);
        ?>
		   </div>
		   <div  class="offerta1">
		   <?php 
		$document   = & JFactory::getDocument();
		$renderer   = $document->loadRenderer('modules');
        $options    = array('style' => 'xhtml');
        $position   = 'offerta1';
        echo $renderer->render($position, $options, null);
        ?>
		   </div>
		   <div  class="offerta2">
		   <?php 
		$document   = & JFactory::getDocument();
		$renderer   = $document->loadRenderer('modules');
        $options    = array('style' => 'xhtml');
        $position   = 'offerta2';
        echo $renderer->render($position, $options, null);
        ?>
		   </div>
		   <div  class="offerta3"><?php print $this->_tmp_product_html_after_my_buttons;?><?php print $this->_tmp_product_html_my_buttons;?></div>
		   <div  class="offerta4"><?php if ($this->enable_wishlist){?>
                    <input type="submit" class="button wishlist" value="<?php echo _JSHOP_ADD_TO_WISHLIST?>" onclick="jQuery('#to').val('wishlist');" />
                <?php }?></div>
		   <div style="float:left; margin: 20px;" id="pdf1"></div>
	  </div>
<div style="width:100%; clear:both; border-bottom: 1px dashed #eeeeee;"></div>
<form name="product" method="post" action="<?php print $this->action?>" enctype="multipart/form-data" autocomplete="off">
    
    
     <?php if ($this->config->product_show_manufacturer && $this->product->manufacturer_info->name!=""){?>
    
    <?php }?>
	<?php print $this->_tmp_product_html_start;?>
    <?php if ($this->config->display_button_print) print printContent();?>
    
   

    <div class="jshop">
	  <div class="">
	  <?php if ($product->product_price !=0){?>
	  <div style="padding:0px; margin:0px;"><h1 itemprop="name"><?php if ($this->product->seoname){ ?><?php print $this->product->seoname?><?php } else { ?><?php print $this->product->name?><?php } ?><?php if ($this->config->show_product_code){?> <?php }?></h1></div>
	  <div class='b1c-name' style="display:none;" > скидку <?php if ($this->product->seoname){ ?><?php print $this->product->seoname?><?php } else { ?><?php print $this->product->name?><?php } ?><?php if ($this->config->show_product_code){?> (<?php echo _JSHOP_EAN?>: <?php print $this->product->getEan();?>)<?php }?></div>
	  <?php }else{?>
	  <?php  
	       $controller = JRequest::getVar('controller', null);
           $category_id = JRequest::getVar('category_id', null);
	  if ($category_id == '858' || $category_id == '859' || $category_id == '893' || $category_id == '1060' || $category_id == '1179'){?>
	  <div style=" border-bottom: 1px dashed #eeeeee;padding:0px; margin:0px;"><h1><div class='b1c-name' ><?php if ($this->product->seoname){ ?><?php print $this->product->seoname?><?php } else { ?><?php print $this->product->name?><?php } ?></div></h1></div>
	  <?php }else{?>
      <div style=" border-bottom: 1px dashed #eeeeee;padding:0px; margin:0px;"><h1><?php if ($this->product->seoname){ ?><?php print $this->product->seoname?><?php } else { ?><?php print $this->product->name?><?php } ?><?php if ($this->config->show_product_code){?><?php }?></h1></div>
	  <?php }?>
	  <?php }?>
        
	 </div>
    </div>
	<div class="nvg_clear"></div>
	<div id="topers">
	<div class="image_middle">
		<div class="image_fon column">
            <?php print $this->_tmp_product_html_before_image;?>
            <?php if ($product->label_id){?>
                <div class="product_label">
                    <?php if ($product->_label_image){?>
                        <img src="<?php print $product->_label_image?>" alt="<?php print htmlspecialchars($product->_label_name)?>" />
                    <?php }else{?>
                        <span class="label_name"><?php print $product->_label_name;?></span>
                    <?php }?>
	<?php foreach($this->product->product_add_prices as $k=>$add_price){?>
	<?php if (($this->product->_label_name != 'Товара нет в наличии') || ($product->product_price !=0) ){?>
	<div id="akciya-deshevle" style="display:none;">
	<?php echo 'АКЦИЯ'?>
    	<span class="qty_from" <?php if ($add_price->product_quantity_finish==0){?>class="collspan3"<?php } ?>>
			<?php if ($add_price->product_quantity_finish==0) echo _JSHOP_FROM?>
			<?php print $add_price->product_quantity_start?> <?php print $this->product->product_add_price_unit?>
        </span>
		<span class="akciya-deshevle">            
			<span id="pricelist_from_<?php print $add_price->product_quantity_start?>"><?php print formatprice($add_price->price)?><?php print $add_price->ext_price?></span> <span class="per_piece"> за <?php print $this->product->product_add_price_unit?></span>
			</span>
	</div>
	<?php }?>
    <?php }?>	
                </div>
            <?php }?>
		<?php if (!($product->label_id)){?>	
			<?php foreach($this->product->product_add_prices as $k=>$add_price){?>
	<?php if (($this->product->_label_name != 'Товара нет в наличии') || ($product->product_price !=0)){?>
	<div id="akciya-deshevle">
	<?php echo 'АКЦИЯ'?>
    	<span class="qty_from" <?php if ($add_price->product_quantity_finish==0){?>class="collspan3"<?php } ?>>
			<?php if ($add_price->product_quantity_finish==0) echo _JSHOP_FROM?>
			<?php print $add_price->product_quantity_start?> <?php print $this->product->product_add_price_unit?>
        </span>
		<span class="akciya-deshevle">            
			<span id="pricelist_from_<?php print $add_price->product_quantity_start?>"><?php print formatprice($add_price->price)?><?php print $add_price->ext_price?></span> <span class="per_piece"> <?php print $this->product->product_add_price_unit?></span>
			</span>
	</div>
	<?php }?>
    <?php }?>
	<?php }?>
			 <?php if ($this->product->product_manufacturer_id ==232){?>
                <div class="product_diler" style="position: absolute; bottom: 100px;  right: 50px;">
                   <img src="/images/oficialdiler.png" />
                </div>
            <?php }?>
			<?php if ($this->product->product_manufacturer_id ==1301){?>
                <div class="product_diler" style="position: absolute; bottom: 100px;  right: 50px; width: 100px;">
				   <img src="/images/best-the-best.png" />
                   <img src="/images/2_year.png" />
                </div>
            <?php }?>
			<?php if ($product->product_old_price > 0 && $product->product_old_price > $product->product_price){?>
	<div class="mainTodayDiscount">
	   <?php $econom=(($this->product->product_old_price) / 100);
		      $econom=(100-(($this->product->product_price) / $econom))?>
		<div style="z-index: 100000; color: rgb(255, 255, 255); text-align: center; line-height: 25px; font-size: 24px; font-weight: 600; margin: 20px 0px 0px;"><span style="font-weight: 900; padding: 0px; font-size: 32px;"><?php echo round($econom)?>%</span><br/>Скидка</div>
	</div>
	<?php } ?>
            <?php if (count($this->videos)){?>
                <?php foreach($this->videos as $k=>$video){?>
					<?php if ($video->video_code){ ?>
					<div class="video_full no_display" id="hide_video_<?php print $k?>"><iframe style="margin: 30px 0px 0px;" width="400" height="300" src="https://www.youtube.com/embed/<?php echo $video->video_code?>" frameborder="0" allowfullscreen></iframe></div>
					<?php } else { ?>
					<a class="video_full no_display" id="hide_video_<?php print $k?>" href=""></a>
					<?php } ?>
                <?php } ?>
            <?php }?>
        
            <span id='list_product_image_middle'>
            <?php if(!count($this->images)){?>
                <img id = "main_image" src = "<?php print $this->image_product_path?>/<?php print $this->noimage?>" alt = "Фото <?php print htmlspecialchars($this->product->name)?>" title = "Фото <?php print htmlspecialchars($this->product->name)?>" />
            <?php }?>
            <?php foreach($this->images as $k=>$image){?>
            <a class="lightbox<?php if ($k!=0){?> no_display<?php }?>" id="main_image_full_<?php print $image->image_id?>" href="<?php print $this->image_product_path?>/<?php print $image->image_full;?>" >
                <div class="my_foto">
				<img id = "main_image_<?php print $image->image_id?>" src = "<?php print $this->image_product_path?>/<?php print $image->image_name;?>" alt="Купить <?php print htmlspecialchars($image->_title)?> в <?php echo$_COOKIE['city_name']?>" itemprop="image" title="<?php print htmlspecialchars($image->_title)?>" />
				
				</div>
				<div class="text_zoom">
                    <img src="<?php print $this->path_to_image?>search.png" alt="zoom" /> <?php echo _JSHOP_ZOOM_IMAGE?>
                </div>
            </a>
            <?php }?>
	
            </span><?php if($product->product_id==42162) {?>
				    <div class="made-in"><img src ="/images/made_in_russian.png"></div>
				<?php }?>
			
	    <div class="jshop_img_description">
            <?php print $this->_tmp_product_html_before_image_thumb;?>
            <?php if ( (count($this->images)>1) || (count($this->videos) && count($this->images)) ) {?>
			<span id='list_product_image_thumb'>
                <?php foreach($this->images as $k=>$image){?>
                    <img class="jshop_img_thumb" src="<?php print $this->image_product_path?>/<?php print $image->image_thumb?>" alt="<?php print htmlspecialchars($image->_title)?>" title="<?php print htmlspecialchars($image->_title)?>" onclick="showImage(<?php print $image->image_id?>)" />
                <?php }?>
             
			 <?php }?>
            <?php print $this->_tmp_product_html_after_image_thumb;?>
            <?php if (count($this->videos)){?>
                <?php foreach($this->videos as $k=>$video){?>
					<?php if ($video->video_code) { ?>
					<span  style="float: right;"><a href="#" id="video_<?php print $k?>" onclick="showVideoCode(this.id);return false;"><img class="jshop_video_thumb" src="<?php print $this->video_image_preview_path."/"; if ($video->video_preview) print $video->video_preview; else print 'video.gif'?>" alt="video" /></a></span>
					<?php } else { ?>
                    <a href="<?php print $this->video_product_path?>/<?php print $video->video_name?>" id="video_<?php print $k?>" onclick="showVideo(this.id, '<?php print $this->config->video_product_width;?>', '<?php print $this->config->video_product_height;?>'); return false;"><img class="jshop_video_thumb" src="<?php print $this->video_image_preview_path."/"; if ($video->video_preview) print $video->video_preview; else print 'video.gif'?>" alt="video" /></a>
					<?php } ?>
                <?php } ?>
            <?php }?>
            <?php print $this->_tmp_product_html_after_video;?></span>
        </div>
	            <?php print $this->_tmp_product_html_after_image;?>
         </div>  
        		 
            <?php if ($this->config->product_show_manufacturer_logo && $this->product->manufacturer_info->manufacturer_logo!=""){?>
            <div class="manufacturer_logo">
                <a href="<?php print SEFLink('index.php?option=com_jshopping&controller=manufacturer&task=view&manufacturer_id='.$this->product->product_manufacturer_id, 2);?>">
                    <img src="<?php print $this->config->image_manufs_live_path."/".$this->product->manufacturer_info->manufacturer_logo?>" alt="<?php print htmlspecialchars($this->product->manufacturer_info->name);?>" title="<?php print htmlspecialchars($this->product->manufacturer_info->name);?>" border="0" />
                </a>
            </div>
            <?php }?> 			
		</div>
	  <?php 
           $controller = JRequest::getVar('controller', null);
           $category_id = JRequest::getVar('category_id', null);
           if (!($category_id == '858' || $category_id == '859' || $category_id == '893' || $category_id == '1060' || $category_id == '1179')) {?>
	  <div id="my_opisanie">
	  <!-- Блок с ценой  -->
	    <div id="my_opisanie_fon" class="column">	
		<div style="">
<!-- WARNING -->

	<div id="cena"> 
	   <?php if ($this->product->getPriceCalculate() <= 5000 && $product->product_price != 0 && $this->product->_label_name != 'Товара нет в наличии'){?>
	<?php echo '<div style="font-size:21px; display:none; color:#999999;">Минимальная сумма заказа 5000 руб</div>'?>
	<?php }?>
	<div class="top-cenna">
	<span class="jshop_code_prod"><?php echo _JSHOP_EAN?>: <span id="product_code"><?php print $this->product->getEan();?></span></span>
			<div class="my_brend">
		 <div class="manufacturer_name">
		<?if(!empty($this->product->manufacturer_info->name)):?>
        <div style=""><?php echo 'БРЕНД'?>: <a href="<?php print SEFLink('index.php?option=com_jshopping&controller=manufacturer&task=view&manufacturer_id='.$this->product->product_manufacturer_id, 2);?>" target="_blank"><?php print $this->product->manufacturer_info->name?></a></div>
        <?endif?>
		 </div> 
		</div>
	</div>
		<?php if ($this->product->_label_name == 'Товара нет в наличии'){?>
        <div class="deliverytime" style="color:#999999; font-size:24px;"><?php print 'Товара нет в наличии'?></div>
		 <div style="font-size: 16px; margin: 10px 0px; text-decoration: underline;">
		 <?php
            $table_product = JTable::getInstance('product', 'jshop');
            $table_product->load($product->product_id);
            $table_category = JTable::getInstance('category', 'jshop');
            $table_category->load($table_product->getCategory());
            $category_name = $table_category->getName();
            $category_link = $this->category_link;
            print '<a href="'.SEFLink('index.php?option=com_jshopping&controller=category&task=view&category_id='.$table_category->category_id, 1).'">'.'Просмотреть другие товары в разделе '.$category_name.'</a>';
        ?>
		</div>
    <?php }?>
    <?php if ($product->product_old_price > 0 && $product->product_old_price > $product->product_price){?>
    <div class="old_prices">
        <span class="old_priceL">Старая цена:</span><span class="old_price" id="old_price"><?php print formatprice($this->product->product_old_price)?></span>
    </div>
    <?php }?>
    
    <?php if ($this->product->product_price_default > 0 && $this->config->product_list_show_price_default){?>
        <div class="default_price"><span id="pricedefault"><?php print formatprice($this->product->product_price_default)?></span></div>
    <?php }?>        
    

	<?php if ($product->product_price !=0){?>
	<div class="prod_price">
        <div style="width: 100%;">
		<div class="top_block_price"><span class="block_priceL">Ваша цена:</span><span itemprop="offers" itemscope="" itemtype="http://schema.org/Offer" id="block_price"><span itemprop="price"><?php print formatprice($this->product->getPriceCalculate())?><?php print $this->product->_tmp_var_price_ext;?></span><span><meta itemprop="priceCurrency" content="RUB"></span></span>
		</div>
						<?php if ($this->product->product_is_add_price){?>
     <div class="price_prod_qty_list">
	<?php foreach($this->product->product_add_prices as $k=>$add_price){?>
	<div>
	<?php echo _JSHOP_PRICE_FOR_QTY?>
    	<span class="qty_from" <?php if ($add_price->product_quantity_finish==0){?>class="collspan3"<?php } ?>>
			<?php if ($add_price->product_quantity_finish==0) echo _JSHOP_FROM?>
			<?php print $add_price->product_quantity_start?> <?php print $this->product->product_add_price_unit?>
        </span>
		<?php if ($add_price->product_quantity_finish > 0){?>
		<span class="qty_line"> - </span>
		<?php } ?>
		<?php if ($add_price->product_quantity_finish > 0){?>
		<span class="qty_to">
			<?php print $add_price->product_quantity_finish?> <?php print $this->product->product_add_price_unit?>
		</span>
		<?php } ?>
		<span class="qty_price">            
			<span id="pricelist_from_<?php print $add_price->product_quantity_start?>"><?php print formatprice($add_price->price)?><?php print $add_price->ext_price?></span> <span class="per_piece">/ <?php print $this->product->product_add_price_unit?></span>
		</span>
	<div style="width:100%; clear:both;"></div>		
	</div>
    <?php }?>
	<div style="width:100%; clear:both;"></div>	
    </div>
    <?php }?>
		<div class="bonus_system"><?php print $this->product->_tmp_product_html_bonus_system;?>
			<?php if (($product->product_price !=0) && ($product->product_price >5000) && ($product->product_price <300000)) {?>
	<div title="Выберите способ оплаты «Альфа-кредит Купить Легко» в корзине и заполните заявку. Банк ответит через несколько минут." style="cursor:pointer; width:100%; padding: 0 5px;">
	<div style="width:100%; clear:both;"></div>	
    <?php $kredit=(($this->product->product_price) / 19.5)?> 
	Кредит  в месяц от <span class="block_bonus" style="float: right; font-size: 16px; color: rgb(255, 126, 3);font-weight: 900; padding:0 10px 0 0;"><?php echo(number_format($kredit, 0, '.', ' '));?> 
	p</span>
	</div>
    <?php }?>
		</div>
		<?php if (!$this->hide_buy){?>                         
         <?php if ($product->product_price !=0 ) {?> 
		<?php print $this->product->_tmp_var_price_ext;?>
		<div style="">
		<?php print $this->_tmp_product_html_after_click_buttons;?>
		<input type="submit" class="button_buy" title="Добавить товар в корзину" value="<?php echo _JSHOP_ADD_TO_CART?>" onclick="jQuery('#to').val('cart');" />
		<div class="buttons">            
                <div style="" abbr class="jcetooltip" title="Заполните форму заявки и наши менеджеры свяжутся с вами."><input type="button" class="b1c" value="Нашли дешевле? Снизим цену!" ></div>
                <?php print $this->_tmp_product_html_buttons;?>
            </div>
		</div>
        <?php }?>
        <?php }?>
		<div style="margin: 0px; text-align: center; line-height: 40px;">
				  <div class="prod_qty">
                  <?php echo _JSHOP_QUANTITY?>:&nbsp;
                  </div>
                  <div class="prod_qty_input">
                  <input type="text" name="quantity" id="quantity" onkeyup="reloadPrices();" class="inputbox" value="<?php print $this->default_count_product?>" /><?php print $this->_tmp_qty_unit;?>
                  </div> 
				<div style="width:100%; clear:both;"></div>
				</div> 			
		</div> 
    <div style="width:100%; clear:both;"></div>	
	<?php if ($this->product->product_manufacturer_id ==1301){?>
	<div style="color: red; font-size: 19px;  text-align: center;"  id="dost-mos">Доставка и сборка по Москве и МО БЕСПЛАТНО</div>
	<?php }?>
    </div>  	
	</div>
	<div id="nal">
	<div class="portal">
	<?php 
		$document   = & JFactory::getDocument();
		$renderer   = $document->loadRenderer('modules');
        $options    = array('style' => 'xhtml');
        $position   = 'tender';
        echo $renderer->render($position, $options, null);
        ?>
	</div>
	    	    <div id="my_gar_fon">
        <div class="deliverytime">
		<?php if ($this->product->_label_name == 'Товара нет в наличии'  || $product->product_price ==0 || $this->product->delivery_time != '' || $this->product->_label_name == 'Скоро в продаже' ){?>
		<?php if ( $this->product->delivery_time == '30 дней' || $this->product->_label_name == 'Скоро в продаже' ){?>
		<?php echo'<div class="tovar_nalichie_deliver_zakaz">ПРЕДЗАКАЗ</div>' ?>
		<?php } else { ?>
		<?php if ($this->product->product_manufacturer_id == '88'){?>
		<?php echo'<div class="tovar_nalichie_deliver">Товар в наличии</div>'?>
		<?php } else { ?>
		<?php echo'<div class="tovar_nalichie_deliver_zakaz">Под заказ</div>' ?>
		<?php }?>
		<?php }?>
		<?php } else { ?>
		<?php echo'<div class="tovar_nalichie_deliver">Товар в наличии</div>'?><?php }?>
		</div>
		<?php 
		$document   = JFactory::getDocument();
		$renderer   = $document->loadRenderer('modules');
        $options    = array('style' => 'xhtml');
        $position   = 'nalichie';
        echo $renderer->render($position, $options, null);
        ?>
		</div>
	    <div id="my_gar_fon">Доставка <?php echo$_COOKIE['city_name']?>
		<div style="">
		<?php if($_COOKIE['city_name']=='Москва'){ echo'Доставка <span style="color:red;">БЕСПЛАТНО</span>';
		}else{
		echo'Доставка согласно тарифам ТК';}
		?>
		</div>
		 <div class="deliverytime" style="color: rgb(51, 51, 51);">
		<?php if ($this->product->delivery_time != ''){?><?php echo _JSHOP_DELIVERY_TIME?>: <?php print '' .$this->product->delivery_time?><?php } else {?><?php echo'<div class="tovar_nalichie_deliver_1">Срок доставки от 1 до 5 дней</div>'?><?php }?>
		</div>
		<p style="margin: 0px;">
		<?php 
		 if (!( $this->product->product_manufacturer_id ==11)) {
             echo'Гарантия 24 мес.';
          } else {
             echo 'Гарантия 36 мес.';
          } ?></p>
		  <div style="margin:10px 0;">
		<?php 
		$document   = JFactory::getDocument();
		$renderer   = $document->loadRenderer('modules');
        $options    = array('style' => 'xhtml');
        $position   = 'garantiya';
        echo $renderer->render($position, $options, null);
        ?></div>
		</div>
		<?php 
		$document   = JFactory::getDocument();
		$renderer   = $document->loadRenderer('modules');
        $options    = array('style' => 'xhtml');
        $position   = 'sposob_oplata';
        echo $renderer->render($position, $options, null);
        ?>
<div style="clear: both; margin: 0 0 0 20px;">
<?php 
		$document   = JFactory::getDocument();
		$renderer   = $document->loadRenderer('modules');
        $options    = array('style' => 'xhtml');
        $position   = 'my_desc_R';
        echo $renderer->render($position, $options, null);
        ?>
</div>	
	</div>
	<div style="width:100%; clear:both; "></div>

	<?php print $this->_tmp_product_html_before_buttons;?> 
    <?php print $this->_tmp_product_html_after_buttons;?>
	<?php }else{?>
	<?php if (!($this->product->_label_name == 'Товара нет в наличии') ) {?>
	<div class="buttons_zakaz">
             <div class='b1c-name' style="display:none;" >уточнения цены на <?php if ($this->product->seoname){ ?><?php print $this->product->seoname?><?php } else { ?><?php print $this->product->name?><?php } ?><?php if ($this->config->show_product_code){?> (<?php echo _JSHOP_EAN?>: <?php print $this->product->getEan();?>)<?php }?></div>	
             <div style="" abbr class="jcetooltip" title="Заполните форму заявки на запрос цены на <?php if ($this->product->seoname){ ?><?php print $this->product->seoname?><?php } else { ?><?php print $this->product->name?><?php } ?> и наши менеджеры свяжутся с вами."><input onclick="yaCounter23630017.reachGoal('zapros_cenu'); return true;" class="b1c" type="button" style="float: none; color:#ffffff;  border-radius: 0px; margin: 20px 0px 20px 50px; height: 40px; background: #ff7800; font-size: 18px; border: 1px solid rgb(255, 255, 255);" value="Запросить цену"></div>
    </div>
	<?php }?>
	</div>	
	<?php }?>
	
    <?php print $this->product->_tmp_var_bottom_price;?>
    
    <?php if ($this->config->show_tax_in_product && $this->product->product_tax > 0){?>
        <span class="taxinfo"><?php print productTaxInfo($this->product->product_tax);?></span>
    <?php }?>
    <?php if ($this->config->show_plus_shipping_in_product){?>
        <span class="plusshippinginfo"><?php print sprintf(_JSHOP_PLUS_SHIPPING, $this->shippinginfo);?></span>
    <?php }?>
    <?php if ($this->config->product_show_weight && $this->product->product_weight > 0){?>
        <div class="productweight"><?php echo _JSHOP_WEIGHT?>: <span id="block_weight"><?php print formatweight($this->product->getWeight())?></span></div>
    <?php }?>
    
    <?php if ($this->product->product_basic_price_show){?>
        <div class="prod_base_price"><?php echo _JSHOP_BASIC_PRICE?>: <span id="block_basic_price"><?php print formatprice($this->product->product_basic_price_calculate)?></span> / <?php print $this->product->product_basic_price_unit_name;?></div>
    <?php }?>
    
    <?php if (is_array($this->product->extra_field)){?>
        <div class="extra_fields">
        <?php $extra_field_group = "";
        foreach($this->product->extra_field as $extra_field){
            if ($extra_field_group!=$extra_field['groupname']){ 
                $extra_field_group = $extra_field['groupname'];
            ?>
            <div class='extra_fields_group'><?php print $extra_field_group?></div>
            <?php }?>
            <div>
				<span class="extra_fields_name"><?php print $extra_field['name'];?></span>
				: <span class="extra_fields_value"><?php print $extra_field['value'];?></span>
				<?php if ($extra_field['description']) {?> 
				<span id="extra_fields_tooltip_<?php print $extra_field["id"]?>"></span>
				<script type="text/javascript">
					jQuery("#extra_fields_tooltip_<?php print $extra_field['id']?>").tooltip({
						txt: '<span class="extra_fields_description"><?php print $extra_field["description"];?></span>'
					});
				</script>
				<?php } ?>				
			</div>
        <?php }?>
        </div>
    <?php }?>

    <?php if ($this->product->vendor_info){?>
        <div class="vendorinfo">
            <?php echo _JSHOP_VENDOR?>: <?php print $this->product->vendor_info->shop_name?> (<?php print $this->product->vendor_info->l_name." ".$this->product->vendor_info->f_name;?>),
            ( 
            <?php if ($this->config->product_show_vendor_detail){?><a href="<?php print $this->product->vendor_info->urlinfo?>"><?php echo _JSHOP_ABOUT_VENDOR?></a>,<?php }?> 
            <a href="<?php print $this->product->vendor_info->urllistproducts?>"><?php echo _JSHOP_VIEW_OTHER_VENDOR_PRODUCTS?></a> )
        </div>
    <?php }?>
    
    <?php if (!$this->config->hide_text_product_not_available){ ?>
        <div class = "not_available" id="not_available"><?php print $this->available?></div>
    <?php }?>
    
    <?php if ($this->config->product_show_qty_stock){?>
        <div class="qty_in_stock"><?php echo _JSHOP_QTY_IN_STOCK?>: <span id="product_qty"><?php print sprintQtyInStock($this->product->qty_in_stock);?></span></div>
    <?php }?>  
<input type="hidden" name="to" id='to' value="cart" />
<input type="hidden" name="product_id" id="product_id" value="<?php print $this->product->product_id?>" />
<input type="hidden" name="category_id" id="category_id" value="<?php print $this->category_id?>" />
       <div style="display:none;"><span itemprop="description"><?php print $this->product->short_description?></div></div>
        <script type="text/javascript" src="/share42/share42.js"></script>
		</div>
		</form>
<div style="position: relative;">
<?php 
		$document   = JFactory::getDocument();
		$renderer   = $document->loadRenderer('modules');
        $options    = array('style' => 'xhtml');
        $position   = 'my_desc';
        echo $renderer->render($position, $options, null);
        ?>
</div>
	  </div> 
	   <!-- Блок с ценой конец -->  	  		
	  </div>
	  <?php }else{ ?> 
	   <!-- Блок с ценой для услуг -->
	  
	 <div id="my_opisanie">	
	 <div id="my_opisanie_fon" class="column"> 
	 <div id="cena">	
		<div style="">
<!-- WARNING -->
  
     <div class="buttons_zakaz">            
                <div style="" abbr class="jcetooltip" title="Заполните форму заявки и наши менеджеры свяжутся с вами."><input class="b1c" type="button" style="float: none; border-radius: 8px; margin: 20px 0px 20px 50px; height: 40px; background: transparent url(/components/com_jshopping/images/button_zakaz.png) repeat scroll 0% 0% ! important; font-size: 18px; border: 1px solid rgb(255, 255, 255);" value="Оставить заявку"></div>
				            
                <?php print $this->_tmp_product_html_buttons;?>
            </div>  
	
    <?php print $this->product->_tmp_var_bottom_price;?>
    
    <?php if ($this->config->show_tax_in_product && $this->product->product_tax > 0){?>
        <span class="taxinfo"><?php print productTaxInfo($this->product->product_tax);?></span>
    <?php }?>
    <?php if ($this->config->show_plus_shipping_in_product){?>
        <span class="plusshippinginfo"><?php print sprintf(_JSHOP_PLUS_SHIPPING, $this->shippinginfo);?></span>
    <?php }?>
    <?php if ($this->config->product_show_weight && $this->product->product_weight > 0){?>
        <div class="productweight"><?php echo _JSHOP_WEIGHT?>: <span id="block_weight"><?php print formatweight($this->product->getWeight())?></span></div>
    <?php }?>
    
    <?php if ($this->product->product_basic_price_show){?>
        <div class="prod_base_price"><?php echo _JSHOP_BASIC_PRICE?>: <span id="block_basic_price"><?php print formatprice($this->product->product_basic_price_calculate)?></span> / <?php print $this->product->product_basic_price_unit_name;?></div>
    <?php }?>
    
    <?php if (is_array($this->product->extra_field)){?>
        <div class="extra_fields">
        <?php $extra_field_group = "";
        foreach($this->product->extra_field as $extra_field){
            if ($extra_field_group!=$extra_field['groupname']){ 
                $extra_field_group = $extra_field['groupname'];
            ?>
            <div class='extra_fields_group'><?php print $extra_field_group?></div>
            <?php }?>
            <div>
				<span class="extra_fields_name"><?php print $extra_field['name'];?></span>
				: <span class="extra_fields_value"><?php print $extra_field['value'];?></span>
				<?php if ($extra_field['description']) {?> 
				<span id="extra_fields_tooltip_<?php print $extra_field["id"]?>"></span>
				<script type="text/javascript">
					jQuery("#extra_fields_tooltip_<?php print $extra_field['id']?>").tooltip({
						txt: '<span class="extra_fields_description"><?php print $extra_field["description"];?></span>'
					});
				</script>
				<?php } ?>				
			</div>
        <?php }?>
        </div>
    <?php }?>

    <?php if ($this->product->vendor_info){?>
        <div class="vendorinfo">
            <?php echo _JSHOP_VENDOR?>: <?php print $this->product->vendor_info->shop_name?> (<?php print $this->product->vendor_info->l_name." ".$this->product->vendor_info->f_name;?>),
            ( 
            <?php if ($this->config->product_show_vendor_detail){?><a href="<?php print $this->product->vendor_info->urlinfo?>"><?php echo _JSHOP_ABOUT_VENDOR?></a>,<?php }?> 
            <a href="<?php print $this->product->vendor_info->urllistproducts?>"><?php echo _JSHOP_VIEW_OTHER_VENDOR_PRODUCTS?></a> )
        </div>
    <?php }?>
    
    <?php if (!$this->config->hide_text_product_not_available){ ?>
        <div class = "not_available" id="not_available"><?php print $this->available?></div>
    <?php }?>
    
    <?php if ($this->config->product_show_qty_stock){?>
        <div class="qty_in_stock"><?php echo _JSHOP_QTY_IN_STOCK?>: <span id="product_qty"><?php print sprintQtyInStock($this->product->qty_in_stock);?></span></div>
    <?php }?>
 
 
    
<input type="hidden" name="to" id='to' value="cart" />
<input type="hidden" name="product_id" id="product_id" value="<?php print $this->product->product_id?>" />
<input type="hidden" name="category_id" id="category_id" value="<?php print $this->category_id?>" />


<div style="">
<?php 
		$document   = JFactory::getDocument();
		$renderer   = $document->loadRenderer('modules');
        $options    = array('style' => 'xhtml');
        $position   = 'my_desc';
        echo $renderer->render($position, $options, null);
        ?>
</div>

        <?php print $this->product->short_description?>
		<div style=""></div>
		
        <script type="text/javascript" src="/share42/share42.js"></script>
		</div>
		<div class="nvg_clear"></div>
		</div>
			  <div style="width:100%; clear:both; margin:20px 0 0;"></div>
	  </div> 
	  </form>
<div style="">
<?php 
		$document   = JFactory::getDocument();
		$renderer   = $document->loadRenderer('modules');
        $options    = array('style' => 'xhtml');
        $position   = 'my_desc';
        echo $renderer->render($position, $options, null);
        ?>
</div>
	  </div>
	   <!-- Блок с ценой для услуг конец -->
	 <?php }?>
	 
	 <div class="banner_r">
  <?php if (trim($this->_tmp_product_html_before_relateded88)) {?>
		<?php print $this->_tmp_product_html_before_relateded;?>
		<?php } else{?>
		<?php 
		$document   = JFactory::getDocument();
		$renderer   = $document->loadRenderer('modules');
        $options    = array('style' => 'xhtml');
        $position   = 'banner_r';
        echo $renderer->render($position, $options, null);
        ?>
	 <?php }?>
	 </div>
	 <div style="width:100%; clear:both; margin:0;"></div>
	</div> 
</div>

<div style="width:100%; clear:both; margin:0;"></div>

<!--/верх-->
<div class="full-desc">
<dl class="tabs">
<dt class="selected">Описание</dt>
<dd class="selected">
<div class="tab-content">
<div style="width:100%; clear:both;"></div>
<div id="bottom_karta">
         <?php if (count($this->related_prod)){?>
		<div class="vmest1">Вместе с товаром покупают</div>
		<?php }?>
		   <?php print $this->_tmp_product_html_before_related; include(dirname(__FILE__)."/related.php");?>
	      </div>
          <section id="demo">
		  <article>
		  <?php print $this->product->description; ?>
          </article>

<div id="tab-har" class="tab-content-left">
<div style="font-weight: bold; margin: 20px 0;">Характеристики  <?php print $this->product->name?>:</div>
<div class="har-lite">
          <article><?php print $this->product->haracter; ?></article>
		  <script src="/templates/elektro/js/readmore.js"></script>
	<script>
		jQuery('article').readmore({
			maxHeight: 140,
			moreLink: '<a class="desc-pol" href="#">Показать больше</a>',
			lessLink: '<a class="desc-pol" href="#">Скрыть</a>'
		});
	</script>
</div>
</div>
</section>
<?php if (($category_id == '697')&&($this->product->product_manufacturer_id == '50')){?>
    <?php 
		$document   = JFactory::getDocument();
		$renderer   = $document->loadRenderer('modules');
        $options    = array('style' => 'xhtml');
        $position   = 'karta_iridium';
        echo $renderer->render($position, $options, null);
        ?>
<?php }?>
<?php if (($category_id == '64')&&($this->product->product_manufacturer_id == '696')){?>
    <?php 
		$document   = JFactory::getDocument();
		$renderer   = $document->loadRenderer('modules');
        $options    = array('style' => 'xhtml');
        $position   = 'karta_yunso';
        echo $renderer->render($position, $options, null);
        ?>
<?php }?>
<?php if ($this->product->product_id%2){?>
 <?php echo 'Покупая '?><span class="text-name"><?php if ($this->product->seoname){ ?><?php print $this->product->seoname?><?php } else { ?><?php print $this->product->name?><?php } ?></span><?php echo ' в нашем интернет-магазине, вы можете рассчитывать на бесплатную доставку по Москве.';?>
<?php }else{?>
<?php echo 'Купив '?><span class="text-name"><?php if ($this->product->seoname){ ?><?php print $this->product->seoname?><?php } else { ?><?php print $this->product->name?><?php } ?></span><?php echo ' в нашем интернет-магазине, вы можете рассчитывать на бесплатную доставку по Москве.';?>
 <?php }?>
<?php 
$controller = JRequest::getVar('controller', null);
$category_id = JRequest::getVar('category_id', null);
if ($category_id == '374' || $category_id == '379' || $category_id == '695' || $category_id == '380' || $category_id == '381' || $category_id == '383' || $category_id == '385' || $category_id == '384' || $category_id == '382' || $category_id == '630' || $category_id == '386' || $category_id == '387' || $category_id == '390') : ?>
<div style="width: 400px; border: 1px solid rgb(204, 204, 204); padding: 0px; margin: 40px auto 0;"><img src="/images/sertificat/vertex-sertificat.png" alt="СпеТехКонсалтинг Сертификат Vertex Standard" title="СпеТехКонсалтинг Сертификат Vertex Standard">
</div>                                            
 <?php endif; ?>
<?php 
if ($this->product->product_manufacturer_id == '34' ) : ?>
  <div style="width: 220px; margin: 0px auto;"><a rel="simplebox" href="/images/sertificat/009.png">
<img src="/images/sertificat/009.png" style="width: 200px; height: 283px;"></a>
 </div>                              
 <?php endif; ?>

<div style="font-size:12px; color:red; margin:5px 0;">
        <noindex>
        <noindex>
		<?php 
$controller = JRequest::getVar('controller', null);
$category_id = JRequest::getVar('category_id', null);
if ($category_id == '16' ) : ?>
<div style="">* Акция действует не на все модели.
</div>                                            
 <?php endif; ?>
		</noindex>
        </div>
		<div class = "jshop_prod_description">
<div style="width:100%; clear:both; margin:20px 0 0;"></div>
<?php if (!($this->product->haracter)){?>  
<?php 
           $controller = JRequest::getVar('controller', null);
           $category_id = JRequest::getVar('category_id', null);
           if (!($category_id == '858' || $category_id == '859' || $category_id == '893' || $category_id == '1060' || $category_id == '1179')) {?>
<?php 
		$document   = JFactory::getDocument();
		$renderer   = $document->loadRenderer('modules');
        $options    = array('style' => 'xhtml');
        $position   = 'komplekt_bottom';
        echo $renderer->render($position, $options, null);
        ?>
<?php }?>
<?php }?>
</div>
</div>
 	
</dd>
<?php if (count($this->attributes)) {?>
<dt>Опции</dt>
<?php }?>
<dd>
<div class="tab-content">
	<div class="jshop_prod_attributes">
        <table style="margin: 0px; padding: 0px 5px; width: auto;">
        <?php foreach($this->attributes as $attribut){?>
        <tr>
            <td class="attributes_title">
                <span style="margin: 0px; vertical-align: sub; font-size: 14px;"><?php print $attribut->attr_name?>:</span>
            </td>
            <td style="padding: 3px 10px 0px ! important;">
                <span id='block_attr_sel_<?php print $attribut->attr_id?>'>
                <?php print $attribut->selects?>
                </span>
            </td>
        </tr>
        <?php }?>
        </table>
    </div>
</div>
</dd>
<?php if ($this->product->haracter){?>  
<dt>Характеристики</dt>
    <?php }?>
<dd>
<div class="tab-content">
<div id="tab-har" class="tab-content-left">
<?php print $this->product->haracter; ?>
</div>
    <div style="clear: both;"><?php if ($this->product->haracter){?>  
	<?php 
		$document   = JFactory::getDocument();
		$renderer   = $document->loadRenderer('modules');
        $options    = array('style' => 'xhtml');
        $position   = 'komplekt_bottom';
        echo $renderer->render($position, $options, null);
        ?>
		<?php }?>
    </div>
</div>
</dd>
<?php if ($this->product->komplect){?>  
<dt>Комплектация</dt>
    <?php }?>
<dd>
<div class="tab-content">
<div class="tab-content-left">
<?php print $this->product->komplect; ?>
</div>

<div style="clear: both;"><?php 
		$document   = JFactory::getDocument();
		$renderer   = $document->loadRenderer('modules');
        $options    = array('style' => 'xhtml');
        $position   = 'komplekt_bottom';
        echo $renderer->render($position, $options, null);
        ?>
</div><div style="clear: both; width:100%;"> </div>		
</div>

</dd>

<?php if ($this->demofiles){?>  
<dt>Документация</dt>
    <?php }?>
<dd>
<div class="tab-content">
<div class="tab-content-left">
<div style="color: rgb(51, 51, 51); text-align: center; font-size: 20px;"><?php echo'Документация на '?><span style="text-transform: lowercase; font-size: 20px !important;"><?php if ($this->product->seoname){ ?><?php print $this->product->seoname?><?php } else { ?><?php print $this->product->name?><?php } ?></span></div>
<?php print $this->_tmp_product_html_before_demofiles; ?>
<div id="list_product_demofiles"><?php include(dirname(__FILE__)."/demofiles.php");?></div>
</div>
<div style="clear: both; width:100%;"> </div>
</div>
</dd>

<?php if (count($this->videos)){?> 
<dt>Видео</dt>
    <?php }?>
<?php if (count($this->videos)){?> 
<dd>
<div class="tab-content">
<div class="tab-content-left">
<div style="color:#333333; text-align:center;"><h3><?php echo'Видео '?><?php if ($this->product->seoname){ ?><?php print $this->product->seoname?><?php } else { ?><?php print $this->product->name?><?php } ?></h3></div>
<div class="yt-block">
   <?php if (count($this->videos)){?>
      <?php foreach($this->videos as $k=>$video){?>
         <?php if ($video->video_code) { ?>
            <div class="yt-block-ins">
			   <iframe width="560" height="315" src="https://www.youtube.com/embed/<?php echo $video->video_code?>" frameborder="0" allowfullscreen></iframe>
			</div>
         <?php } ?>
      <?php } ?>
   <?php }?>
</div>
</div>
<div style="clear: both; width:100%;"> </div>
</div>
</dd>
<?php }?>
<?php if ($renderer->render('uslugi_karta')){?>  
<dt>Услуги</dt>
<?php }?>
<dd>
<div  class="tab-content">
<div class="tab-content-left">
	<?php 
		$document   = JFactory::getDocument();
		$renderer   = $document->loadRenderer('modules');
        $options    = array('style' => 'xhtml');
        $position   = 'uslugi_karta';
        echo $renderer->render($position, $options, null);
        ?>
</div>	


<div style="clear: both; width:100%;"> </div>	
<?php if ($this->product->_label_name != 'Товара нет в наличии'){?>
		<div id="karta_zakaz">
		<?php 
		$document   = JFactory::getDocument();
		$renderer   = $document->loadRenderer('modules');
        $options    = array('style' => 'xhtml');
        $position   = 'karta_zakaz';
        echo $renderer->render($position, $options, null);
        ?>
		</div>
		<?php }?>
<div style="clear: both; width:100%;"> </div>		
</div>
</dd>
<?php 
if ($this->product->product_manufacturer_id == '51' ) : ?>
<dt>Зона покрытия</dt>
<dd>
<div class="tab-content">
	<?php 
		$document   = JFactory::getDocument();
		$renderer   = $document->loadRenderer('modules');
        $options    = array('style' => 'xhtml');
        $position   = 'zona_thurya';
        echo $renderer->render($position, $options, null);
        ?>
</div>
</dd>
<?php endif; ?>	
<dt>Отзывы</dt>
<dd>
<div class="tab-content">
<?php print $this->_tmp_product_html_before_review; include(dirname(__FILE__)."/review.php");?>	
</div>
</dd>

  <script type="text/javascript"> 
  jQuery(function(){
jQuery('dl.tabs dt').click(function(){
jQuery(this)
.siblings().removeClass('selected').end()
.next('dd').andSelf().addClass('selected');
});
});
  </script> 
  </dl>
<div class="button_back" style="z-index:1000000;">
 <?php 
            $category_id = JRequest::getInt('category_id');
			$category = JTable::getInstance('category', 'jshop');        
			$category->load($category_id);
			$lang = JSFactory::getLang();
			$name_field = $lang->get('name');
			$link_button = SEFLink('index.php?option=com_jshopping&controller=category&task=view&category_id='.$category_id, 1);
            print '<a href="'.$link_button.'">'.' Все товары в категории '.$category->$name_field.'</a>';
        ?>
</div>  
</div>
		 <?php
if ($this->config->product_show_button_back){?>

<?php }?>  
<div class="cart_top_tovar">
          <div id="bottom_karta">
		  <span class="wrapanalog">Похожие товары на <?php print $this->product->name?></span>
	  <?php 
		$document   =  JFactory::getDocument();
		$renderer   = $document->loadRenderer('modules');
        $options    = array('style' => 'xhtml');
        $position   = 'sluchai';
        echo $renderer->render($position, $options, null);
        ?>
	  </div>
</div>  
</div>