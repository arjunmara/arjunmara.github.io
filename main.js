let sliderImages = document.querySelectorAll('.slide'),
arrowLeft = document.querySelector('#arrow-left'),
arrowRight = document.querySelector('#arrow-right'),
current = 0;
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


let startAnimation = document.querySelector(".news");
startAnimation.addEventListener('click', function(){
        startAnimation.style.animation = 'myFrames 7s linear 2s infinite alternate';
});
const pauseAnimation = document.querySelectorAll('.news-content');
