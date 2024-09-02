<?php
require_once 'includes/redireccion.php';
require_once 'includes/cabecera.php';
require_once 'includes/lateral.php';
?>
    <!-- CAJA PRINCIPAL -->
    <div id="principal">
        <h1>Crear Entradas</h1>
        <p>
            Añade nuevas entradas al blog para que los usuarios puedan leerlas y disfrutar de nuestro
            contenido ....
        </p>
        <br/>
        <form action="guardar-entrada.php" method="post">
            <label for="titulo">Titulo </label>
            <input type="text" name="titulo"/>
            <?php echo isset($_SESSION['errores_entrada']) ? mostrarError($_SESSION['errores_entrada'], 'titulo') : '' ?>

            <label for="descripcion">Descripcion </label>
            <textarea type="text" name="descripcion" rows="10" cols="50"></textarea>
            <?php echo isset($_SESSION['errores_entrada']) ? mostrarError($_SESSION['errores_entrada'], 'descripcion') : '' ?>

            <label for="categoria">Categoria</label>
            <select name="categoria">
            <?php echo isset($_SESSION['errores_entrada']) ? mostrarError($_SESSION['errores_entrada'], 'categoria') : '' ?>

                <?php
                    $categorias = conseguirCategorias($db);
                    if (!empty($categorias)):
                    while($categoria = mysqli_fetch_assoc($categorias)):
                ?>
                        <option value="<?= $categoria['id'] ?>" > <?= $categoria['nombre'] ?> </option>
                <?php
                    endwhile;
                    endif;
                ?>
            </select>

            <?php borrarErrores() ?>

            <input type="submit" value="Guardar">
        </form>

<?php require_once 'includes/pie.php'?>