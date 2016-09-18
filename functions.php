<?php function add_this_script_footer(){ ?>
<script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js'></script>
<script type='text/javascript' src='http://bcgm3.com/wp-content/themes/benmiles/js/footer.js'></script>
<?php }
add_action('wp_footer', 'add_this_script_footer', 99); ?>
