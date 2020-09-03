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
        <img alt="" src="images/logo.png"/>
    </a>
</div>
