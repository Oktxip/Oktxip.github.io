/** You can import all css in js, it will injecting a `<style>` tag
 * e.g: import '../scss/styles.scss'
 * But you should change the config in webpack.config.js
 * You can call me if you need help about this
 */

// Import all of Bootstrap's JS
import * as bootstrap from 'bootstrap'

// Import jQuery
import * as $ from 'jquery'

$(document).ready(function () {
  console.log('Welcome');

  // NAVBAR LINK :: Start-----------------------------------------
  // Mendapatkan nama halaman (dengan mengambil bagian terakhir dari URL)
  var currentPage = window.location.href.split("/").pop();
  // Mengambil semua elemen <a> dengan class "navbar-link-item"
  var navbarLinks = document.getElementsByClassName("navbar-link-item");
  // Memeriksa setiap elemen <a>
  for (var i = 0; i < navbarLinks.length; i++) {
    // Memeriksa apakah href dari elemen <a> cocok dengan halaman saat ini
    if (navbarLinks[i].getAttribute("href") === currentPage) {
      // Jika cocok, tambahkan class "navbar-link-active"
      navbarLinks[i].classList.add("navbar-link-active");
    }
  }
  // NAVBAR LINK :: End -----------------------------------------

  // AOS :: Start -----------------------------------------
  AOS.init();
  // AOS :: End -----------------------------------------
  // Form Button control :: Start -----------------------------------------
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
  // Form Button control :: End -----------------------------------------
})