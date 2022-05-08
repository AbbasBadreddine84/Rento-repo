function deleteR(r) {
  var i = r.parentNode.parentNode.rowIndex;
  document.getElementById("table").deleteRow(i);
  Subtotal(document.getElementById("table"),document.getElementById("Subtotal"))
 VATe(document.getElementById("table"), document.getElementById("VAT"));
  total(document.getElementById("table"), document.getElementById("total"));
}

document.getElementById("Subtotal").addEventListener("change", Subtotal());
document.getElementById("VAT").addEventListener("change", VATe());
document.getElementById("VATN").innerHTML = "8%";
document.getElementById("total").addEventListener("change", total());
document.getElementById("dateT").innerHTML = bt_date();

function Subtotal() {
  var table = document.getElementById("table");
  var sumValue = 0;

  for (var i = 1; i < table.rows.length; i++) {
    sumValue = sumValue + parseInt(table.rows[i].cells[4].innerHTML);
  }
  document.getElementById("Subtotal").innerHTML = +sumValue + "$";
}

function bt_date() {
  var date = new Date();
  var year = date.getFullYear();
  var month = date.getMonth() + 1;
  var day = date.getDate();
  return month + "/" + day + "/" + year;
}

function VATe() {
  var table = document.getElementById("table");
  var sumValue = 0;
  var vat = 8;

  for (var i = 1; i < table.rows.length; i++) {
    sumValue = sumValue + parseInt(table.rows[i].cells[4].innerHTML);
    var percent = (vat / 100) * sumValue;
  }
  document.getElementById("VAT").innerHTML = +percent + "$";
}

function total() {
  var table = document.getElementById("table");
  var sumValue = 0;
  var vat = 8;

  for (var i = 1; i < table.rows.length; i++) {
    sumValue = sumValue + parseInt(table.rows[i].cells[4].innerHTML);
    var percent = (vat / 100) * sumValue;
    var total = sumValue - percent;
  }
  document.getElementById("total").innerHTML = +total + "$";
}
