function validationForm_userRegistation() {
  let name = document.getElementById("name").value;
  let email = document.getElementById("email").value;
  let contact = document.getElementById("contact").value;
  let address = document.getElementById("address").value;
  let password = document.getElementById("password").value;
  let conpassword = document.getElementById("conpass").value;

  if (name === "") {
    alert("please enter your name first");
    return false;
  }
  if (email === "") {
    alert("please enter your email ");
    return false;
  }
  if (contact === "") {
    alert("please enter your contact");
    return false;
  }

  if (address === "") {
    alert("please enter your address");
  }
  if (password === "") {
    alert("you forget to enter your password");
    return false;
  }
  if (length(password) <= 3) {
    alert("password must be at least 4 characters");
  }
  if (length(password) >= 50) {
    alert("password must be at less than 50 characters");
    return false;
  }
  if (conpassword === "") {
    alert("you forget to re enter your password");
    return false;
  }

  if (password !== conpassword) {
    alert(
      "your password is not same with your conform password plz recheck your password"
    );
    return false;
  }
}
