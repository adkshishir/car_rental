function billPrint() {
  let elementToPrint = document.getElementById("print");
  let originalElement = document.body.innerHTML;
  let printContent = elementToPrint.innerHTML;
  document.body.innerHTML = printContent;
  window.print();
  document.body.innerHTML = originalElement;
}
