function car_service_center_mobile_menu_open() {
  jQuery(".side_nav").addClass('show');
}
function car_service_center_mobile_menu_close() {
  jQuery(".side_nav").removeClass('show');
}

jQuery(function($){
  $('.toggle').click(function () {
        car_service_center_Keyboard_loop($('.side_nav'));
    });
});

var car_service_center_Keyboard_loop = function (elem) {
  var car_service_center_tabbable = elem.find('select, input, textarea, button, a').filter(':visible');
  var car_service_center_firstTabbable = car_service_center_tabbable.first();
  var car_service_center_lastTabbable = car_service_center_tabbable.last();
  car_service_center_firstTabbable.focus();

  car_service_center_lastTabbable.on('keydown', function (e) {
    if ((e.which === 9 && !e.shiftKey)) {
      e.preventDefault();
      car_service_center_firstTabbable.focus();
    }
  });

  car_service_center_firstTabbable.on('keydown', function (e) {
    if ((e.which === 9 && e.shiftKey)) {
      e.preventDefault();
      car_service_center_lastTabbable.focus();
    }
  });

  elem.on('keyup', function (e) {
    if (e.keyCode === 27) {
      elem.hide();
    };
  });
};

jQuery('#banner-area .owl-carousel').owlCarousel({
  loop: true,
  margin: 0,
  nav: false,
  dots: false,
  navText: [
    '<i class="fa fa-arrow-left" aria-hidden="true"></i>', // Left arrow
    '<i class="fa fa-arrow-right" aria-hidden="true"></i>' // Right arrow
  ],
  responsive: {
    0: {
      items: 1
    },
    600: {
      items: 1
    },
    1000: {
      items: 1
    }
  }
});