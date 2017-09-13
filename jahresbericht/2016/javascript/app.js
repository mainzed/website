var is_iPad = navigator.userAgent.match(/iPad/i) != null

// global var
var isMobile = false

// init hyphenator
Hyphenator.run()

$(document).ready(function() {
  // initialize lazyload: converts data-original attribute to src for images as
  // soon as they are visible in the viewport
  $(function() {
    $("img").lazyload({
      threshold : 200,
      effect : "fadeIn"
    })
  })

  // initScroller()
  $("#read").addClass("readnoshift")
  checkBrowserWidth()

  // animate overlay
  var isAtTop = $(window).scrollTop() == 0
  if (isAtTop) {
    isMobile ? $("#ressources").addClass("startanimationm")
      : $("#ressources").addClass("startanimation")
  } else {
    minimizeSidebar()
  }

  // Ipad Horizontal Background Click Fix
  if(is_iPad) $("*").css("cursor", "pointer")

  // define div#scrollmarker as waypoint on top of the page
  // remove default sidebar, but keeps TOC open if user has opened it already
  $('#scrollmarker').waypoint({
    handler: function (scrollDirection) {
      var hasActiveSidebar = $("#ressources").hasClass("showdefinitions")
      if (scrollDirection === 'down' && !hasActiveSidebar) {
        minimizeSidebar() // remove default sidebar
      } else if (scrollDirection === 'up') {
        showOverlay()
      }
    }
  })

  // Tooltip
  if (!isMobile && !is_iPad) {
    $('img').hover(function(e){
      var text = $(this).next().next().html()
      $('<div class="tooltip"></div>').html(text).appendTo('body')
    }, function() {
      $('.tooltip').remove()
    }).mousemove(function(e) {
      var mouseX = e.pageX + 20
      var mouseY = e.pageY + 10
      $('.tooltip').css({ top: mouseY, left: mouseX })
    })
  }

}) //close ready

$(window).resize(function() {
  checkBrowserWidth()
  resetLayout()
})

$("a:not(.external-link)").click(function (event) {
  animateScroll(event)
})

$("#ressources").click(function(e) {
  e.stopPropagation()
})

$(document).click(function() {
  minimizeSidebar()
})

$('body, #closeicon').click(function() {
  minimizeSidebar()
})

$("#nav a").click(function(){
  if (isMobile) minimizeSidebar()
})

$('#navicon').click(function(e){
  showTableOfContent()
  e.stopPropagation()
})


// Infobox
$('.shortcut').click(function(e){
  showGlossar($(this))
  e.stopPropagation()
})


$('.picture').click(function(e){
  zoomPicture($(this))
  e.stopPropagation()
})

// exceptions
$( "h1" ).each( function() {
  if ($(this).next().is('p')) $(this).addClass("h1ex")
})

function checkBrowserWidth() {
  var browserwidth = $(document).width()
  isMobile = browserwidth < 801
}

function resetLayout() {
  var currentclass = $("#ressources").attr("class")
  var hasMobileContent = currentclass.slice(-1) === "m"
  if (isMobile) {
    if (!hasMobileContent && currentclass != "showtableofcontent"){
      currentclass = currentclass + "m"
      $("#ressources").removeClass()
      $("#ressources").addClass(currentclass)
    }
    $("#read").removeClass("shiftread")
  }
  else {
    if (hasMobileContent || currentclass == "showtableofcontent"){
      if (currentclass == "showtableofcontent"){
          $("#ressources").removeClass()
          $("#ressources").addClass("showdefinitions")
          $("#read").addClass("shiftread")
      } else {
          currentclass = currentclass.substring(0, currentclass.length - 1)
          $("#ressources").removeClass()
          $("#ressources").addClass(currentclass)
      }
    }
  }
}

function showOverlay(){
  minimizeSidebar()
  if (isMobile) {
    $("#ressources").addClass("startanimationm")
  } else {
    $("#ressources").addClass("startanimation")
  }
  $("#titletextbg").show()
}

function minimizeSidebar() {
  // remove classes
  $("#ressources").removeClass()
  $("#navicon").removeClass()
  $("#closeicon").removeClass()
  $(".activeressource").removeClass("activeressource")
  $(".shiftread").removeClass("shiftread")
  $("#read").addClass("readnoshift")

  // clear content
  $("#ressourcestext").text("")
  $("#ressources img").remove()
  $(".figcaption").remove()
  $("#ressources .picture-metadata").remove()
  $("#titletextbg").hide()
  $("#imagecontainer").hide()
  $("#gradient").hide()

  // hide navigation elements
  $("#nav").hide()
  $("#closeicon").hide()

  if (isMobile) {
    $("#ressources").addClass("minifiedm")
  } else {
    $("#ressources").addClass("minified")
  }
  $("#navicon").show()
}

function resetRessource(navIcon, nav, closeIcon){
  // remove classes
  $("#ressources").removeClass()
  $("#navicon").removeClass()
  $("#closeicon").removeClass()
  $(".activeressource").removeClass("activeressource")
  $("#titletextbg").hide()
  $("#imagecontainer").hide()

  // clear content
  $("#ressourcestext").text("")
  $("#ressources img").remove()
  $(".figcaption").remove()
  $("#ressources .picture-metadata").remove()
  $("#gradient").hide()

  // nav elements
  navIcon ? $("#navicon").show() : $("#navicon").hide()
  nav ? $("#nav").show() : $("#nav").hide()
  closeIcon ? $("#closeicon").show() : $("#closeicon").hide()
}

function showTableOfContent() {
  resetRessource(false, true, true)
  if (isMobile) {
    $("#ressources").addClass("showtableofcontent")
    $("#gradient").show()
  } else {
    $("#ressources").addClass("showdefinitions")
    $("#read").removeClass("readnoshift")
    $("#read").addClass("shiftread")
  }

  // set active layer
  $(".activeressource").removeClass("activeressource")
  $("#nav").addClass("activeressource")

  if ($(".active").length > 0) {
    $('#nav').scrollTop(0)
    $('#nav').scrollTop($(".active").offset().top - $("#nav").offset().top - 100)
  } else {
    $('#nav').scrollTop(0)
  }
}

function showGlossar(clickedword){

  resetRessource(false, false, true)
  var scrollTop = $(window).scrollTop(),
  elementOffset = clickedword.offset().top,
  distance      = (elementOffset - scrollTop)
  overlay       =  300
  scrollback    =  overlay - distance
  if (distance < overlay && isMobile == true){
        $('html,body').animate({
          scrollTop: $(window).scrollTop() - scrollback
      })
  }
  // find tooltip text
  var identifier = clickedword.attr('id')
  $("." + identifier).clone().appendTo("#ressourcestext")


  if (isMobile) {
      $("#ressources").addClass("showdefinitionsm")
      $("#gradient").show()
  }
  else {
      $("#ressources").addClass("showdefinitions")
      $("#read").removeClass("readnoshift")
      $("#read").addClass("shiftread")
  }

  // set active layer
  $(".activeressource").removeClass("activeressource")
  $("#ressourcestext").addClass("activeressource")

  if (isMobile==false){
      $("#navicon").show()
  } else {
      $("#navicon").hide()
  }
}

function zoomPicture(clickedpicture){
  if (!isMobile) {
    resetRessource(true, false, true)
    var source = clickedpicture.attr('src')

    var figcaption = $('<p class="figcaption">' + clickedpicture.next().next().html() + '</p>')
    // console.log(figcaption)
    //var zoomedpicture = $("<img src='" + source + "' />")
    //zoomedpicture.appendTo("#ressources")
    figcaption.appendTo("#ressources")
    $("#imagecontainer").css("background", "url(" + source + ") black")
    $("#imagecontainer").show()

    if (isMobile) {
        $("#ressources").addClass("showpicturesm")
    } else {
        $("#ressources").addClass("showpictures")
    }

    $("#navicon").addClass("white")
    $("#closeicon").addClass("white")

  } else {
    minimizeSidebar()
  }
}

function animateScroll(event) {
  event.preventDefault()

  var hash = $(event.target.hash)
  var closeToTop = $(window).scrollTop() - hash.offset().top < 1000

  var scrollspeed = 1200
  if (closeToTop) scrollspeed = 600

  $('html, body').animate({
    scrollTop: hash.offset().top
  }, scrollspeed)

  // windows phone
  setTimeout(function() {
    window.scrollTo(0, hash.offset().top)
  }, scrollspeed + 80)
}
