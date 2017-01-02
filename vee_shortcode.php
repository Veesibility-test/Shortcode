<?php
/************* SHORTCODE *********************/

// Add a current Year
function vee_currentYear( $atts ){    
  return date('Y');
  }

add_shortcode( 'year', 'vee_currentYear' );
