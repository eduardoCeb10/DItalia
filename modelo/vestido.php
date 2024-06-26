<?php

require_once "conexion.php";

class Vestido {
    
    public static function mostrarVestidos() {
        global $conexion;

        try {
            // Preparar la consulta SQL
            $sql = "SELECT id_vestido, modelo, descripcion, cantidad, imagen, estatus, fecha_alta, precio, categoria_id_fk, color_id_fk, talla_id_fk FROM vestidos";
            $stmt = $conexion->query($sql);

            // Obtener los resultados
            $vestidos = $stmt->fetchAll(PDO::FETCH_ASSOC);

            return $vestidos;

        } catch(PDOException $e) {
            echo "Error en la consulta: " . $e->getMessage();
            return false;
        }
    }

    public static function crearVestido($modelo, $descripcion, $cantidad, $imagen, $estatus, $fecha_alta, $precio, $categoria_id, $color_id, $talla_id) {
        global $conexion;

        try {
            $sql = "INSERT INTO vestidos (modelo, descripcion, cantidad, imagen, estatus, fecha_alta, precio, categoria_id_fk, color_id_fk, talla_id_fk) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
            $stmt = $conexion->prepare($sql);
            $stmt->execute([$modelo, $descripcion, $cantidad, $imagen, $estatus, $fecha_alta, $precio, $categoria_id, $color_id, $talla_id]);
            return true;

        } catch(PDOException $e) {
            echo "Error al crear el vestido: " . $e->getMessage();
            return false;
        }
    }

    public static function actualizarVestido($id, $modelo, $descripcion, $cantidad, $imagen, $estatus, $fecha_alta, $precio, $categoria_id, $color_id, $talla_id) {
        global $conexion;

        try {
            $sql = "UPDATE vestidos SET modelo = ?, descripcion = ?, cantidad = ?, imagen = ?, estatus = ?, fecha_alta = ?, precio = ?, categoria_id_fk = ?, color_id_fk = ?, talla_id_fk = ? WHERE id_vestido = ?";
            $stmt = $conexion->prepare($sql);
            $stmt->execute([$modelo, $descripcion, $cantidad, $imagen, $estatus, $fecha_alta, $precio, $categoria_id, $color_id, $talla_id, $id]);
            return true;

        } catch(PDOException $e) {
            echo "Error al actualizar el vestido: " . $e->getMessage();
            return false;
        }
    }

    public static function eliminarVestido($id) {
        global $conexion;

        try {
            $sql = "DELETE FROM vestidos WHERE id_vestido = ?";
            $stmt = $conexion->prepare($sql);
            $stmt->execute([$id]);
            return true;

        } catch(PDOException $e) {
            echo "Error al eliminar el vestido: " . $e->getMessage();
            return false;
        }
    }
}
