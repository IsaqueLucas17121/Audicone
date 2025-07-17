const letras = ['A','u','d','i','c','o','n','e',' ','C','o','n','t','a','d','o','r','e','s'];
const div = document.getElementById('resultado');

letras.forEach((letra,i) => {
    const span = document.createElement('h1');
    span.className = 'letra';
    span.textContent = letra;
    span.style.animationDelay = `${i * 0.1}s`;
    div.appendChild(span);
});

let index = 0;
const totalSlides = 3;
const slideContainer = document.getElementById('slide-allimg');

window.addEventListener('load',function(){
  
  setInterval(() =>{
    index++;
    if (index >= totalSlides) {index = 0};
    updateSlide();
    
  },8000);
})

document.getElementById('button1').addEventListener('click', () => {
  index--;
  if (index < 0) {index = totalSlides - 1};
  updateSlide();
});

document.getElementById('button2').addEventListener('click', () => {
  index++;
  if (index >= totalSlides) {index = 0};
  updateSlide();  
});

function updateSlide() {
  slideContainer.style.transform = `translateX(-${index * 100}%)`;

  for(i=0;i<=2;i++){
    document.getElementById('slide-text' + i).classList.remove('show');
  }
  document.getElementById('slide-text' + index).classList.add('show');
  
}

function enviarWhatsApp(texto) {
  const numero = '5521983832152'; // DDD + número (sem espaços ou traços)
  const mensagem = texto;
  const textoCodificado = encodeURIComponent(mensagem);
  const link = `https://wa.me/${numero}?text=${textoCodificado}`;

  window.open(link, '_blank'); // abre em nova aba
}

function inicializarMenuMobile() {
    const menuToggle = document.getElementById('menu-toggle');
    const navMenu = document.getElementById('nav-menu');
    
    if (menuToggle && navMenu) {
        menuToggle.addEventListener('click', function() {
            toggleMenu();
        });
        
        // Fechar menu ao clicar em links
        const navLinks = navMenu.querySelectorAll('a');
        navLinks.forEach(link => {
            link.addEventListener('click', function() {
                if (menuAberto) {
                    toggleMenu();
                }
            });
        });
        
        // Fechar menu ao redimensionar para desktop
        window.addEventListener('resize', function() {
            if (window.innerWidth > 768 && menuAberto) {
                toggleMenu();
            }
        });
    }
}
function toggleMenu() {
    const menuToggle = document.getElementById('menu-toggle');
    const navMenu = document.getElementById('nav-menu');
    
    menuAberto = !menuAberto;
    
    if (menuAberto) {
        navMenu.classList.add('active');
        menuToggle.classList.add('active');
        document.body.style.overflow = 'hidden';
    } else {
        navMenu.classList.remove('active');
        menuToggle.classList.remove('active');
        document.body.style.overflow = 'auto';
    }
}