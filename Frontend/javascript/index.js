
$(document).ready(function () {

    // banner owl carousel
    $('#banner-area .owl-carousel').owlCarousel({
        dots: true,
        items: 1,
        autoplay: true,
        loop: true
    });

    // men's clothing owl carousel
    $("#men-clothing .owl-carousel").owlCarousel({
        loop: true,
        nav: true,
        dots: false,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items: 5
            }
        }
    });

    // women's clothing owl carousel
    $("#women-clothing .owl-carousel").owlCarousel({
        loop: true,
        nav: true,
        dots: false,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items: 5
            }
        }
    });

    // kid's clothing owl carousel
    $("#kid-clothing .owl-carousel").owlCarousel({
        loop: true,
        nav: true,
        dots: false,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items: 5
            }
        }
    });

    // kid's clothing owl carousel
    $("#accessories .owl-carousel").owlCarousel({
        loop: true,
        nav: true,
        dots: false,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items: 5
            }
        }
    });

    //product qty section
    let $qty_up = $(".qty .qty-up");
    let $qty_down = $(".qty .qty-down");
    let $deal_price = $("#deal-price");

    //click on qty up button
    $qty_up.click(function (e) {

        let $input = $(".qty_input[data-id='" + $(this).data("id") + "']");
        let $price = $(".product_price[data-id='" + $(this).data("id") + "']");

        // Adjust price based on item quantity w/ ajax call
        $.ajax({
            url: "../Backend/Template/ajax.php",
            type: 'post',
            data: { itemid: $(this).data("id") },
            success: function (result) {
                let obj = JSON.parse(result);
                let item_price = obj[0]['item_price'];

                if ($input.val() >= 1 && $input.val() <= 9) {
                    $input.val(function (i, oldval) {
                        return ++oldval;
                    });
                    // increase price based on item qty
                    $price.text(parseInt(item_price * $input.val()).toFixed(2));

                    // increase subtotal
                    let subtotal = parseInt($deal_price.text()) + parseInt(item_price);
                    $deal_price.text(subtotal.toFixed(2));
                }
            }
        });
    });


    //click on qty down button
    $qty_down.click(function (e) {
        let $input = $(".qty_input[data-id='" + $(this).data("id") + "']");
        let $price = $(".product_price[data-id='" + $(this).data("id") + "']");

        // Adjust price based on item quantity w/ ajax call
        $.ajax({
            url: "../Backend/Template/ajax.php",
            type: 'post',
            data: { itemid: $(this).data("id") },
            success: function (result) {
                let obj = JSON.parse(result);
                let item_price = obj[0]['item_price'];

                if ($input.val() > 1 && $input.val() <= 10) {
                    $input.val(function (i, oldval) {
                        return --oldval;
                    });
                    // increase price based on item qty
                    $price.text(parseInt(item_price * $input.val()).toFixed(2));

                    // increase subtotal
                    let subtotal = parseInt($deal_price.text()) - parseInt(item_price);
                    $deal_price.text(subtotal.toFixed(2));
                }
            }
        });
    });

    // Item Size 

    const button1 = document.getElementById("clickButton1");
    const button2 = document.getElementById("clickButton2");
    const button3 = document.getElementById("clickButton3");
    
    let prevClickedDiv = null; // To keep track of the previously clicked button

    // Add click event listeners to the buttons
    button1.addEventListener("click", buttonClick);
    button2.addEventListener("click", buttonClick);
    button3.addEventListener("click", buttonClick);

    // JavaScript function that will be called when a button is clicked
    function buttonClick(event) {
        const div = event.target.parentElement;

        // Reset background color of the previously clicked div
        if (prevClickedDiv) {
            prevClickedDiv.style.backgroundColor = "";
        }

        // Change background color of the clicked button and update prevClickedDiv
        div.style.backgroundColor = "lightblue";
        prevClickedDiv = div;

    }


       

});
