// Hide when user scrolls down, show when user scrolls up

document.addEventListener('DOMContentLoaded', function () {
  var body = document.body;
  var pageHeader = document.getElementById("header-wrapper");
  var prevScrollPos = window.pageYOffset;
  window.onscroll = function () {

    var currentScrollPos = window.pageYOffset;

    if (currentScrollPos > 80) {
      body.classList.add("scrolled");
    } else {
      body.classList.remove("scrolled");
    }

    if (prevScrollPos > currentScrollPos) { // scroll up      
      if (currentScrollPos > 96) {
        body.classList.add("scroll-up")
        pageHeader.style.top = "0";
        body.classList.add("header-sm");
      } else { // transition from fixed to absolute
        if (currentScrollPos < 32) {
          body.classList.remove("header-sm");
          pageHeader.style.top = "-72px";
        }
      }

    } else { // scroll down
      body.classList.remove("scroll-up");
      if (currentScrollPos > 96) {
        body.classList.add("header-sm");
        pageHeader.style.top = "-72px";
      }
    }
    prevScrollPos = currentScrollPos;
  }
});