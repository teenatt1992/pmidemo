( function( $ ) {
$( document ).ready(function() {
$('#cssmenu > ul > li > a').click(function() {
  $('#cssmenu li').removeClass('active');
  $(this).closest('li').addClass('active');	
  var checkElement = $(this).next();
  if((checkElement.is('ul')) && (checkElement.is(':visible'))) {
    $(this).closest('li').removeClass('active');
    checkElement.slideUp('normal');
  }
  if((checkElement.is('ul')) && (!checkElement.is(':visible'))) {
    $('#cssmenu ul ul:visible').slideUp('normal');
    checkElement.slideDown('normal');
  }
  if($(this).closest('li').find('ul').children().length == 0) {
    return true;
  } else {
    return false;	
  }		
});
});
} )( jQuery );


(function ($, Drupal, window, document, undefined) {
Drupal.behaviors.mainMenuToggle = {
    attach: function(context, settings) {           
                     //Toggle menu for mobile devices
  $('.region-menu .navigation').before('<a href="#" class="menu-toggle" title="Toggle Menu"><span class="line"></span><span class="line"></span><span class="line"></span></a>');
       
      $('.region-menu .menu-toggle').click(function(){
        $('#menu-navigation').slideToggle();
      });
      var menuid = "#region-menu";                       
             //Simple hide/show event for the dropdown menus
             $(menuid+' li').hover(
                 function(){
                 $('ul:first', $(this)).show();
                 },
                 function(){
                 $('ul', $(this)).slideUp();
                 }
              );      
    }
     
     
  };
 
})(jQuery, Drupal, this, this.document);
