<?php
    require_once 'includes/helpers.php';
    require_once 'includes/conexion.php';
    $entrada_actual = conseguirEntrada($db, $_GET['id']);
    if (!isset($entrada_actual['id'])) {
        header("Location: index.php");
    }
?>
<!-- --------------------   HEADER   -------------------- -->
<?php require_once 'includes/cabecera.php'?>
<!-- --------------------   LOGIN / REGISTRO   -------------------- -->
<?php require_once 'includes/lateral.php'?>
<!-- --------------------   CAJA PRINCIPAL   -------------------- -->
<div id="principal">
    <h1><?= $entrada_actual['titulo'] ?></h1> <br/>
    <a href="categoria.php?id=<?=$entrada_actual['categoria_id']?>">
        <h2><?= $entrada_actual['categoria'] ?></h2>
    </a>
    <br/>
    <h4><?= $entrada_actual['fecha'] ?> | <?= $entrada_actual['usuario'] ?></h4><br/>
    <p>
        <?= $entrada_actual['descripcion'] ?>
    </p> <br/>
    <?php if (isset($_SESSION['usuario']) && $_SESSION['usuario']['id'] == $entrada_actual['usuario_id']): ?>
        <a  href="editar-entrada.php?id=<?=$entrada_actual['id']?>" class="boton">Editar Entrada</a>
        <a href="borrar-entrada.php?id=<?=$entrada_actual['id']?>" class="boton boton-rojo">Eliminar Entrada</a>
    <?php endif; ?>
<!-- --------------------   FOOTER   -------------------- -->
<?php require_once 'includes/pie.php'?>

