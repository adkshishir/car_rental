function validationForm_login() {
  let email = document.getElementsById("email").value;
  let password = document.getElementsById("password").value;
  let emailError = document.getElementsById("emailError");
  let passwordError = document.getElementsById("passwordError");

  const errorMessages = document.querySelectorAll(".error");
  errorMessages.forEach(function (errorMessage) {
    errorMessage.textContent = "";
  });
  if (email == "") {
    emailError.textContent = "please enter a valid email";
    return false;
  }
  if (password == "") {
    passwordError.textContent = "please enter password";
    return false;
  }
  return true;
}

//check usernames and passwords match or not
function login(username, password) {
  fetch("login.php", {
    method: "POST",
    headers: {
      "Content-Type": "application/json",
    },
    body: JSON.stringify({
      username: username,
      password: password,
    }),
  })
    .then((response) => response.json())
    .then((data) => {
      if (data.success) {
        // Login successful, perform necessary actions
        console.log("Login successful");
      } else {
        // Login failed, display error message
        alert("login failed email and  password doesnot match");
        return false;
      }
    })
    .catch((error) => {
      console.log("Error: " + error);
    });
}
