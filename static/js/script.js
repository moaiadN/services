window.onscroll = function () {
  if (window.pageYOffset > 200) {
    document.querySelector(".arrowUp").style.display = "block";
  } else {
    document.querySelector(".arrowUp").style.display = "none";
  }
};
