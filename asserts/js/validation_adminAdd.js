function validationForm_adminAdd() {
  let make = document.forms["addCarForm"]["make"].value;
  let model = document.forms["addCarForm"]["model"].value;
  let year = document.forms["addCarForm"]["year"].value;
  let rentalrate = document.forms["addCarForm"]["rental_rate"].value;

  if (make === "") {
    alert("Please enter the car make.");
    return false;
  }
  if (model === "") {
    alert("please enter the model of car");
    return false;
  }
  if (year === "") {
    alert("plear enter when did this car made");
    return false;
  }
  if (isNaN(year) || year < 1900 || year > new Date().getFullYear()) {
    alert("please enter the valid year of the car");
    return false;
  }
  if (rentalrate === "" || isNaN(rentalrate) || rentalrate <= 0) {
    alert("please enter the valid rental rate.");
    return false;
  }
}
