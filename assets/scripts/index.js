new Swiper(".examples-swiper", {
  navigation: {
    prevEl: ".examples-prev",
    nextEl: ".examples-next",
  },
  pagination: {
    el: ".examples-pagination",
    clickable: true,
  },
  loop: true,
});

new Swiper(".reviews-swiper", {
  navigation: {
    prevEl: ".reviews-prev",
    nextEl: ".reviews-next",
  },
  pagination: {
    el: ".reviews-pagination",
    clickable: true,
  },
  loop: true,
});

new Swiper(".spaceman-swiper", {
  navigation: {
    prevEl: ".spaceman-prev",
    nextEl: ".spaceman-next",
  },
  pagination: {
    el: ".spaceman-pagination",
    clickable: true,
  },
  loop: true,
});

document.addEventListener("DOMContentLoaded", function () {
  const accordions = document.querySelectorAll(".accordion");

  accordions.forEach((accordion) => {
    const header = accordion.querySelector(".accordion-header");

    header.addEventListener("click", function () {
      accordion.classList.toggle("open");

      // Закрыть все остальные аккордеоны
      accordions.forEach((otherAccordion) => {
        if (
          otherAccordion !== accordion &&
          otherAccordion.classList.contains("open")
        ) {
          otherAccordion.classList.remove("open");
        }
      });
    });
  });

  var input = document.querySelector(".wpcf7-tel");

  input.addEventListener("input", function () {
    this.value = this.value.replace(/\D/g, "");

    if (this.value.length > 9) {
      this.value = this.value.slice(0, 9);
    }
  });
});
