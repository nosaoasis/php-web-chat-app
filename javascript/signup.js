const form = document.querySelector(".signup form"),
  continueBtn = form.querySelector(".button input"),
  errorText = form.querySelector(".error-txt");

form.onsubmit = e => {
  e.preventDefault();
};

continueBtn.onclick = () => {
  let url = "php/signup.php";

  let xhr = new XMLHttpRequest();
  xhr.open("POST", url, true);
  xhr.onload = () => {
    if (xhr.readyState === XMLHttpRequest.DONE) {
      if (xhr.status === 200) {
        let data = xhr.response;
        if (data == "success") {
        } else {
          errorText.textContent = data;
          errorText.style.display = "block";
          // setTimeout(() => {
          //   errorText.style.display = "none";
          // }, 1500);
        }
      }
    }
  };

  let formData = new FormData(form);

  xhr.send(formData);
};
