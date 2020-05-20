
// for modal 1
document.getElementById('button1').addEventListener("click", function() {
  document.querySelector('#modal-contact-form').style.display = "flex";
});
document.querySelector('#close-1').addEventListener("click", function() {
  document.querySelector('#modal-contact-form').style.display = "none";
});

// for modal 2
document.getElementById('button2').addEventListener("click", function() {
  document.querySelector('#modal-review-link').style.display = "flex";
});
document.querySelector('#close-2').addEventListener("click", function() {
  document.querySelector('#modal-review-link').style.display = "none";
});

