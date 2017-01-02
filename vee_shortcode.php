<?php
/**
* Plugin Name:      Custom Shortcode
* Version:          1
* Description:      Custom Shortcode
* Author:           Veesibility
* GitHub Plugin URI: https://github.com/Veesibility-test/shortcode
      
      
         */
/************* SHORTCODE *********************/

// Add a current Year
function vee_currentYear( $atts ){    
  return date('Y');
  }

add_shortcode( 'vee_year', 'vee_currentYear' );
