function add(id_prod, cant) {

    var solicitado = document.getElementById('cant').Value;
    if (solicitado > cant) {
        alert('Actualmente solo contamos con ' + cant + ' de este producto');
    } else {
        var formData = new FormData();
        formData.append('busqueda', 'buscaporid');
        formData.append('id', id_prod);
        fetch('../Models/viewcat.php', {
                method: 'POST',
                body: formData
            })
            .then(respuesta2 => respuesta2.json())
            .then(data2 => {

                console.log(data2);
            })
            .catch(error => console.log(error));
    }
}
var arreglo = new Array();
var arreglo2 = new Array();
var final = new Array();
var contenido = new Array();

function anadecarrido() {

    if (sessionStorage.carrito == undefined) {
        tamanostr = 0;
    } else {
        arreglo2 = JSON.parse(sessionStorage.carrito)
        tamanostr = arreglo2.length;
    }

    var cantidad = document.getElementById('cant').value;
    var precio = document.getElementById('precio').value;
    var nombre = document.getElementById('nombre').value;
    var imagen = document.getElementById('img').value;

    final.push([nombre, precio, cantidad, imagen]);

    for (var i = 0; i < tamanostr; i++) {
        final.push([arreglo2[i][0], arreglo2[i][1], arreglo2[i][2], arreglo2[i][3]]);
    }
    sessionStorage.setItem('carrito', JSON.stringify(final));

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
    arr();
}

function capturadatos() {

    var nombre = document.getElementById('cant').value;
    var pais = document.getElementById('precio').value;
    var provincia = document.getElementById('nombre').value;
    var direccion = document.getElementById('img').value;
    var celular = document.getElementById('img').value;
    var empresa = document.getElementById('img').value;
    var correo = document.getElementById('img').value;


    final.push([nombre, precio, cantidad, imagen]);

    for (var i = 0; i < tamanostr; i++) {
        final.push([arreglo2[i][0], arreglo2[i][1], arreglo2[i][2], arreglo2[i][3]]);
    }
    sessionStorage.setItem('carrito', JSON.stringify(final));

}

function arr() {
    $("#carrito").css("heigth", "' + screen.height + 'px")
    var contenido = JSON.parse(sessionStorage.carrito)
    var total = 0;
    var subtotal;
    var html = '<div id="carritoitems" style="heigth:' + screen.height + 'px ">';
    html += ' <form method="POST" action="pago.php">';
    html += ' <div id="div">';
    for (var a = 0; a < contenido.length; a++) {

        subtotal = contenido[a][1] * contenido[a][2];
        total = total + subtotal;

        precsub = parseFloat(contenido[a][1]).toFixed(2) * contenido[a][2];
        html += ' <div class="row" id="nod' + a + '">';

        html += ' <div class="col-6">';
        html += ' <img src="' + contenido[a][3] + '" alt="" class="img-carrito ">';
        html += ' </div>';

        html += ' <div class="col-6">';
        html += ' <p><strong>' + contenido[a][0] + '</strong></p>';
        html += ' <input type="hidden" id="precio' + a + '" value="' + parseFloat(contenido[a][1]).toFixed(2) + '"><strong>' + contenido[a][0] + '</strong></input>';
        html += ' <p id="cantprecio' + a + '">$' + parseFloat(contenido[a][1]).toFixed(2) + ' X ' + contenido[a][2] + '</p>';
        html += ' <p id="subtotal' + a + '">Subtotal: $' + precsub + '</p>';
        html += ' <input type="hidden" id="subt' + a + '" value="' + precsub + '">';
        html += ' <a id="menos" onclick="menos(' + a + ', ' + parseFloat(contenido[a][1]).toFixed(2) + ',' + todo + ',' + precsub + ')"  class=" boton btn btn-primary" >-</a><input onchange="myFunction()" type="number" style="width: 100px;" min="0" name="cantidad" id="cantidad' + a + '" value="' + contenido[a][2] + '" > <a id="mas"  class=" boton btn btn-primary" onclick="mas(' + a + ', ' + parseFloat(contenido[a][1]).toFixed(2) + ',' + total + ')">+</a>';
        html += ' </div>';

        html += ' </div>'; //DIV CLASS ROW
        html += ' <hr>';

    }
    var todo = total;
    html += ' <div class="row">';
    html += ' <div class="col-6"> <p><strong>TOTAL</strong></p></div>';
    html += ' <input type="hidden" id="final" value="' + total.toFixed(2) + '"> ';
    html += ' <div class="col-6" id="total"><p><strong>$' + total.toFixed(2) + '</strong></p></div>';
    html += ' <hr>';
    html += ' <div class="col-md-12 mt-md-0 mt-12 btn" style="background-color: #d29500;padding: 15px;margin: 10px;"> <a id="cerra" href="principal.php#volver" class="close"><strong>SEGUIR COMPRANDO</strong></a></div>';
    html += ' <div class="col-md-12 mt-md-0 mt-12  boton btn btn-primary" style="padding: 15px;margin: 10px;"><a href="pago.php?amt=' + total + '" class="close">IR A PÁGINA DE PAGO</a></div>';
    html += ' </div>';
    html += ' </div>'; //DIV CLASS ELIMINABLE
    html += ' </form>';
    html += ' </div>'; //DIV ID CARRITOITEMS


    if (sessionStorage.carrito == undefined) {
        document.getElementById("carritoitems").innerHTML = "No tiene prpductos en su Carrito";
        console.log('aqui');
    } else {
        document.getElementById("carritoitems").innerHTML = html;
        console.log('aca');
    }
}

function myFunction() {
    console.log('aqui');
}

function pago() {
    var contenido = JSON.parse(sessionStorage.carrito)
    var total = 0;
    var subtotal;
    console.log(pago);
    var html = '<div id="id_venta" style="heigth:' + screen.height + 'px ">';
    html += ' <form method="POST" action="pago.php">';
    for (var a = 0; a < contenido.length; a++) {

        html += ' <div class="row">';

        html += ' <div class="col-6">';
        html += ' <img src="' + contenido[a][3] + '" alt="" class="img-carrito ">';
        html += ' </div>';

        html += ' <div class="col-6">';
        html += ' <p><strong>' + contenido[a][0] + '</strong></p>';
        html += ' <p>$' + parseFloat(contenido[a][1]).toFixed(2) + '</p>';
        html += ' <a id="menos" class=" boton btn btn-primary" onclick="menos(cant' + a + ')">-</a><input type="number" style="width: 100px;" name="cantidad" id="cantidad' + a + '" value="' + contenido[a][2] + '" > <a id="mas"  class=" boton btn btn-primary" onclick="mas(cant' + a + ')">+</a>';
        // html += ' <p>' + contenido[a][2] + '</p>';
        html += ' </div>';

        html += ' </div>'; //DIV CLASS ROW
        html += ' <hr>';

        subtotal = contenido[a][1] * contenido[a][2];
        total = total + subtotal;
    }
    console.log(subtotal + ' total ' + total);
    html += ' <div class="row">';
    html += ' <div class="col-6"> <p><strong>TOTAL</strong></p></div>';
    html += ' <div class="col-6">$' + total.toFixed(2) + '</div>';
    html += ' <hr>';
    html += ' <div class="col-md-12 mt-md-0 mt-12 btn" style="background-color: #d29500;padding: 15px;margin: 10px;"> <a id="cerra" href="principal.php#volver" class="close"><strong>SEGUIR COMPRANDO</strong></a></div>';
    html += ' <div class="col-md-12 mt-md-0 mt-12  boton btn btn-primary" style="padding: 15px;margin: 10px;"><input type="submit" class="close" value="IR A PÁGINA DE PAGO"></div>';
    html += ' </div>';
    html += ' </form>';
    html += ' </div>'; //DIV ID CARRITOITEMS


    if (sessionStorage.carrito == undefined) {
        document.getElementById("carritoitems").innerHTML = "No tiene prpductos en su Carrito";
        console.log('aqui');
    } else {
        document.getElementById("carritoitems").innerHTML = html;
        console.log('aca');
    }
}

function menos(prueba, precio, total2, precsub) {
    var id = 'cantidad' + prueba;
    var idcantprecio = 'cantprecio' + prueba;
    var idsubtotal = 'subtotal' + prueba;
    var idsubt = 'subt' + prueba;
    var iddiv = 'nod' + prueba;
    var cantidades = document.getElementById(idsubt).value;
    if (document.getElementById(id).value > 0) {
        document.getElementById(id).value = document.getElementById(id).value - 1;

        var cantidad = precio * document.getElementById(id).value;
        var total4 = document.getElementById('final').value;
        console.log(' subprecio ' + document.getElementById(idsubt).value);
        console.log(document.getElementById('final').value);
        console.log(' subtotal parte' + document.getElementById(idsubt).value);
        var total3 = parseFloat(total4 - cantidades) + parseFloat(cantidad.toFixed(2));
        console.log(' total final ' + total3);
        console.log(total4 + '*-*' + cantidades + '**' + cantidad.toFixed(2));
        var html2 = ' <p id="cantprecio' + prueba + '">$' + precio.toFixed(2) + ' X ' + document.getElementById(id).value + '</p>';
        var html3 = ' <p id="subtotal' + prueba + '">Subtotal: $' + cantidad.toFixed(2) + '</p>'
        var html4 = ' <p><strong>$' + total3.toFixed(2) + '</strong></p>';
        // var input = ' <input type="hidden" id="final" value="' + total3.toFixed(2) + '"> ';
        document.getElementById(idcantprecio).innerHTML = html2;
        document.getElementById(idsubtotal).innerHTML = html3;
        document.getElementById('total').innerHTML = html4;
        document.getElementById('final').value = total3.toFixed(2);
        document.getElementById(idsubt).value = cantidad.toFixed(2);
        console.log(document.getElementById('final').value);
    }
    if (document.getElementById(id).value == 0) {
        console.log('ESTA ES UNA PRUEBA');
        var d = document.getElementById("div");
        var d_nested = document.getElementById(iddiv);
        var throwawayNode = d.removeChild(d_nested);

    }
}

function modificarsession() {

}

function eliminarelementsession() {

}

function mas(prueba, precio, total) {
    var id = 'cantidad' + prueba;
    var idprueba = 'prueba' + prueba;
    var idcantprecio = 'cantprecio' + prueba;
    var idsubtotal = 'subtotal' + prueba;
    var idtotal = 'total' + prueba;
    var idhidden = 'final' + prueba;
    //FALTA BUSCAR CANTIDAD EN STOCK
    document.getElementById(id).value = parseInt(document.getElementById(id).value) + (1);
    // }
}

function comprar(id){
    alert(id);
}

$("#cerra").click(function() {
    console.log('path2');
    if (screen.width < 768) {
        console.log('PEQUEÑA');
    }
    if (screen.width < 1023 && screen.width > 768) {
        console.log('MEDIANA');
    }
    if (screen.width > 1023) {
        console.log('GRANDEd');
        console.log('pathsssdd');
        $("#pag_pricipal").removeClass("col-8 ").addClass("col-12 ");
        $("#carrito").addClass("hide");

    }
});