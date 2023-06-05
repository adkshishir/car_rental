function validationForm_login() {
  let email = document.getElementsById("email").value;
  let password = document.getElementsById("password").value;

  const errorMessages = document.querySelectorAll(".error");
  errorMessages.forEach(function (errorMessage) {
    errorMessage.textContent = "";
  });
  if (email === "") {
    let emailError = document.getElementsById("emailError");
    emailError.textContent = "please enter a valid email";
    return false;
  }
  if (password === "") {
    let passwordError = document.getElementsById("passwordError");
    passwordError.textContent = "please enter password";
    return false;
  }
  return true;
}
