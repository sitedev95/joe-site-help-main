// document.addEventListener('DOMContentLoaded', function() {
//     const carousel = document.querySelector('.carousel');
//     const slides = document.querySelectorAll('.carousel-item');
//     const slideWidth = slides[0].clientWidth;
//     let currentIndex = 0;
  
//     function moveToSlide(index) {
//       const offset = -index * slideWidth;
//       carousel.querySelector('.carousel-inner').style.transform = `translateX(${offset}px)`;
//       currentIndex = index;
//     }
  
//     // Automatic sliding
//     setInterval(() => {
//       currentIndex = (currentIndex + 1) % slides.length;
//       moveToSlide(currentIndex);
//     }, 3000); // Adjust the interval as needed (3000 milliseconds = 3 seconds)
//   });

  var w = window.innerHeight;

let slides = document.querySelectorAll("img");

slides.forEach(img => {
  if((img.getAttribute('class').includes('w-100')) && (w > 550)) {
      img.classList.remove('w-100');
      img.classList.add('w-50');
  }
});
console.log(w);




  

