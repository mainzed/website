'use strict'

var isMobile = false
var flyoutOpen = false

// init hyphenator
Hyphenator.run()

// shortcuts
var $mainzedIcon = $('#overline span')
var $hamburgerIcon = $('#mobilenavswitch')

// determine if mobile
setDeviceSize()

scrollHighlighting()

// configure waypoint plugin
$('#langswitch').waypoint({
  handler: function (direction) {
    direction === 'down' ? $mainzedIcon.show() : $mainzedIcon.hide()
  }
})

$hamburgerIcon.click(function () {
  flyoutOpen ? hideflyout() : showflyout()
})

$('#nav a').click(function (event) {
  animateScroll(event)
  if (flyoutOpen) hideflyout()
})

$(window).resize(function () {
  setDeviceSize()
  if (isMobile) {
    $('#nav').hide()
  } else {
    $('#nav').show()
    if (flyoutOpen && isTop()) $mainzedIcon.hide()
  }
})

function hideflyout () {
  $('#nav').hide()
  $('#overline').removeClass('flyout')
  $('body').removeClass('noscroll')
  $('.line').show()
  $('.close').hide()
  if ($(window).scrollTop() < 278) $('#overline span').hide() // mainzed icon
  flyoutOpen = false
}

function showflyout () {
  $('#nav').show()
  $('#overline').addClass('flyout')
  $('.line').hide()
  $('.close').show()
  $('#overline span').show() // mainzed icon
  $('body').addClass('noscroll')
  flyoutOpen = true
}

function setDeviceSize () {
  isMobile = $(window).width() < 800 || isPortrait()
}

function isPortrait () {
  var $window = $(window)
  return $window.width() < $window.height()
}

function isTop () {
  return $(window).scrollTop() < 278
}

function scrollHighlighting () {
  var references = $('#nav').find('a')
  var sections = references.map(function (index, ref) {
    var sectionID = $(ref).attr('href')
    var section = $(sectionID)
    if (section.length) return section
  })

  $(window).scroll(function () {
    var currentScrollPosition = $(window).scrollTop() + 100
    var sectionsOverCurrentScrollPosition = sections.map(function (index, section) {
      var currentSectionPosition = $(section).offset().top
      var isAbove = currentSectionPosition < currentScrollPosition
      if (isAbove) return section
    })
    var currentElementID = sectionsOverCurrentScrollPosition.last()[0].attr('id') || ''
    references.parent().removeClass('current')
    references.filter('[href="#' + currentElementID + '"]').parent().addClass('current')
  })
}

function animateScroll(event) {
  event.preventDefault()

  var hash = $(event.target.hash)
  var isNearby = $(window).scrollTop() - hash.offset().top < 1000

  var speed = 1200
  if (isNearby) speed = 600

  $('html, body').animate({
    scrollTop: hash.offset().top
  }, speed)

  // windows phone
  setTimeout(function() {
    window.scrollTo(0, hash.offset().top)
  }, speed + 80)
}
