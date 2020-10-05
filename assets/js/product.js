const mySwiper = new Swiper(".gallery", {
  // Optional parameters
  direction: "horizontal",
  slidesPerView: 4,
  loop: false,

  breakpoints: {
    // when window width is >= 320px
    0: {
      slidesPerView: 2,
      spaceBetween: 30,
    },
    // when window width is >= 480px
    200: {
      slidesPerView: 2,
      spaceBetween: 30,
    },
    720: {
      slidesPerView: 4,
      spaceBetween: 30,
    },
    // when window width is >= 640px
    1052: {
      slidesPerView: 4,
      spaceBetween: 30,
    },
  },

  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
});

const product = new Swiper(".latest-products-innerBox", {
  slidesPerView: 1,
  breakpoints: {
    // when window width is >= 320px
    607: {
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
      spaceBetween: 30,
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

$("select.dropdown").each(function () {
  var dropdown = $("<div />").addClass("dropdown selectDropdown");

  $(this).wrap(dropdown);

  var label = $("<span />").text($(this).attr("placeholder")).insertAfter($(this));
  var list = $("<ul />");

  $(this)
    .find("option")
    .each(function () {
      list.append($("<li />").append($("<a />").text($(this).text())));
    });

  list.insertAfter($(this));

  if ($(this).find("option:selected").length) {
    label.text($(this).find("option:selected").text());
    list.find("li:contains(" + $(this).find("option:selected").text() + ")").addClass("active");
    $(this).parent().addClass("filled");
  }
});

$(document).on("click touch", ".selectDropdown ul li a", function (e) {
  e.preventDefault();
  var dropdown = $(this).parent().parent().parent();
  var active = $(this).parent().hasClass("active");
  var label = active ? dropdown.find("select").attr("placeholder") : $(this).text();

  dropdown.find("option").prop("selected", false);
  dropdown.find("ul li").removeClass("active");

  dropdown.toggleClass("filled", !active);
  dropdown.children("span").text(label);

  if (!active) {
    dropdown.find("option:contains(" + $(this).text() + ")").prop("selected", true);
    $(this).parent().addClass("active");
  }

  dropdown.removeClass("open");
});

$(".dropdown > span").on("click touch", function (e) {
  var self = $(this).parent();
  self.toggleClass("open");
});

$(document).on("click touch", function (e) {
  var dropdown = $(".dropdown");
  if (dropdown !== e.target && !dropdown.has(e.target).length) {
    dropdown.removeClass("open");
  }
});
