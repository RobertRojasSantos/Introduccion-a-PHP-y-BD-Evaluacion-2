<?php
$errores = '';
$enviado = false;

$nombre = '';
$correo = '';
$mensaje = '';
$archivoMensajes = 'mensajes.txt';

if (isset($_POST['submit'])) {
    $nombre = trim($_POST['nombre']);
    $correo = trim($_POST['correo']);
    $mensaje = trim($_POST['mensaje']);

    if (!empty($nombre)) {
        $nombre = htmlspecialchars($nombre);
    } else {
        $errores .= 'Por favor ingresa un nombre <br />';
    }

    if (!empty($correo)) {
        $correo = filter_var($correo, FILTER_SANITIZE_EMAIL);
        if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
            $errores .= 'Por favor ingrese un correo válido <br />';
        }
    } else {
        $errores .= 'Por favor ingrese un correo <br />';
    }

    if (!empty($mensaje)) {
        $mensaje = htmlspecialchars($mensaje);
    } else {
        $errores .= 'Por favor ingrese un mensaje <br />';
    }

    if (!$errores) {
        $fecha = date('d/m/Y H:i');
        $mensajeLimpio = str_replace(["\r", "\n"], ' ', $mensaje);
        $lineaRegistro = "$fecha|$nombre|$correo|$mensajeLimpio" . PHP_EOL;

        $fichero = fopen($archivoMensajes, 'a');
        if ($fichero) {
            fwrite($fichero, $lineaRegistro);
            fclose($fichero);
        }

        $enviado = true;
        $nombre = '';
        $correo = '';
        $mensaje = '';
    }
}

$historial = [];
if (file_exists($archivoMensajes)) {
    $ficheroLectura = fopen($archivoMensajes, 'r');
    if ($ficheroLectura) {
        while (($linea = fgets($ficheroLectura)) !== false) {
            $linea = trim($linea);
            if (!empty($linea)) {
                $partes = explode('|', $linea);
                if (count($partes) === 4) {
                    $historial[] = [
                        'fecha'   => $partes[0],
                        'nombre'  => $partes[1],
                        'correo'  => $partes[2],
                        'mensaje' => $partes[3]
                    ];
                }
            }
        }
        fclose($ficheroLectura);
    }
    $historial = array_reverse($historial);
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Evaluación 2 - Formulario de Contacto</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <div class="wrap">
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
            <h2>Formulario de Contacto</h2>

            <input type="text" class="form-control" name="nombre" placeholder="Nombre:" value="<?php echo $nombre; ?>">
            
            <input type="text" class="form-control" name="correo" placeholder="Correo:" value="<?php echo $correo; ?>">
            
            <textarea name="mensaje" class="form-control" placeholder="Mensaje:"><?php echo $mensaje; ?></textarea>

            <?php if (!empty($errores)): ?>
                <div class="alert error">
                    <?php echo $errores; ?>
                </div>
            <?php elseif ($enviado): ?>
                <div class="alert success">
                    <p>Enviado correctamente</p>
                </div>
            <?php endif; ?>

            <input type="submit" name="submit" class="btn btn-primary" value="Enviar Correo">
        </form>

        <?php if (!empty($historial)): ?>
            <div class="historial-box">
                <h3>Mensajes Registrados en Servidor (<?php echo count($historial); ?>)</h3>
                <?php foreach ($historial as $item): ?>
                    <div class="mensaje-item">
                        <div class="mensaje-header">
                            <strong><?php echo $item['nombre']; ?></strong>
                            <span><?php echo $item['fecha']; ?></span>
                        </div>
                        <small class="mensaje-correo"><?php echo $item['correo']; ?></small>
                        <p class="mensaje-texto"><?php echo $item['mensaje']; ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</body>
</html>



#Link: http://localhost:8080/evaluacion2/index.php