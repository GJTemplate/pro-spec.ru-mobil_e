<script  type="text/javascript">
jQuery.noConflict();
jQuery(document).ready(function(){
       jQuery(".b-carousel-button-right").click(function(){ // при клике на правую кнопку запускаем следующую функцию:
jQuery(".h-carousel-items").animate({left: "-222px"}, 200); // производим анимацию: блок с набором картинок уедет влево на 222 пикселя (это ширина одного прокручиваемого элемента) за 200 милисекунд.
setTimeout(function () { // устанавливаем задержку времени перед выполнением следующих функций. Задержка нужна, т.к. эти ффункции должны запуститься только после завершения анимации.
jQuery(".h-carousel-items .b-carousel-block").eq(0).clone().appendTo(".h-carousel-items"); // выбираем первый элемент, создаём его копию и помещаем в конец карусели
jQuery(".h-carousel-items .b-carousel-block").eq(0).remove(); // удаляем первый элемент карусели	
jQuery(".h-carousel-items").css({"left":"0px"}); // возвращаем исходное смещение набора набора элементов карусели
}, 300);
});

       jQuery(".b-carousel-button-left").click(function(){ // при клике на левую кнопку выполняем следующую функцию:
jQuery(".h-carousel-items .b-carousel-block").eq(-1).clone().prependTo(".h-carousel-items"); // выбираем последний элемент набора, создаём его копию и помещаем в начало набора	
jQuery(".h-carousel-items").css({"left":"-222px"}); // устанавливаем смещение набора -222px	
jQuery(".h-carousel-items").animate({left: "0px"}, 200); // за 200 милисекунд набор элементов плавно переместится в исходную нулевую точку
jQuery(".h-carousel-items .b-carousel-block").eq(-1).remove(); // выбираем последний элемент карусели и удаляем его
});

});
</script>	


<?php $in_row = $this->config->product_count_related_in_row;?>
<?php if (count($this->related_prod)){?>    
<h3 class="jshop-titleheading-2"><?php print _JSHOP_RELATED_PRODUCTS?></h3>
    
   <div class="b-carousel"> <!-- контейнер, в котором будет карусель -->
<div class="b-carousel-button-left"></div> <!-- левая кнопка -->
<div class="b-carousel-button-right"></div> <!-- правая кнопка -->
<div class="h-carousel-wrapper"> <!-- видимая область карусели -->
<div class="h-carousel-items"> <!-- весь набор элементов карусели -->
       <?php foreach($this->related_prod as $k=>$product){?> 
        <?php if ($product->label_id == '6') continue; ?>	   
           <div class="b-carousel-block">
<div class="block_item">

        <div class="item_image">
		    
            <a href="<?php print $product->product_link?>">               
                <img width="90px" height="70px" src="<?print($product->image);?>">
            </a>
        </div>

        <div class="item_name">
            <a href="<?php print $product->product_link?>"><?php 
			$str=($product->name);
            //разбиваем на массив
             $arr_str = explode(" ", $str);
            //берем первые 6 элементов
            $arr = array_slice($arr_str, 0, 6);
            //превращаем в строку
            $new_str = implode(" ", $arr);
           // Если необходимо добавить многоточие
            if (count($arr_str) > 6) {
            $new_str .= '...';
            }
            echo $new_str;//Выведет 'Этот текст имеет большое количество пробелов и...'
			?></a>
        </div>
		<?php if ($product->product_old_price > 0){?>
            <div class="old_price"><?php if ($this->config->product_list_show_price_description) echo _JSHOP_OLD_PRICE.": ";?><span><?php echo formatprice($product->product_old_price)?></span></div>
        <?php }?>
        <?php if ($product->_display_price){?>
        <div class="item_price">
            <div class="item_price_1">
			<?php if ($product->product_price == '0') { ?>
			<span style="font-size:8px;"><?php print 'ДОГОВОРНАЯ ЦЕНА';?></span>
			<?php } else {?>
			<?php print formatprice($product->product_price);?>
			<?php }?>
			</div>
			<?php if ($product->buy_link){?>
            <a class="button_buy" title="Добавить в корзину <?php 
			$str=($product->name);
            //разбиваем на массив
             $arr_str = explode(" ", $str);
            //берем первые 6 элементов
            $arr = array_slice($arr_str, 0, 6);
            //превращаем в строку
            $new_str = implode(" ", $arr);
           // Если необходимо добавить многоточие
            if (count($arr_str) > 6) {
            $new_str .= '...';
            }
            echo $new_str;//Выведет 'Этот текст имеет большое количество пробелов и...'
			?>" href="<?php echo $product->buy_link?>"></a> &nbsp;
            <?php }?>
        </div>
		<div class="cls"></div>
        <?php }?>
		<div class="cls"></div>
    </div>
</div>
           
       <?php }?>
</div>

</div>
       
 </div> 
   

<?php }?>