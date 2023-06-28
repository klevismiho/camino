document.addEventListener(
  "DOMContentLoaded", () => {
    const mobileMenuWrapper = document.getElementById('mobile-menu');
    const menu = new Mmenu("#mobile-menu-inner", {
      offCanvas: {
        position: "top"
      }
    });
    const api = menu.API;

    document.querySelector("#mobile-menu-button")
      .addEventListener(
        "click", () => {
          api.open();
        }
      );

    api.bind('open:after', function () {

      mobileMenuWrapper.classList.add('active');

      document.querySelector("#mobile-menu-close-button")
        .addEventListener(
          "click", () => {
            api.close();
          }
        );

    });

    api.bind('close:after', function () {
      mobileMenuWrapper.classList.remove('active');
    })

  }
);


const eventsSlider = new Swiper('.events-slider', {
  slidesPerView: 1.1,
  spaceBetween: 15,
  freeMode: true,
  breakpoints: {
    1024: {
      spaceBetween: 25,
      slidesPerView: 2.3,
      pagination: {
        el: '.swiper-pagination',
        type: 'progressbar',
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      grabCursor: true
    }
  }
});


const contributorsSlider = new Swiper('.contributors-slider', {
  slidesPerView: 1.1,
  spaceBetween: 25,
  freeMode: true,
  breakpoints: {
    1024: {
      slidesPerView: 2.3,
      pagination: {
        el: '.swiper-pagination',
        type: 'progressbar',
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      grabCursor: true
    }
  }
});


const publicationsSlider = new Swiper(".publications-slider", {
  slidesPerView: 1.1,
  spaceBetween: 25,
  freeMode: true,
  breakpoints: {
    1024: {
      slidesPerView: 3.3,
      pagination: {
        el: ".swiper-pagination",
        type: "progressbar",
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      grabCursor: true
    }
  },
});


const latestResearchSlider = new Swiper(".latest-research-slider", {
  slidesPerView: 1.1,
  spaceBetween: 25,
  freeMode: true,
  breakpoints: {
    1024: {
      slidesPerView: 4.3,
      pagination: {
        el: ".swiper-pagination",
        type: "progressbar",
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      grabCursor: true
    }
  }
});

const teamSlider = new Swiper(".team-slider", {
  slidesPerView: 1.1,
  spaceBetween: 25,
  freeMode: true,
  breakpoints: {
    1024: {
      slidesPerView: 4.3,
      pagination: {
        el: ".swiper-pagination",
        type: "progressbar",
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      grabCursor: true
    }
  }
});


const furtherReadingSlider = new Swiper(".further-reading-slider", {
  slidesPerView: 1.1,
  spaceBetween: 25,
  freeMode: true,
  breakpoints: {
    1024: {
      slidesPerView: 4.3,
      pagination: {
        el: ".swiper-pagination",
        type: "progressbar",
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      grabCursor: true
    }
  }
});


const timelineSlider = new Swiper('.timeline-slider', {
  effect: 'fade',
  fadeEffect: {
    crossFade: true
  },
  direction: 'vertical',
  // mousewheelControl: true,
  loop: false,
  // mousewheel: true,
  pagination: {
    el: '.swiper-pagination',
    clickable: true,
    renderBullet: function (index, className) {
      return '<span class="' + className + '">' + (timelineSliderYears[index]) + '</span>';
    },
  },
  grabCursor: true
});


const valuesSlider = new Swiper('.values-slider', {
  effect: 'fade',
  fadeEffect: {
    crossFade: true
  },
  direction: 'vertical',
  loop: false,
  pagination: {
    el: '.swiper-pagination',
    clickable: true,
    renderBullet: function (index, className) {
      return '<span class="' + className + '"></span>';
    },
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  grabCursor: true
});


const testimonialsSlider = new Swiper(".testimonials-slider", {
  slidesPerView: 1.1,
  spaceBetween: 25,
  freeMode: true,
  breakpoints: {
    1024: {
      slidesPerView: 2.3,
      pagination: {
        el: ".swiper-pagination",
        type: "progressbar",
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      grabCursor: true
    }
  }
});


const timelineSwiper = new Swiper('.timeline .swiper-container', {
  direction: 'vertical',
  loop: false,
  speed: 1600,
  pagination: '.swiper-pagination',
  paginationClickable: true,
  nextButton: '.swiper-button-next',
  prevButton: '.swiper-button-prev',
  breakpoints: {
    768: {
      direction: 'horizontal',
    }
  }
});