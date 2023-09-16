//Swiper Slider
import Swiper from "swiper/bundle";

export default function plugindParameters() {
  // Selector styling
  $("select.selectori").each(function () {
    var placeholder = $(this).data("placeholder") || "Choose";
    $(this).select2({
      allowClear: true,
      minimumResultsForSearch: -1,
      placeholder: placeholder,
    });
  });
  // Slider
  new Swiper(".feedbacks_slider", {
    slidesPerView: 1,
    autoplay: true,
    pagination: {
      el: ".feedback-pagination",
      clickable: true,
    },
  });
  new Swiper(".areas_slider", {
    slidesPerView: 3,
    spaceBetween: 10,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    loop: false,
    breakpoints: {
      720: {
        slidesPerView: 5,
        spaceBetween: 20,
      },
      1024: {
        slidesPerView: 7,
      },
    },
  });
  // Gallery
  $(".magnific").each(function () {
    $(this).magnificPopup({
      delegate: "a",
      type: "image",
      gallery: {
        enabled: true,
      },
      zoom: {
        enabled: true,
        duration: 300,
      },
    });
  });
  if ($(".magnific_video").length) {
    $(".magnific_video").magnificPopup({
      disableOn: 700,
      type: "iframe",
      mainClass: "mfp-fade",
      removalDelay: 160,
      preloader: false,
      fixedContentPos: false,
    });
  }
}
