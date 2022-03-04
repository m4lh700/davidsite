import AOS from 'aos';
import 'animate.css';
AOS.init();

window.onscroll = function() {stickyHeader()};
window.onload = (event) => {
  preProgressbar();
};

let header = document.getElementById('sticky');
//let skillpills = document.getElementById('skillpills');
let preloader = document.getElementById('preloader');
let sticky = header.offsetTop;
let headerheight = document.getElementById('sticky').clientHeight;

setTimeout(() => { preloader.classList.add('animate__slideOutUp') }, 2000);

function stickyHeader() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
    document.getElementById('about').style.paddingTop = headerheight + 'px';
  } else {
    header.classList.remove("sticky");
    document.getElementById('about').style.paddingTop = '0px';
  }
}

function preProgressbar() {
  var i = 0;
    if (i == 0) {
      i = 1;
      let elem = document.getElementById("bar");
      let counter = document.getElementById('percCounter');
      let width = 10;
      let id = setInterval(frame, 10);
      function frame() {
        if (width >= 100) {
          clearInterval(id);
          i = 0;
        } else {
          width++;
          elem.style.width = width + "%";
          elem.innerHTML = width + "%";
          counter.innerHTML = "Loading... " + width + "%";
          if(width == 100){
            counter.innerHTML = "Done!";
          }
        }
      }
    }
}


