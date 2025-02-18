var swiper = new Swiper(".mySwiper", {
    effect: "coverflow",
    grabCursor: true,
    centeredSlides: true,
    loop:true,
    slidesPerView: "auto",
    coverflowEffect: {
      rotate: 0,
      stretch: 0,
      depth: 130,
      modifier: 1,
      slideShadows: true,
    },
    autoplay:{
        delay:2000,
        disableOnInteraction:false,
    },
    pagination: {
      el: ".swiper-pagination",
    },
  });