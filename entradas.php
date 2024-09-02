<!-- --------------------   HEADER   -------------------- -->
<?php require_once 'includes/cabecera.php'?>
<!-- --------------------   LOGIN / REGISTRO   -------------------- -->
<?php require_once 'includes/lateral.php'?>
<!-- --------------------   CAJA PRINCIPAL   -------------------- -->
<div id="principal">
    <h1>Todas Las Entradas</h1>
    <?php
    $entradas = conseguirEntradas($db);
    if(!empty($entradas)):
        while($entrada = mysqli_fetch_assoc($entradas)):
            ?>
            <article>
                <a href="entrada.php?id=<?=$entrada['id']?>">
                    <h2><?=$entrada['titulo'] ?></h2>
                    <span class="fecha"><?= $entrada['categoria'].' | '.$entrada['fecha'] ?></span>
                    <p>
                        <?= substr($entrada['descripcion'], 0,180)." ..." ?>
                    </p>
                </a>
            </article>

        <?php
        endwhile;
    endif;
    ?>
    <!-- --------------------   FOOTER   -------------------- -->
    <?php require_once 'includes/pie.php'?>
