    <?php
        if (!empty($_GET['df'])){
            if ($_GET['df']== 1){
            ?>
            <script>alert('Mensaje Enviado');</script>
            <?php
              header("Location: contactenos.php");
            }
        }
    ?>
    
<!DOCTYPE HTML>
<html>
    <head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="descriptison">
    <meta content="" name="keywords">
    <TItle>Contáctenos</TItle>

        <?php include '../Partials/header.php'; ?>

    <div class="container carrouselpad bodycontc">
        <h3 class="general text-uppercase">Procem Internacional</h3>
        <div class="row general">
            <div class="col-md-7 mt-md-0 mt-7">
                <div class="container formulario">
                    <h5 class="general">PUEDES ENVIARNOS UN MENSAJE</h5>
                    <form action="../../models/email.php" method="POST">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nombre</label>
                        <input type="text" class="form-control" name="nombre" aria-describedby="nombre" placeholder="Inserte Nombre" required>
                        <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Teléfono</label>
                        <input type="number" class="form-control" name="tel" aria-describedby="tel" placeholder="Inserte Teléfono" required>
                        <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Dirección de correo</label>
                        <input type="email" class="form-control" name="email" aria-describedby="direccion" placeholder="Dirección de correo" required>
                        <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Asunto</label>
                        <input type="text" class="form-control" name="asunto" aria-describedby="asunto" placeholder="Escriba su asunto" required>
                        <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Mensaje</label>
                        <textarea  class="form-control" rows="3" style="width: 100%;" name="mensaje" cols="50" required>Escriba su mensaje</textarea>
                        <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                    </div>
                    <input type="submit" class="boton btn btn-primary">
                <!-- </input> -->
                    </form>
                </div>

            </div>
            <div class="col-md-5 mt-md-0 mt-5">
            <div class="contactos">
                <h5 class="p_animatio hvr-float-shadow text-uppercase">Ubicación</h5>
                <ul class="list-group list-group-flush">
                    <p class="hvr-float-shadow" data-toggle="list" href="#list-messages" role="tab" aria-controls="messages">Panamá</p>
                    <p class="p_animatio hvr-float-shadow pcontacto" href="#">Brisas del Golf, Plaza Providence, N° 3-10</p>
                </ul>
                <h5 class="text-uppercase">Horario</h5>
                <ul class="list-group list-group-flush">
                    <p class=" hvr-float-shadow pcontacto" data-toggle="list" href="#list-messages" role="tab" aria-controls="messages">Lun - Vie: 8:00 AM 5:00 PM </p>
                    <p class=" p_animatio hvr-float-shadow pcontacto" href="#">Sábados: 9:00 AM 12:00 PM</p>
                </ul>
                <h5 class="text-uppercase">Teléfonos</h5>
                <ul class="list-group list-group-flush">
                    <a class="p_animatio hvr-float-shadow pcontacto" target="_blank" href="https://api.whatsapp.com/send?phone=[507][62786234]">+507 62786234</a>
                </ul>
                <h5 class="text-uppercase">Información o Sugerencias</h5>
                <ul class="list-group list-group-flush">
                    <a class="p_animatio hvr-float-shadow pcontacto" target="_blank" href="mailto:info@fundacionprocem.org">info@fundacionprocem.org</a>
                    <a class="p_animatio hvr-float-shadow pcontacto" target="_blank" href="mailto:contacto@fundacionprocem.org">contacto@fundacionprocem.org</a>
                </ul>
                <ul class="list-group list-group-flush general">
                    <iframe style="height: 100%;width: 100%;" src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d15760.053632356039!2d-79.46881272562669!3d9.062540745960817!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sPlaza%20Providence!5e0!3m2!1ses-419!2spa!4v1590809712549!5m2!1ses-419!2spa"
                                width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </ul>
            </div>
            </div>
        </div>
    </div>


    <?php include '../Partials/footer.php'; ?>
</body>
</html>