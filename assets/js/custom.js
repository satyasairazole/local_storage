(function ($) {
    "use strict";
    // for sticky navbar
    $(window).scroll(function () {
      if ($(window).scrollTop() > 0) {
        $(".navbar-area").addClass("sticky");
      } else {
        $(".navbar-area").removeClass("sticky");
      }
  });
    $(window).scroll(function () {
        if ($(window).scrollTop() > 0) {
          $(".navbar-area .main-nav").addClass("sticky");
        } else {
          $(".navbar-area .main-nav").removeClass("sticky");
        }
    });

     // Mean Menu
  $(".mean-menu").meanmenu({
    meanScreenWidth: "991",
  });
    

  $(".banner-slider-area").owlCarousel({
    autoplayHoverPause: true,
    autoplaySpeed: 2000,
    loop: true,
    autoplay: true,
    dots: true,
    nav: false,
    items: 1,
    animateOut: 'fadeOutUp',
    animateIn: 'fadeInUp',
    
  });

  $(".main-banner-img-slide").owlCarousel({
    autoplayHoverPause: true,
    autoplaySpeed: 2000,
    loop: true,
    autoplay: true,
    dots: true,
    nav: true,
    navText: ['<i class="fas fa-long-arrow-alt-left"></i>', '<i class="fas fa-long-arrow-alt-right"></i>'],
    items: 1,
    animateOut: 'fadeOutUp',
    animateIn: 'fadeInUp',
    
  });

  $(".project-slider-area").owlCarousel({
    center: true,
    items: 1,
    autoplayHoverPause: true,
    loop: true,
    autoplay: true,
    dots: false,
    nav: true,
    navText: ['<i class="fas fa-angle-left"></i>', '<i class="fas fa-angle-right"></i>'],
    responsive: {
      0: {
        items: 1,
      },
      768: {
        items: 2,
      },
      992: {
        items: 4,
      }
    },
  });

  $(".testimonial-slider-area").owlCarousel({
    autoplayHoverPause: true,
    autoplaySpeed: 2000,
    loop: true,
    autoplay: true,
    dots: true,
    nav: false,
    items: 1,
    animateIn: 'fadeOutDown',
    animateOut: 'fadeInUp',
    
  });
  $(".testimonial-slider-area-2").owlCarousel({
    autoplayHoverPause: true,
    autoplaySpeed: 2000,
    loop: true,
    autoplay: true,
    dots: true,
    nav: false,
    items: 2,
    responsive: {
      0: {
        items: 1,
      },
      992: {
        items: 2,
      }
    }
  });

  $(".brand-slider-area").owlCarousel({
    loop: true,
    dots: false,
    nav: false,
    autoplay: true,
    autoplaySpeed: 1000,
    autoplayHoverPause: true,
    responsive: {
      0: {
        items: 3,
        margin: 40,
      },
      400: {
        items: 4,
        margin: 50,
      },
      700: {
        items: 5,
        margin: 50,
      },
      992: {
        items: 6,
        margin: 100,
      }
    },
  });

  $(".service-slider-area").owlCarousel({
    loop: true,
    dots: true,
    autoplay: true,
    autoplaySpeed: 1000,
    autoplayHoverPause: true,
    responsive: {
      0: {
        items: 1,
      },
      768: {
        items: 2,
      },
      992: {
        items: 3,
      },
      1200: {
        items: 4,
      }
    },
  });


  $(".video-popup").magnificPopup({
    type: "iframe",
  });
//   $(".image-popup").magnificPopup({
//     type: "image",
//   });
//   $('.gallery-item').magnificPopup({
//     type: 'image',
//     gallery:{
//       enabled:true
//     }
//   });
  
  // for image gallery
  $('.grid').isotope({
    itemSelector: '.grid-item',
    percentPosition: true,
    masonry: {
      // use outer width of grid-sizer for columnWidth
      columnWidth: 2
    }
  })

   // countdown
  //  $("#getting-started-d").countdown("2021/09/05", function (event) {
  //   $(this).html(
  //     event.strftime("<div><span>%D</span> <span>Days </span> </div> ")
  //   );
  // });
  // $("#getting-started-h").countdown("2020/05/05", function (event) {
  //   $(this).html(
  //     event.strftime("<div><span>%H</span> <span>Hours </span> </div> ")
  //   );
  // });
  // $("#getting-started-m").countdown("22021/05/05", function (event) {
  //   $(this).html(
  //     event.strftime("<div><span>%M</span> <span>minutes </span> </div> ")
  //   );
  // });
  // $("#getting-started-s").countdown("2021/05/05", function (event) {
  //   $(this).html(
  //     event.strftime("<div><span>%S</span> <span>seconds </span> </div> ")
  //   );
  // });
  
  

    // Go to Top
  $(function () {
    // Scroll Event
    $(window).on("scroll", function () {
      var scrolled = $(window).scrollTop();
      if (scrolled > 600) $(".go-top").addClass("active");
      if (scrolled < 600) $(".go-top").removeClass("active");
    });
    // Click Event
    $(".go-top").on("click", function () {
      $("html, body").animate({ scrollTop: "0" }, 500);
    });
  });

  // preloader
  window.onload = function () {
    document.getElementById("pre-loader").style.display = "none";
    document.getElementById("full-content").style.display = "block";
  };
  
$(".odometer").appear(function (e) {
  var odo = $(".odometer");
  odo.each(function () {
    var countNumber = $(this).attr("data-count");
    $(this).html(countNumber);
  });
});

  // WOW Animation JS
  if ($(".wow").length) {
    var wow = new WOW({
      mobile: false,
    });
    wow.init();
  }
  

})(jQuery);