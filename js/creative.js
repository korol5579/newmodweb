(function($) {//Замыкание, чтобы не было конфликтов между этим кодом и внешним
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
        duration: 600,//задержка
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
        if($(document).scrollTop() > 100) {
            $('#info-tech').show();
        } else {
            $('#info-tech').hide();
        }

    })

    $(window).load(function() {
    $('#visual').pignoseParallaxSlider({
        play    : '.btn-play',
        pause   : '.btn-pause',
        next    : '.btn-next',
        prev    : '.btn-prev'
    });
});

    new mlPushMenu(document.getElementById('mp-menu'), document.getElementById('trigger'));

    //Header
    setTimeout(function() {
        $('.header-content-inner').fadeIn('slow');
    }, 900)
    
    //Бегущие буквы
    
    var options = {
       strings: ["Less, Github, Node Js, Jsfiddle, Htmlbook, Htmlacademy, Codepen, Web Storm, Php Storm, Sub Lime text 3, Gulp,",
       "Полезно знать:"],
       typeSpeed: 150,
       loop: true
       
    }

    var typed = new Typed(".type-example", options);

    
    //arrow up
        $(window).scroll(function () {
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


      
  $(".hamburger").click(function(){
    $(this).toggleClass("is-active");
  });

  var canvasDiv = document.getElementById('particle-canvas');
  var options = {
  particleColor: '#4169E0',
  background: '../img/header_4.jpg',
  interactive: true,
  speed: 'medium',
  density: 'high'
  };

   var particleCanvas = new ParticleNetwork(canvasDiv, options);

    
   //Popover
  
    $('.social-btns a').popover({
        trigger: 'hover',
        placement: 'top',
        template: '<div class="popover" role="tooltip">'
            + '<div class="arrow"></div><h3 class="popover-title popover-title-background">'
            + '</h3><div class="popover-content"></div></div>'
    }); 

    $('.social-btns a').click(function(){
        var title = $(this).attr('data-link');
        var href = $(this).attr('href');
        $('.custom-tooltip').html('<a href="' + href + '" target="_blank">'+ title + '</a>');
        return false;
    })

    $('#particle-canvas').append('<img class="hidden" src="/img/header_3.jpg">');
    $('#homeHeading').click(function() {
        $.each($('header>div'),function(index, elem) {
            var el = $(elem);
            if (el.css('background-image').indexOf('header_4.jpg')+1) {
                el.css('background-image', 'url("../img/header_3.jpg")' );
            } else if (el.css('background-image').indexOf('header_3.jpg')+1) {
                el.css('background-image', 'url("../img/header_4.jpg")' );
            }
        })
    })

 
})(jQuery); // End of use strict
