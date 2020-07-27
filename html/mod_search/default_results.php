<?php
/**
 * @version		$Id: default_results.php 21321 2011-05-11 01:05:59Z dextercowley $
 * @package		Joomla.Site
 * @subpackage	com_search
 * @copyright	Copyright (C) 2005 - 2011 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

// no direct access
defined('_JEXEC') or die;

$app = JFactory::getApplication();
$categorys = $app->get('joomshopping_categorys_search', array());
$category_id = JFactory::getApplication()->input->getInt('category_id', 0);
// $manufacturers = $app->get('joomshopping_manufacturers_search', array());
// $manufacturer_id = JFactory::getApplication()->input->getInt('manufacturer_id', 0);
// $searchword = JFactory::getApplication()->input->getString('searchword', '');
?>
<?php if ($categorys && $app->input->get('type') == 'raw') { ?>
<div id="joomshopping_categorys_search">
	<?php if (count($categorys) > 5) { ?>
	<div class="all_category">
		<a href="javascript:void(0)" onclick="document.getElementById('category_id').value=0;document.getElementById('rokajaxsearch').submit()">Все категории</a>
	</div>
	<?php
	}
	$categorys = array_slice($categorys, 0, 5);
	?>
	<?php foreach($categorys as $category) { ?>
	<div class="category">
		<a href="javascript:void(0)" onclick="document.getElementById('category_id').value=<?php echo $category->id ?>;document.getElementById('rokajaxsearch').submit()"><?php echo $category->name ?></a>
	</div>
	<?php } ?>
</div>
<?php } ?>
<?php if ($manufacturers) { ?>
<script>
function manufacturerSearchSubmit(manufacturer_id){
	var rokajaxsearch = jQuery('#rokajaxsearch');
	rokajaxsearch.find('input[name=category_id]').val('<?php echo $category_id ?>');
	rokajaxsearch.find('input[name=manufacturer_id]').val(manufacturer_id);
	rokajaxsearch.find('input[name=searchword]').val('<?php echo $searchword ?>');
	rokajaxsearch.submit();
}
</script>
<div id="joomshopping_manufacturers_search">
	Производитель: 
	<select name="manufacturer_id" onchange="manufacturerSearchSubmit(this.value)">
		<option value="0" <?php if ($manufacturer_id == 0) { ?>selected<?php } ?>><?php echo JText::_('JSELECT') ?></option>
		<?php foreach($manufacturers as $id=>$name) { ?>
		<option value="<?php echo $id ?>" <?php if ($manufacturer_id == $id) { ?>selected<?php } ?>><?php echo $name ?></option>
		<?php } ?>
	</select>
</div>
<?php } ?>
<?php foreach($this->results as $result) : ?>
<div class="rez-my">
<dl>
		<dt class="result-title">
		<?php echo $this->pagination->limitstart + $result->count . '. '; ?>
		<?php if ($result->href) : ?>
			<a href="<?php echo JRoute::_($result->href); ?>"<?php if ($result->browsernav == 1) : ?> target="_blank"<?php endif; ?>>
				<?php echo $result->title; ?>
			</a>
		<?php else : ?>
			<?php echo $result->title; ?>
		<?php endif; ?>
	</dt>
		<?php if ($result->section) : ?>
		<dd class="result-category">
				<span class="small<?php echo $this->pageclass_sfx; ?>"> (<?php echo $this->escape($result->section); ?>) </span>
		</dd>
		<?php endif; ?>
		<?php if ($result->myimg) : 
	$myimg = "<div class='mi-seache-img'><img src=/components/com_jshopping/files/img_products/$result->myimg class='s-img'/></div>" ; 
	 elseif (!$result->myimg) : 
	$myimg = "" ; 
 endif; ?>
        
		<dd class="result-text">
		<a href="<?php echo JRoute::_($result->href); ?>"<?php if ($result->browsernav == 1) :?> target="_blank"<?php endif;?>><?php echo $myimg;?></a><div class="rez-text"><?php echo $result->text;?></div>
		<div class="searche_price"><?php 
		if ($result->myprice==0){echo'Уточняйте цену';}else
		{if ($result->mycurrency==3){
			$result->myprice=$result->myprice/0.015151;
			echo formatprice($result->myprice);
			}else if ($result->mycurrency==1){
				$result->myprice=$result->myprice/0.014285;
			echo formatprice($result->myprice);}
			else
			{echo formatprice($result->myprice);};}
		?></div>
		<div class="rez-button"><a href="<?php echo JRoute::_($result->href); ?>"<?php if ($result->browsernav == 1) :?> target="_blank"<?php endif;?>>Купить</a></div>
		</dd>
		<div style="width:100%; clear:both;"></div>
</dl>
</div>
<?php endforeach; ?>
<div class="pagination">
		<?php echo $this->pagination->getPagesLinks(); ?>
</div>
