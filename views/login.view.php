<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
    <link href="css/estilos.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;700&family=Raleway:wght@100;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
</head>

<body>
    <div class="contenedor">
        <h1 class="titulo">Iniciar sesion</h1>
        <hr class="border">

        <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST" class="formulario" name="login">
            <div class="form-group">
                <i class="icono izquierda fa fa-user"></i><input type="text" name="usuario" class="usuario" placeholder="Usuario" />
            </div>
            <div class="form-group">
                <i class="icono izquierda fa fa-lock"></i><input type="password" name="password" class="password_btn" placeholder="Contraseña" /><i class="submit-btn fa fa-arrow-right" onclick="login.submit()"></i>
            </div>
            <?php if(!empty($errores)) : ?>
                <div class="error">
                    <?php echo $errores?>
                </div>
            <?php endif  ?>
        </form>
        <p class="texto-registrate">¿Aun no tienes cuenta?<a href="registrate.php">Registrate</a></p>
    </div>
</body>

</html>