$(document).ready(function() {
    // var URLactual = jQuery(location).attr('href');
    // alert(URLactual);

    var pathname = window.location.pathname;


    if (pathname == '/fundacion/index.php') {
        $("#index.php").addClass("active");
        // alert('holapath');
    } else {
        var path = pathname.slice(17)
            // alert(path);
            // $("+ path + ").addClass("active");
        document.getElementById(path).classList.add('active');
        // document.getElementById(path).addClass("active");
        console.log(path);
    }



    // $("#educanda").hover(function() {
    //     $("#info").empty();
    //     $("#info").append('<img id="beneficio4" class="imagen_donaciones" src="../../img/culturaempresarial/ceducanda.jpg" alt="">');
    // });

    // $("#info").mouseout(function() {
    //     $("#info").empty();
    //     // $("#info").append('<img id="beneficio4" class="imagen_donaciones" src="../../img/culturaempresarial/Imagen8.png" alt="">');
    // });


    $("#beneficio1").mouseover(function() {
        // alert('aqui');
        $("#movible").empty();
        $("#movible").append('<img id="beneficio1" class="imagen_donaciones" src="../../img/culturaempresarial/Imagen5.png" alt="">');
        // console.log("#beneficio1");
        // console.log("#beneficio1");
    });
    $("#beneficio2").mouseover(function() {
        $("#movible").empty();
        $("#movible").append('<img id="beneficio2" class="imagen_donaciones" src="../../img/culturaempresarial/Imagen6.png" alt="">');
        console.log("#beneficio2");
    });
    $("#beneficio3").mouseover(function() {
        $("#movible").empty();
        $("#movible").append('<img id="beneficio3" class="imagen_donaciones" src="../../img/culturaempresarial/Imagen7.png" alt="">');
        console.log("#beneficio3");
    });
    $("#beneficio4").mouseover(function() {
        $("#movible").empty();
        $("#movible").append('<img id="beneficio4" class="imagen_donaciones" src="../../img/culturaempresarial/Imagen8.png" alt="">');
        console.log("#beneficio4");
    });

    $("#salir").mouseout(function() {
        $("#movible").empty();
        $("#movible").append('<img class="imagen_donaciones" src="../../img/f-icons/5.png" alt="">');
        console.log("#beneficio4");
    });

    $("#principal").mouseover(function() {
        alert('alerta');
        $(".parrafo1").addClass("p_animatio");
        $(".parrafo1").css("display", "block")
    });

    $("#second").mouseover(function() {
        $(".parrafo2").addClass("p_animatio");
        $(".parrafo2").css("display", "block")
    });

    $("#third").mouseover(function() {
        $(".parrafo3").addClass("p_animatio");
        $(".parrafo3").css("display", "block")
    });
    $("#fourth").mouseover(function() {
        $(".parrafo4").addClass("p_animatio");
        $(".parrafo4").css("display", "block")
    });

    $("#fifth").mouseover(function() {
        $(".parrafo5").addClass("p_animatio");
        $(".parrafo5").css("display", "block")
    });


    $("#principal").mouseout(function() {
        $(".parrafo1").css("display", "block")
    });
    $("#second").mouseout(function() {
        $(".parrafo2").css("display", "block")
    });
    $("#third").mouseout(function() {
        $(".parrafo3").css("display", "block")
    });
    $("#fourth").mouseout(function() {
        $(".parrafo4").css("display", "block")
    });
    $("#fifth").mouseout(function() {
        $(".parrafo5").css("display", "block")
    });




});