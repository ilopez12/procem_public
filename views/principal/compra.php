<?php 
include_once("../../models/busquedaProd.php");
include_once("../../models/colegios.php");

$traer = buscabyProd($_GET['prod']);
$colegios = getall();

$datos = mysqli_fetch_array($traer);
$dcolegios = mysqli_fetch_array($colegios);

// foreach($colegios as $valor){
//     echo $valor['nombre'];

// }
// foreach($traer as $value){
    //     var_dump($value);
    //     // var_dump($value['ID_PRODUCTO']);
    // }
    // var_dump(mysqli_fetch_array($traer));
    // while($var = mysqli_fetch_array($colegios)){
    //         echo $var;
    // }
        header('Content-Type: text/html; charset=utf-8');
   
?>

<!DOCTYPE HTML>
<html>
    <head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="descriptison">
    <meta content="" name="keywords">
    <TItle>Vector Empresarial</TItle>
    <style>
       
        .imagen{
            width: 30%;
        }
        .referencia{
            color: black!important;
        }

        .referencia:hover{
            color: #3F51B5!important;
            text-decoration: underline;
        }
    </style>

    <?php include '../Partials/header.php'; ?>
<!-- 
    $productos = buscabycat -->

<div class="container carrouselpad">
    <!-- csrf -->
<form id="formulario" action="../../controller/productos.php" method="POST">
<input type="hidden" name="tipo" id="tipo" value="insertcompra">
    <input type="hidden" name="product" id="product" value="<?php echo $_GET['prod'];?>">
    <div class="row" style="padding-top: 2%;">
        <div class="col-5" style="text-align: left;">
            <h5>Resumen del pedido</h5> 
        </div>
        <hr>
        <div class="col-7" style="text-align: left; ">
            <h5><strong>Contacto</strong></h5>
           
        </div>
        <hr>
        <div class="col-5" style="padding-right: 25px;">
                <div class="row">
                <?php
                    foreach($traer as $value){
                    ?>
                        <div class="col-2" style="text-align: right;">
                            <img class="imagen" src="../../img/carrito/<?php echo $value['CARPETA'];?>/<?php echo $value['IMAGEN'];?>" alt="">
                        </div>
            
                    <div class="col-8">
                            <div>
                                <?php
                                    echo $value['NOMBRE'];
                                    $id = $value['ID_PRODUCTO'];
                                ?>
                            </div>
                            <hr>
                    </div>

                    <div class="col-2">
                        <?php
                            echo '$'.number_format($value['PRECIO'], 2);
                        ?> 
                        <hr>
                      
                    </div>
                <?php
                    }
                ?>

                    <div class="col-2">
                        Cantidad
                       
                    </div>
                    <div class="col-4"> 
                        <input class="form-control" style="width: 50%;" type="number" name="cant" id="cant" onchange="validacant(<?php echo $_GET['prod'];?>)" value="1" require>
                    </div>
                    <div class="col-6" style="text-align: right;" id="total_pagar">
                        <p>Total: <?php
                            echo '$'.number_format($value['PRECIO'], 2);
                        ?> </p>
                          <input type="hidden" name="total" id="total">
                    </div>

                    <div class="col-12 mt-3">
                        <p><strong>Información de Pago</strong></p>
                        <p style="font-size:12px"><strong style="color: black!important;">FUNDACIÓN PROCEM INT.</strong>
                            <br><strong style="color: black!important;">Banistmo</strong>
                            <br><strong style="color: black!important;">0117057605</strong>
                            <br><strong style="color: black!important;">Cuenta Corriente</strong>
                            <br>Una vez hagas la transferencia, presiona el botón de FINALIZAR EL PEDIDO y adjunta el comprobante de pago.
                            <br>Si finalizas el pedido y no recibimos el comprobante de pago dentro de las próximas 12 horas, no podremos confirmar la orden y el pedido será anulado.
                            <!-- En caso de ser deposito bancario, presiona finalizar y posterior envías el correo. -->
                            <br> Si no finalizas el pedido y recibimos el comprobante de pago, no podremos confirmar la orden.</p>
                    </div>  
                    <div class="col-12" style="text-align: right;">
                        <input type="submit" class="btn btn-success" onclick="realizarcompra()" value="Realizar Pedido">
                    </div>
                </div>
        </div>

        <div class="col-7 overflow-auto p-3 bg-light" data-spy="scroll" data-offset="0">
                <div class="row">
                    <div class="col-6"><label>Nombre: </label><input id="nombre" name="nombre" class="form-control" required></div>
                
                    <div class="col-6"><label>Correo: </label><input type="email" id="email" name="email" class="form-control" required></div>
                    <div  class="col-12"> <strong>Entrega</strong></div>
                    <div class="col-12 border rounded">
                    <div class="form-check ml-3">
                        <input class="form-check-input" type="radio" onclick="entrega('envio')" name="entrega" id="envio" checked>
                        <label class="form-check-label" for="envio">
                           Envío
                        </label>
                        </div>
                        <hr>
                        <div class="form-check ml-3">
                        <input class="form-check-input" type="radio" onclick="entrega('retiro')" name="entrega" id="retiro" >
                        <label class="form-check-label" for="retiro">
                            Retiro
                        </label>
                        </div>
                        <input type="hidden" name="metodo_ent" id="metodo_ent" value="envio">
                    </div>
                    <div class="col-12 mt-3 " id="envia" >
                        <div class="input-group">
                            <label>Colegio </label>
                        </div>
                        <div class="input-group">
                            <select class="form-control form-select-lg mb-3" aria-label="Large select example" name="colegio" id="colegio">
                            <?php
                                foreach($colegios as $val){
                            ?>   
                                <option value="<?php echo $val['id'];?>"><?php echo $val['nombre'];?></option>
                            <?php      
                                }
                            ?>    
                            </select>
                        </div>

                        <div class="input-group">
                            <label>Teléfono: </label>
                        </div>
                        <div class="input-group">
                            <input  id="telefono" name="telefono" class="form-control">
                        </div>

                        <div class="input-group">
                            <label>Dirección: </label>
                        </div>
                        <div class="input-group">  
                            <textarea class="form-control" name="direccionenvio" id="direccionenvio" cols="30" rows="2"></textarea>
                        </div>
                    </div>
                    <div class="col-12 mt-3 border rounded" id="retira" style="display: none; background-color:#0000001f;">
                        <p> <strong style="color: black!important;">Lugares de retiro</strong></p>
                        <div class="ml-3">
                            <p>Brisas del Golf, Plaza Providence, N° 3-10</p>
                            <p>Lun - Vie: 8:00 AM 5:00 PM</p>
                            <p>Sábados: 9:00 AM 12:00 PM</p>
                        </div>
                    </div>
                    <hr>
                    <div class="col-12"> <strong>Pago</strong></div>
                    <div class="col-12">
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Comprobante de Pago</label>
                        <input class="form-control" type="file" id="comprobante" name="comprobante">
                    </div>
                    </div>
                    <!-- <div class="col-12"><label>Cantidad: </label> <input style="" id="cantidad" type=number class="form-control"></div> -->
                </div>
        </div>

        
        
       
    </div>
</form>
</div>

<?php include '../Partials/footer.php'; ?>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
        function validacant(prod){
            var formData = new FormData();
            var cantidad = document.getElementById('cant').value;
            formData.append('producto', prod);
            formData.append('tipo', 'getcantidad');
            fetch('../../routes/productos.php', {
                    method: 'POST',
                    body: formData
                })
                .then(respuesta => respuesta.json())
                .then(data => {
                    console.log(cantidad+'**'+data['DISPONIBLE']+'***'+(cantidad > data['DISPONIBLE']));
                    if(data['DISPONIBLE'] == 0){
                        Swal.fire({
                        title: "Sin Disponibilidad",
                        text: "No existe disponibilidad de este producto",
                        icon: "warning"
                        });
                        document.getElementById('cant').value = data['DISPONIBLE'];
                    }if( parseInt(cantidad) > parseInt(data['DISPONIBLE'])){

                        Swal.fire({
                        title: "Sin Disponibilidad",
                        text: "No existe la cantidad total solicitada. Disponible "+data['DISPONIBLE']+' unidades.',
                        icon: "warning"
                        });
                        document.getElementById('cant').value = data['DISPONIBLE'];
                    }else{
                        var total =  parseInt(cantidad) *  parseFloat(data['PRECIO']);

                        document.getElementById('total_pagar').innerHTML  = '<p>Total: $'+total.toFixed(2)+'</p>';
                        document.getElementById('total').value  = total.toFixed(2);
                    }
                })
                .catch(error => console.log(error));
        }

        function entrega(tipo){
            if(tipo == 'envio'){
                    document.getElementById('envia').setAttribute("style", "display:block");
                    document.getElementById('retira').setAttribute("style", "display:none");
                    document.getElementById('metodo_ent').value = 'envio';
                    
            }else{
                document.getElementById('envia').setAttribute("style", "display:none");
                document.getElementById('retira').setAttribute("style", "display:block");
                document.getElementById('metodo_ent').value = 'retira';
            }

        }
        function realizarcompra(){
            var formData = new FormData(document.getElementById('formulario'));
            formData.append('tipo', 'insertcompra');
            fetch('../../routes/productos.php', {
                    method: 'POST',
                    body: formData
                })
                .then(respuesta => respuesta.json())
                .then(data => {
                    console.log(data);
                })
                .catch(error => console.log(error));
        }
        function comprar(id, disponible){
            var texto = 'Cantidad Disponible: '+disponible;
            var html1 = '<div class="row">'+
            '<div class="col-12"><label>Nombre: </label><input style="" id="swal-input1" class="swal2-input"></div>'+
            '<div class="col-12"><label>Apellido: </label><input style="" id="swal-input1" class="swal2-input"></div>'+
            '<div class="col-12"><label>Correo: </label><input style="" id="swal-input1" class="swal2-input"></div>'+
            '<div class="col-12"><label>Colegio: </label><input style="" id="swal-input1" class="swal2-input"></div>'+
            '<div class="col-12"><label>Dirección: </label><input style="" id="swal-input1" class="swal2-input"></div>'+
            '<div class="col-12"><label>Cantidad: </label> <input style="" id="cantidad" type=number class="swal2-input"></div>'
            '<div class="col-12"><label>Información Adicional: </label> <input style="" id="cantidad" type=number class="swal2-input"></div>'
            '<div class="col-12"><label>Comprobante de Pago: </label> <input style="" id="cantidad" type=number class="swal2-input"></div>'
            
            Swal.fire({
            title: "Datos de la compra",
            text: texto,
            icon: "success",
            html: html1,          
            // input: "number",
            // inputValue: 1 ,
            // inputAttributes: {
            //     max: disponible,
            // },
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Comprar!",
            preConfirm: async (data) => {
                    try {
                        var formData  =new FormData();
                        formData.append('datos', data);
                        formData.append('info', id);
                        // formData.append('_token', $("input[name='_token']").val()); 

                        $.ajax({
                            url: '/informe/apremio7',
                            type: 'post',
                            data: formData,
                            contentType: false,
                            processData: false,
                            success: function(response) {}
                        });  
                        
                    if (!response.ok) {
                        return Swal.showValidationMessage(`
                        ${JSON.stringify(await response.json())}
                        `);
                    }
                    return response.json();
                    } catch (error) {
                    Swal.showValidationMessage(`
                        Request failed: ${error}
                    `);
                    }
                },
                allowOutsideClick: () => !Swal.isLoading()
                }).then((result) => {
                    if (result.isConfirmed) {
                        Swal.fire({
                        title: "Deleted!",
                        text: result.value.login ,
                        icon: "success"
                        });
                    }
            });
        }

      
        
</script>

</body>
</html>