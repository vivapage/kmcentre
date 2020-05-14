$(document).ready(function () {
  $(".slider-services").bxSlider({
    pagerCustom: ".slider-nav",
    infiniteLoop: true,
    hideControlOnEnd: true,
    controls: false,
    auto: true,
  });
});

$(document).ready(function () {
  var slider = $(".testimonials__slider").bxSlider({
    mode: "fade",
    controls: false,
    pager: false,
    auto: true,
  });

  $(".tm-next").click(function () {
    slider.goToNextSlide();
    return false;
  });

  $(".tm-prev").click(function () {
    slider.goToPrevSlide();
    return false;
  });
});
