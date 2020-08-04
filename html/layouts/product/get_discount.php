<?php
/**
 * @package     ${NAMESPACE}
 * @subpackage
 *
 * @copyright   A copyright
 * @license     A "Slug" license name e.g. GPL2
 */



?>
<!-- OLD HTML :
<div style="" abbr="" class="jcetooltip" title="Заполните форму заявки и наши менеджеры свяжутся с вами.">
    <input type="button" class="b1c" value="Нашли дешевле? Снизим цену!">
</div>
-->

<div style="" abbr class="l-get-discount">
    <span class="l-get-discount-btn"></span>
</div>
<script>
    setTimeout(function (){
        var $ = jQuery ;
        var Host ;
        var __params;
        var El ;
        $('.l-get-discount-btn').on('click' , function (){
            __params = Joomla.getOptions( 'quickorder' , {} );
            El = this ;
            Host = wgnz11.Options.Ajax.siteUrl ;
            wgnz11.load.js(
                Host+'plugins/jshoppingproducts/quickorder/assets/js/forms.driver.js?'+__params.version )
                .then(function (a) {
                    new window.ProductFormsDriver( El )
                });
        })
    },2000);
</script>




