<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php

        class Conectar {

            public static function conexion() {

                try {

                    $conexion = new PDO('mysql:host=localhost; dbname=pruebas', 'root', '');

                    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                    $conexion->exec("SET CHARACTER SET UTF8");
                } catch (Exception $e) {

                    die('Error' . $e->getMessage());
                    echo $e->getLine();
                }

                return $conexion;
            }

        }
        ?>
    </body>
</html>
