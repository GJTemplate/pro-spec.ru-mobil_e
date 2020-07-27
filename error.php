<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="ru"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="ru"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="ru"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="ru"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<title>Страница ошибки 404</title>
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="viewport" content="width=device-width">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="stylesheet" href="/templates/mobil_e/style.css">
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	    <!--[if lt IE 9]>
        <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
    <![endif]-->
</head>
<body>
<div class="comingcontainer">
    <div class="checkbacksoon">
		<p>
			<span class="go3d">4</span>
			<span class="go3d">0</span>
			<span class="go3d">4</span>
			<span class="go3d">!</span>
			
		</p>
        <div style="margin: 20px auto; font-size: 12px; width: 600px; text-align: center; padding: 10px 0px 0px; color: red;"><img style="box-shadow: 0px 0px 2px rgb(104, 104, 104), 0px 1px 1px rgb(221, 221, 221), 0px 2px 1px rgb(214, 214, 214), 0px 3px 1px rgb(204, 204, 204), 0px 4px 1px rgb(197, 197, 197), 0px 5px 1px rgb(193, 193, 193), 0px 6px 1px rgb(187, 187, 187), 0px 7px 1px rgb(119, 119, 119), 0px 8px 3px rgba(100, 100, 100, 0.4), 0px 9px 5px rgba(100, 100, 100, 0.1), 0px 10px 7px rgba(100, 100, 100, 0.15), 0px 11px 9px rgba(100, 100, 100, 0.2), 0px 12px 11px rgba(100, 100, 100, 0.25), 0px 13px 15px rgba(100, 100, 100, 0.3); height: 100px; padding: 10px 20px; border-radius: 60px; transition: all 0.1s linear 0s;" src="/test/images/logo.png" alt=""></div>
		
        <p class="error">
		Похоже, вы выбрали неправильный путь.<br> Не волнуйтесь, время от времени, это случается с каждым из нас.<br>
        Поисковая форма и ссылки ниже, помогут вам встать на путь истинный.</p>
		<div class="search">
  <?php 
		$document   = & JFactory::getDocument();
		$renderer   = $document->loadRenderer('modules');
        $options    = array('style' => 'xhtml');
        $position   = 'elektro-search';
        echo $renderer->render($position, $options, null);
        ?>
</div>
<div style="margin: 20px auto; font-size: 12px; width: 600px; text-align: center; padding: 10px 0px 0px; color: red;">Введите название товара который Вас интересует в стороку поиска и нажмите кнопку '"Enter"'</div>
        <nav>
            <ul>
                <li><a href="/">Главная</a></li>
                <li><a href="http://pro-spec.ru/catalog.html">Каталог</a></li>
				<li><a href="http://pro-spec.ru/company.html">О компании</a></li>
                <li><a href="http://pro-spec.ru/contact.html">Контакты</a></li>
                
            </ul>	
        </nav>
    
	</div>
</div>
		<!-- Yandex.Metrika counter -->
<script type="text/javascript">
(function (d, w, c) {
    (w[c] = w[c] || []).push(function() {
        try {
            w.yaCounter23630017 = new Ya.Metrika({id:23630017,
                    webvisor:true,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true});
        } catch(e) { }
    });

    var n = d.getElementsByTagName("script")[0],
        s = d.createElement("script"),
        f = function () { n.parentNode.insertBefore(s, n); };
    s.type = "text/javascript";
    s.async = true;
    s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js";

    if (w.opera == "[object Opera]") {
        d.addEventListener("DOMContentLoaded", f, false);
    } else { f(); }
})(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="//mc.yandex.ru/watch/23630017" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
</body>
</html>