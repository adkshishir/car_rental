function validationForm_userRegistation() {
  let name = document.getElementById("name").value;
  let email = document.getElementById("email").value;
  let contact = document.getElementById("contact").value;
  let address = document.getElementById("address").value;
  let password = document.getElementById("password").value;
  let conpassword = document.getElementById("conpass").value;
  let passwordError = document.getElementById("passwordError");
  let conpassError = document.getElementById("conpassError");

  const errorMessages = document.querySelectorAll(".error");
  errorMessages.forEach(function (errorMessage) {
    errorMessage.textContent = "";
  });
  if (name === "") {
    let nameError = document.getElementById("nameError");
    nameError.textContent = "please enter your name first";
    return false;
  }
  if (email === "") {
    let emailError = document.getElementById("emailError");
    emailError.textContent = "please enter your email ";
    return false;
  }
  checkUsernameAvilability(email);

  if (address === "") {
    let addressError = document.getElementById("addressError");
    addressError.textContent = "please enter you address";
    return false;
  }
  if (contact === "") {
    let contactError = document.getElementById("contactError");
    contactError.textContent = "contact is required";
    return false;
  }

  if (password === "") {
    passwordError.textContent = "you forget to enter your password";
    event.preventDefault();
    return false;
  }
  if (length(password) <= 3) {
    passwordError.textContent = "password must be at least 4 characters";
    event.preventDefault();
    return false;
  }
  if (length(password) >= 50) {
    passwordError.textContent = "password must be at less than 50 characters";

    return false;
  }
  if (conpassword === "") {
    conpassError.textContent = "you forget to re enter your password";
    event.preventDefault();
    return false;
  }
  if (password !== conpassword) {
    conpassError.textContent = "pass is not same ";
    return false;
  }
  return true;
}
function checkUsernameAvilability(username) {
  fetch("check_username.php?username=" + username)
    .then((response) => response.json())
    .then((data) => {
      console.log("user is already registered");
      return false;
    })
    .catch((error) => {
      console.error("Error" + error.message);
    });
}
