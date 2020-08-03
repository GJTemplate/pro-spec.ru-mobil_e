<?php defined( '_JEXEC' ) or die(); ?>
<?php $in_row = $this->config->product_count_related_in_row;?>
<?php if (count($this->related_prod)){?>    
    
    <div class="jshop_list_product">
    <div class = "jshop list_related">
        <?php foreach($this->related_prod as $k=>$product){?>  
            <?php if ($product->label_id == '6') continue; ?>	
            <div class="jshop_related jswidth<?php echo round(100/$in_row); ?>">
                <?php include(dirname(__FILE__)."/../".$this->folder_list_products."/".$product->template_block_product);?>
            </div>
             
        <?php }?>
        <div class='nvg_clear'></div>
    </div>
<?php }?>