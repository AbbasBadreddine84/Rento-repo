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



// document.getElementById("SearchInput1").addEventListener("change",filterdate);
// document.getElementById("SearchInput2").addEventListener("change", filterdate);

// function filterdate(){
// var from = document.getElementById("SearchInput1").value();
// var to = document.getElementById("SearchInput2").value();

//   if (!from && !to) {
//     // no value for from and to
//     return;
//   }

//   from = from || "1970-01-01"; // default from to a old date if it is not set
//   to = to || "2999-12-31";
//  var dateFrom = moment(from);
//  var dateTo = moment(to);
//    var table = document.getElementById("table");

// }



function filterdate() {
  var from = $("#SearchInput1").val();
  var to = $("#SearchInput2").val();

  if (!from && !to) {

    return;
  }

  from = from || "1970-01-01"; 
  to = to || "2999-12-31";

  var dateFrom = moment(from);
  var dateTo = moment(to);

  $("#table tr").each(function (i, tr) {
    var val = $(tr).find("td:nth-child(3)").text();
    var dateVal = moment(val, "MM/DD/YYYY");
    var visible = dateVal.isBetween(dateFrom, dateTo, null, []) ? "" : "none"; 
    $(tr).css("display", visible);
    console.log("td");
  });
}

$("#SearchInput1").on("change", filterdate);
$("#SearchInput2").on("change", filterdate);


