<?php
/*
Plugin Name: Cloud Retail Systems A/S - Datablad
Plugin URI: http://cloudretailsystems.dk
Description: Show Datablad button on product page with shortcode: [crs_datablad]. Use ".crs_datablad a{background-color:yellow;}" to change etc. background color
Author: Cloud Retail Systems A/S - Søren Højby
Version: 1.0
Author URI: http://cloudretailsystems.dk
*/

function crs_datablad() {
    global $product;
	$html ="<style>.woocommerce-product-attributes-item--attribute_pa_web_datablad{ display:none; }</style>";
    
    if(!is_null($product)){
		
        if(($product->get_attribute('datablad') !="")){
			$datablad = $product->get_attribute('datablad');
			 $html .= '<div class="crs_datablad" style="display:flex; width:100%; justify-content:space-between;"><a style="width:100%;text-align: center;" href="'.$datablad.'" target="_blank" rel="nofollow">Hent Produktblad</a></div>';
         
		}elseif($product->get_attribute('Datablad') !=""){
			$datablad = $product->get_attribute('Datablad');
			 $html .= '<div class="crs_datablad" style="display:flex; width:100%; justify-content:space-between;"><a style="width:100%;text-align: center;" href="'.$datablad.'" target="_blank" rel="nofollow">Hent Produktblad</a></div>';
         
		}elseif($product->get_attribute('web_datablad') !=""){
			$datablad = $product->get_attribute('web_datablad');
			 $html = '<div class="crs_datablad" style="display:flex; width:100%; justify-content:space-between;"><a style="width:100%;text-align: center;" href="'.$datablad.'" target="_blank" rel="nofollow">Hent Produktblad</a></div>';
         
		}
            

    }
    
return $html;
}

add_shortcode('crs_datablad', 'crs_datablad');
