function validationForm_login() {
  let email = document.getElementsById("email").value;
  let password = document.getElementsById("password").value;
  let emailError = document.getElementsById("emailError");
  let passwordError = document.getElementsById("passwordError");

  if (email === "") {
    emailError.textContent = "please enter a valid email";
    return false;
  }
  if (password === "") {
    passwordError.textContent = "please enter password";
    return false;
  }
}
