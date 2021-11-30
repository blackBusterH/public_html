// Navigation
// Init responsive nav
var customToggle = document.getElementById( 'nav-toggle' );
var navigation = responsiveNav(".nav-collapse", {
  customToggle: "#nav-toggle", // Selector: Specify the ID of a custom toggle
  enableFocus: true,
  enableDropdown: true,
  openDropdown: '<span class="screen-reader-text">Open sub menu</span>',
  closeDropdown: '<span class="screen-reader-text">Close sub menu</span>',
      open: function () {
          customToggle.innerHTML = '<i class="fa-solid fa-bars-staggered"></i>';
      },
      close: function () {
          customToggle.innerHTML = '<i class="fa-solid fa-bars-staggered"></i>';
      },
      resizeMobile: function () {
          customToggle.setAttribute( 'aria-controls', 'nav' );
      },
      resizeDesktop: function () {
          customToggle.removeAttribute( 'aria-controls' );
      },
  });


(function ($) {
	"use strict";

    jQuery(document).ready(function($){


        $(".embed-responsive iframe").addClass("embed-responsive-item");
        $(".carousel-inner .item:first-child").addClass("active");


    }); // end 


    jQuery(window).load(function(){

        jQuery(".industry-slide-preloader, .preloader-circle-wrapper").fadeOut(500);
        jQuery(".preloader, .spinner").delay(500).fadeOut(500);

    }); // end


}(jQuery));	