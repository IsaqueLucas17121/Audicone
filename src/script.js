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

const telefoneInput = document.getElementById('telefone');

telefoneInput.addEventListener('input', function () {
  let valor = telefoneInput.value.replace(/\D/g, '');

  if (valor.length > 11) {
    valor = valor.slice(0, 11);
  }

  if (valor.length > 6) {
    telefoneInput.value = `(${valor.slice(0, 2)}) ${valor.slice(2, 7)}-${valor.slice(7)}`;
  } else if (valor.length > 2) {
    telefoneInput.value = `(${valor.slice(0, 2)}) ${valor.slice(2)}`;
  } else {
    telefoneInput.value = `(${valor}`;
  }
});

const formulario = document.getElementById('formWhatsApp');

formulario.addEventListener('submit',function(event){
  event.preventDefault(); // previne erros

  const email = document.getElementById('email');
  const telefone = document.getElementById('telefone');
  const nome = document.getElementById('nome');
  const funcao = document.getElementById('funcao');
})