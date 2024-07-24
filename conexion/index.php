<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <h1>Formulario de registro</h1>
    <section class="formulario">
        <form action="registro.php" method="POST">
            <div class="item">
                <label for="nombre">Nombre:</label>
                <input type="text" name="nombre" id="nombre" required>
            </div>
            <div class="item">
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" required>
            </div>
            <div class="item">
                <label for="telefono">Teléfono:</label>
                <input type="text" name="telefono" id="telefono" required>
            </div>
            <div class="item">
                <label for="passi">Contraseña:</label>
                <input type="password" name="passi" id="passi" required>
            </div>
            <div class="button">
                <input type="submit" name="submit" value="Enviar">
            </div>
        </form>
    </section>
    
</body>
</html>