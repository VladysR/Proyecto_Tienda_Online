<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in</title>

    <link rel="stylesheet" href="Registro_FORM.css">

</head>
<body>
    <section>
        <h2>SIGN IN</h2>
        <p><a href="Login_FORM.php">PRESS FOR BACK TO LOGIN...</a></p>

        <form action="../controladores/Controlador_Peticiones_Registro.php" method="POST">

            <label for="nombre">
                <input type="text" name="nombre" 
                    placeholder="<?php isset($_GET['nombre']) ? print $_GET['nombre'] : print 'Nombre' ?>" required> 
            </label>

            <label for="apellido"><input type="text" name="apellido" 
                placeholder="<?php isset($_GET['apellido']) ? print $_GET['apellido'] : print 'Apellido' ?>" required>
            </label>

            <label for="domicilio"><input type="text" name="domicilio" 
                placeholder="<?php isset($_GET['domicilio']) ? print $_GET['domicilio'] : print 'Domicilio' ?>" required>
            </label>

            <label for="telefono"><input type="text" name="telefono" 
                placeholder="<?php isset($_GET['telefono']) ? print $_GET['telefono'] : print 'Telefono' ?>" required>
            </label>

            <label for="nickname"><input type="text" name="nickname" 
                placeholder="<?php isset($_GET['nickname']) ? print $_GET['nickname'] : print 'Nickname' ?>" required>
            </label>

            <label for="pwd"><input type="password" name="pwd" 
                placeholder="<?php isset($_GET['pwd']) ? print $_GET['pwd'] : print 'Password' ?>" required>
            </label>

            <label>
                <input type="submit" value="Registrar" name="registrar" id="button">
            </label>
        </form>
    </section>
    
    
</body>
</html>