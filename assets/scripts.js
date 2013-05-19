var $container = $('#entryholder');

$container.imagesLoaded( function(){
  $container.masonry({
    itemSelector : '.mainarea_entry',
    isFitWidth: true
  });
});

$("#login").click(function() {
  $('#loginpopup').bPopup({
        speed: 450,
        transition: 'slideDown'
    });
});

$("#register").click(function() {
  $('#regpopup').bPopup({
        speed: 450,
        transition: 'slideDown'
    });
});