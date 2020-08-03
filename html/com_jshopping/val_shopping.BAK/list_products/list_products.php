<?php defined( '_JEXEC' ) or die(); ?> 
	
		  <?php
                 if (!($_SERVER['REQUEST_URI']=='/' || $_SERVER['REQUEST_URI']=='/?device=mobile'))
            {?>
			<?php  if (!($controller == 'cart')||($controller == 'product')||($controller == 'checkout')) { ?>
            <div class="top-hidden" style="position: relative; text-align: center;	background: #5285CC; padding: 10px 0px;">
			<div class="hider" style="color:#ffffff; text-decoration:none; cursor:pointer;"><div id="filtre-name">ФИЛЬТРЫ</div></div>
            <div id="hidden" style="display: none;">
		
                <div class="panel" >
                <div class="elektro-top-left">
				<?php 
		$document   = & JFactory::getDocument();
		$renderer   = $document->loadRenderer('modules');
        $options    = array('style' => 'xhtml');
        $position   = 'mob_left';
        echo $renderer->render($position, $options, null);
        ?>
			</div>
					<div style="clear: both; width: 100%; height: 1px; margin: 0px;"></div>
                </div>
			
			</div>
			</div>			
				 <?php } ?> 
            <?php }?>
		
<div class="jshop list_product">
<div style="font-size: 12px; color: red; width: 96%; margin: 5px 0px 5px 3px;">		<?php 
		$document   = JFactory::getDocument();
		$renderer   = $document->loadRenderer('modules');
        $options    = array('style' => 'xhtml');
        $position   = 'stat_list';
        echo $renderer->render($position, $options, null);
        ?>	
</div>
<?php foreach ($this->rows as $k=>$product){?>
<?php if ($k%$this->count_product_to_row==0) echo "<div class='list_product_row'>";?>
    <div class="jswidth<?php echo round(100/$this->count_product_to_row, 1)?> block_product">
        <?php include(dirname(__FILE__)."/".$product->template_block_product);?>
    </div>
    <?php if ($k%$this->count_product_to_row==$this->count_product_to_row-1){?>
    </div>
    <div class="product_list_hr nvg_clear"></div>
    <?php }?>
<?php }?>
<marquee style="font-size: 12px; color: red; width: 96%; margin: 5px 0px 5px 3px;">
       <noindex> 
	      <?php 
		$document   = JFactory::getDocument();
		$renderer   = $document->loadRenderer('modules');
        $options    = array('style' => 'xhtml');
        $position   = 'begun_list';
        echo $renderer->render($position, $options, null);
        ?>
	
	   </noindex>
</marquee>	
</div>
<div style="width:100%; clear:both;"></div>
						<script type="text/javascript">
			jQuery("#filtre-name").click(function(){
       if ( jQuery("#hidden").css('display') == 'none' ) {
             jQuery("#hidden").show();
              } else {
             jQuery("#hidden").hide();
             }
      })
</script> 
<script src="https://pro-spec.ru/plugins/system/maskedinput/assets/jquery.maskedinput.min.js" type="text/javascript"></script>
	<script type="text/javascript">
jQuery(document).ready(function() { if (jQuery("#modal-messages").length) modalMessages("1", "both", "", "fast"); });
	jQuery(function($){
		$.mask.definitions['*'] = '[0-9]';
		$('#mobil_phone, #d_mobil_phone').mask('+7(***) ***-**-**',{placeholder:'x'});
	});
	jQuery(function($){
		$('#oneStepCheckoutForm').delegate('[name="country"],[name="d_country"],[name="delivery_adress"]', 'change' ,function(e){
			oneStepCheckout.updateForm(2);
		});
	});
	var acymailing = Array();
				acymailing['NAMECAPTION'] = 'Введите Ваше имя';
				acymailing['NAME_MISSING'] = 'Пожалуйста, введите свое имя';
				acymailing['EMAILCAPTION'] = 'Введите Ваш email';
				acymailing['VALID_EMAIL'] = 'Пожалуйста, введите корректный эл. адрес';
				acymailing['ACCEPT_TERMS'] = 'Пожалуйста, ознакомьтесь с \'Условиями и положениями\'';
				acymailing['CAPTCHA_MISSING'] = 'Пожалуйста, введите защитный код, отображаемый на картинке';
				acymailing['NO_LIST_SELECTED'] = 'Пожалуйста, выберите рассылки, на которые вы хотите подписаться';
acymailing['reqFieldsformAcymailing62391'] = Array('html');
		acymailing['validFieldsformAcymailing62391'] = Array('Пожалуйста, введите значение для поля Получить');
jQuery(function($) {
			 $('.hasTip').each(function() {
				var title = $(this).attr('title');
				if (title) {
					var parts = title.split('::', 2);
					var mtelement = document.id(this);
					mtelement.store('tip:title', parts[0]);
					mtelement.store('tip:text', parts[1]);
				}
			});
			var JTooltips = new Tips($('.hasTip').get(), {"maxTitleChars": 50,"fixed": false});
		});
acymailing['excludeValuesformAcymailing62391'] = Array();
acymailing['excludeValuesformAcymailing62391']['email'] = 'Введите Ваш email';
	var mod_ajax_data2;
	mod_ajax_data2={
	"data_controller":"checkout"
	};
if (typeof jfbcJQuery == "undefined") jfbcJQuery = jQuery;
window.addEvent((window.webkit) ? 'load' : 'domready', function() {
				window.rokajaxsearch = new RokAjaxSearch({
					'results': 'Результаты поиска',
					'close': '',
					'websearch': 1,
					'blogsearch': 0,
					'imagesearch': 0,
					'videosearch': 0,
					'imagesize': 'LARGE',
					'safesearch': 'STRICT',
					'search': 'Поиск по сайту...',
					'readmore': 'Подробнее...',
					'noresults': 'Во вашему запросу ничего не найдено',
					'advsearch': 'Advanced search',
					'page': 'Page',
					'page_of': 'of',
					'searchlink': 'https://pro-spec.ru/index.php?option=com_search&amp;view=search&amp;tmpl=component',
					'advsearchlink': 'https://pro-spec.ru/index.php?option=com_search&amp;view=search',
					'uribase': 'https://pro-spec.ru/',
					'limit': '50',
					'perpage': '10',
					'ordering': 'popular',
					'phrase': 'exact',
					'hidedivs': '',
					'includelink': 1,
					'viewall': 'Смотреть все результаты поиска',
					'estimated': 'estimated',
					'showestimated': 1,
					'showpagination': 1,
					'showcategory': 0,
					'showreadmore': 1,
					'showdescription': 1
				});
			});
		jQuery(document).ready(function(){
			jQuery("input[name *= 'phone']").mask("+7 (999) 999-99-99"); 
                        jQuery("input[name *= 'fax']").mask("+7 (999) 999-99-99"); 
                        jQuery("input[name *= 'tel']").mask("+7 (999) 999-99-99"); 
		});
	</script>
	
<?php
$limit = JRequest::getInt('limitstart',0);
if ($limit > 0){
$document = & JFactory::getDocument();
$mytitle = $document->getTitle();
$desc = $document->getMetadata('description');

$selector = $this->product_count;
preg_match('|"selected">(\d*)|sei', $selector, $arr);

$numpage =  $limit / $arr[1] +1;
$titletext =' - страница '.$numpage;

$document->setTitle($mytitle.$titletext);
$document->setMetadata('description', $desc.$titletext);

}?>	
<?php if($limit > 0 && $this->pagination_obj->pagesCurrent == 1){
exit(header('Location: /error404/'));}
?>