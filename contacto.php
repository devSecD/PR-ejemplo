<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre = $_POST["nombre"] ?? '';
        $email = $_POST["email"] ?? '';
        echo "Gracias, $nombre. Te contactaremos a $email pronto.";
    }
?>

<form method="POST">
    Nombre: <input type="text" name="nombre" /><br>
    Email: <input type="email" name="email" /><br>
    <button type="submit">Enviar</button>
</form>