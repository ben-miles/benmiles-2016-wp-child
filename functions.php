<?php

function add_this_script_footer() {
  echo "<script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js'></script>";
  echo "<script type='text/javascript' src='/wp-content/themes/benmiles/js/footer.js'></script>";
}

add_action('wp_footer', 'add_this_script_footer', 99);

?>
