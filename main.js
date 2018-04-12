let sliderImages = document.querySelectorAll('.slide'),
arrowLeft = document.querySelector('#arrow-left'),
arrowRight = document.querySelector('#arrow-right'),
current = 0;
let setInterval
// clear all images
function reset() {
  for (let i = 0; i < sliderImages.length; i++) {
    sliderImages[i].style.display = 'none';
  }
}

// init slider
function start(){
  reset();
  sliderImages[0].style.display= 'block';
}
// show prev
function slideLeft(){
  reset();
  sliderImages[current-1].style.display = 'block';
  current--;
}
// show next
function slideRight(){
  reset();
  sliderImages[current+1].style.display = 'block';
  current++;

}
// left arrow click
arrowLeft.addEventListener('click', function() {
  if (current === 0) {
    current= sliderImages.length;
  }
  slideLeft();
});
// right arrow click
arrowRight.addEventListener('click', function() {
  if (current === sliderImages.length-1) {
    current= -1;
  }
  slideRight();
});

start();

// ------------------for Gallery----------------------------------
const currentImg = document.querySelector('#currentImg');
const imgs = document.querySelectorAll('.imgs img');
const opacity = 0.4;
 imgs.forEach(img =>
   img.addEventListener('click',imageClick)
 );
 // set first image opacity
 imgs[0].style.opacity=opacity;
function imageClick(e){
  // reset opacity
  imgs.forEach(img=>(img.style.opacity=1));
  // change current image src to source of clicked images
  currentImg.src=e.target.src;
  // Add fade in class
  currentImg.classList.add('fade-in');
  // remove fadeIn class
  setTimeout(()=>currentImg.classList.remove('fade-in'),500);
  // change opacity
  e.target.style.opacity = opacity;


}
