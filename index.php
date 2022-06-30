<html>
    <head>
        <meta charset="UTF-8">
    <script type="text/javascript">
    function ventana() {
        window.open("formulario.html");
        window.close("./index.php");
    }

    function ventana2() {
        window.open("formulario2.html");
        window.close("./index.php");
    }
    </script>
        <title></title>
    </head>
    <body>
        <div>
            <?php
            include './control/Archivo.php';
            ?>
            <h1>Tabla</h1>
            <table border="1">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Edad</th>
                        <th>Pasatiempo</th>
                        <th>Acción</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $obj = new Archivo();
                    $obj->setNombreArchivo("./archivo/pruebas.txt");
                    $array = $obj->CargarArchivo();

                    foreach ($array as $key => $data) {
                        ?>
                        <tr align="center">
                            <td><?= $data["nombre"] ?></td>
                            <td><?= $data["edad"] ?></td>
                            <td><?= $data["pasatiempo"] ?></td>
                            <td>
                                <input type="button" value="Editar" name="editar" onclick="ventana2()">
                            </td>
                        </tr>
                        <?php
                    }
                    ?>
                    <?php
                    if (empty($array)) {
                        ?>
                        <tr align="center">
                            <td colspan="4">El archivo .txt esta vacio</td>
                        </tr>
                            <?php
                    }
                    ?>
                </tbody>
            </table>
            <br>
            
            <input type="button" value="Agregar Datos" onclick="ventana()">    
        </div>

    </body>
</html>
