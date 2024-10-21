<?php 
include_once("../../models/busquedaProd.php");

$traer = buscabycat(1001);
$datos = mysqli_fetch_array($traer);

// foreach($traer as $value){
    //     var_dump($value);
    //     // var_dump($value['ID_PRODUCTO']);
    // }
    // var_dump(mysqli_fetch_array($traer));
    // while($value = mysqli_fetch_array($traer)){
        //     echo $value;
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
            width: 50%;
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
    <div class="row" style="padding-top: 5%;">
        <!-- <div class="col-12">
            Buscar
            <input type="text" name="" id=""> <input type="submit" >
        </div> -->
        
        <!-- <div class="col-2">
            Buscar
        </div>
        <div class="col-8">
            <input type="text" name="" id="">
        </div>
        <div class="col-2">
           <input type="submit" >
        </div> -->

        <?php
            foreach($traer as $value){
                // $disponible = $value['DISPONIBLE'];
                // var_dump($value);
                $disable = '';
                            
                if(intval($value['DISPONIBLE'] )== 0){
                    $disable = 'disabled'; 
                }
                
            ?>
                <div class="col-4" style="padding-left: 15%;">
                <img class="imagen" src="../../img/carrito/<?php echo $value['CARPETA'];?>/<?php echo $value['IMAGEN'];?>" alt="">
    
                <!-- <hr> -->
            </div>
    
            <div class="col-8">
                    <div>
                        <?php
                            echo $value['NOMBRE'];
                            $id = $value['ID_PRODUCTO'];
                            
                        ?>
                    </div>
                    <!-- <hr> -->
                    <div>
                        <?php
                            echo $value['DESCRIPCION'];
                        ?>
                    </div>
                    
    
                    <div>
                        <?php
                            echo '$'.number_format($value['PRECIO'], 2);
                        ?> 
                        <button <?php echo $disable?> class="btn btn-info" onclick="comprar('<?php echo $id;?>','<?php  echo $value['DISPONIBLE']?>')"> Comprar</button> 
                        <!-- <button <?php echo $disable?> class="btn btn-secondary" onclick="agregar('<?php echo $id;?>','<?php  echo $value['DISPONIBLE']?>')"> Agregar a Carrito</button>  -->
                       
                    </div>
                   
                    <div>
                        <p><a href="" class="referencia">Libros</a></p>
                    </div>
                    <hr>
            </div>
        <?php
            }
        ?>
        
       
    </div>

</div>

<?php include '../Partials/footer.php'; ?>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>

        function comprar(id, disponible){
            window.location.href = "compra.php?prod="+id;
        //     var texto = 'Cantidad Disponible: '+disponible;
        //     var html1 = '<div class="row">'+
        //     '<div class="col-12"><label>Nombre: </label><input style="height: 1.625em;" id="swal-input1" class="swal2-input"></div>'+
        //     '<div class="col-12"><label>Apellido: </label><input style="height: 1.625em;" id="swal-input1" class="swal2-input"></div>'+
        //     '<div class="col-12"><label>Correo: </label><input style="height: 1.625em;" id="swal-input1" class="swal2-input"></div>'+
        //     '<div class="col-12"><label>Colegio: </label><input style="height: 1.625em;" id="swal-input1" class="swal2-input"></div>'+
        //     '<div class="col-12"><label>Dirección: </label><input style="height: 1.625em;" id="swal-input1" class="swal2-input"></div>'+
        //     '<div class="col-12"><label>Cantidad: </label> <input style="height: 1.625em;" id="cantidad" type=number class="swal2-input"></div>'
        //     '<div class="col-12"><label>Información Adicional: </label> <input style="height: 1.625em;" id="cantidad" type=number class="swal2-input"></div>'
        //     '<div class="col-12"><label>Comprobante de Pago: </label> <input style="height: 1.625em;" id="cantidad" type=number class="swal2-input"></div>'
            
        //     Swal.fire({
        //     title: "Datos de la compra",
        //     text: texto,
        //     icon: "success",
        //     html: html1,          
        //     // input: "number",
        //     // inputValue: 1 ,
        //     // inputAttributes: {
        //     //     max: disponible,
        //     // },
        //     showCancelButton: true,
        //     confirmButtonColor: "#3085d6",
        //     cancelButtonColor: "#d33",
        //     confirmButtonText: "Comprar!",
        //     preConfirm: async (data) => {
        //             try {
        //                 var formData  =new FormData();
        //                 formData.append('datos', data);
        //                 formData.append('info', id);
        //                 // formData.append('_token', $("input[name='_token']").val()); 

        //                 $.ajax({
        //                     url: '/informe/apremio7',
        //                     type: 'post',
        //                     data: formData,
        //                     contentType: false,
        //                     processData: false,
        //                     success: function(response) {}
        //                 });  
                        
        //             if (!response.ok) {
        //                 return Swal.showValidationMessage(`
        //                 ${JSON.stringify(await response.json())}
        //                 `);
        //             }
        //             return response.json();
        //             } catch (error) {
        //             Swal.showValidationMessage(`
        //                 Request failed: ${error}
        //             `);
        //             }
        //         },
        //         allowOutsideClick: () => !Swal.isLoading()
        //         }).then((result) => {
        //             if (result.isConfirmed) {
        //                 Swal.fire({
        //                 title: "Deleted!",
        //                 text: result.value.login ,
        //                 icon: "success"
        //                 });
        //             }
        //     });
        }

      
        
</script>

</body>
</html>