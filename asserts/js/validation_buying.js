function validateForm_Buying() {
  let buyerId = document.forms["rentalForm"]["buyer_id"].value;
  let carId = document.forms["rentalForm"]["car_id"].value;
  let rentalStartDate = document.forms["rentalForm"]["rental_start_date"].value;
  let rentalEndDate = document.forms["rentalForm"]["rental_end_date"].value;
  if (buyerId === "") {
    alert("you forgot to enter the buyer ID");
    return false;
  }
  if (carId === "") {
    alert("please select car that you want to take in a rent");
    return false;
  }
  if (rentalStartDate === "") {
    alert("please select when do you want a car");
    return false;
  }
  if (rentalEndDate === "") {
    alert("when do you want a car to back to the store");
    return false;
  }
}
