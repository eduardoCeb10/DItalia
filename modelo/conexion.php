<?php

    try {
        $conexion = new PDO('mysql:host=localhost;dbname=ditalia', 'root', '');
        // Establecer el modo de error de PDO a excepción
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Conexión exitosa";
    } catch(PDOException $e) {
        echo "Conexión fallida: " . $e->getMessage();
    }
