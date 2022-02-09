class MobileNavbar {
  constructor(mobileMenu, navList, navLinks, navLinks2) {
    this.mobileMenu = document.querySelector(mobileMenu);
    this.navList = document.querySelector(navList);
    this.navLinks = document.querySelectorAll(navLinks);
    this.navLinks2 = document.querySelectorAll(navLinks2);
    this.activeClass = "active";
    this.handleClick = this.handleClick.bind(this);
  }

  animateLinks() {
    this.navLinks.forEach((link, index) => {
      link.style.animation
        ? (link.style.animation = "")
        : (link.style.animation = `navLinkFade 0.5s ease forwards ${
            index / 7 + 0.3
          }s`);
    });
  }

  handleClick() {
    this.navList.classList.toggle(this.activeClass);
    this.mobileMenu.classList.toggle(this.activeClass);
    this.animateLinks();
  }

  addClickEvent() {
    this.mobileMenu.addEventListener("click", this.handleClick);
    this.navLinks2.forEach((item) => {
      item.addEventListener("click", this.handleClick);
    });
  }

  init() {
    if (this.mobileMenu) {
      this.addClickEvent();
    }
    return this;
  }
}

/**
 * Instance of class
 */

const mobileNavbar = new MobileNavbar(
  ".mobile-menu",
  ".nav-list",
  ".nav-list li",
  ".nav-list li a"
);

mobileNavbar.init();


/**
 * Typewrite  
 */
function typeWrite(elemento) {
  const textoArray = elemento.innerHTML.split("");
  elemento.innerHTML = " ";
  textoArray.forEach(function (letra, i) {
    setTimeout(function () {
      elemento.innerHTML += letra;
    }, 100 * i);
  });  
}
const titulo = document.querySelectorAll(".typewriter");
titulo.forEach(typeWrite);


/**
 *  REVEAL
*/
const sr = ScrollReveal({
  origin: "top",
  distance: "50px",
  duration: 2000,
});

sr.reveal(".delaySmallReveal", { delay: 200 });
sr.reveal(".delayMediumReveal", { delay: 300 });
sr.reveal(".delayLargeReveal", { delay: 400 });
sr.reveal(".delayExtraBigReveal", { delay: 600 });
sr.reveal(".wp-social-link", { delay: 4000, interval: 300 });

sr.reveal(".intervalCardReveal", { interval: 400 });


// jQuery(($) => {
//   /*
//   *
//   * Instance of Slick
//   *
//   */
//   $('.project').slick({
//     centerMode: true,
//     centerPadding: '60px',
//     slidesToShow: 3,
//     responsive: [
//       {
//         breakpoint: 768,
//         settings: {
//           arrows: false,
//           centerMode: true,
//           centerPadding: '40px',
//           slidesToShow: 3
//         }
//       },
//       {
//         breakpoint: 480,
//         settings: {
//           arrows: false,
//           centerMode: true,
//           centerPadding: '40px',
//           slidesToShow: 1
//         }
//       }
//     ]
//   });
// });
