
document.querySelector(".nav-icon").addEventListener("click", () =>
document.querySelector(".nav-links").classList.toggle("show")
);

document.querySelector(".explore").addEventListener("click", () =>
document.querySelector(".explore-content").classList.toggle("show-explore")
);

$(".slider-one")
.not("slick-initialized")
.slick({
autoplay: true,
autoplaySpeed: 3000,
fade: true,
prevArrow: "",
nextArrow: "",
});

AOS.init({
  offset: 200,
  duration: 1000,
});


