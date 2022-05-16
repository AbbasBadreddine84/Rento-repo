function sortit() {
    if (document.getElementById('sort_by').value == "low_to_high") {
        var list, i, switching, b, c, shouldSwitch;

        list = document.getElementsByClassName("unordered-list-listing");

        switching = true;

        /* Make a loop that will continue until
        no switching has been done: */
        while (switching) {
            // start by saying: no switching is done:
            switching = false;
            //get all elements(li)
            b = document.querySelectorAll('#li-cards');
            //get all listed prices on the card
            c = document.querySelectorAll('#price');

            // Loop through all list-items:
            for (i = 0; i < (b.length - 1); i++) {
                // start by saying there should be no switching:
                shouldSwitch = false;

                //coverting the <p> text to numbers
                var text1 = c[i].textContent;
                var price1 = Number(text1);

                var text2 = c[i + 1].textContent;
                var price2 = Number(text2);



                /* check if the next item should
                switch place with the current item: */

                if (price1 > price2) {
                    /* if next item is alphabetically
                    lower than current item, mark as a switch
                    and break the loop: */
                    shouldSwitch = true;
                    break;
                }
            }
            if (shouldSwitch) {
                /* If a switch has been marked, make the switch
                and mark the switch as done: */
                b[i].parentNode.insertBefore(b[i + 1], b[i]);
                switching = true;
            }
        }
    }
    else if (document.getElementById('sort_by').value == "high_to_low") {
        var list, i, switching, b, c, shouldSwitch;

        list = document.getElementsByClassName("unordered-list-listing");

        switching = true;

        /* Make a loop that will continue until
        no switching has been done: */
        while (switching) {
            // start by saying: no switching is done:
            switching = false;
            //get all elements(li)
            b = document.querySelectorAll('#li-cards');
            //get all listed prices on the card
            c = document.querySelectorAll('#price');

            // Loop through all list-items:
            for (i = 0; i < (b.length - 1); i++) {
                // start by saying there should be no switching:
                shouldSwitch = false;

                //coverting the <p> text to numbers
                var text1 = c[i].textContent;
                var price1 = Number(text1);

                var text2 = c[i + 1].textContent;
                var price2 = Number(text2);



                /* check if the next item should
                switch place with the current item: */

                if (price1 < price2) {
                    /* if next item is alphabetically
                    lower than current item, mark as a switch
                    and break the loop: */
                    shouldSwitch = true;
                    break;
                }
            }
            if (shouldSwitch) {
                /* If a switch has been marked, make the switch
                and mark the switch as done: */
                b[i].parentNode.insertBefore(b[i + 1], b[i]);
                switching = true;
            }
        }
    }

}


function sortingroomNumbers(num){

    var output=document.getElementById("output");
    output.value=num;

    var list, i, switching, b, c, shouldDelet;

    list = document.getElementsByClassName("unordered-list-listing");
    switching = true;


    

    /* Make a loop that will continue until
    no switching has been done: */
    while (switching) {
        // start by saying: no switching is done:
        switching = false;
        //get all elements(li)
        b = document.querySelectorAll('#li-cards');
        //get all listed prices on the card
        c = document.querySelectorAll('#bedrooms');

        // Loop through all list-items:
        for (i = 0; i < (b.length ); i++) {
            // start by saying there should be no switching:
            shouldDelet = false;

            //coverting the <p> text to numbers
            var text1 = c[i].textContent;
            var bedroomsNumber = Number(text1);

            /* check if the item should
            BE deleted*/

            if (bedroomsNumber<num || bedroomsNumber>num  ) {

                /* if next item is alphabetically
                lower than current item, mark as a switch
                and break the loop: */
                shouldDelet = true;
                break;
            }
        }
        if (shouldDelet) {
            /* If a switch has been marked, make the switch
            and mark the switch as done: */
            b[i].remove();
            switching = true;
        }

    }
}




function ClearTextbox(ParentControl) {    
    var control = $(ParentControl).get(0);    
    var list = control.getElementsByTagName("input");    
    var textAreaList = control.getElementsByTagName("textarea");    
    var selectList = control.getElementsByTagName("select");    
    for (var i = 0; i < list.length; i++) {    
        var attr = list[i].getAttribute('type');    
        var control = document.getElementById(list[i].id);    
        switch (attr) {    
            case "text":    
                $(control).val('');    
                break;    
                    
            case "hidden":    
                $(control).val('');    
                break;    
    
            case "checkbox":    
                control.checked = false;    
                break;    
    
            case "radio":    
                control.checked = false;    
                break;    
    
            case "range":    
                control.setAttribute('value', '0');    
                break;    
    
            case "file":    
                control.setAttribute('value', '');    
                break;    
        }    
    }    
    
    for (var i = 0; i < textAreaList.length; i++) {    
        var control = document.getElementById(textAreaList[i].id);    
        $(control).val('');    
    }    
    for (var i = 0; i < selectList.length; i++) {    
        $(selectList[i]).val('');    
    }    
}   


$('#btnClear').click(function (e) {    
    e.preventDefault();    
    ClearTextbox('#filters-form');
                             
}); 






//check type of accomodation




function showtype() {  
    if (document.getElementById('villatype1').checked === true)
     {
        var j, b;
        b = document.querySelectorAll('#li-cards');
        for (j = 1; j < (b.length)+1; j++) {
            if (document.getElementById("loc-text"+j).textContent == "House")
                b[j-1].remove();
            }

        }
    }

    
function showtype1() {  
    if (document.getElementById('housetype1').checked === true)
     {
        var j, b;
        b = document.querySelectorAll('#li-cards');
        for (j = 1; j < (b.length)+1; j++) {
            if (document.getElementById("loc-text"+j).textContent == "Villa")
                b[j-1].remove();
            }

        }
    }
       


