



function myfunction() {

    var shownDiv = document.getElementById("already-shown");
    var targetDiv1 = document.getElementById("show1");
    var targetDiv2 = document.getElementById("show2");
    var btn = document.getElementById("edit");

    if (targetDiv1.style.display == "none") {
        targetDiv1.style.display = "none";
        targetDiv2.style.display = "none";
        btn.innerHTML="edit";
        shownDiv.style.display = "block";
        
    } else {
        targetDiv1.style.display = "block";
        targetDiv2.style.display = "block";
        btn.innerHTML="x";
        shownDiv.style.display = "none";

    }
};