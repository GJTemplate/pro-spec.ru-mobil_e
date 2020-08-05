<?php
/**
 * @package     ${NAMESPACE}
 * @subpackage
 *
 * @copyright   A copyright
 * @license     A "Slug" license name e.g. GPL2
 */

defined('_JEXEC') or die();
extract( $displayData );







\GNZ11\Document\Document::addIncludeStyleDeclaration(
        JPATH_THEMES.'/mobil_e/assets/css/product/critical.oferta_top.css',
        [
            'debug' => $template->params->get('debug_on' , false ) ,
        ]
) ;






?>
<div class="oferta_top">
    <div class="offerta">
        <button class="l-get-form-btn"
                data-form_type="GetDiscount"
                data-template="create_offer"> Создать оферту ЕАИСТ
        </button>
    </div>
    <div class="offerta1">
        <button class="l-get-form-btn"
                data-form_type="GetDiscount"
                data-template="to_tender">Пригласить на ТЕНДЕР
        </button>
    </div>
    <div class="offerta2">
        <button class="l-get-form-btn"
                data-form_type="GetDiscount"
                data-template="commercial_proposal">Запросить КП
        </button>
    </div>
    <div class="offerta4">
        <input type="submit" class="button wishlist" value="В список пожеланий"
               onclick="jQuery('#to').val('wishlist');">
    </div>
</div>
