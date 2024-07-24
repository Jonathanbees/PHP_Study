<?php
include 'conexion.php';

if(isset($_POST['submit']))
{
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];
    $passi = $_POST['passi'];
    echo $email;

    echo $telefono;
    echo $passi;

    if(empty($nombre) || empty($email) || empty($telefono) || empty($passi))
    {
        echo "Por favor, rellene todos los campos correctamente.";
        return;
    }

    try {
        // Preparar la consulta SQL con marcadores de posición
        $sql = "INSERT INTO `autenticacion`.`usuario` (`nombre`, `email`, `telefono`, `passi`) VALUES (:nombre, :email, :telefono, :passi)";
        $stmt = $pdo->prepare($sql);
    
        // Vincular los parámetros
        $stmt->bindParam(':nombre', $nombre);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':telefono', $telefono);
        $stmt->bindParam(':passi', $passi);
    
        // Ejecutar la consulta
        $stmt->execute();
    
        echo "Usuario registrado correctamente.";
        header('Location: index.php');
        exit();
    } catch (Exception $e) {
        echo "Error al insertar el usuario: " . $e->getMessage();
    }
}
else
{
    echo "Por favor, rellene todos los campos.";
}
?>