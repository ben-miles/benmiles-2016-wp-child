<?php

function add_this_script_footer() {

  // Change relative path according to current address
  $count = count( explode( "/", $_SERVER['REQUEST_URI'] ) );

  if( $count <= 2 ) {
    // Home
    $pathToCustomJS = "wp-content/themes/benmiles/js/footer.js";
  } elseif( $count == 3 ) {
    // One subdirectory
    $pathToCustomJS = "../wp-content/themes/benmiles/js/footer.js";
  } else {
    // Two+ Subdirectories
    $pathToCustomJS = "../../wp-content/themes/benmiles/js/footer.js";
  }

  echo "<script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js'></script>";
  echo "<script type='text/javascript' src='$pathToCustomJS'></script>";
}

add_action('wp_footer', 'add_this_script_footer', 99);

?>
