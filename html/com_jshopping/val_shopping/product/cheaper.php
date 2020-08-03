<?php
/**
* @package Joomla
* @subpackage JoomShopping
* @author Dmitry Stashenko
* @website http://nevigen.com/
* @email support@nevigen.com
* @copyright Copyright © Nevigen.com. All rights reserved.
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
* @license agreement http://nevigen.com/license-agreement.html
**/

defined('_JEXEC') or die;
?>
<style>
#jshop_ask_question td {padding: 3px;}

.productask .jshop_prod_description {padding: 0 19px 10px;}

#jshop_ask_question input, 
#jshop_ask_question textarea {
	border: 1px solid #999;
	border-radius: 4px;
	font-size: 120%;
	line-height: 125%;
	padding: 5px;
}
#mxcpr {display:none;}

span.nvg_fname {font-size:120%; font-weight:bold;}

</style>
<div class="jshop productask">
<?php

if ($this->send) {
	echo _JSHOP_PRODUCT_CHEAPER_THANX;
} else if ($this->admin_mail) {
	print _JSHOP_PRODUCT.': <a href="'.$this->product->href.'">'.$this->product->name.'</a><br/>';
	print _JSHOP_PRODUCT_CHEAPER_USER_NAME.': '.$this->user_name.'<br/>';
	print _JSHOP_PRODUCT_CHEAPER_USER_EMAIL.': '.$this->user_email.'<br/>';
	print _JSHOP_PRODUCT_CHEAPER_TEXTAREA.':<br/>';
	print $this->user_link;
} else {
?>
	<h1><?php echo _JSHOP_PRODUCT_CHEAPER_NAME; ?></h1>
	<table class="jshop">
		<tr>
			<td class="image_middle">
				<?php
				if(count($this->images)) {
					$image = $this->images[0];
				?>
				<img src = "<?php echo $this->image_product_path?>/<?php echo $image->image_name;?>" alt="<?php echo htmlspecialchars($image->_title)?>" title="<?php echo htmlspecialchars($image->_title)?>" />
				<?php } else { ?>
				<img src = "<?php echo $this->image_product_path?>/<?php echo $this->noimage?>" alt = "<?php echo htmlspecialchars($this->product->name)?>" />
				<?php } ?>
			</td>
			<td>
				<div class="jshop_prod_description">
					<h2><?php echo $this->product->name?></h2>
					<?php echo _JSHOP_PRODUCT_CHEAPER_TEXT?>
				</div>        
				<div class="jshop_prod_description" style="display:none">
					<?php echo $this->product->short_description; ?>
				</div>        
			</td>
		</tr>
	</table>
	<form action="<?php echo $this->action?>" name="ask_question" method="post" onsubmit="return validateReviewForm(this.name)">
		<input type="hidden" name="product_id" id="product_id" value="<?php echo $this->product->product_id?>" />
		<input type="hidden" name="category_id" id="category_id" value="<?php echo $this->category_id?>" />
		<table id="jshop_ask_question">
			<tr>
				<td>
					<span class="nvg_fname"><?php echo _JSHOP_PRODUCT_CHEAPER_USER_NAME?> </span>
				</td>
				<td>
					<input type="text" name="user_name" id="review_user_name" class="inputbox" value="<?php echo $this->user->username?>"/>
				</td>
			</tr>
			<tr>
				<td>
					<span class="nvg_fname"><?php echo _JSHOP_PRODUCT_CHEAPER_USER_EMAIL?> </span>
				</td>
				<td>
					<input type="text" name="user_email" id="review_user_email" class="inputbox" value="<?php echo $this->user->email?>" />
				</td>
			</tr>
			<tr>
				<td>
					<?php echo _JSHOP_PRODUCT_CHEAPER_TEXTAREA?>
				</td>
				<td>
					<textarea name="user_link" id="review_review" rows="4" cols="40" class="inputbox"></textarea>
					<input type="hidden" name="user_phone" value="1" />
				</td>
			</tr>
			<?php if (isset($this->_tmp_product_cheaper_before_submit)) echo $this->_tmp_product_cheaper_before_submit;?>
			<tr>
				<td></td>
				<td>
					<input type="submit" class="button validate" value="<?php echo _JSHOP_PRODUCT_CHEAPER_SUBMIT?>" />
				</td>
			</tr>
		</table>
	</form>
<?php
}
?>
</div>