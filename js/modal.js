jQuery(document).ready(function(){

  var elements = jQuery('.comp-modal-overlay, .comp-modal');

  jQuery('.comp-modal-button').click(function(){
      elements.addClass('active');
  });

  jQuery('.comp-close-modal').click(function(){
      elements.removeClass('active');
  });

});
