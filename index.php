<?php
/**
 * @package		Joomla.Site
 * @copyright	Copyright (C) 2005 - 2014 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

/* The following line gets the application object for things like displaying the site name */
$app = JFactory::getApplication();
$doc = \Joomla\CMS\Factory::getDocument();


$controller = $app->input->get('controller' , null );
$view = $app->input->get('view' , null );
//  $view == 'featured' - главная страница
//  /?device=mobile


//		define('TEMPLATE_VERSION', 'dev');
if (!defined('TEMPLATE_VERSION')){
    $xml_file = JPATH_THEMES . '/mobil_e/templateDetails.xml';
    $dom = new DOMDocument("1.0", "utf-8");
    $dom->load($xml_file);
    $version = $dom->getElementsByTagName('version')->item(0)->textContent;
    define('TEMPLATE_VERSION', $version );
}







/* The following line loads the MooTools JavaScript Library */
JHtml::_('behavior.framework', true);


?>
<?php echo '<?'; ?>xml version="1.0" encoding="<?php echo $this->_charset ?>"?>
<!DOCTYPE html PUBLIC
  "-//WAPFORUM//DTD XHTML Mobile 1.2//EN"
  "http://www.openmobilealliance.org/tech/DTD/xhtml-mobile12.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" 
	  xmlns:og="http://ogp.me/ns#" 
	  xmlns:fb="http://www.facebook.com/2008/fbml" 
	  xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>" > 
	<head>
	<meta name=viewport content="width=device-width, initial-scale=1">
		<!-- The following JDOC Head tag loads all the header and meta information from your site config and content. -->
		<jdoc:include type="head" />
        
		<!-- The following five lines load the Blueprint CSS Framework (http://blueprintcss.org). If you don't want to use this framework, delete these lines. -->
		<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/blueprint/screen.css" type="text/css" media="screen, projection" />
		<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/blueprint/print.css" type="text/css" media="print" />
		<!--[if lt IE 8]><link rel="stylesheet" href="blueprint/ie.css" type="text/css" media="screen, projection"><![endif]-->
		<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/blueprint/plugins/fancy-type/screen.css" type="text/css" media="screen, projection" />
		<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/blueprint/plugins/joomla-nav/screen.css" type="text/css" media="screen" />
		
		<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-TS4LFLL');</script>
<!-- End Google Tag Manager -->


		<!-- The following line loads the template CSS file located in the template folder. -->
		<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/template.css" type="text/css" />

		<!-- The following four lines load the Blueprint CSS Framework and the template CSS file for right-to-left languages. If you don't want to use these, delete these lines. -->
		<?php if($this->direction == 'rtl') : ?>
			<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/blueprint/plugins/rtl/screen.css" type="text/css" />
			<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/template_rtl.css" type="text/css" />
		<?php endif; ?>
        
		<!-- The following line loads the template JavaScript file located in the template folder. It's blank by default. -->
		<script type="text/javascript" async src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/template.js"></script>
		<script type="text/javascript" async src="<?= $this->baseurl ?>/buyme/js/buyme.js"></script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-47068506-1', 'pro-spec.ru');
  ga('send', 'pageview');

</script>
<!--<script type="text/javascript" src="//code.jquery.com/jquery-latest.js"></script>-->
<script src="https://pro-spec.ru/modules/mod_jsfilter/assets/jsfilter.js" type="text/javascript"></script>
<script type="text/javascript">
var __cs = __cs || [];
__cs.push(["setCsAccount", "vkDFcfw7_uRq5WubZ2cUvY6S7g54gpgM"]);
</script>
	</head>
<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TS4LFLL"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<div id="content">	 				
	<div id="elektro_top">
	    <div >
		  <div style=" margin: 0px auto;">
			<?php if($this->countModules('elektro-regist') ) : ?>
				<div class="elektro-regist">
	  	 			<jdoc:include type="modules" name="elektro-regist" style="none" />
				</div>
			<?php endif; ?>
		  </div>
        </div>
		<div id="header_elektro">
		<div class="container">
			<div class="joomla-header span-16 append-1">
                <?= JLayoutHelper::render('heder.logo', [] ); ?>

			
				
			</div>
			<?php if($this->countModules('elektro-header-menu_m') ) : ?>
				<div class="elektro-header-menu">
	  	 			<jdoc:include type="modules" name="elektro-header-menu_m" style="none" />
				</div>
			<?php endif; ?>
		</div>
		</div>
		<div id="search">
            <jdoc:include type="modules" name="elektro-search" style="none" />
        </div>
		<div class="elektro-banner_left">
	  	 			<jdoc:include type="modules" name="elektro-banner_left" style="none" />
				</div>
				<div style="clear: both;  height: 1px; margin: 0px;"></div>
		<?php

        if($this->countModules('elektro-topmenu or position-2') )
        {
            $style = null ;
            if( $this->countModules('elektro-banner_1') )
            {
                $style = ' style="width:100%;" ' ;
            }#END IF


            ?>


            <?php # MENU -  Модуль  mod_myod_jshopping_cat ?>
            <div id="blockBest50">КАТАЛОГ ТОВАРОВ</div>
            <div id="divId" style="display: none">
                <div id="top_menu" <?= $style ?> >
                    <jdoc:include type="modules" name="elektro-topmenu" style="container" />
                </div>
            </div>


			<jdoc:include type="modules" name="position-1" style="container" />
		<?php
        } ?>



        <div class="elektro-center_top">
                    <div style=""><jdoc:include type="modules" name="mainbody_center" style="xhtml" /></div>
	  	 			<div style=""><jdoc:include type="modules" name="elektro-center_top" style="none" /></div>
					<div style=""><jdoc:include type="modules" name="elektro-center_top2" style="none" /></div>
				</div>
	</div>	
            	<div style=" margin: 0px auto;">
				<?php if($this->countModules('elektro-banner_center_left') or $this->countModules('elektro-banner_center_right') or $this->countModules('elektro-banner_center_center')) : ?>
				<div class="banner_center_my">
				         <div class="elektro-banner_center_left"><jdoc:include type="modules" name="elektro-banner_center_left" style="none" /></div>
				         <div class="elektro-banner_center_right"><jdoc:include type="modules" name="elektro-banner_center_right" style="none" /></div>
				         <div class="elektro-banner_center_center"><jdoc:include type="modules" name="elektro-banner_center_center" style="none" /></div>
				</div>
				<?php endif; ?>
	       </div>	
	 	   
		<?php if($this->countModules('elektro-center_top') ) : ?>
				<div class="elektro-center_top">
	  	 			<jdoc:include type="modules" name="elektro-center_top" style="none" />
				</div>
				<div style="clear: both;  height: 1px; margin: 0px;"></div>
			<?php endif;



			?>
		<div id="content-elektro" class=""> 
        	<?php
            $positionArr = [
                'mainbody_center1' , 
                'mainbody_center2' , 
                'mainbody_center3' , 
                'mainbody_center4' , 
                
            ] ;
            if( $this->countModules( implode(' or ' , $positionArr )) ) : ?>
                <div class="elektro-center_boss">
                    <div class="tab-content">
                        <div class="title-tab-content">
                            <a href="/catalog/sredstva-i-sistemy-bezopasnosti/poiskovo-dosmotrovoe-oborudovanie">
                                Поисковое и досмотровое оборудование
                            </a>
                        </div>
                        <div style="">
                            <jdoc:include type="modules" name="mainbody_center1" style="none"/>
                        </div>
                        <div style="clear: both; width: 100%; height: 1px; margin: 0px;"></div>
                        <div class="bottom-tab-content">
                            <jdoc:include type="modules" name="mainbody_center1-1" style="none"/>
                        </div>
                    </div>
<div class="tab-content">
<div class="title-tab-content"><a href="/catalog/sredstva-i-sistemy-bezopasnosti/introskopy-rentgenotelevizionnoe-oborudovanie">Интроскопы</a></div>
<div style=""><jdoc:include type="modules" name="mainbody_center2" style="none" /></div>
<div style="clear: both; width: 100%; height: 1px; margin: 0px;"></div>
<div class="bottom-tab-content"><jdoc:include type="modules" name="mainbody_center2-2" style="none" /></div>
</div>

<div class="tab-content">
<div class="title-tab-content"><a href="/catalog/sistemy-videonabliudeniia/ip-videonablyudenie">Системы видеонаблюдения</a></div>
<div style=""><jdoc:include type="modules" name="mainbody_center3" style="none" /></div>
<div style="clear: both; width: 100%; height: 1px; margin: 0px;"></div>
<div class="bottom-tab-content"><jdoc:include type="modules" name="mainbody_center3-3" style="none" /></div>
</div>

<div class="tab-content" style="margin-right: 0px ! important;">
<div class="title-tab-content"><a href="/catalog/sredstva-i-sistemy-bezopasnosti/tekhnicheskie-sredstva-zashchity-informatsii">Защита информации</a></div>
<div style=""><jdoc:include type="modules" name="mainbody_center4" style="none" /></div>
<div style="clear: both; width: 100%; height: 1px; margin: 0px;"></div>
<div class="bottom-tab-content"><jdoc:include type="modules" name="mainbody_center4-4" style="none" /></div>
</div>			
				</div>
<div style="clear: both; width: 100%; height: 1px; margin: 0px;"></div>
            <?php endif; ?>







            <?php
            $positionArr = ['mobile_left', 'product', 'cart', 'checkout',];
            $style = ( $this->countModules( implode(' or ' , $positionArr ))?'style="width: 73.6%; float: left;"':null ) ;
            ?>
            <div id="elektro_center">
                <div class="center"  <?= $style ?> >
                    <?php
                    
                    if( $this->countModules('elektro-topquote  or position-15') ) :


                        ?>

                        <jdoc:include type="modules" name="position-15" style="none"/>

                    <?php
                    endif; ?>
                    <jdoc:include type="message"/>
                    <jdoc:include type="component"/>
                    <hr/>
                    <div style="clear: both;  height: 1px; margin: 0px;"></div>
                </div>


				<?php if($this->countModules('elektro-bottomleft') or $this->countModules('position-11')) : ?>
			 	<div class="span-7 colborder">
					<jdoc:include type="modules" name="elektro-bottomleft" style="bottommodule" />
					<jdoc:include type="modules" name="position-11" style="bottommodule" />
                <div style="clear: both;  height: 1px; margin: 0px;"></div>
	        	</div>
	        <?php endif; ?>
            <div style="clear: both;  height: 1px; margin: 0px;"></div>
			<?php if($this->countModules('elektro-center_bottom_m') or $this->countModules('elektro-center_bottom_m1')
				or $this->countModules('elektro-center_bottom_m2') or $this->countModules('elektro-center_bottom_m3')) : ?>
				<div class="elektro-center_bottom_m_old">
	        		<div class="elektro-center_bottom_m" <?php if($this->countModules('elektro-center_bottom_m1') ) : ?>style="width:60%;"<?php endif; ?> ><jdoc:include type="modules" name="elektro-center_bottom_m"  style="xhtml" /></div>
					<div class="elektro-center_bottom_m1"><jdoc:include type="modules" name="elektro-center_bottom_m1"  style="xhtml" /></div>
					<div class="elektro-center_bottom_m2"><jdoc:include type="modules" name="elektro-center_bottom_m2"  style="xhtml" /></div>
					<div class="elektro-center_bottom_m3"><jdoc:include type="modules" name="elektro-center_bottom_m3"  style="xhtml" /></div>
                <div style="clear: both;  height: 1px; margin: 0px;"></div>
				</div>
			<?php endif; ?>
	        <?php if($this->countModules('elektro-bottommiddle') or $this->countModules('position-9')
				or $this->countModules('position-10')) : ?>
				<div class="span-7 last">
	        		<jdoc:include type="modules" name="elektro-bottommiddle"  style="xhtml" />
					<jdoc:include type="modules" name="position-9"  style="xhtml" />
					<jdoc:include type="modules" name="position-10"  style="xhtml" />

				</div>
			<?php endif; ?>
			<?php if($this->countModules('elektro-sidebar') || $this->countModules('position-7')
			|| $this->countModules('position-4') || $this->countModules('position-5')
			|| $this->countModules('position-3') || $this->countModules('position-6') || $this->countModules('position-8'))
			: ?>
				<div class="right">
					<jdoc:include type="modules" name="elektro-sidebar" style="sidebar" />
					<jdoc:include type="modules" name="position-7" style="sidebar" />
					<jdoc:include type="modules" name="position-4" style="sidebar" />
					<jdoc:include type="modules" name="position-5" style="sidebar" />
					<jdoc:include type="modules" name="position-6" style="sidebar" />
					<jdoc:include type="modules" name="position-8" style="sidebar" />
					<jdoc:include type="modules" name="position-3" style="sidebar" />
				</div>
             <div style="clear: both;  height: 1px; margin: 0px;"></div>
			<?php endif; ?>		 
			<?php if($this->countModules('breadcrumbs') ) { ?>
				<div class="breadcrumbs">
	  	 			<jdoc:include type="modules" name="breadcrumbs" style="none" />
				</div>
				<div style="clear: both;  height: 1px; margin: 0px;"></div>
			 <?php }?>
        </div>
			
			<div style="clear: both;  height: 1px; margin: 0px;"></div>
			
			<div class="joomla-footer">
				<?php if($this->countModules('elektro-footer') or $this->countModules('elektro-footer1') or $this->countModules('elektro-footer2')
				or $this->countModules('elektro-footer3')) : ?>
				<div class="elektro-footer-box">
				    <div class="elektro-footer"><jdoc:include type="modules" name="elektro-footer" style="elektro-footer" /></div>
	        		<div class="elektro-footer1"><jdoc:include type="modules" name="elektro-footer1" style="elektro-footer" /></div>
					<div class="elektro-footer2"><jdoc:include type="modules" name="elektro-footer2" style="elektro-footer" /></div>
					<div class="elektro-footer3"><jdoc:include type="modules" name="elektro-footer3" style="elektro-footer" /></div>
					 <div style="clear: both;  height: 1px; margin: 0px;"></div>
				</div>
				<div style="clear: both;  height: 1px; margin: 0px;"></div>	
			<?php endif; ?>
			
			</div>


		</div>
	<div style="clear: both;  height: 1px; margin: 0px;"></div>	
<div id="elektro_bottom">
	<div style="clear: both;  height: 1px; margin: 0px;"></div>
	      <div style="padding: 0px 0px 40px;">
		         <jdoc:include type="modules" name="footer_phone_m" style="<?php echo $this->module_styles['footer_phone_m']; ?>" />
		  </div>
		  <div style="clear: both;  height: 1px; margin: 0px;"></div>
		      <div id="footer_fixet">
            <div  id="footer_fixet2"><a style="color:#ccc;  text-decoration:none;" href="?device=desktop" data-ajax="false" rel="nofollow">полная версия сайта</a></div>	
			</div>	
            	 </div>				 
<div class="sticky-container">
<div class="sticky-container-top">
<div class="sticky-container-left">
<?php if($this->countModules('elektro-stiky') ) : ?>
				<div class="elektro-stiky-top">
	  	 			<jdoc:include type="modules" name="elektro-stiky" style="elektro-stiky" />
				</div>
			<?php endif; ?>
</div>
<div class="sticky-container-left">
<?php if($this->countModules('elektro-stiky1') ) : ?>
				<div class="elektro-stiky-top">
	  	 			<jdoc:include type="modules" name="elektro-stiky1" style="none" />
				</div>
			<?php endif; ?>
</div>
<div class="sticky-container-left">
<?php if($this->countModules('elektro-stiky2') ) : ?>
				<div class="elektro-stiky-top">
	  	 			<jdoc:include type="modules" name="elektro-stiky2" style="none" />
				</div>
			<?php endif; ?>
</div>
<div class="sticky-container-left">
<?php if($this->countModules('elektro-stiky3') ) : ?>
				<div class="elektro-stiky-top">
	  	 			<jdoc:include type="modules" name="elektro-stiky3" style="none" />
				</div>
			<?php endif; ?>
</div>
<div class="sticky-container-left">
<?php if($this->countModules('elektro-stiky4') ) : ?>
				<div class="elektro-stiky-top">
	  	 			<jdoc:include type="modules" name="elektro-stiky4" style="none" />
				</div>
			<?php endif; ?>
</div>
</div>
<div class="sticky-container-bottom">
<div class="sticky-container-left">
Главная
</div>
<div class="sticky-container-left">
Корзина
</div>
<div class="sticky-container-left">
Избранное
</div>
<div class="sticky-container-left" style="display:none;">
Сравнение
</div>
<div class="sticky-container-left">
Кабинет
</div>
</div>	
</div>
</div>	

		
<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter23630017 = new Ya.Metrika({
                    id:23630017,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true,
                    ecommerce:"dataLayer"
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/23630017" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
</div>
</html>