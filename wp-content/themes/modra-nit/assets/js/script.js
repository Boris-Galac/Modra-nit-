///// GRAB ELEMENTS

const selectElement = (selector) => {
  const element = document.querySelector(selector);
  if (element) return element;
  throw new Error(
    `Something went wrong!! Make sure that ${selector} exists typed correctly.`
  );
};

// const homePage = selectElement(".home-main");

if (document.querySelector(".home-main")) {
  //init the canvas, and the variables that we use along the project
  let [canvas, canvasW, canvasH] = [document.querySelector("canvas"), 500, 500];
  canvas.width = canvasW;
  canvas.height = canvasH;
  let ctx = canvas.getContext("2d");

  //the points array
  let points = [];

  //the values that define our movement/color/radius of our circles/lines
  let maxSpeed = 0.5;
  let numberOfPoints = 50;
  let pointRad = 3;
  let colors = ["rgb(255,255,255)"];
  let dBPoints = 250; //the maximum distance between points, if the distance is smaller then this draw a line

  //the holder for the animaton so we can stop it when we press ESCAPE
  let animHolder;

  //random number generated function
  function randomNumber(min, max) {
    return Math.random() * (max - min) + min;
  }

  //get the distance between 2 points
  function distance(x1, x2, y1, y2) {
    return Math.sqrt(Math.pow(x2 - x1, 2) + Math.pow(y2 - y1, 2));
  }

  //point maker
  function Point(x, y, dx, dy, radius, color) {
    [this.x, this.y, this.dx, this.dy, this.radius, this.color] = [
      x,
      y,
      dx,
      dy,
      radius,
      color,
    ];
    this.draw = function () {
      ctx.beginPath();
      ctx.fillStyle = this.color;
      ctx.arc(this.x, this.y, this.radius, 0, 2 * Math.PI, false);
      ctx.fill();
    };
    this.update = function () {
      if (
        this.x + this.dx + this.radius > canvasW ||
        this.x + this.dx - this.radius < 0
      ) {
        this.dx = -this.dx;
      } else {
        this.x += this.dx;
      }
      if (
        this.y + this.dy + this.radius > canvasH ||
        this.y + this.dy - this.radius < 0
      ) {
        this.dy = -this.dy;
      } else {
        this.y += this.dy;
      }
      this.draw();
    };
  }

  //line maker
  function Line(startX, startY, endX, endY, opacity, color) {
    [this.startX, this.startY, this.endX, this.endY, this.opacity, this.color] =
      [startX, startY, endX, endY, opacity, color.match(/[0-9]+/g)];
    this.draw = function () {
      ctx.beginPath();
      ctx.moveTo(startX, startY);
      ctx.lineTo(endX, endY);
      ctx.strokeStyle = `rgba(${this.color[0]},${this.color[1]},${this.color[2]},${this.opacity})`;
      ctx.stroke();
    };
  }

  //Populate the points array
  for (var i = 0; i < numberOfPoints; i++) {
    let ranX = Math.floor(randomNumber(pointRad, canvasW - pointRad));
    let ranY = Math.floor(randomNumber(pointRad, canvasH - pointRad));
    let ranDx = randomNumber(-maxSpeed, maxSpeed);
    let ranCol = colors[Math.floor(randomNumber(0, colors.length))];
    ranDx == 0 ? (ranDx = maxSpeed / 2) : ranDx;
    let ranDy = randomNumber(-maxSpeed, maxSpeed);
    ranDy == 0 ? (ranDy = -maxSpeed / 2) : ranDy;
    points.push(new Point(ranX, ranY, ranDx, ranDy, 3, ranCol));
  }

  //Animate function that animate our
  function anim() {
    animHolder = window.requestAnimationFrame(anim);
    ctx.clearRect(0, 0, canvasW, canvasH);
    points.forEach((el, idx) => {
      points.forEach((element, index) => {
        if (idx == index) return;
        let distancePoints =
          distance(el.x, element.x, el.y, element.y) -
          el.radius +
          element.radius;
        if (distancePoints <= dBPoints) {
          let l = new Line(
            el.x,
            el.y,
            element.x,
            element.y,
            0.8 - distancePoints / dBPoints,
            element.color
          );
          l.draw();
        }
      });
      el.update();
    });
  }

  //Start the animation
  anim();

  //Listen to the key, when the escape is pressed stop the animation
  // window.addEventListener("keydown", (e) =>
  //   e.key == "Escape" ? window.cancelAnimationFrame(animHolder) : ""
  // );
}

////// ham, nav and overlay

const ham = selectElement(".ham");
const nav = selectElement(".nav");
const overlay = selectElement(".overlay");

ham.addEventListener("click", (e) => {
  if (nav.getAttribute("aria-hidden") === "true") {
    ham.setAttribute("aria-expanded", "true");
    nav.setAttribute("aria-hidden", "false");
    overlay.setAttribute("aria-hidden", "false");
    gsap.from(".nav__icon", {
      opacity: 0,
      delay: 0.6,
      duration: 1,
      ease: "power3.out",
    });
    gsap.to(nav, {
      x: "0",
      ease: "power3.out",
    });
    gsap.from(".nav__link", {
      stagger: 0.15,
      x: "-200%",
      duration: 0.5,
      ease: "ease",
    });
  } else {
    overlay.setAttribute("aria-hidden", "true");
    ham.setAttribute("aria-expanded", "false");
    nav.setAttribute("aria-hidden", "true");
    gsap.to(nav, {
      x: "-100%",
      ease: "power3.out",
    });
  }
});

overlay.addEventListener("click", (e) => {
  e.currentTarget.setAttribute("aria-hidden", "true");
  if (window.innerWidth < 768) {
    gsap.to(nav, {
      x: "-100%",
      ease: "power3.out",
    });
    ham.setAttribute("aria-expanded", "false");
    nav.setAttribute("aria-hidden", "true");
  }
});

if (document.querySelector(".home-main")) {
  // hero animation

  gsap.from(".hero-span__headline", {
    y: "200%",
    stagger: 0.5,
    duration: 0.8,
    ease: "power3.out",
  });

  //// SLIDE JS

  const btnSlideLeft = selectElement(".slide__left");
  const btnSlideRight = selectElement(".slide__right");
  const slideWrapper = selectElement(".slider__wrapper");

  btnSlideRight.addEventListener("click", (e) => {
    slideWrapper.scrollBy({
      top: 0,
      left: 250,
      behavior: "smooth",
    });
  });
  btnSlideLeft.addEventListener("click", (e) => {
    slideWrapper.scrollBy({
      top: 0,
      left: -250,
      behavior: "smooth",
    });
  });

  //// SLIDE SWIPER GALLERY

  var swiper = new Swiper(".mySwiper", {
    spaceBetween: 10,
    slidesPerView: 4,
    freeMode: true,
    watchSlidesProgress: true,
  });
  var swiper2 = new Swiper(".mySwiper2", {
    spaceBetween: 10,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    thumbs: {
      swiper: swiper,
    },
  });
}

/////// SEARCH btn

const searchBtn = document.querySelectorAll(".search-btn");
const searchForm = document.querySelector(".search-form-wrapper");
searchBtn.forEach((btn) => {
  btn.addEventListener("click", (e) => {
    overlay.setAttribute("aria-hidden", "false");
    searchForm.setAttribute("aria-hidden", "false");
  });
  overlay.addEventListener("click", (e) => {
    searchForm.setAttribute("aria-hidden", "true");
  });
});
////// MARGIN-TOP MAIN

const headerElement = selectElement(".header").scrollHeight;
console.log(headerElement);
const mainElement = selectElement(".main");
mainElement.style = `
  margin-top: ${headerElement}px;
`;

/////////// REVEAL ON SCROLL

const observer = new IntersectionObserver((entries) => {
  entries.forEach((entry) => {
    if (entry.isIntersecting) {
      entry.target.classList.add("show-left-right");
    }
    //  else{
    //    entry.target.classList.remove("show");
    // }
  });
});

const hiddenSectionsLeft = document.querySelectorAll(".left");
const hiddenSectionsRight = document.querySelectorAll(".right");
hiddenSectionsLeft.forEach((el) => observer.observe(el));
hiddenSectionsRight.forEach((el) => observer.observe(el));

////////// HEADER ON SCROLL

const isScrolling = () => {
  const headerElement = document.querySelector(".header");
  let windowPosition = window.scrollY > 150;
  headerElement.classList.toggle("active", windowPosition);
};

window.addEventListener("scroll", isScrolling);

/////////// HIDE HEADER ON SCROLL

// let lastScrollTop = 0;
// let navbar = document.querySelector(".header");
// let navbarHeight = document.querySelector(".header").scrollHeight;

// window.addEventListener("scroll", (e) => {
//   let scrollTop = window.scrollY || document.documentElement.scrollTop;
//   if (scrollTop > lastScrollTop) {
//     navbar.style.top = `-${navbarHeight}px`;
//   } else {
//     navbar.style.top = "0";
//   }
//   lastScrollTop = scrollTop;
// });

/////// WORKING TIME

if (document.querySelector(".main-kontakt")) {
  const now = new Date(); // Get the current date and time
  const dayOfWeek = now.getDay(); // Get the day of the week (0-6, where 0 is Sunday)

  const openingTime = new Date(); // Set the opening time to today's date
  openingTime.setHours(8, 0, 0, 0); // Set the opening time to 08:00:00

  const closingTime = new Date(); // Set the closing time to today's date
  closingTime.setHours(16, 0, 0, 0); // Set the closing time to 16:00:00

  // Check if the current time is between the opening and closing times, or if it's a weekday
  if (
    now >= openingTime &&
    now <= closingTime &&
    dayOfWeek >= 1 &&
    dayOfWeek <= 5
  ) {
    document.querySelector("time.radno-vrijeme__time").textContent =
      "08:00h - 16:00h";
  } else {
    document.querySelector("time.radno-vrijeme__time").textContent =
      "Zatvoreno";
  }
}

////// SCROLL TO TOP

window.addEventListener("scroll", (e) => {
  const scroollBtn = document.querySelector(".scroll-to-top-btn");
  if (window.scrollY > 100) scroollBtn.setAttribute("aria-hidden", "false");
  else scroollBtn.setAttribute("aria-hidden", "true");
  scroollBtn.addEventListener("click", (e) => {
    window.scroll({
      top: 0,
    });
  });
});
