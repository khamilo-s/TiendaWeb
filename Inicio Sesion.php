<html>
    <head>
        <link rel="icon" type="image/jpg" href="img/Jeff_Albertson.png"/>
        <title>Inicio Sesion</title>
        <script src="https://kit.fontawesome.com/ba1baef551.js" crossorigin="anonymous"></script>
        <link href="css/Style.css" rel="stylesheet" type="text/css"/>
         <style>
             body{
                 background-image: url("img/iniciosesion.jpg")
             }
        </style>
    </head>
    
    <body>
        <form action="index.php" class="formulario">
            <h1>Inicio Sesion</h1>
            <div class="contenedor">
                
                <div class="input-contenedor">
                    <i class="fas fa-envelope icon"></i>
                    <input type="email" placeholder="Correo Electronico">
                </div>
                
                <div class="input-contenedor">
                    <i class="fas fa-key icon"></i>
                    <input type="password" placeholder="Contraseña">
                </div>
                
                <input type="submit" value="Iniciar Sesion" class="button">
                <p>¿No tienes cuenta?<a class="link" href="Registrarse.php">Registrarse</a></p>
            </div>
        </form>
    </body> 
</html>