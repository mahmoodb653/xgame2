try {
  const mySwiper = new Swiper(".header-slider-container", {
    on: {
      init: function () {
        const el = this.slides[this.realIndex];
        let image = el.getAttribute("image");
        if (image != null) document.querySelector(".back-image").style.background = `url(${image})`;
      },
    },
    // Optional parameters
    direction: "horizontal",
    loop: false,

    pagination: {
      el: ".header-pagination",
      clickable: true,
    },

    navigation: {
      nextEl: ".header-button-next",
      prevEl: ".header-button-prev",
    },
  });

  let headerSlides = document.querySelectorAll(".header-slide");

  headerSlides.forEach((element, index) => {
    element = element.id = `slide${index}`;
    let image = document.getElementById(element).getAttribute("image");
    if (image != null) document.getElementById(element).style.background = `url(${image})`;
  });

  mySwiper.on("slideChange", function () {
    const el = mySwiper.slides[mySwiper.realIndex];
    let image = el.getAttribute("image");
    if (image != null) document.querySelector(".back-image").style.background = `url(${image})`;
  });

  const product = new Swiper(".latest-products-innerBox", {
    slidesPerView: 1,
    breakpoints: {
      // when window width is >= 320px
      0: {
        slidesPerView: 1,
        spaceBetween: 40,
      },
      625: {
        slidesPerView: 2,
        spaceBetween: 40,
      },
      // when window width is >= 480px
      792: {
        slidesPerView: 3,
        spaceBetween: 30,
      },
      // when window width is >= 640px
      1052: {
        slidesPerView: 4,
        spaceBetween: 40,
      },
    },

    pagination: {
      el: ".product-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: ".product-button-next",
      prevEl: ".product-button-prev",
    },
  });

  const blog = new Swiper(".slider-blog", {
    // Optional parameters
    direction: "horizontal",
    loop: false,
    spaceBetween: 30,

    pagination: {
      el: ".blog-pagination",
      clickable: true,
    },

    navigation: {
      nextEl: ".blog-button-next",
      prevEl: ".blog-button-prev",
    },
  });
} catch (e) {}

try {
  const colorThief = new ColorThief();
  const prosuctImage = document.querySelectorAll(".product-image");

  prosuctImage.forEach((element) => {
    element.addEventListener("mouseover", function (event) {
      if (element.complete) {
        let color = colorThief.getColor(element);
        element.style.color = `rgba(${color[0]}, ${color[1]}, ${color[2]},40%)`;
      }
    });
  });
} catch (e) {}

document.getElementById("search").addEventListener("click", () => {
  document.querySelector(".search-container").style.display = "flex";
  setTimeout(() => {
    document.querySelector(".search-container").classList.add("open");
    document.querySelector(".search-container").classList.remove("close");

    document.body.style.overflow = "hidden";
  }, 0);
});

document.querySelector(".icon-close").addEventListener("click", () => {
  document.querySelector(".search-container").classList.remove("open");
  document.body.style.overflow = "auto";
  document.querySelector(".search-container").style.display = "none";
});

jQuery(document).ready(function ($) {

  $('.button-view-video').click(function (e) {
    $("body").append('<div class="aparat-video-modal"><i class="fas fa-circle-notch fa-spin"></i></div>');
    $('#body_wrapper').css({
      'filter': 'blur(10px)',
      'transition-duration': '0.5s',
      'transition-timing-function': 'ease-in'
    })
    e.preventDefault();
    $.ajax({
      url: xgame.ajaxurl,
      data: {
        action:'xgame_aparat_video',
        pid : $(this).data("pid")
      },
      async: true,
      cache: false,
      type:  'get',
      success: function(response){
        $(".aparat-video-modal").html(response);
      }
    });
    $('.aparat-video-modal').click(function () {
      $(this).remove();
      $('#body_wrapper').css({
        'filter': 'blur(0px)',
        'transition-duration': '0.3s',
        'transition-timing-function': 'ease-out'
      })
    })
  })

})

