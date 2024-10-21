$("#carr").click(function() {

    mostrar();
});

function mostrar() {
    if (screen.width < 768) {
        $("#pag_pricipal").removeClass("col-12").addClass("col-2 ");
        // $("#info").append('<img id="beneficio4" class="imagen_donaciones" src="../../img/CulturaEmpresarial/ceducanda.jpg" alt="">');
        $("#carrito").removeClass("hide").addClass("col-10");
        console.log('PEQUEÑA');
    }
    if (screen.width < 1023 && screen.width > 768) {
        console.log('MEDIANA');
        $("#pag_pricipal").removeClass("col-12").addClass("col-4 ");
        // $("#info").append('<img id="beneficio4" class="imagen_donaciones" src="../../img/CulturaEmpresarial/ceducanda.jpg" alt="">');
        $("#carrito").removeClass("hide").addClass("col-8");
    }
    if (screen.width > 1023) {
        console.log('GRANEDE');
        console.log('path');
        $("#pag_pricipal").removeClass("col-12").addClass("col-8 ");
        $("#carrito").removeClass("hide");
        $("#navt").height("80");
        arr();
    }
}

$("#menos").click(function() {
    console.log('prueba');
    console.log(document.getElementById('cantidad1').value);

});

$("#cantidad1").change(function() {
    alert("Handler for .change() called.");
});


$(".close").click(function() {
    console.log('path2');
    if (screen.width < 768) {
        console.log('PEQUEÑA');
    }
    if (screen.width < 1023 && screen.width > 768) {
        console.log('MEDIANA');
    }
    if (screen.width > 1023) {
        console.log('GRANDE');
        console.log('pathsss');
        $("#pag_pricipal").removeClass("col-8 ").addClass("col-12 ");
        $("#carrito").addClass("hide");

    }

});