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