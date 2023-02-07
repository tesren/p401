var splideTeam = document.getElementById('our_team');

  if(splideTeam){
    splideTeam = new Splide( '#our_team', {
      perPage: 4,
      perMove: 1,
      pagination:false,
      rewind : true,
      breakpoints: {
          992: {
              perPage: 1,
          },
      },
    } );
  
    splideTeam.mount();
  }
 

  var splideClients = document.getElementById('our_clients');

  if(splideClients){
    splideClients = new Splide( '#our_clients', {
      perPage: 3,
      perMove: 1,
      pagination:false,
      rewind : true,
      breakpoints: {
          992: {
              perPage: 1,
          },
    },} );
  
    splideClients.mount();
  }


window.addEventListener("scroll", function(){
  var header = document.querySelector("header");
  header.classList.toggle("sticky", window.scrollY > 0); 
});

const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]');
const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl));

function toggleMenu(){
  const menuToggle = document.querySelector('.menu-btn');
  const navigation = document.querySelector('.navigation')
  menuToggle.classList.toggle('active')
  navigation.classList.toggle('active')
}


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


/**Contact form */
document.querySelector(".wpcf7 textarea").rows = 5;


function copyLink() {
    /* Get the text field */
    var copyText = document.getElementById("current_link");
    var copyBtn = document.getElementById("copiar-btn");
    /* Select the text field */
    copyText.select();
    copyText.setSelectionRange(0, 99999); /* For mobile devices */
  
     /* Copy the text inside the text field */
    navigator.clipboard.writeText(copyText.value);
  
    var oldTooltip = bootstrap.Tooltip.getInstance(copyBtn);
    oldTooltip.hide();
  
    /* Alert the copied text */
    copyBtn.setAttribute("title", "Copiado");
  
    var tooltip = new bootstrap.Tooltip(copyBtn);
    tooltip.show()
  }