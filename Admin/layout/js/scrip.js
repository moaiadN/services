const body = document.querySelector("body"),
  sidebar = body.querySelector(".sidebar"),
  toggle = body.querySelector(".toggle"),
  searchBtn = body.querySelector(".search-box"),
  modeSwtich = body.querySelector(".toggle-switch"),
  modeText = body.querySelector(".mode-text");

toggle.addEventListener("click", () => {
  sidebar.classList.toggle("close");
});

searchBtn.addEventListener("click", () => {
  sidebar.classList.remove("close");
});

modeSwtich.addEventListener("click", () => {
  body.classList.toggle("dark");

  if (body.classList.contains("dark")) {
    modeText.innerText = "Light Mode";
  } else {
    modeText.innerText = "Dark Mode";
  }
});

// =================>>> Add Users Form Validation  ==>>

(function () {
  "use strict";
  var forms = document.querySelectorAll(".needs-validation");
  Array.prototype.slice.call(forms).forEach(function (form) {
    form.addEventListener(
      "submit",
      function (event) {
        if (!form.checkValidity()) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add("was-validated");
      },
      false
    );
  });
})();

// =================>>> Hide message after time  ==>>

document.addEventListener("DOMContentLoaded", () => {
  const alertMsg = document.getElementsByClassName("alertMsg");
  if (alertMsg.length) {
    setTimeout(function () {
      alertMsg[0].remove();
    }, 2000); //removes the element after 2s
  }
});
// =================== Active Link ===================>>>>
const activePage = window.location.pathname;
const navLinks = document.querySelectorAll("nav li a").forEach((link) => {
  if (link.href.includes(`${activePage}`)) {
    link.classList.add("active");
    // console.log(link);
  }
});

// =================== HTML TO PDF ===================>>>>
function generatePDF() {
  const element = document.getElementById("html2pdf");
  html2pdf().from(element).save();
}

// =================== image overlay ===================>>>>

document.querySelectorAll("#image img").forEach((element) => {
  element.onclick = () => {
    document.querySelector(".popup-image").style.display = "block";
    document.querySelector(".popup-image img").src =
      element.getAttribute("src");
  };
});
document.querySelector(".popup-image span").onclick = () => {
  document.querySelector(".popup-image").style.display = "none";
};
