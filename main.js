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
// const currentImg = document.querySelector('#currentImg');
// const imgs = document.querySelectorAll('.imgs img');
// const opacity = 0.4;
//  imgs.forEach(img =>
//    img.addEventListener('click',imageClick)
//  );
//  // set first image
//  imgs[0].style.opacity = "0.4";
// function imageClick(e){
//   // reset opacity
//   imgs.forEach(img=>(img.style.opacity=1));
//   // change current image src to source of clicked images
//   currentImg.src=e.target.src;
//   // Add fade in class
//   currentImg.classList.add('fade-in');
//   // remove fadeIn class
//   setTimeout(()=>currentImg.classList.remove('fade-in'),500);
//   // change opacity
//   e.target.style.opacity = opacity;
// }

//
// let ham = document.getElementById('ham');
// let main = document.getElementById('main');
// let menu = document.getElementById('side-menu')
// let x = document.getElementById('x');
// ham.addEventListener('click', openSlideMenu);
// x.addEventListener('click', closeSlideMenu)
// function openSlideMenu(){
//   menu.style.width = '250px';
//   // menu.style.transition = '3s all';
//   main.style.marginLeft = "250px";
// }
// function closeSlideMenu(){
//   menu.style.width = '0';
//   // menu.style.transition = '3s all'
//   main.style.marginLeft = "0";
// }

/**************************************************************
// *****************for the modal*************************** */
const newsContainer = document.querySelector('.news');
newsContainer.addEventListener('click', e=>{
  e.preventDefault()

// modal toggle
 const modalToggle = e.target.closest('.my-btn');
  // console.log(modalToggle);
  if(!modalToggle) return;
  const modal = document.getElementById('news-modal');
  const closeButton = modal.querySelector('.close-Btn');
  modal.classList.add('is-open')

  closeButton.addEventListener('click', closeModal);
  function closeModal(){
    modal.classList.remove('is-open')
  }
})
// const closeButton = modal.querySelector('.close-Btn');
// closeButton.addEventListener('click', closeModal);
// function closemodal(){
//   modal.classList.remove('is-open');
// }
