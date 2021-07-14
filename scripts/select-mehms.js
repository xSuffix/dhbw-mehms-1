document.addEventListener('DOMContentLoaded', function () {

  var theater = document.getElementById("theater");

  function closePopup() {
    theater.classList.remove("open");
    let selected = document.getElementById("selected-container");
    selected.parentElement.removeChild(selected);
  }

  theater.addEventListener('click', closePopup);

  for (let mehm of document.getElementsByClassName("mehm-card")) {
    mehm.addEventListener('click', function (e) {
      if (!document.getElementById("selected-container") && e.target.id != "close-btn") {
        theater.classList.add("open");
        var image = mehm.getElementsByTagName("img")[0];
        var newImage = image.cloneNode(true);
        newImage.classList.add("selected");
        var div = document.createElement("div");
        div.id = "selected-container";
        div.classList.add("selected-container");
        div.appendChild(newImage);
        div.setAttribute("name", newImage.getAttribute("name"));
        mehm.appendChild(div);
        div.innerHTML += '<div id="close-btn"><svg height="16px" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14"><path fill="#081520" stroke="#fff" stroke-width=".5" d="M2.81 1.2h0a1.15 1.15 0 00-1.62 0l.1.1-.1-.1a1.15 1.15 0 000 1.63h0L5.37 7 1.2 11.2h0a1.15 1.15 0 000 1.61 1.15 1.15 0 001.62.02h0L7 8.63l4.19 4.2h0a1.15 1.15 0 001.61-.02 1.15 1.15 0 00.02-1.6h0v-.01L8.61 7l4.2-4.18a1.15 1.15 0 00.34-.82c0-.15-.03-.3-.08-.45a1.15 1.15 0 00-.63-.62 1.15 1.15 0 00-.9 0 1.15 1.15 0 00-.36.26L7 5.4l-4.19-4.2z"/></svg></div>'
        var closebtn = document.getElementById("close-btn")
        closebtn.addEventListener('click', function (e) {
          e.stopPropagation();
          closePopup();
        });
      }
    });
  }

});