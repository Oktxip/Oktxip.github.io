/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!****************************************!*\
  !*** ./src/assets/js/pages/contact.js ***!
  \****************************************/
$(document).ready(function () {
  document.getElementById("submit-button").addEventListener("click", function () {
    const form = document.getElementById("contact-form");
    const formData = new FormData(form);
    fetch("https://formspree.io/f/mleyzvrp", {
        method: "POST",
        body: formData
      })
      .then(response => response.text())
      .then(data => {
        window.history.back();
      })
      .catch(error => {
        window.location.href = "contact.html";
        alert("Form submitted successfully..");
      });
  });
})
/******/ })()
;
//# sourceMappingURL=contact.js.map