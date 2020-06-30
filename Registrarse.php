<html>
    <head>
        <link rel="icon" type="image/jpg" href="img/Jeff_Albertson.png"/>
        <title>Registrarse</title>
        <script src="https://kit.fontawesome.com/ba1baef551.js" crossorigin="anonymous"></script>
        <link href="css/Style.css" rel="stylesheet" type="text/css"/>
        <style>
             body{
                 background-image: url("img/registro.jpg")
             }
        </style>
    </head>
    <body>
        <form action="index.php" class="formulario">
            <h1>Registrarse</h1>
            <div class="contenedor">
                
                <div class="input-contenedor">
                    <i class="fas fa-user icon"></i>
                    <input type="text" placeholder="Usuario">
                </div>
                
                <div class="input-contenedor">
                    <i class="fas fa-envelope icon"></i>
                    <input type="email" placeholder="Correo Electronico">
                </div>
                
                <div class="input-contenedor">
                    <i class="fas fa-key icon"></i>
                    <input type="password" placeholder="Contraseña">
                </div>
                
                <div class="input-contenedor">
                    <i class="fas fa-key icon"></i>
                    <input type="password" placeholder="Confirmar Contraseña">
                </div>
                <input type="submit" value="Registrarse" class="button">
                <p>¿Ya tienes una cuenta?<a class="link" href="Inicio Sesion.php">Iniciar Sesion</a></p>
            </div>
        </form>
    </body> 
</html>