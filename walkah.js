Drupal.behaviors.walkah = function(context) {
  $("#search-box").val('search this site');
  $("#search-box").click(function() { $(this).val(''); $(this).removeClass('blur'); });
  $("#search-box").blur(function(){ $(this).val('search this site'); $(this).addClass('blur'); });
}