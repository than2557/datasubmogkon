$(document).ready(function($) {

    $(window).on('scroll', function() {

        //ADD .TIGHT
        if ($(window).scrollTop() + $(window).height() > $('.wrapper').outerHeight()) {
            $('body').addClass('tight');
            $('.arrow').hide();
        } else {
            $('body').removeClass('tight');
            $('.arrow').show();
        }
    });

    //BACK TO PRESENTATION MODE
    $("html").on("click", "body.tight .wrapper", function() {
        $('html, body').animate({
            scrollTop: $('.wrapper').outerHeight() - $(window).height()
        }, 500);
    });

});

$('.arrow').click(function() {
    $("html").animate({ scrollTop: $('html').prop("scrollHeight") }, 1200);
});


function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
    document.getElementById("myOverlay").style.display = "block";
}

function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
    document.getElementById("myOverlay").style.display = "none";
}

// Modal Image Gallery
function onClick(element) {
    document.getElementById("img01").src = element.src;
    document.getElementById("modal01").style.display = "block";
    var captionText = document.getElementById("caption");
    captionText.innerHTML = element.alt;
}
$(document).ready(function() {
    var zindex = 10;

    $("div.card").click(function(e) {
        e.preventDefault();

        var isShowing = false;

        if ($(this).hasClass("show")) {
            isShowing = true
        }

        if ($("div.cards").hasClass("showing")) {
            // a card is already in view
            $("div.card.show")
                .removeClass("show");

            if (isShowing) {
                // this card was showing - reset the grid
                $("div.cards")
                    .removeClass("showing");
            } else {
                // this card isn't showing - get in with it
                $(this)
                    .css({ zIndex: zindex })
                    .addClass("show");

            }

            zindex++;

        } else {
            // no cards in view
            $("div.cards")
                .addClass("showing");
            $(this)
                .css({ zIndex: zindex })
                .addClass("show");

            zindex++;
        }

    });
});


$(function() {

    "use strict"

    var init = "No items yet!";
    var counter = 0;

    // Initial Cart
    $(".counter").html(init);

    // Add Items To Basket
    function addToBasket() {
        counter++;
        $(".counter").html(counter).animate({
            'opacity': '0'
        }, 300, function() {
            $(".counter").delay(300).animate({
                'opacity': '1'
            })
        })
    }

    // Add To Basket Animation
    $("button").on("click", function() {
        addToBasket();
        $(this).parent().parent().find(".product_overlay").css({
            'transform': ' translateY(0px)',
            'opacity': '1',
            'transition': 'all ease-in-out .45s'
        }).delay(1500).queue(function() {
            $(this).css({
                'transform': 'translateY(-500px)',
                'opacity': '0',
                'transition': 'all ease-in-out .45s'
            }).dequeue();
        });
    });
});