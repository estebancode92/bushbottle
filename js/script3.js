jQuery(document).ready(function ($) {
  function initCarrusel() {
    console.log("initCarrusel ejecutado...");
    const slider = document.getElementById('slaper');
    const nextButton = document.getElementById('next');
    const prevButton = document.getElementById('prev');
    let slides;
    let slidesToShow = 3;
    let slideWidth;
    let currentIndex = 0;

    if (!slider || !nextButton || !prevButton) {
      console.error("Elementos del carrusel no encontrados. Saltando inicialización.");
      return;
    }

    function updateSlider() {
      slides.forEach(slide => {
        slideWidth = (100 - (slidesToShow - 1) * 5) / slidesToShow;
        slide.style.width = `${slideWidth}%`;
        slide.style.display = 'block';
      });
      moveSlider();
    }

    function updateSlidesToShow() {
      slidesToShow = window.innerWidth < 600 ? 1 : (window.innerWidth < 900 ? 2 : 3);
      updateSlider();
    }

    function moveSlider() {
      const offset = -(currentIndex * (slideWidth + 5));
      slider.style.transform = `translate3d(${offset}%, 0, 0)`;
    }

    function initializeSlider() {
      slides = document.querySelectorAll('.slap');
      if (slides.length === 0) {
        console.error("No se encontraron diapositivas.");
        return;
      }

      updateSlidesToShow();
      nextButton.addEventListener('click', handleNext);
      prevButton.addEventListener('click', handlePrev);
    }

    function handleNext() {
      currentIndex = (currentIndex + slidesToShow) % slides.length;
      moveSlider();
    }

    function handlePrev() {
      currentIndex = (currentIndex - slidesToShow + slides.length) % slides.length;
      moveSlider();
    }

    initializeSlider();
    window.addEventListener('resize', updateSlidesToShow);
  }

  $(document).on('DOMContentLoaded ajaxComplete pageshow', function () {
    console.log("Reinicializando carrusel tras cambio de página...");
    initCarrusel();
  });

  initCarrusel();
});
