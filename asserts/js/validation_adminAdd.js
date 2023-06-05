function validationForm_adminAdd() {
  let name = document.getElementById("name").value;
  let photo = document.getElementById("photo").value;
  let model = document.getElementById("model").value;
  let color = document.getElementById("color").value;
  let price = document.getElementById("price").value;
  let desc = document.getElementById("description").value;

  const errorMessages = document.querySelectorAll(".error");
  errorMessages.forEach(function (errorMessage) {
    errorMessage.textContent = "";
  });

  if (name === "") {
    let nameError = document.getElementById("nameError");

    nameError.textContent = "Please enter the car name.";
    return false;
  }
  if (model === "") {
    let modelError = document.getElementById("modelError");
    modelError.textContent = "please enter the model of car";
    return false;
  }
  if (color === "") {
    let colorError = document.getElementById("colorError");
    colorError.textContent = "Enter the color of the car";
    return false;
  }
  if (price === "") {
    let priceError = document.getElementById("priceError");
    priceError.textContent = "you forget to enter the price of the car";
    return false;
  }
  if (photo === "") {
    let photoError = document.getElementById("photoError");
    photoError.textContent = "forgot to enter the photo of the car";
    return false;
  }
  return true;
}
