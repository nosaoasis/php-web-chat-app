const form = document.querySelector(".signup form"),
  continueBtn = form.querySelector(".button input");

form.onsubmit = e => {
  e.preventDefault();
};

continueBtn.onclick = () => {
  let url = "php/signup";

  let xhr = new XMLHttpRequest();
  xhr.open("POST", url, true);
  xhr.onload = () => {};

  xhr.send();
};
