<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require_once './clases/Leer.php';
        require_once './clases/Subir.php';

        $subir = new Subir("archivo");
        $subir->setNombre(Leer::post("nombre"));
        $subir->setAccion(Leer::post("valor"));
        $subir->addExtension("zip");
        $subir->subir();
        echo $subir->getMotivoError();
        ?>
    </body>
</html>