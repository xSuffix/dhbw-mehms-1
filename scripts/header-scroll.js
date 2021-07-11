// Hide when user scrolls down, show when user scrolls up
var prevScrollpos = window.pageYOffset;
window.onscroll = function () {
  var currentScrollPos = window.pageYOffset;
  if (prevScrollpos > currentScrollPos) {
    document.getElementById("page-header").style.top = "0";
  } else if (currentScrollPos > 32) {
    document.getElementById("page-header").style.top = "-128px";
  }
  prevScrollpos = currentScrollPos;
}