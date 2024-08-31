<?php

function mostrarError($errores, $campo) {
    $alerta = '';
    if (isset($errores) && !empty($campo) ) {
        $alerta = "<div class='alerta alerta-error'>".$errores[$campo]."</div>";
    }
    return $alerta;
}

function borrarErrores() {
    $borrado = false;
    if (isset($_SESSION['errores']) ) {
        unset($_SESSION['errores']);
        $borrado = true;
    }

    if (isset($_SESSION['completado'])) {
        unset($_SESSION['completado']);
        $borrado = true;
    }

    return $borrado;
}

function conseguirCategorias($conexion) {
    $result = array();
    $sql = "SELECT * FROM categorias ORDER BY id ASC";
    $categorias = mysqli_query($conexion, $sql);
    if ($categorias && mysqli_num_rows($categorias) >= 1) {
        $result = $categorias;
    }
    return $result;
}

function conseguirUltimasEntradas($conexion) {
    $resultado = array();
    $sql = "SELECT e.*, c.nombre AS 'categoria' FROM entradas e ".
        "INNER JOIN categorias c ON e.categoria_id = c.id ".
        "ORDER BY e.id DESC LIMIT 4";
    $entradas = mysqli_query($conexion, $sql);
    if ($entradas && mysqli_num_rows($entradas) >= 1) {
        $resultado = $entradas;
    }
    return $resultado;
}

?>