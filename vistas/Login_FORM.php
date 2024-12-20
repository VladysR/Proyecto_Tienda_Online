<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Log in</title>
    <link rel="stylesheet" href="Login_FORM.css">
</head>

<body>
    
    <section class="formulario">
       
        <form action="../controladores/Controlador_Peticiones_Login.php" method="POST">

            <label for="usuario"></label> 
            <input type="text" name="usuario" class="escribir" placeholder="<?php isset($_GET['nickname']) ? print $_GET['nickname'] : print 'Nickname' ?>" required>

            <label for="password"></label> 
            <input type="password" name="password" class="escribir" placeholder="<?php isset($_GET['pwd']) ? print $_GET['pwd'] : print 'Password' ?>" required>

            <!-- Recordar no es funcional aun -->
            <p class="recordar"> 
            <label for="recordar" class="recordarLabel">Recordar contraseña</label>
            <input type="checkbox" name="recordar_contraseña" id="checkbox1">
            </p>

            <p><a href="Registro_FORM.php">Press to sign in</a></p>

            <p class="botones">
                <label>
                    <input type="submit" value="Enviar" name="login">
                </label>

                <label>
                    <input type="reset" value="Borrar">
                </label>
            </p>
        </form>
    </section>
</body>
</html>