function ver(respuesta) {

    var respuestas = respuesta;


    if (respuestas === 'productos') {
        console.log(respuestas);
        var formData = new FormData();
        formData.append('producto', respuestas);
        formData.append('busqueda', 'busqueda');

        console.log('formdata ' + formData);
        fetch('../Models/producto.php', {
                method: 'POST',
                body: formData
            })
            .then(respuesta => respuesta.json())
            .then(data => {

                console.log(data);
                var tabla = "<button type='button' onclick='nuevo()' class='btn btn-success'>Añadir Producto</button>";
                tabla += "<table class='table'>";
                tabla += " <thead>";
                tabla += "  <tr>";
                tabla += "<th scope='col'>ID PRODUCTO</th>";
                tabla += "<th scope='col'>CATEGORIA</th>";
                tabla += "<th scope='col'>PRODUCTO</th>";
                tabla += "<th scope='col'>DESCRIPCION</th>";
                tabla += "<th scope='col'>IMAGEN</th>";
                tabla += "<th scope='col'>CANTIDAD</th>";
                tabla += "<th scope='col'>COSTO</th>";
                tabla += "<th scope='col'>PRECIO</th>";
                tabla += "<th scope='col'>ESTATUS</th>";
                tabla += "<th scope='col'>#</th>";

                tabla += " </tr>";
                tabla += " </thead>";

                tabla += "  <tbody>";

                for (var a = 0; a < data.length; a++) {
                    tabla += "  <tr>";
                    tabla += "  <td>" + data[a].ID_PRODUCTO + "</td>";
                    tabla += "  <td>" + data[a].CATEGORIA + "</td>";
                    tabla += "  <td>" + data[a].NOMBRE + "</td>";
                    tabla += "  <td>" + data[a].DESCRIPCION + "</td>";
                    tabla += "  <td>" + data[a].IMAGEN + "</td>";
                    tabla += "  <td>" + data[a].CANTIDAD + "</td>";
                    tabla += "  <td>" + data[a].COSTO + "</td>";
                    tabla += "  <td>" + data[a].PRECIO + "</td>";
                    tabla += "  <td>" + data[a].ESTATUS + "</td>";
                    tabla += "  <td><button onclick='editprod(" + data[a].ID_PRODUCTO + ")' id='edt_" + data[a].ID_PRODUCTO + "' type='button' class='btn btn-success'>Edit</button></td>";
                    tabla += "  </tr>";

                }


                tabla += " </tbody>";
                tabla += " </tABLE>";
                document.getElementById('tabla').innerHTML = tabla;
            })
            .catch(error => console.log(error)); //}}

    }

    if (respuestas == 'Usuarios') {
        console.log(respuestas);
    }

    if (respuestas === 'categorias') {
        console.log(respuestas);
        var formData = new FormData();
        formData.append('busqueda', 'todo');
        fetch('../Models/categoria.php', {
                method: 'POST',
                body: formData
            })
            .then(respuesta2 => respuesta2.json())
            .then(data2 => {

                console.log(data2);
                var tablacat = "<button type='button' onclick='nuevacat()' class='btn btn-success'>Nueva Categoria</button>";
                tablacat += "<table class='table'>";
                tablacat += " <thead>";
                tablacat += "  <tr>";
                tablacat += "<th scope='col'>ID CATEGORIA</th>";
                tablacat += "<th scope='col'>NOMBRE</th>";
                tablacat += "<th scope='col'>IMAGEN</th>";
                tablacat += "<th scope='col'>ESTATUS</th>";
                tablacat += "<th scope='col'>#</th>";

                tablacat += " </tr>";
                tablacat += " </thead>";

                tablacat += "  <tbody>";
                for (var a = 0; a < data2.length; a++) {
                    tablacat += "  <tr>";
                    tablacat += "  <td>" + data2[a].ID_CATEGORIA + "</td>";
                    tablacat += "  <td>" + data2[a].NOMBRE + "</td>";
                    tablacat += "  <td>" + data2[a].IMG + "</td>";
                    tablacat += "  <td>" + data2[a].ESTATUS + "</td>";
                    tablacat += "  <td><button onclick='editcat(" + data2[a].ID_CATEGORIA + ")' id='edt_" + data2[a].ID_CATEGORIA + "' type='button' class='btn btn-success'>Edit</button></td>";
                    tablacat += "  </tr>";
                }
                tablacat += " </tbody>";
                tablacat += " </tABLE>";
                document.getElementById('tabla').innerHTML = tablacat;

            })
            .catch(error => console.log(error));
    }

    if (respuestas == 'banner') {
        console.log(respuestas);
        var formData = new FormData();
        formData.append('busqueda', respuestas);
        fetch('../Models/banner.php', {
                method: 'POST',
                body: formData
            })
            .then(respuesta2 => respuesta2.json())
            .then(data2 => {

                console.log(data2);
                console.log(data2.length);
                var tablacat = "<button type='button' onclick='nuevobann()' class='btn btn-success'>Nuevo Banner</button>";
                tablacat += "<table class='table'>";
                tablacat += " <thead>";
                tablacat += "  <tr>";
                tablacat += "<th scope='col'>ID BANNER</th>";
                tablacat += "<th scope='col'>SECCION</th>";
                tablacat += "<th scope='col'>DESCRIPCION</th>";
                tablacat += "<th scope='col'>ESTATUS</th>";
                tablacat += "<th scope='col'>IMAGEN</th>";
                tablacat += "<th scope='col'>#</th>";

                tablacat += " </tr>";
                tablacat += " </thead>";

                tablacat += "  <tbody>";
                for (var a = 0; a < data2.length; a++) {
                    tablacat += "  <tr>";
                    tablacat += "  <td>" + data2[a].ID_BANNER + "</td>";
                    tablacat += "  <td>" + data2[a].SECCION + "</td>";
                    tablacat += "  <td>" + data2[a].DESCRIPCION + "</td>";
                    tablacat += "  <td>" + data2[a].ESTATUS + "</td>";
                    tablacat += "  <td><img src='../img/banner/" + data2[a].IMAGEN.substr(10) + "' style='width:40px; height:40px'</td>";
                    tablacat += "  <td><button onclick='editbann(" + data2[a].ID_BANNER + ")' id='edt_" + data2[a].ID_BANNER + "' type='button' class='btn btn-success'>Edit</button></td>";
                    tablacat += "  </tr>";
                }
                tablacat += " </tbody>";
                tablacat += " </tABLE>";
                document.getElementById('tabla').innerHTML = tablacat;

            })
            .catch(error => console.log(error));

        console.log(respuestas);
    }

    if (respuestas == 'ventas') {
        console.log(respuestas);
    }

    if (respuestas == 'miembros') {
        console.log(respuestas);
        var formData = new FormData();
        formData.append('busqueda', respuestas);
        fetch('../Models/miembros.php', {
                method: 'POST',
                body: formData
            })
            .then(respuesta2 => respuesta2.json())
            .then(data2 => {

                console.log(data2);
                console.log(data2.length);
                console.log(data2[0].nombre)
                console.log(data2[0].imagen)
                var tablacat = "<button type='button' onclick='nuevomiembro()' class='btn btn-success'>Añadir Miembro</button>";
                tablacat += "<table class='table'>";
                tablacat += " <thead>";
                tablacat += "  <tr>";
                tablacat += "<th scope='col'>NOMBRE</th>";
                tablacat += "<th scope='col'>CÉDULA</th>";
                tablacat += "<th scope='col'>POSICIÓN</th>";
                tablacat += "<th scope='col'>NACIONALIDAD</th>";
                tablacat += "<th scope='col'>ESTADO CIVIL</th>";
                tablacat += "<th scope='col'>EMAIL</th>";
                tablacat += "<th scope='col'>ESTUDIOS</th>";
                tablacat += "<th scope='col'>EXPERIENCIA</th>";
                tablacat += "<th scope='col'>AFICIÓN</th>";
                tablacat += "<th scope='col'>IMAGEN</th>";
                tablacat += "<th scope='col'>#</th>";

                tablacat += " </tr>";
                tablacat += " </thead>";

                tablacat += "  <tbody>";
                for (var a = 0; a < data2.length; a++) {
                    tablacat += "  <tr>";
                    tablacat += "  <td>" + data2[a].nombre + " " + data2[a].apellido + "</td>";
                    tablacat += "  <td>" + data2[a].cedula + "</td>";
                    tablacat += "  <td>" + data2[a].posicion + "</td>";
                    tablacat += "  <td>" + data2[a].nacionalidad + "</td>";
                    tablacat += "  <td>" + data2[a].estado_civil + "</td>";
                    tablacat += "  <td>" + data2[a].email + "</td>";
                    tablacat += "  <td>" + data2[a].estudios + "</td>";
                    tablacat += "  <td>" + data2[a].experiencia + "</td>";
                    tablacat += "  <td>" + data2[a].aficion + "</td>";
                    tablacat += "  <td><img src='../img/perfiles/" + data2[a].imagen.substr(10) + "' style='width:40px; height:40px'</td>";
                    tablacat += "  <td><button onclick='editmiembro(" + data2[a].cedula + ")' id='edt_" + data2[a].cedula + "' type='button' class='btn btn-success'>Edit</button></td>";
                    tablacat += "  </tr>";
                }
                tablacat += " </tbody>";
                tablacat += " </tABLE>";
                document.getElementById('tabla').innerHTML = tablacat;

            })
            .catch(error => console.log(error));

        console.log(respuestas);
    }

    if (respuestas == 'galerias') {
        console.log(respuestas);
        var formData = new FormData();
        formData.append('busqueda', respuestas);
        fetch('../Models/galeria.php', {
                method: 'POST',
                body: formData
            })
            .then(respuesta2 => respuesta2.json())
            .then(data2 => {

                console.log(data2);
                console.log(data2.length);
                var tablacat = "<button type='button' onclick='nuevagaleria()' class='btn btn-success'>Nuevo Banner</button>";
                tablacat += "<table class='table'>";
                tablacat += " <thead>";
                tablacat += "  <tr>";
                tablacat += "<th scope='col'>ID</th>";
                tablacat += "<th scope='col'>TÍTULO</th>";
                tablacat += "<th scope='col'>DESCRIPCION</th>";
                tablacat += "<th scope='col'>IMAGEN</th>";
                tablacat += "<th scope='col'>#</th>";

                tablacat += " </tr>";
                tablacat += " </thead>";

                tablacat += "  <tbody>";
                for (var a = 0; a < data2.length; a++) {
                    tablacat += "  <tr>";
                    tablacat += "  <td>" + data2[a].id + "</td>";
                    tablacat += "  <td>" + data2[a].titulo + "</td>";
                    tablacat += "  <td>" + data2[a].descripcion + "</td>";
                    tablacat += "  <td><img src='../img/banner/" + data2[a].imagen.substr(10) + "' style='width:40px; height:40px'</td>";
                    tablacat += "  <td><button onclick='editgaleria(" + data2[a].ID_BANNER + ")' id='edt_" + data2[a].ID_BANNER + "' type='button' class='btn btn-success'>Add/Edit</button></td>";
                    tablacat += "  </tr>";
                }
                tablacat += " </tbody>";
                tablacat += " </tABLE>";
                document.getElementById('tabla').innerHTML = tablacat;

            })
            .catch(error => console.log(error));

        console.log(respuestas);
    }

}

//**************************************CRUD CATEGORIA*******************************
//NUEVA CATEGORIA
function nuevacat() {
    var nuevop = ' <h3>Creación de categorias</h3>';
    nuevop += '  <form method="POST" id="cat_form">';
    nuevop += '  <button type="button" onclick="guardarcat()" class="btn btn-success">Guardar Categoria</button>';
    nuevop += '  <hr><div class="form-row">';
    nuevop += '  <div class="form-group col-md-4">';
    nuevop += '  <label for="">Nombre de la categoria</label><input class="form-control " type="text" placeholder="Nombre" name="nombre_cat" id="nombre_cat"></div>'; //CIERRA DIV
    nuevop += '  <div class="form-group col-md-4">';
    nuevop += '  <label for="">Estatus</label> <select name="Estatus" class="form-control" id="Estatus_cat">';
    nuevop += '  <option value="ACTIVO">ACTIVO</option><option value="INACTIVO">INACTIVO</option> </select></div></div>'; //CIERRA DIV
    nuevop += '   <div class="form-row"> <div class="form-group col-md-4">';
    nuevop += '   <label for="">Imagen</label>  <input class="form-control" type="file" placeholder="Imagen" name="imagen" id="imagen" accept="image/png, image/jpeg"></div></div>'; //CIERRE 2 DIV
    nuevop += '  </form>';

    document.getElementById('tabla').innerHTML = nuevop;

}
//GUARDAR NUEVA CAT
function guardarcat() {
    var form = new FormData();
    form.append('busqueda', 'guardar');
    form.append('nombre_cat', document.getElementById('nombre_cat').value);
    form.append('Estatus', document.getElementById('Estatus_cat').value);
    form.append('imagen', document.getElementById('imagen').value);
    console.log(form);
    fetch('../Models/categoria.php', {
            method: 'POST',
            body: form
        })
        .then(respuesta2 => respuesta2.json())
        .then(data2 => {
            console.log(data2);
            alert("Se creo la categoria " + document.getElementById('nombre_cat').value)
            ver('categorias');
        })
        .catch(error => console.log(error));
}
//EDITAR CATEGORIA
function editcat(editcat) {
    var formData = new FormData();
    formData.append('busqueda', 'buscaporid');
    formData.append('id', editcat);
    fetch('../Models/categoria.php', {
            method: 'POST',
            body: formData
        })
        .then(respuesta2 => respuesta2.json())
        .then(data2 => {

            console.log(data2[0].NOMBRE);
            var nuevop = ' <h3>Modificar categorias</h3>';
            nuevop += '  <form method="POST" id="cat_form">';
            nuevop += '  <button type="button" onclick="actualizacat()" class="btn btn-success">Guardar Categoria</button>';
            nuevop += '  <hr><div class="form-row">';
            nuevop += '  <div class="form-group col-md-4">';
            nuevop += '<input class="form-control " type="hidden"  value="' + data2[0].ID_CATEGORIA + '" name="id_cat" id="id_cat">'
            nuevop += '  <label for="">Nombre de la categoria</label><input class="form-control " type="text" placeholder="Nombre" value="' + data2[0].NOMBRE + '" name="nombre_cat" id="nombre_cat"></div>'; //CIERRA DIV
            nuevop += '  <div class="form-group col-md-4">';
            nuevop += '  <label for="">Estatus</label> <select name="Estatus" class="form-control" id="Estatus_cat">';
            nuevop += '  <option value="ACTIVO">ACTIVO</option><option value="INACTIVO">INACTIVO</option> </select></div></div>'; //CIERRA DIV
            nuevop += '  <div class="form-row"> <div class="form-group col-md-4">';
            nuevop += '  <label for="">Imagen</label>  <input class="form-control" type="file" placeholder="Imagen" name="imagen" id="imagen" value="' + data2[0].IMG + '" accept="image/png, image/jpeg"></div></div>'; //CIERRE 2 DIV
            nuevop += '  </form>';

            document.getElementById('tabla').innerHTML = nuevop;


        })
        .catch(error => console.log(error));

}
//UPDATE CATEGORIA
function actualizacat() {
    var form = new FormData();
    form.append('busqueda', 'actualizar');
    form.append('id', document.getElementById('id_cat').value);
    form.append('nombre_cat', document.getElementById('nombre_cat').value);
    form.append('Estatus', document.getElementById('Estatus_cat').value);
    form.append('imagen', document.getElementById('imagen').value);
    console.log(form);
    fetch('../Models/categoria.php', {
            method: 'POST',
            body: form
        })
        .then(respuesta2 => respuesta2.json())
        .then(data2 => {
            console.log(data2);
            alert("Se Actualizó la categoria " + document.getElementById('nombre_cat').value)
            ver('categorias');
        })
        .catch(error => console.log(error));
}

//**************************************CRUD PRODUCTO*******************************
//NUEVO PRODUCTO
function nuevo() {
    console.log("respuestas");
    var formData = new FormData();
    formData.append('busqueda', 'solocat');
    console.log(formData);
    fetch('../Models/categoria.php', {
            method: 'POST',
            body: formData
        })
        .then(respuesta2 => respuesta2.json())
        .then(data2 => {
            var nuevop = ' <h3>Creación de productos</h3>';
            nuevop += '  <form method="POST" id="producto_form">';
            nuevop += '  <button type="button" onclick="guardar()" class="btn btn-success">Añadir Producto</button>';
            nuevop += '  <hr><div class="form-row">';
            nuevop += '  <div class="form-group col-md-4">';
            nuevop += '  <label for="">Nombre del Producto</label><input class="form-control " type="text" placeholder="Nombre" name="nombre" id="nombre"></div>'; //CIERRA DIV
            nuevop += '  <div class="form-group col-md-4">';
            nuevop += '  <label for="">Estatus</label> <select name="Estatus" class="form-control" id="Estatus">';
            nuevop += '  <option value="ACTIVO">ACTIVO</option><option value="SALE">SALE</option> <option value="INACTIVO">INACTIVO</option> </select></div></div>'; //CIERRA DIV
            nuevop += '  <div class="form-row"> <div class="form-group col-md-4">';
            nuevop += '  <label for="">Descripcion</label><div class="input-group-prepend">  <span class="input-group-text">With textarea</span> </div>';
            nuevop += '  <textarea class="form-control" id="descrip" aria-label="With textarea"></textarea></div></div>';
            nuevop += '   <div class="form-row"> <div class="form-group col-md-4">';
            nuevop += '   <label for="">Categoria</label><select onchange="buscarcategoria()" name="categoria" class="form-control " id="categoria">  </select></div>'; //SELECT DE CATEGORIAS
            nuevop += '   <div class="form-group col-md-4">';
            nuevop += '   <label for="">Imagen</label>  <input class="form-control" type="file" placeholder="Imagen" name="imagen" id="imagen" accept="image/png, image/jpeg"></div></div>'; //CIERRE 2 DIV
            nuevop += '   <div class="form-row">  <div class="form-group col-md-4">';
            nuevop += '   <label for="">Cantidad</label><input class="form-control " type="number" placeholder="Cant" name="Cantidad" id="Cantidad"></div></div>';
            nuevop += '   <div class="form-row"> <div class="form-group col-md-4">';
            nuevop += '  <label for="">Costo</label><input class="form-control " type="text" placeholder="Costo" name="Costo" id="Costo"> </div>';
            nuevop += '  <div class="form-group col-md-4"><label for="">Precio</label><input class="form-control" type="text" placeholder="Precio" name="precio" id="precio"></div>';
            nuevop += '  </div></form>';

            document.getElementById('tabla').innerHTML = nuevop;

            for (var a = 0; a < data2.length; a++) {

                var option = document.createElement("option");
                var t = document.createTextNode(data2[a].NOMBRE);
                t.nodeValue = data2[a].ID_CATEGORIA + " - " + data2[a].NOMBRE;
                option.appendChild(t);
                console.log(document.getElementById("categoria"));
                document.getElementById("categoria").appendChild(option);

                console.log(t.nodeValue);

            }

            console.log(data2);
        })
        .catch(error => console.log(error)); //}}
}
//GUARDAR NUEVO PRODUCTO
function guardar() {
    var form = new FormData();
    form.append('producto', '');
    form.append('busqueda', 'guardar');
    form.append('nombre', document.getElementById('nombre').value);
    form.append('categoria', (document.getElementById('categoria').value).substr(0, 4));
    form.append('descripcion', document.getElementById('descrip').value);
    form.append('estatus', document.getElementById('Estatus').value);
    form.append('precio', document.getElementById('precio').value);
    form.append('costo', document.getElementById('Costo').value);
    form.append('cantidad', document.getElementById('Cantidad').value);
    form.append('imagen', document.getElementById('imagen').value);
    console.log((document.getElementById('categoria').value).substr(0, 4));
    fetch('../Models/producto.php', {
            method: 'POST',
            body: form
        })
        .then(respuesta2 => respuesta2.json())
        .then(data2 => {
            alert("Se creo el producto " + document.getElementById('nombre').value)
            ver('productos');
        })
        .catch(error => console.log(error));
}
//EDITAR PRODUCTO
function editprod(id) {
    var formData = new FormData();
    formData.append('busqueda', 'buscaporid');
    formData.append('id', id);
    formData.append('producto', '');
    console.log(formData);
    fetch('../Models/producto.php', {
            method: 'POST',
            body: formData
        })
        .then(respuesta2 => respuesta2.json())
        .then(data2 => {
            var nuevop = ' <h3>Actualizacion de productos</h3>';
            nuevop += '  <form method="POST" id="producto_form">';
            nuevop += '  <button type="button" onclick="actualizaprod()" class="btn btn-success">Actualizar Producto</button>';
            nuevop += '  <input type="hidden" id="id_prod" value="' + data2[0].ID_PRODUCTO + '">';
            nuevop += '  <hr><div class="form-row">';
            nuevop += '  <div class="form-group col-md-4">';
            nuevop += '  <label for="">Nombre del Producto</label><input class="form-control " type="text" value="' + data2[0].NOMBRE + '" name="nombre" id="nombre"></div>'; //CIERRA DIV
            nuevop += '  <div class="form-group col-md-4">';
            nuevop += '  <label for="">Estatus</label> <select name="Estatus" class="form-control" id="Estatus">';
            nuevop += '  <option value="ACTIVO">ACTIVO</option><option value="SALE">SALE</option> <option value="INACTIVO">INACTIVO</option> </select></div></div>'; //CIERRA DIV
            nuevop += '  <div class="form-row"> <div class="form-group col-md-4">';
            nuevop += '  <label for="">Descripcion</label><div class="input-group-prepend">  <span class="input-group-text">With textarea</span> </div>';
            nuevop += '  <textarea class="form-control" id="descrip" value="' + data2[0].DESCRIPCION + '" aria-label="With textarea"></textarea></div></div>';
            nuevop += '   <div class="form-row"> <div class="form-group col-md-4">';
            nuevop += '   <label for="">Categoria</label><br> <label for="">"' + data2[0].CATEGORIA + '"</label><input type="hidden" id="categoria" value="' + data2[0].ID_CATEGORIA + '"></div>'; //SELECT DE CATEGORIAS
            nuevop += '   <div class="form-group col-md-4">';
            nuevop += '   <label for="">Imagen</label><br>  <label for="">"' + data2[0].IMAGEN + '"</label><input type="hidden" id="imagen" value="' + data2[0].IMAGEN + '"></div></div>'; //CIERRE 2 DIV
            nuevop += '   <div class="form-row">  <div class="form-group col-md-4">';
            nuevop += '   <label for="">Cantidad</label><input class="form-control " type="number"  value="' + data2[0].CANTIDAD + '" placeholder="Cant" name="Cantidad" id="Cantidad"></div></div>';
            nuevop += '   <div class="form-row"> <div class="form-group col-md-4">';
            nuevop += '  <label for="">Costo</label><input class="form-control " type="text" value="' + data2[0].COSTO + '" placeholder="Costo" name="Costo" id="Costo"> </div>';
            nuevop += '  <div class="form-group col-md-4"><label for="">Precio</label><input class="form-control" value="' + data2[0].PRECIO + '" type="text" placeholder="Precio" name="precio" id="precio"></div>';
            nuevop += '  </div></form>';

            document.getElementById('tabla').innerHTML = nuevop;


            console.log(data2);
        })
        .catch(error => console.log(error));
}
//UPDATE PRODUCTO
function actualizaprod() {

    var form = new FormData();
    form.append('busqueda', 'actualizar');
    form.append('producto', '');
    form.append('id_prod', document.getElementById('id_prod').value);
    form.append('nombre', document.getElementById('nombre').value);
    form.append('descripcion', document.getElementById('descrip').value);
    form.append('categoria', document.getElementById('categoria').value);
    form.append('Estatus', document.getElementById('Estatus').value);
    form.append('imagen', document.getElementById('imagen').value);
    form.append('cantidad', document.getElementById('Cantidad').value);
    form.append('precio', document.getElementById('precio').value);
    form.append('costo', document.getElementById('Costo').value);
    console.log(form);
    fetch('../Models/producto.php', {
            method: 'POST',
            body: form
        })
        .then(respuesta2 => respuesta2.json())
        .then(data2 => {
            console.log(data2);
            alert("Se Actualizó el producto " + document.getElementById('nombre').value)
            ver('productos');
        })
        .catch(error => console.log(error));

}

//**************************************CRUD BANNER*******************************
function nuevobann() {
    var nuevop = ' <h3>Nuevo Banner</h3>';
    nuevop += '  <form method="POST" id="cat_bann">';
    nuevop += '  <button type="button" onclick="guardarbann()" class="btn btn-success">Guardar Banner</button>';
    nuevop += '  <hr><div class="form-row">';
    nuevop += '  <div class="form-group col-md-4">';
    nuevop += '  <label for="">Imagen</label><input class="form-control" type="file" placeholder="Imagen" name="imagen" id="imagen" accept="image/png, image/jpeg"></div>'; //CIERRA DIV
    nuevop += '  <div class="form-group col-md-4">';
    nuevop += '  <label for="">Estatus</label> <select name="Estatus" class="form-control" id="Estatus">';
    nuevop += '  <option value="ACTIVO">ACTIVO</option><option value="INACTIVO">INACTIVO</option> </select></div></div>'; //CIERRA DIV
    nuevop += '  <div class="form-group col-md-4">';
    nuevop += '  <label for="">Seccion</label> <select name="Estatus" class="form-control" id="seccion">';
    nuevop += '  <option value="PRINCIPAL">PRINCIPAL</option></select></div>';
    nuevop += '  <div class="form-row"> <div class="form-group col-md-4">';
    nuevop += '  <label for="">Descripcion</label><input class="form-control " type="text" placeholder="Descripcion" name="descrip" id="descrip">  </div></div>'; //CIERRE 2 DIV
    nuevop += '  </form>';

    document.getElementById('tabla').innerHTML = nuevop;
}

function guardarbann() {
    var form = new FormData();
    form.append('busqueda', 'insertar');
    form.append('seccion', document.getElementById('seccion').value);
    form.append('descripcion', document.getElementById('descrip').value);
    form.append('imagen', document.getElementById('imagen').value);
    form.append('estatus', document.getElementById('Estatus').value);
    console.log(form);
    fetch('../Models/banner.php', {
            method: 'POST',
            body: form
        })
        .then(respuesta2 => respuesta2.json())
        .then(data2 => {
            console.log(data2);
            alert("Se creo el banner para la seccion " + document.getElementById('seccion').value)
            ver('banner');
        })
        .catch(error => console.log(error));
}

function editbann(editban) {
    var formData = new FormData();
    formData.append('busqueda', 'buscaporid');
    formData.append('id', editban);
    fetch('../Models/banner.php', {
            method: 'POST',
            body: formData
        })
        .then(respuesta2 => respuesta2.json())
        .then(data2 => {

            console.log(data2[0].NOMBRE);
            var nuevop = ' <h3>Modificar Banner</h3>';
            nuevop += '  <form method="POST" id="bann_form">';
            nuevop += '  <button type="button" onclick="actualizaban()" class="btn btn-success">Guardar Categoria</button>';
            nuevop += '  <hr><div class="form-row">';
            nuevop += '  <div class="form-group col-md-4">';
            nuevop += '<input class="form-control " type="hidden"  value="' + data2[0].ID_BANNER + '" name="id_bann" id="id_bann">'
            nuevop += '  <label for="">Nombre de la categoria</label><input class="form-control " type="text" placeholder="Nombre" value="' + data2[0].IMAGEN + '" name="SECCION" id="SECCION"></div>'; //CIERRA DIV
            nuevop += '  <div class="form-group col-md-4">';
            nuevop += '  <label for="">Estatus</label> <select name="Estatus" class="form-control" id="Estatus_bann">';
            nuevop += '  <option value="ACTIVO">ACTIVO</option><option value="INACTIVO">INACTIVO</option> </select></div></div>'; //CIERRA DIV
            nuevop += '  </form>';

            document.getElementById('tabla').innerHTML = nuevop;


        })
        .catch(error => console.log(error));
}

function actualizaban() {
    var form = new FormData();
    form.append('busqueda', 'actualizar');
    form.append('id', document.getElementById('id_bann').value);
    form.append('nombre_bann', document.getElementById('Estatus_bann').value);
    console.log(form);
    fetch('../Models/banner.php', {
            method: 'POST',
            body: form
        })
        .then(respuesta2 => respuesta2.json())
        .then(data2 => {
            console.log(data2);
            alert("Se Actualizó el banner " + document.getElementById('id_bann').value)
            ver('banner');
        })
        .catch(error => console.log(error));
}

//**************************************CRUD MIEMBRO*******************************
function nuevomiembro() {
    var nuevop = ' <h3>Nuevo Miembro</h3>';
    nuevop += '  <form method="POST" id="miembro">';
    nuevop += '  <button type="button" onclick="guardarmiembro()" class="btn btn-success">Guardar Miembro</button>';
    nuevop += '  <hr><div class="form-row">';
    nuevop += '  <div class="form-group col-md-6">';
    nuevop += '  <label for="">NOMBRE</label><input class="form-control" type="text" placeholder="Nombre" name="nombre" id="nombre" ></div>'; //CIERRA DIV
    nuevop += '  <div class="form-group col-md-6">';
    nuevop += '  <label for="">APELLIDO</label><input class="form-control" type="text" placeholder="apellido" name="apellido" id="apellido" ></div>'; //CIERRA DIV
    nuevop += '  <div class="form-group col-md-4">';
    nuevop += '  <label for="">CÉDULA</label><input class="form-control" type="text" placeholder="Cedula" name="cedula" id="cedula" ></div>'; //CIERRA DIV
    nuevop += '  <div class="form-group col-md-4">';
    nuevop += '  <label for="">NACIONALIDAD</label><input class="form-control" type="text" placeholder="nacional" name="nacional" id="nacional" ></div>'; //CIERRA DIV
    nuevop += '  <div class="form-group col-md-4">';
    nuevop += '  <label for="">EMAIL</label><input class="form-control" type="email" placeholder="Correo" name="correo" id="correo" ></div>'; //CIERRA DIV
    nuevop += '  <div class="form-group col-md-4">';
    nuevop += '  <label for="">IMAGEN</label><input class="form-control" type="file" placeholder="Imagen" name="imagen" id="imagen" accept="image/png, image/jpeg"></div>'; //CIERRA DIV
    nuevop += '  <div class="form-group col-md-4">';
    nuevop += '  <label for="">ESTADO CIVÍL</label> <select name="estado_civil" class="form-control" id="estado_civil">';
    nuevop += '  <option value="SOLTERO">SOLTERO</option><option value="CASADO">CASADO</option><option value="DIVORCIADO">DIVORCIADO</option><option value="OTRO">OTRO</option><option value="VIUDO">VIUDO</option> </select></div></div>'; //CIERRA DIV
    nuevop += '  <div class="form-group col-md-6">';
    nuevop += '  <label for="">POSICIÓN</label><input class="form-control" type="text" placeholder="puesto" name="puesto" id="puesto"></div>'; //CIERRA DIV
    nuevop += '  <div class="form-group col-md-6">';
    nuevop += '  <label for="">ESTUDIOS</label><input class="form-control" type="text" placeholder="estudios" name="estudios" id="estudios"></div>'; //CIERRA DIV
    nuevop += '  <div class="form-group col-md-6">';
    nuevop += '  <label for="">EXPERIENCIA</label><input class="form-control" type="text" placeholder="experiencia" name="experiencia" id="experiencia"></div>'; //CIERRA DIV
    nuevop += '  <div class="form-group col-md-4">';
    nuevop += '  <label for="">AFICÍON</label><textarea name="aficion" rows="10" cols="50" id="aficion" required>Escriba su mensaje</textarea></div>'; //CIERRA DIV
    nuevop += '  <div class="form-group col-md-4">';
    nuevop += '  <label for="">MOSTAR EN PÁGINA WEB</label> <select name="vista" class="form-control" id="vista" required>';
    nuevop += '  <option value="SI">MOSTRAR</option><option value="NO">NO MOSTRAR</option></select></div>';
    nuevop += '  </form>';

    document.getElementById('tabla').innerHTML = nuevop;
}

function guardarmiembro() {
    var form = new FormData();
    form.append('busqueda', 'insertar');
    form.append('nombre', document.getElementById('nombre').value);
    form.append('apellido', document.getElementById('apellido').value);
    form.append('cedula', document.getElementById('cedula').value);
    form.append('correo', document.getElementById('correo').value);
    form.append('imagen', document.getElementById('imagen').value);
    form.append('estado_civil', document.getElementById('estado_civil').value);
    form.append('puesto', document.getElementById('puesto').value);
    form.append('estudios', document.getElementById('estudios').value);
    form.append('experiencia', document.getElementById('experiencia').value);
    form.append('aficion', document.getElementById('aficion').value);
    form.append('vista', document.getElementById('vista').value);
    form.append('nacionalidad', document.getElementById('nacional').value);

    console.log(form);
    fetch('../Models/miembros.php', {
            method: 'POST',
            body: form
        })
        .then(respuesta2 => respuesta2.json())
        .then(data2 => {
            console.log(data2);
            alert("Se creo el nuevo miembro ")
            ver('miembros');
        })
        .catch(error => console.log(error));
}

//FALTA
function editbann(editban) {
    var formData = new FormData();
    formData.append('busqueda', 'buscaporid');
    formData.append('id', editban);
    fetch('../Models/banner.php', {
            method: 'POST',
            body: formData
        })
        .then(respuesta2 => respuesta2.json())
        .then(data2 => {

            console.log(data2[0].NOMBRE);
            var nuevop = ' <h3>Modificar Banner</h3>';
            nuevop += '  <form method="POST" id="bann_form">';
            nuevop += '  <button type="button" onclick="actualizaban()" class="btn btn-success">Guardar Categoria</button>';
            nuevop += '  <hr><div class="form-row">';
            nuevop += '  <div class="form-group col-md-4">';
            nuevop += '<input class="form-control " type="hidden"  value="' + data2[0].ID_BANNER + '" name="id_bann" id="id_bann">'
            nuevop += '  <label for="">Nombre de la categoria</label><input class="form-control " type="text" placeholder="Nombre" value="' + data2[0].IMAGEN + '" name="SECCION" id="SECCION"></div>'; //CIERRA DIV
            nuevop += '  <div class="form-group col-md-4">';
            nuevop += '  <label for="">Estatus</label> <select name="Estatus" class="form-control" id="Estatus_bann">';
            nuevop += '  <option value="ACTIVO">ACTIVO</option><option value="INACTIVO">INACTIVO</option> </select></div></div>'; //CIERRA DIV
            nuevop += '  </form>';

            document.getElementById('tabla').innerHTML = nuevop;


        })
        .catch(error => console.log(error));
}
//FALTA
function actualizaban() {
    var form = new FormData();
    form.append('busqueda', 'actualizar');
    form.append('id', document.getElementById('id_bann').value);
    form.append('nombre_bann', document.getElementById('Estatus_bann').value);
    console.log(form);
    fetch('../Models/banner.php', {
            method: 'POST',
            body: form
        })
        .then(respuesta2 => respuesta2.json())
        .then(data2 => {
            console.log(data2);
            alert("Se Actualizó el banner " + document.getElementById('id_bann').value)
            ver('banner');
        })
        .catch(error => console.log(error));
}