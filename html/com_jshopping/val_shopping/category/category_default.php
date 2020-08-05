<?php defined( '_JEXEC' ) or die();
$pathScript = JPATH_THEMES . '/elektro/assets/css/com_jshopping.category.critical.css' ;
$params = [ 'debug' => true ,] ;
\GNZ11\Document\Document::addIncludeStyleDeclaration( $pathScript , $params ) ;




?>
<div class="jshop">
<?php if ($this->category->seoname){ ?>
<h1><?php echo $this->category->seoname?></h1>
<?php } else { ?>
<h1><?php echo $this->category->name?></h1>
<?php } ?>
<?php if ($this->category->short_description){ ?>
<?php 
                $controller = JRequest::getVar('controller', null);
                $category_id = JRequest::getVar('category_id', null);
                if (!($category_id == '857' || $category_id == '858' || $category_id == '859' || $category_id == '893' || $category_id == '1060' || $category_id == '1179' || $category_id == '1393' || $category_id == '1410' || $category_id == '1411'|| $category_id == '1466')) {?>
<div style="border-top: 1px solid rgb(204, 204, 204); padding:10px 0 0; clear: both;"><?php echo $this->category->_short_description?></p></div>
<?php }else{ ?>
<div id="category_desc" style="border-top: 1px solid rgb(204, 204, 204); clear: both;"><?php echo $this->category->description?></div>
<?php }?>
 <?php } ?>
<div style="">
<?php 
		$document   = JFactory::getDocument();
		$renderer   = $document->loadRenderer('modules');
        $options    = array('style' => 'xhtml');
        $position   = 'my_categor';
        echo $renderer->render($position, $options, null);
        ?>
</div>
<div class="jshop_list_category">
<?php $Table_Category = JTable::getInstance("Category", "JShop");?> 
<?php if (count($this->categories)){ ?>
<div class = "jshop list_category" style="padding-bottom:40px;">
    <?php foreach($this->categories as $k=>$category){?>
        <?php if ($k%$this->count_category_to_row==0) echo '<div class="nvg_clear"></div>'; ?>
        <div class="jshop_categ jswidth<?php echo round(100/$this->count_category_to_row, 0)?>">
          <div class = "categorys">
            <div class="image">
                <a href = "<?php echo $category->category_link;?>"><img class="jshop_img" src="<?php echo $this->image_category_path;?>/<?php if ($category->category_image) echo $category->category_image; else echo $this->noimage;?>" alt="<?php echo htmlspecialchars($category->name)?>" title="<?php echo htmlspecialchars($category->name)?>" /></a>
            </div>
          
               <h2 class="category_title"><a class = "product_link"  href = "<?php echo $category->category_link?>"><?php echo $category->name?></a></h2>
               
            </div>
          				
        </div>    
		
        <?php if ($k%$this->count_category_to_row==$this->count_category_to_row-1) echo ''; ?>
    <?php } ?>
        <?php if ($k%$this->count_category_to_row!=$this->count_category_to_row-1) echo '</div>'; ?>
</div>
<?php }?>

</div>
<?php include(dirname(__FILE__)."/products.php");?>
<?php 
                $controller = JRequest::getVar('controller', null);
                $category_id = JRequest::getVar('category_id', null);
                if (!($category_id == '857' || $category_id == '858' || $category_id == '859' || $category_id == '893' || $category_id == '1060' || $category_id == '1179' || $category_id == '1393'|| $category_id == '1410' || $category_id == '1411'|| $category_id == '1466')) {?>
		<?php if (!($limit > 0)) {?>		
<div id="category_desc" style="border-top: 1px solid rgb(204, 204, 204); clear: both;"><?php echo $this->category->description?></div>
		<?php }?>		
				<?php }?>
</div>