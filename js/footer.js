jQuery( "#menu-social-1 li" ).mouseenter(function() {
  jQuery(this).siblings().css( "opacity", "0.3" );
}).mouseleave(function() {
  jQuery(this).siblings().css( "opacity", "1" );
});

jQuery( "#menu-social-1 .fa-facebook" ).mouseenter(function() {
  jQuery( "#gk-footer" ).animate({
		backgroundColor: "#3B5998"
  }, 500 );
});

jQuery( "#menu-social-1 .fa-twitter" ).mouseenter(function() {
  jQuery( "#gk-footer" ).animate({
		backgroundColor: "#0084B4"
  }, 500 );
});

jQuery( "#menu-social-1 .fa-codepen" ).mouseenter(function() {
  jQuery( "#gk-footer" ).animate({
		backgroundColor: "#191919"
  }, 500 );
});

jQuery( "#menu-social-1 .fa-github" ).mouseenter(function() {
  jQuery( "#gk-footer" ).animate({
		backgroundColor: "#6e5494;"
  }, 500 );
});

jQuery( "#menu-social-1" ).mouseleave(function() {
  jQuery( "#gk-footer" ).animate({
		backgroundColor: "#545454"
  }, 500 );
});
