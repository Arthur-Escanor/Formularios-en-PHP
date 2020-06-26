<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Contacto</title>
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'> 
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <div class="wrap">
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" meth="post">
            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre:" value="<?php" if(!$envido && isset($nombre)) echo $nombre ?">
        
            <input type="text" class="form-control" id="correo" name="correo" placeholder="Corroe:" value="<?php" if(!$envido && isset($correo)) echo $correo ?">">

            <textarea name="mensaje" class="form-control" id="mensaje"  placeholder="Mensaje:"><?php" if(!$envido && isset($nombre)) echo $nombre ?></textarea>

            <?php if (!empty($errores)): ?>
                <div class="alert error">
                    <?php echo $errores; ?>
                </div>
            <?php elseif ($enviado): ?>
                <div class="alert success">
                    <p>Enviado Correctamente</p>
                </div>
            <?php endif ?>        

            <input type="submit" name="submit" class="btn btn-primary" value="Enviar Correo" >
        </form>
    </div>   
</body>
</html>