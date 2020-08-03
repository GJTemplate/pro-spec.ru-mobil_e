<?php defined( '_JEXEC' ) or die(); ?>


<script>

    <?php if ($this->product->product_quantity >0){?>
    var translate_not_available = "<?php echo _JSHOP_PRODUCT_NOT_AVAILABLE_THIS_OPTION?>";
    <?php }else{?>
    var translate_not_available = "<?php echo _JSHOP_PRODUCT_NOT_AVAILABLE?>";
    <?php }?>
    var translate_zoom_image = "<?php echo _JSHOP_ZOOM_IMAGE?>";
    var product_basic_price_volume = <?php echo $this->product->weight_volume_units;?>;
    var product_basic_price_unit_qty = <?php echo $this->product->product_basic_price_unit_qty;?>;
    var currency_code = "<?php echo $this->config->currency_code;?>";
    var format_currency = "<?php echo $this->config->format_currency[$this->config->currency_format];?>";
    var decimal_count = <?php echo $this->config->decimal_count;?>;
    var decimal_symbol = "<?php echo $this->config->decimal_symbol;?>";
    var thousand_separator = "<?php echo $this->config->thousand_separator;?>";
    var attr_value = new Object();
    var attr_list = new Array();
    var attr_img = new Object();
    <?php if (count($this->attributes)){?>
        <?php $i=0;foreach($this->attributes as $attribut){?>
        attr_value["<?php echo $attribut->attr_id?>"] = "<?php echo $attribut->firstval?>";
        attr_list[<?php echo $i++;?>] = "<?php echo $attribut->attr_id?>";
        <?php } ?>
    <?php } ?>
    <?php
    foreach($this->all_attr_values as $attrval){
        if ($attrval->image){?>attr_img[<?php echo $attrval->value_id?>] = "<?php echo $attrval->image?>";<?php } }?>
    var liveurl = '<?php echo JURI::root()?>';
    var liveattrpath = '<?php echo $this->config->image_attributes_live_path;?>';
    var liveproductimgpath = '<?php echo $this->config->image_product_live_path;?>';
    var liveimgpath = '<?php echo $this->config->live_path."images";?>';
    var urlupdateprice = '<?php echo $this->urlupdateprice;?>';
    <?php echo $this->_tmp_product_ext_js;




    ?> </script>
