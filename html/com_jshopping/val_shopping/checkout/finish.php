<?php defined( '_JEXEC' ) or die(); ?>
<?php if (!empty($this->text)){?>
<?php echo $this->text;?>
<?php }else{?>
<div class="thanksfinish">
<?php echo _JSHOP_THANK_YOU_ORDER ?>
</div>
<div class="thanksfinish_text">
<?php echo _JSHOP_THANK_YOU_ORDER_TEXT ?>
</div>
<?php }?>
