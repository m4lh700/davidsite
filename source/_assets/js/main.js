import AOS from 'aos';
import 'animate.css';
AOS.init();

window.onscroll = function() {myFunction()};

let header = document.getElementById("sticky");
let sticky = header.offsetTop;

function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}
