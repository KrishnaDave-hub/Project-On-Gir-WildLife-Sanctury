// const slideImg = document.getElementById("slideImg");
// const images = new Array(
//   "../../resources/images/header-img1.jpg",
//   "../../resources/images/header-img2.jpg",
//   "../../resources/images/header-img3.jpg",
//   "../../resources/images/header-img4.jpg",
//   "../../resources/images/header-img5.jpg"
// );
// const len = images.length;
// var i = 0;
// function slider() {
//   if (i > len - 1) {
//     i = 0;
//   }
//   slideImg.src = images[i];
//   i++;
//   setTimeout("slider()", 4000);
// }

const slides = document.querySelectorAll(".slide");
const auto = true;
const intervalTime = 5000;
let slideInterval;

const nextSlide = () => {
  const current = document.querySelector(".current");
  // Remove Current Class
  current.classList.remove("current");
  // Check For Next Slide
  if (current.nextElementSibling) {
    // Add Current To Next Sibling
    current.nextElementSibling.classList.add("current");
  } else {
    //  Add Current To Start
    slides[0].classList.add("current");
  }
  setTimeout(() => current.classList.remove("current"));
};

// Auto Slide
if (auto) {
  // Run Next Slide At Interval Time
  slideInterval = setInterval(nextSlide, intervalTime);
}

// sticky Navigation
