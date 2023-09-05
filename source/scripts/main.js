// import 'select2';
// import 'magnific-popup';

import hamburderMenu from "./libs/hamburger_menu.js";
import formFunctions from "./libs/form_functions.js";
import additionalFunctions from "./libs/additional_functions.js";
import plugindParameters from "./libs/plugin_parameters.js";
//import treeMenu from './libs/tree_menu.js';

// import $ from 'jquery';
// window.jQuery = $;
// window.$ = $;

$(window).on("load", function () {
  //formFunctions();
  //additionalFunctions();
  plugindParameters();
  hamburderMenu();
  console.log("ready");
  // Read More
  let showChar = 240; // How many characters are shown by default
  let ellipsestext = "...";
  let moretext = "Read more...";
  let lesstext = "See less";
  $(".more").each(function () {
    let content = $(this).html();
    if ($(this).hasClass("more_big")) {
      showChar = 200;
    } else {
      showChar = 240;
    }
    if (content.length > showChar) {
      let c = content.substr(0, showChar);
      let h = content.substr(showChar, content.length - showChar);

      let html =
        c +
        '<span class="moreellipses">' +
        ellipsestext +
        '&nbsp;</span><span class="morecontent"><span>' +
        h +
        '</span>&nbsp;&nbsp;<a href="" class="morelink">' +
        moretext +
        "</a></span>";

      $(this).html(html);
    }
  });
  $(".morelink").on("click", function () {
    if ($(this).hasClass("less")) {
      $(this).removeClass("less");
      $(this).html(moretext);
    } else {
      $(this).addClass("less");
      $(this).html(lesstext);
    }
    $(this).parent().prev().toggle();
    $(this).prev().toggle();
    return false;
  });

  let minHeight = 0;
  const priceItems = document.querySelectorAll(
    ".prices .prices_list .price_item .price_includes div"
  );
  priceItems.forEach(function (priceItem) {
    if (priceItem.offsetHeight > minHeight) {
      minHeight = priceItem.offsetHeight;
    }
    priceItem.style.minHeight = `${minHeight}px`;
  });
  priceItems.forEach(function (priceItem) {
    priceItem.style.minHeight = `${minHeight}px`;
  });
});
