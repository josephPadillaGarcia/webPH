/* 
    DESPLEGAR ASIDE 
    *
    ---------------------------------------------
    *
*/

$(document).ready(function () {
    /* mostrar y cerrar aside (menu lateral) */
    $("#abrir-side").click(function () {
        $(".sidenav").addClass("active");
    });

    $("#cerrar-side").click(function () {
        $(".sidenav").removeClass("active");
    });
    /*------------------------------------------*/

    /* show dropdown in menu responsive */
    $( "#btn-show-dropdown" ).click(function() {

        if($(this).hasClass('active')){
            $(this).removeClass('active');
            $( "#show-dropdown").slideUp();
        }else{
            $( "#show-dropdown").slideUp();
            $("#btn-show-dropdown").removeClass('active');
            $(this).addClass('active');
            $( "#show-dropdown").slideDown();
        }
    });
    /*------------------------------------------*/
});

/* ====================================================== */


/* 
    *
    ---------------------------------------------
    *
    CARROUSEL
*/
$(document).ready(function () {

    $('.owl-marcas.owl-carousel').owlCarousel({
        loop: false,
        center: false,
        margin: 0,
        //nav: true,
        autoplay: true,
        autoplayTimeout: 4000,
        autoplayHoverPause: true,
        navText: ["<i class='ri-arrow-left-s-line'></i>", "<i class='ri-arrow-right-s-line'></i>"],
        responsive: {
            0: {
                items: 2,
            },
            600: {
                items: 3
            },
            1049: {
                items: 5
            }
        }
    });


    $('.owl-trabajos.owl-carousel').owlCarousel({
        loop: false,
        center: false,
        nav: true,
        autoplay: true,
        autoplayTimeout: 4000,
        autoplayHoverPause: true,
        navText: ["<i class='ri-arrow-left-s-line'></i>", "<i class='ri-arrow-right-s-line'></i>"],
        responsive: {
            0: {
                items: 2,
            },
            600: {
                items: 3
            },
            1049: {
                items: 3
            }
        }
    });


    $('.owl-equipo.owl-carousel').owlCarousel({
        loop: false,
        center: false,
        margin: 0,
        nav: true,
        autoplay: true,
        autoplayTimeout: 4000,
        autoplayHoverPause: true,
        navText: ["<i class='ri-arrow-left-s-line'></i>", "<i class='ri-arrow-right-s-line'></i>"],
        responsive: {
            0: {
                items: 2,
            },
            600: {
                items: 3
            },
            1049: {
                items: 3
            }
        }
    });

});