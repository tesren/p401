window.addEventListener("scroll", function(){
  var header = document.querySelector("header");
  header.classList.toggle("sticky", window.scrollY > 0); 
})

function toggleMenu(){
  const menuToggle = document.querySelector('.menu-btn');
  const navigation = document.querySelector('.navigation')
  menuToggle.classList.toggle('active')
  navigation.classList.toggle('active')
}

$(document).ready(function() {
  $('#autoWidth').lightSlider({
  autoWidth:true,
  loop:false,
  onSliderLoad: function() {
      $('#autoWidth').removeClass('cS-hidden');
  } 
  });  
  });

$('#blogCarousel').carousel({
    interval: 5000
});

const menuBtn = document.querySelector('.menu-btn');
let menuOpen = false;
menuBtn.addEventListener('click', () => {
    if(!menuOpen){
        menuBtn.classList.add('open');
        menuOpen = true;
    } else{
        menuBtn.classList.remove('open');
        menuOpen = false;
    }
});

var swiper = new Swiper(".mySwiper", {
  speed:2000,
  effect: "coverflow",
  grabCursor: true,
  centeredSlides: true,
  slidesPerView: "auto",
  coverflowEffect: {
    rotate: 0,
    stretch: 0,
    depth: 0,
    modifier: 1,
    slideShadows: true,
  },
  pagination: {
    el: ".swiper-pagination",
  },
  autoplay: 
  {
    delay: 2000,
  },
  mousewheel: 
  {
    invert: true,
  },
  loop: false,
});

/**Contact form */
$('.wpcf7 textarea').attr('rows', 5);