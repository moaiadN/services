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

// =================>>> Hide message after time  ==>>

document.addEventListener("DOMContentLoaded", () => {
  const alertMsg = document.getElementsByClassName("alertMsg");
  if (alertMsg.length) {
    setTimeout(function () {
      alertMsg[0].remove();
    }, 2000); //removes the element after 2s
  }
});
