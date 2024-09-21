const contactForm = document.getElementById("contact-form");

contactForm.addEventListener("submit", function (e) {
  e.preventDefault();

  const url = e.target.action;
  const formData = new FormData(contactForm);

  fetch(url, {
    method: "post",
    body: formData,
    mode: "no-cors",
  })
    .then(() => {
      // url thank you
      window.location.href = "/out.php";
    })
    .catch((e) => alert("Error occured"));
});