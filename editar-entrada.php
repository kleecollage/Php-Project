<?php
require_once 'includes/redireccion.php';
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
    <h1>Editar Entrada</h1>
    <p>
        Edita tu entrada "<?= $entrada_actual['titulo'] ?>"
    </p>
    <br/>
    <form action="guardar-entrada.php?editar=<?=$entrada_actual['id']?>" method="post">
        <label for="titulo">Titulo </label>
        <input type="text" name="titulo" value="<?= $entrada_actual['titulo'] ?>"/>
        <?php echo isset($_SESSION['errores_entrada']) ? mostrarError($_SESSION['errores_entrada'], 'titulo') : '' ?>

        <label for="descripcion">Descripcion </label>
        <textarea type="text" name="descripcion" rows="10" cols="50">
            <?= $entrada_actual['descripcion'] ?>
        </textarea>

        <?= isset($_SESSION['errores_entrada'])
            ? mostrarError($_SESSION['errores_entrada'], 'descripcion')
            : ''
        ?>

        <label for="categoria">Categoria</label>
        <select name="categoria">
            <?= isset($_SESSION['errores_entrada'])
                ? mostrarError($_SESSION['errores_entrada'], 'categoria')
                : ''
            ?>

            <?php
            $categorias = conseguirCategorias($db);
            if (!empty($categorias)):
                while($categoria = mysqli_fetch_assoc($categorias)):
            ?>
                <option value="<?= $categoria['id'] ?>" <?= ($categoria['id'] == $entrada_actual['categoria_id']) ? 'selected="selected"' : ''  ?> >
                    <?= $categoria['nombre'] ?>
                </option>
            <?php
                endwhile;
            endif;
            ?>
        </select>

        <?php borrarErrores() ?>

        <input type="submit" value="Guardar">
    </form>
<!-- --------------------   FOOTER   -------------------- -->
<?php require_once 'includes/pie.php'?>

