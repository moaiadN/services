window.onscroll = function () {
  if (window.pageYOffset > 200) {
    document.querySelector(".arrowUp").style.display = "block";
  } else {
    document.querySelector(".arrowUp").style.display = "none";
  }
};
document.addEventListener("DOMContentLoaded", () => {
  const alertMsg = document.getElementsByClassName("alertMsg");
  if (alertMsg.length) {
    setTimeout(function () {
      alertMsg[0].remove();
    }, 3000); //removes the element after 2s
  }
});
// =================== Active Link ===================>>>>
const activePage = window.location.pathname;
const navLinks = document.querySelectorAll("nav li a").forEach((link) => {
  if (link.href.includes(`${activePage}`)) {
    link.classList.add("active");
    console.log(link);
  }
});

// =================== Search box ===================>>>>
// search.addEventListener("keyup", function (event) {
//   // Number 13 is the "Enter" key on the keyboard
//   if (event.keyCode === 13) {
//     // Cancel the default action, if needed
//     event.preventDefault();
//     // Trigger the button element with a click
//     console.log(search.value);
//   }
// });
