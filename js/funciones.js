function enviaremail() {

    var from = document.getElementById("email").value;
    var asunto = document.getElementById("asunto").value;
    var body = document.getElementById("mensaje").value;
    var nombre = document.getElementById("nombre").value;
    var telefono = document.getElementById("tel").value;

    Email.send({
            Host: "mail.fundacion-procem.org",
            Username: "contacto@fundacion-procem.org",
            Password: "Procem01*",
            To: 'contacto@fundacion-procem.org',
            From: "i.loopez12@gmail.com",
            Subject: "PRUEBA Sending Email using javascript",
            Body: "PRUEBA Well that was easy!!",
        })
        .then(function(message) {
            alert("mail sent successfully")
        });

    function addcarrito() {
        var cantidad = document.getElementById("cant").value;
        console.log(cantidad);

    }


    // Email.send({
    //     Host: "mail.fundacion-procem.org",
    //     Username: "contacto",
    //     Password: "Procem01*",
    //     To: 'contacto@fundacion-procem.org',
    //     From: "'+from+'",
    //     Subject: "'+asunto+'",
    //     Body: "'+body+'"
    // }).then(
    //     message => alert(message)
    // );
    // console.log(from + ' , ' + asunto)
}