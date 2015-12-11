/**
 * @file
 * A JavaScript file for the theme.
 */
 
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







(function ($, Drupal, window, document, undefined) {
//Configure colorbox call back to resize with custom dimensions
  $.colorbox.settings.onLoad = function() {
    colorboxResize();
  }
  
  //Customize colorbox dimensions
  var colorboxResize = function(resize) {
    var width = "90%";
    var height = "90%";
   
    if($(window).width() > 960) { width = "860" }
    if($(window).height() > 700) { height = "630" }
  
    $.colorbox.settings.height = height;
    $.colorbox.settings.width = width;
   
    //if window is resized while lightbox open
    if(resize) {
      $.colorbox.resize({
        'height': height,
        'width': width
      });
    }
  }
 
  //In case of window being resized
  $(window).resize(function() {
    colorboxResize(true);
  });

})(jQuery, Drupal, this, this.document);
