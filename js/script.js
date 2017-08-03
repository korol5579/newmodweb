(function($) { //Замыкание, чтобы не было конфликтов между этим кодом и внешним
  "use strict"; // Start of use strict 

  // jQuery for page scrolling feature - requires jQuery Easing plugin
  $(document).on('click', 'a.page-scroll', function(event) {
    var $anchor = $(this);
    $('html, body').stop().animate({
      scrollTop: ($($anchor.attr('href')).offset().top - 50)
    }, 1250, 'easeInOutExpo');
    event.preventDefault();
  });

  // Highlight the top nav as scrolling occurs
  $('body').scrollspy({
    target: '.navbar-fixed-top',
    offset: 51
  });

  // Closes the Responsive Menu on Menu Item Click
  $('.navbar-collapse ul li a').click(function() {
    $('.navbar-toggle:visible').click();
  });

  // Offset for Main Navigation
  $('#mainNav').affix({
    offset: {
      top: 100
    }
  })

  // Initialize and Configure Scroll Reveal Animation
  window.sr = ScrollReveal();
  sr.reveal('.sr-icons', {
    duration: 600, //задержка
    scale: 0.3,
    distance: '0px'
  }, 200);
  sr.reveal('.sr-button', {
    duration: 1000,
    delay: 200
  });
  sr.reveal('.sr-contact', {
    duration: 600,
    scale: 0.3,
    distance: '0px'
  }, 300);

  // Initialize and Configure Magnific Popup Lightbox Plugin
  $('.popup-gallery').magnificPopup({
    delegate: 'a',
    type: 'image',
    tLoading: 'Loading image #%curr%...',
    mainClass: 'mfp-img-mobile',
    gallery: {
      enabled: true,
      navigateByImgClick: true,
      preload: [0, 1] // Will preload 0 - before current, and 1 after the current image
    },
    image: {
      tError: '<a href="%url%">The image #%curr%</a> could not be loaded.'
    }
  });

  $('#header-icon').click(function() {
    $('#info-tech').fadeToggle('slow');
  })

  $(document).scroll(function(event) {
    if ($(document).scrollTop() > 100) {
      $('#info-tech').show();
    } else {
      $('#info-tech').hide();
    }

  })

  $('#visual').pignoseParallaxSlider({
    play: '.btn-play',
    pause: '.btn-pause',
    next: '.btn-next',
    prev: '.btn-prev'
  });

  new mlPushMenu(document.getElementById('mp-menu'), document.getElementById('trigger'));

  //Header
  setTimeout(function() {
    $('.header-content-inner').fadeIn('slow');
  }, 900)

  //Бегущие буквы

  var options = {
    strings: ["Less, Github, Node Js, Jsfiddle, Htmlbook, Htmlacademy, Codepen, Web Storm, Php Storm, Sub Lime text 3, Gulp,",
      "Полезно знать:"
    ],
    typeSpeed: 150,
    loop: true

  }

  var typed = new Typed(".type-example", options);


  //arrow up
  $(window).scroll(function() {
    if ($(this).scrollTop() > 100) {
      $('#arrow-up-scroll').fadeIn();
    } else {
      $('#arrow-up-scroll').fadeOut();
    }
  });

  $('#arrow-up-scroll').click(function() {
    $("html, body").animate({
      scrollTop: 0
    }, 600);
    return false;
  });



  $(".hamburger").click(function() {
    $(this).toggleClass("is-active");
  });

  var canvasDiv = document.getElementById('particle-canvas');
  var options = {
    particleColor: '#4169E0',
    background: '../img/header_1.jpg',
    interactive: true,
    speed: 'medium',
    density: 'high'
  };

  var particleCanvas = new ParticleNetwork(canvasDiv, options);


  //Popover

  $('.social-btns a').popover({
    trigger: 'hover',
    placement: 'top',
    template: '<div class="popover" role="tooltip">' +
      '<div class="arrow"></div><h3 class="popover-title popover-title-background">' +
      '</h3><div class="popover-content"></div></div>'
  });

  $.each($('.social-btns a'), function(index, element) {
    $(element).attr('data-primary-color', $(element).find('i').css('color'));
  });
  $('.social-btns a').click(function(event) {
    event.preventDefault();
    var clicked = $(this);
    var displayed = $('.custom-tooltip');
    var title = $(this).attr('data-link');
    var href = $(this).attr('href');
    var color = clicked.attr('data-primary-color');
    if (color == 'rgb(255, 255, 255)') color = 'rgb(100, 100, 100)'
    displayed.html('<a href="' + href + '" target="_blank">' + title + '</a>');
    var clickedElCenter = $(clicked).offset().left + parseInt($(clicked).css('width')) / 2;
    var displayedElLeft = clickedElCenter -
      $(displayed).offsetParent().offset().left -
      parseInt($(displayed).css('width')) / 2;
    $(displayed).css('left', displayedElLeft);
    $(displayed).css('background-color', color);
    return false;
  })

  $('#particle-canvas').append('<img class="hidden" src="/img/header_2.jpg">');
  $('#homeHeading, .header-inner-tech').click(function() {
    $.each($('header>div'), function(index, elem) {
      var el = $(elem);
      if (el.css('background-image').indexOf('header_1.jpg') + 1) {
        el.css('background-image', 'url("../img/header_2.jpg")');
        setTimeout(function() {
          el.css('background-image', 'url("../img/header_1.jpg")');
        }, 3000)
      } else if (el.css('background-image').indexOf('header_2.jpg') + 1) {
        el.css('background-image', 'url("../img/header_1.jpg")');
      }
    })
  })

  //Вторая секция

    // set #background-* to full window height and fade in the body
    var width = $(window).width();
    
    var height = $(window).height();
        $('#background-container, #background-1, #background-2').css({
            'min-width': width,
            'min-height': height
        });

   

// set global svg object
var svg = {};
// used to determine which background to draw to
var draw = 1;
// create new svg 
var svgNew = function(){
    svg.t = new Trianglify({
        noiseIntensity: 0,
    });
    // set svg size to window height and width
    svg.width = $(window).width();
    svg.height = $(window).height();
    svg.pattern = svg.t.generate(svg.width, svg.height);
    // draw svg on to either background 1 or 2
    if (draw === 1) {
        svgDraw1();
    } else {
        svgDraw2();
    }
}; // end svgNew

// draw svg on to bg1 and call fade
// if called with resize, redraw the svg to match new size and do not call fade
var svgDraw1 = function (resize){
    draw = 2;
    if (resize === 'resize') {  
        svg.pattern = svg.t.generate(svg.width, svg.height);
        $('#background-1').css({
            'min-width': svg.width,
            'min-height': svg.height,
            'background': svg.pattern.dataUrl
        });
        $('#contact-background-1').css({
            'min-width': svg.width,
            'min-height': (svg.height / 2),
            'background': svg.pattern.dataUrl
        });
    } else {
        $('.background-1').css({
            'background': svg.pattern.dataUrl
        });
        fade1();
    }
}; // end svgDraw1

// same as above but for bg2
var svgDraw2 = function(resize){
    draw = 1;
    if (resize === 'resize') {  
        svg.pattern = svg.t.generate(svg.width, svg.height);
        $('#background-2').css({
            'min-width': svg.width,
            'min-height': svg.height,
            'background': svg.pattern.dataUrl
        });
        $('#contact-background-2').css({
            'min-width': svg.width,
            'min-height': (svg.height / 2),
            'background': svg.pattern.dataUrl
        });
    } else {
        $('.background-2').css({
            'background': svg.pattern.dataUrl
        });
        fade2();
    }
}; // end svgDraw2

// fade in bg1 and fade our bg2
var fade1 = function(){
    $('.background-1').velocity("fadeIn", { duration: 3000 });
    $('.background-2').velocity("fadeOut", { duration: 4000 });
};
// fade in bg2 and fade out bg1
var fade2 = function(){
    $('.background-2').velocity("fadeIn", { duration: 3000 });
    $('.background-1').velocity("fadeOut", { duration: 4000 });
};

// timeout function to create new svg every 5 seconds
var recreateSvg = function(){
    window.setInterval(svgNew, 5000);
};

// redraw the current svg to match screen size on resize
$(window).resize(function() {
    svg.width = $(window).width();
    svg.height = $(window).height();
    $('#background-container').css({
        'min-width': svg.width,
        'min-height': svg.height
    });
    $('#contact-container').css({
        'min-width': svg.width,
        'min-height': (svg.height / 2)
    });
    svgDraw1('resize');
    svgDraw2('resize');
});

 // call new svg and start recreate svg timeout
    svgNew();
    recreateSvg();

})(jQuery); // End of use strict