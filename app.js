"use strict";

var isMobile = false;
var flyoutOpen = false;

// init hyphenator
Hyphenator.run();

$(document).ready(function() {
  console.log('v1.4');

  // shortcuts
  var $window = $(window);
  var $mainzedIcon = $('#overline span');
  var $hamburgerIcon = $("#mobilenavswitch");

  // determine if mobile
  setDeviceSize();

  // configure onePageNav plugin
  $('#nav').onePageNav();

  // configure waypoint plugin
  $('#langswitch').waypoint({
    handler: function(direction) {
      if (direction == 'down') {
        $mainzedIcon.show();  // show mainzed icon on scroll over line
      } else {
        $mainzedIcon.hide();  // hide mained icon when scrolled to top
      }
    }
  });

  $hamburgerIcon.click(function() {
    flyoutOpen ? hideflyout() : showflyout();
  });

  // hide flyout when flyout is open and user clicks on a section within the flyout
  $("#nav a").click(function() {
    if (flyoutOpen) hideflyout();
  });

  $(window).resize(function () {
    setDeviceSize();

    if (isMobile) {
      $("#nav").hide();  // hide tabs
    } else {  // desktop
      $("#nav").show();
      if (flyoutOpen && isTop()) $mainzedIcon.hide();
    }
  });

});

function hideflyout() {
  $("#nav").hide();
  $("#overline").removeClass("flyout");
  $('body').removeClass("noscroll");
  $(".line").show();
  $(".close").hide();
  if ($(window).scrollTop() < 278) $("#overline span").hide();  // mainzed icon
  flyoutOpen = false;
}

function showflyout() {
  $("#nav").show();
  $("#overline").addClass("flyout");
  $(".line").hide();
  $(".close").show();
  $("#overline span").show();  // mainzed icon
  $('body').addClass("noscroll");
  flyoutOpen = true;
}

function isPortrait($window) {
  return $window.width() < $window.height();
}

function isTop() {
  return $(window).scrollTop() < 278;
}

function setDeviceSize() {
  var $window = $(window);
  if ($window.width() < 800 || isPortrait($window)) {
    isMobile = true;
  } else {
    isMobile = false;
  }
}
