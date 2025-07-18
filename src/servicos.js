let menuAberto = false;
document.addEventListener('DOMContentLoaded',function(){
  inicializarMenuMobile();
})

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

const letras = ['A','u','d','i','c','o','n','e',' ','C','o','n','t','a','d','o','r','e','s'];
const div = document.getElementById('resultado');

letras.forEach((letra,i) => {
    const span = document.createElement('h1');
    span.className = 'letra';
    span.textContent = letra;
    span.style.animationDelay = `${i * 0.1}s`;
    div.appendChild(span);
});


// Aguarda o DOM carregar completamente
document.addEventListener('DOMContentLoaded', function() {
  const track = document.getElementById('sliderTrack');
  const boxes = document.querySelectorAll('.box-servicos');
  const buttonLeft = document.getElementById('buttonsrev1');
  const buttonRight = document.getElementById('buttonserv2');
  const container = document.getElementById('sliderContainer');

  let index = 0;

  function getVisibleBoxes() {
    const containerWidth = container.offsetWidth;
    const boxWidth = 320; // 300px + 20px gap
    return Math.floor(containerWidth / boxWidth);
  }

  function getMaxIndex() {
    const visibleBoxes = getVisibleBoxes();
    return Math.max(0, boxes.length - visibleBoxes - 1);
  }

  buttonRight.addEventListener('click', () => {
    const maxIndex = getMaxIndex();
    if (index < maxIndex) {
      index++;
      updateSlide();
    }
  });

  buttonLeft.addEventListener('click', () => {
    if (index > 0) {
      index--;
      updateSlide();
    }
  });

  function updateSlide() {
    const boxWidth = 305; // 300px + 20px gap
    track.style.transform = `translateX(-${index * boxWidth}px)`;
    
    // Atualiza estado dos botões
    buttonLeft.style.opacity = index === 0 ? '0.5' : '1';
    buttonRight.style.opacity = index >= getMaxIndex() ? '0.5' : '1';
  }

  // Inicializa o slider
  updateSlide();

  // Corrige caso a tela redimensione
 
});


function enviarWhatsApp(texto) {
  const numero = '5521983832152'; // DDD + número (sem espaços ou traços)
  const mensagem = texto;
  const textoCodificado = encodeURIComponent(mensagem);
  const link = `https://wa.me/${numero}?text=${textoCodificado}`;

  window.open(link, '_blank'); // abre em nova aba
}