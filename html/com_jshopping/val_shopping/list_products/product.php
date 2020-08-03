<?php defined('_JEXEC') or die(); ?>
<?php echo $product->_tmp_var_start ;





?>

    <!-- id="block_product" -->
    <div  class="block_product-item">

        <div itemscope itemtype="http://schema.org/Product"
             data-product_id="<?=$product->product_id ?>"
             data-category_id="<?=$product->category_id ?>"

             class="product productitem_<?=$product->product_id ?>">
            <div class="b1c-good">
                <div class="my_image_block">
                    <?php if ($product->image) { ?>
                        <div class="image_block">
                            <?php if ($product->label_id) { ?>
                                <div class="product_label">
                                    <?php if ($product->_label_image) { ?>
                                        <img src="<?php echo $product->_label_image ?>"
                                             alt="<?php echo htmlspecialchars($product->_label_name) ?>"/>
                                    <?php } else { ?>
                                        <span class="label_name"><?php echo $product->_label_name; ?></span>
                                    <?php } ?>
                                </div>
                            <?php } ?>
                            <a href="<?php echo $product->product_link ?>">
                                <img class="jshop_img" src="<?php echo $product->image ?>"
                                     alt="Купить <?php echo $product->name ?> в <?php echo $_COOKIE['city_name'] ?>"
                                     itemprop="image" title="<?php echo $product->name ?>"/>
                            </a>
                        </div>
                    <?php } ?>
                    <div style="">

                        <?php echo $product->_tmp_var_bottom_foto; ?>
                    </div>
                </div>
                <div class="name">
                    <div class="product_title"><a href="<?php echo $product->product_link ?>"><span
                                    itemprop="name"><?php echo $product->name ?></span></a></div>

                    <?php if ($this->config->product_list_show_product_code) { ?><span class="jshop_code_prod">
                        (<?php echo _JSHOP_EAN ?>: <span><?php echo $product->product_ean; ?></span>)</span><?php } ?>
                </div>
                <div class="deliverytime-list">
                    <?php if ($this->product->_label_name == 'Товара нет в наличии' || $product->product_price == 0 || $this->product->delivery_time != '' || $this->product->_label_name == 'Скоро в продаже') { ?>
                        <?php if ($this->product->delivery_time == '30 дней' || $this->product->_label_name == 'Скоро в продаже') { ?>
                            <?php echo '<div class="tovar_nalichie_deliver_zakaz">ПРЕДЗАКАЗ</div>' ?>
                        <?php } else { ?>
                            <?php if ($this->product->product_manufacturer_id == '88') { ?>
                                <?php echo '<div class="tovar_nalichie_deliver">Товар в наличии</div>' ?>
                            <?php } else { ?>
                                <?php echo '<div class="tovar_nalichie_deliver_zakaz">Под заказ</div>' ?>
                            <?php } ?>
                        <?php } ?>
                    <?php } else { ?>
                        <?php echo '<div class="tovar_nalichie_deliver">Товар в наличии</div>' ?><?php } ?>
                </div>
                <?php if ($this->allow_review) { ?>
                    <div style="">
                        <div class="review_mark"><?php echo showMarkStar($product->average_rating); ?></div>
                        <?php if (!($product->reviews_count == 0)) { ?>
                            <div class="count_commentar"><?php echo sprintf($product->reviews_count); ?></div>
                        <?php } else { ?>
                            <div class="count_commentar"></div>
                        <?php } ?>
                    </div>

                <?php } ?>
                <?php if (is_array($product->extra_field)) { ?>
                    <div class="extra_fields">
                        <?php foreach ($product->extra_field as $extra_field) { ?>
                            <div><?php echo $extra_field['name']; ?>: <?php echo $extra_field['value']; ?></div>
                        <?php } ?>
                    </div>
                <?php } ?>
                <?php if ($product->product_quantity <= 0 && !$this->config->hide_text_product_not_available) { ?>
                    <div class="not_available"><?php echo _JSHOP_PRODUCT_NOT_AVAILABLE ?></div>
                <?php } ?>

                <?php if ($product->product_price_default > 0 && $this->config->product_list_show_price_default) { ?>
                    <div class="default_price"><?php echo _JSHOP_DEFAULT_PRICE . ": "; ?>
                        <span><?php echo formatprice($product->product_price_default) ?></span></div>
                <?php } ?>
                <?php if ($product->_display_price) { ?>
                    <?php if ($product->_label_name != 'Товара нет в наличии') { ?>
                        <div itemprop="offers" itemscope="" itemtype="http://schema.org/Offer" class="jshop_price">
                            <?php if ($product->product_old_price > 0 && $product->product_old_price > $product->product_price) { ?>
                                <div class="old_price"><?php if ($this->config->product_list_show_price_description) echo _JSHOP_OLD_PRICE . ": "; ?>
                                    <span><?php echo formatprice($product->product_old_price) ?></span></div>
                            <?php } ?>
                            <?php if ($this->config->product_list_show_price_description) echo _JSHOP_PRICE . ": "; ?>
                            <?php if ($product->show_price_from) echo _JSHOP_FROM . " "; ?>
                            <?php if ($product->product_price != 0) { ?>

                                <span class="price-name">Цена: </span> <span
                                        itemprop="price"><?php echo formatprice($product->product_price); ?></span>
                                <span><meta itemprop="priceCurrency" content="RUB"></span>

                            <?php } else { ?>
                                <?php if (!($category_id == '857' || $category_id == '858' || $category_id == '859' || $category_id == '893' || $category_id == '1060' || $category_id == '1179')) { ?>
                                    <span><?php echo _ZVONITE_YTOCHNYATE; ?></span><?php } ?>
                                <div class='b1c-name' style="display:none;">
                                    <?php if (!($category_id == '857' || $category_id == '858' || $category_id == '859' || $category_id == '893' || $category_id == '1060' || $category_id == '1179')) { ?>
                                        Запрос цены на <?php print $product->name ?>
                                    <?php } else { ?>
                                        <?php print $product->name ?>
                                    <?php } ?>
                                </div>
                                <div style="" abbr class="jcetooltip"
                                     title="Заполните форму заявки и наши менеджеры свяжутся с вами."><input class="b1c"
                                                                                                             type="button"
                                                                                                             style="float: none; text-shadow: none; margin: 10px auto; height: 30px; font-size: 13px; border: medium none; background: #ff7800; color: #ffffff; text-transform: uppercase;"
                                        <?php if (!($category_id == '857' || $category_id == '858' || $category_id == '859' || $category_id == '893' || $category_id == '1060' || $category_id == '1179')) { ?>
                                            value="Запросить цену"
                                        <?php } else { ?>
                                            value="Заказать услугу"
                                        <?php } ?>
                                    ></div>
                            <?php } ?>

                        </div>
                        <div class="bonus_system"><?php echo $product->_tmp_product_html_bonus_system; ?></div>
                    <?php } ?>
                <?php } ?>
                <?php if ($product->_label_name == 'Товара нет в наличии') { ?>
                    <span style="margin: 0px 0px 10px 20px; color: red; font-size: 16px ! important;"><?php echo 'Товара нет в наличии' ?></span>
                <?php } ?>
                <?php echo $product->_tmp_var_bottom_price; ?>
                <?php if ($this->config->show_tax_in_product && $product->tax > 0) { ?>
                    <span class="taxinfo"><?php echo productTaxInfo($product->tax); ?></span>
                <?php } ?>
                <?php if ($this->config->show_plus_shipping_in_product) { ?>
                    <span class="plusshippinginfo"><?php echo sprintf(_JSHOP_PLUS_SHIPPING, $this->shippinginfo); ?></span>
                <?php } ?>
                <?php if ($product->basic_price_info['price_show']) { ?>
                    <div class="base_price"><?php echo _JSHOP_BASIC_PRICE ?>
                        : <?php if ($product->show_price_from) echo _JSHOP_FROM; ?>
                        <span><?php echo formatprice($product->basic_price_info['basic_price']) ?> / <?php echo $product->basic_price_info['name']; ?></span>
                    </div>
                <?php } ?>

                <div id="my_anons_block">

                    <div class="mainblock">
                        <?php if ($this->config->product_list_show_weight && $product->product_weight > 0) { ?>
                            <div class="productweight"><?php echo _JSHOP_WEIGHT ?>.:
                                <span><?php echo formatweight($product->product_weight) ?></span></div>
                        <?php } ?>
                        <?php if ($product->vendor) { ?>
                            <div class="vendorinfo"><?php echo _JSHOP_VENDOR ?>: <a
                                        href="<?php echo $product->vendor->products ?>"><?php echo $product->vendor->shop_name ?></a>
                            </div>
                        <?php } ?>
                        <?php if ($this->config->product_list_show_qty_stock) { ?>
                            <div class="qty_in_stock"><?php echo _JSHOP_QTY_IN_STOCK ?>:
                                <span><?php echo sprintQtyInStock($product->qty_in_stock) ?></span></div>
                        <?php } ?>
                        <?php echo $product->_tmp_var_top_buttons; ?>


                        <div class="buttons">
                            <?php
                            if ($product->buy_link) {
                                if ($product->product_price != 0) { ?>
                                    <div class="kol-cat"><?php echo $product->_tmp_var_buttons; ?></div>
                                    <div class="kupit-cat">
                                        <a class="button_buy" href="<?php echo $product->buy_link ?>"
                                           title="В корзину"><?= _JSHOP_BUY ?></a>
                                    </div>


                                    <div class="bistro-cat">
                                        <?= $product->_my_tmp_product_html_after_click_buttons ?>
                                    </div>


                                <?php }
                            } ?>




                            <?php echo $product->_tmp_img_before; ?>
                            <?php echo $product->_tmp_var_my_buttons; ?>
                            <?php echo $product->_tmp_var_wis_buttons; ?>
                        </div>
                        <?php echo $product->_tmp_var_bottom_buttons; ?>
                    </div>
                    <div class="description" style="display:none;">
	      <span itemprop="description">
	       <? $str = ($product->short_description);
           //разбиваем на массив
           $arr_str = explode(" ", $str);
           //берем первые 6 элементов
           $arr = array_slice($arr_str, 0, 100);
           //превращаем в строку
           $new_str = implode(" ", $arr);

           // Если необходимо добавить многоточие
           if (count($arr_str) > 100) {
               $new_str .= '...';
           }
           echo $new_str;//Выведет 'Этот текст имеет большое количество пробелов и...'?>
			</span>
                        <?php if ($product->_label_name != 'Товара нет в наличии') { ?>
                            <?php if ($product->delivery_time != '') { ?>
                                <div class="deliverytime"><?php echo _JSHOP_DELIVERY_TIME ?>:
                                    <span><?php echo $product->delivery_time ?></span></div>
                            <?php } ?>
                        <?php } ?>

                    </div>
                    <div class="buttons_detail">
                        <a class="button_detail"
                           href="<?php echo $product->product_link ?>"><?php echo _JSHOP_DETAIL ?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php echo $product->_tmp_var_end ?>