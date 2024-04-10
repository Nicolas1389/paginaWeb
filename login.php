<!DOCTYPE html>
<html lang="en">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<head>
  <link rel="stylesheet" href="estilos.css">
  <title>Iniciar sesion</title>
  <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
</head>
<?php
if(isset($_GET['error'])){
    $error = $_GET['error'];
    if($error == "incorrecto"){
        echo"<p>El usario o contraseña son incorrectos</p>";
    }
    if($error == "vacio"){
        echo"<p>los datos enviados se encuentran vacios</p>";
    }
}
?>
<body>
    <section>
        <div class="form-box">
            <div class="form-value">
                <form action="sesioniniciada.php" method="post">
                    <h2>Iniciar sesion</h2>
                    <div class="inputbox">
                        <ion-icon name="mail-outline"></ion-icon>
                        <input type="text" name="usuario"required>
                        <label for="usuario">Usuario</label>
                    </div>
                    <div class="inputbox">
                        

                        <ion-icon name="lock-closed-outline"></ion-icon>

                         
                        <input type="password"
                         name="contraseña" required>
                        

                        <label for="contraseña">Contraseña</label>

                    </div>
                    <button class="boton">Ingresar</button>
                    <br>
                    <br>
                    <a href="index.html">Desea ver los eventos <br> sin iniciar sesion</a>
                </form>
            </div>
        </div>
    </section>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>