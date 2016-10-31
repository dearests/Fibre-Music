     (function() {

         var bodyEl = $('body'),
             navToggleBtn = bodyEl.find('.nav-toggle-btn');

         navToggleBtn.on('click', function(e) {
             bodyEl.toggleClass('active-nav');
             e.preventDefault();
         });

     })();



$('.js--nav-icon').click(function() {
    var nav = $('.main-nav');
    var icon = $('.js--nav-icon i');

    nav.slideToggle(200);
    if (icon.hasClass('ion-navicon-round')) {
        icon.addClass('ion-close-round');
        icon.removeClass('ion-navicon-round');
    } else {
        icon.addClass('ion-navicon-round');
        icon.removeClass('ion-close-round');
    }
});



var map = new GMaps({
  div: '.map',
  lat: 6.511500,
  lng: 3.315,
  zoop: 500
});


map.addMarker({
  lat: 6.511500,
  lng: 3.300766,
  title: 'Fibre Music',
  infoWindow: {
  content: '<p>Fibre Music</p>'
}
});




