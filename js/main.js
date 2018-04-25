console.log('js connected');

jQuery(document).ready(function($) {

   // gallery
    $('.gallery').magnificPopup({
    delegate: 'a',
    type: 'image',
    gallery:{
         enabled:true
      },
  });
  
  // accordion
  var icons = {
    header: "ui-icon-triangle-1-e",
    activeHeader: "ui-icon-triangle-1-s"
  };
  $("#accordion").accordion({
    icons: icons,
    animate: 200
  });



});