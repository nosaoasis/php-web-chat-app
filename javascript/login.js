const form = document.querySelector(".login form"),
  continueBtn = form.querySelector(".button input"),
  errorText = form.querySelector(".error-txt");

form.onsubmit = e => {
  e.preventDefault();
};

continueBtn.onclick = () => {
  let url = "php/login.php";

  let xhr = new XMLHttpRequest();
  xhr.open("POST", url, true);
  xhr.onload = () => {
    if (xhr.readyState === XMLHttpRequest.DONE) {
      if (xhr.status === 200) {
        let data = xhr.response;
        console.log(data);
        if (data == "success") {
          location.href = "users.php";
        } else {
          errorText.textContent = data;
          errorText.style.display = "block";
          setTimeout(() => {
            errorText.style.display = "none";
          }, 1500);
        }
      }
    }
  };

  let formData = new FormData(form);

  xhr.send(formData);
};
