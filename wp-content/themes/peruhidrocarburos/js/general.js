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