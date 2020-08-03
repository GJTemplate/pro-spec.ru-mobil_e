<?php
/**
 * @package     ${NAMESPACE}
 * @subpackage
 *
 * @copyright   A copyright
 * @license     A "Slug" license name e.g. GPL2
 */

$doc = \Joomla\CMS\Factory::getDocument();
$html = '<link rel="preload" as="image" href="' . JURI::root() . 'images/logo.png?' . TEMPLATE_VERSION . '">' ;
$doc->addCustomTag($html) ;

?>
<div id="elektro_logo">
    <a href="">
<!--        <div>-->
            <span style="width: 242px; height: 85px; margin: 10px 0px;">
                <img alt="" src="images/logo.png"
                    style="margin: 10px 0px; width: 200px; height: 70px;"/>
            </span>
<!--        </div>-->

    </a>
</div>
