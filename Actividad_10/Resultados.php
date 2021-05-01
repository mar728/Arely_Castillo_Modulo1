<?php
    
    //Se declaran las peticiones del formulario Resultados.php
    $nombre = (isset($_POST["name"]) && $_POST["name"] != "") ?$_POST["name"] : "No especifico";
    $apellidopat = (isset($_POST["lastname1"]) && $_POST["lastname1"] != "") ?$_POST["lastname1"] : "No especifico";
    $apellidomat = (isset($_POST["lastname2"]) && $_POST["lastname2"] != "") ?$_POST["lastname2"] : "No especifico";
    $sexo = (isset($_POST["sex"]) && $_POST["sex"] != "") ?$_POST["sex"] : "No especifico";
    $edad = (isset($_POST["age"]) && $_POST["age"] != "") ?$_POST["age"] : "No especifico";
    $correo = (isset($_POST["mail"]) && $_POST["mail"] != "") ?$_POST["mail"] : "No especifico";
    $teléfono = (isset($_POST["tel"]) && $_POST["tel"] != "") ?$_POST["tel"] : "No especifico";
    $celular = (isset($_POST["cel"]) && $_POST["cel"] != "") ?$_POST["cel"] : "No especifico";
    $escuela = (isset($_POST["college"]) && $_POST["college"] != "") ?$_POST["college"] : "No especifico";
    $promedio = (isset($_POST["average"]) && $_POST["average"] != "") ?$_POST["average"] : "No especifico";
    $opción1 = (isset($_POST["option1"]) && $_POST["option1"] != "") ?$_POST["option1"] : "No especifico";
    $opción2 = (isset($_POST["option2"]) && $_POST["option2"] != "") ?$_POST["option2"] : "No especifico";

?>

<!--Se abre una estructura html para hacer la estructura de los resultados del formulario-->
<!DOCTYPE html>
<html>
    <!--Se crea una tabla con bordes-->
    <table border="1">
        <head>
            <!--Se crea el encabezado de la tabla y se unen las 4 celdas posteriores a ella, con alineación en el centro-->
            <tr>
                <th colspan="4" align="center"><br><br><h2>Solicitud de Ingreso a Harvard</h2><br><br></th>
            </tr>
        </head>

        <body>
            <tr>
                <!--Se agrega una estructura de celda en la primera fila y se abre una estructura php para agregar el resultado del formulario correspondiente al
                apellido paterno del aspirante de la universidad-->
                <td align="center">
                    <?php echo $apellidopat; ?>
                </td>
                <!--Se agrega una estructura de celda en la primera fila y se abre una estructura php para agregar el resultado del formulario correspondiente al
                apellido materno del aspirante de la universidad-->
                <td align="center">
                    <?php echo $apellidomat; ?>
                </td>
                <!--Se agrega una estructura de celda en la primera fila y se abre una estructura php para agregar el resultado del formulario correspondiente al
                nombre del aspirante de la universidad-->
                <td colspan="2" align="center">
                    <?php echo $nombre; ?>
                </td>
            </tr>
            
            <tr>
                <!--Se agrega una estructura de celda en la segunda fila y se agrega el rótulo de Apellido Paterno-->
                <td align="center">
                    <strong><u>Apellido Paterno</u></strong>
                </td>
                <!--Se agrega una estructura de celda en la segunda fila y se agrega el rótulo de Apellido Materno-->
                <td align="center">
                    <strong><u>Apellido Materno</u></strong>
                </td>
                <!--Se agrega una estructura de celda en la segunda fila y se agrega el rótulo de Nombre(s)-->
                <td colspan="2" align="center">
                    <strong><u>Nombre(s)</u></strong>
                </td>
            </tr>

            <tr>
                <!--Se agrega una estructura de celda en la tercera fila y se agrega el rótulo de Sexo-->
                <td align="center">
                    <strong><u>Sexo</u></strong>
                </td>
                <!--Se agrega una estructura de celda en la tercera fila y se abre una estructura php para agregar el resultado del formulario correspondiente al
                sexo del aspirante de la universidad-->
                <td align="center">
                    <?php echo $sexo; ?>
                </td>
                <!--Se agrega una estructura de celda en la tercera fila y se agrega el rótulo de Edad-->
                <td align="center">
                    <strong><u>Edad</u></strong>
                </td>
                <!--Se agrega una estructura de celda en la tercera fila y se abre una estructura php para agregar el resultado del formulario correspondiente a 
                la edad del aspirante de la universidad-->
                <td align="center">
                    <?php echo $edad; ?>
                </td>
            <tr>
                <!--Se agrega una estructura de celda en la cuarta fila y se abre una estructura php para agregar el resultado del formulario correspondiente al
                correo electrónico del aspirante de la universidad-->
                <td colspan="2" align="center">
                    <?php echo $correo; ?>
                </td>
                <!--Se agrega una estructura de celda en la cuarta fila y se abre una estructura php para agregar el resultado del formulario correspondiente al
                teléfono del aspirante de la universidad-->
                <td align="center">
                    <?php echo $teléfono; ?>
                </td>
                <!--Se agrega una estructura de celda en la cuarta fila y se abre una estructura php para agregar el resultado del formulario correspondiente al
                celular del aspirante de la universidad-->
                <td align="center">
                    <?php echo $celular; ?>
                </td>
            </tr>

            <tr>
                <!--Se agrega una estructura de celda en la quinta fila y se agrega el rótulo de Correo electrónico-->
                <td colspan="2" align="center">
                    <strong><u>Correo electrónico</u></strong>
                </td>
                <!--Se agrega una estructura de celda en la quinta fila y se agrega el rótulo de Teléfono-->
                <td align="center">
                    <strong><u>Teléfono</u></strong>
                </td>
                <!--Se agrega una estructura de celda en la quinta fila y se agrega el rótulo de Celular-->
                <td align="center">
                    <strong><u>Celular</u></strong>
                </td>
            </tr>

            <tr>
                <!--Se agrega una estructura de celda en la sexta fila y se agrega el rótulo de Escuela de procedencia-->
                <td align="center">
                    <strong><u>Escuela de procedencia</u></strong>
                </td>
                <!--Se agrega una estructura de celda en la sexta fila y se abre una estructura php para agregar el resultado del formulario correspondiente a
                la escuela de procedencia del aspirante de la universidad-->
                <td align="center">
                    <?php echo $escuela; ?>
                </td>
                <!--Se agrega una estructura de celda en la sexta fila y se agrega el rótulo de Promedio-->
                <td align="center">
                    <strong><u>Promedio</u></strong>
                </td>
                <!--Se agrega una estructura de celda en la sexta fila y se abre una estructura php para agregar el resultado del formulario correspondiente al
                promedio del aspirante de la universidad-->
                <td align="center">
                    <?php echo $promedio; ?>
                </td>
            </tr>

            <tr>
                <!--Se agrega una estructura de celda en la séptima fila y se agrega el rótulo de Primera opción, se unen con la celda posterior a ella-->
                <td colspan="2" align="center">
                    <strong><u>Primera opción</u></strong>
                </td>
                <!--Se agrega una estructura de celda en la séptima fila y se abre una estructura php para agregar el resultado del formulario correspondiente a
                la primera opción de carrera del aspirante de la universidad-->
                <td colspan="2" align="center">
                    <?php echo $opción1; ?>
                </td>
            </tr>

            <tr>
                <!--Se agrega una estructura de celda en la octava fila y se agrega el rótulo de Segunda opción, se unen con la celda posterior a ella-->
                <td colspan="2" align="center">
                    <strong><u>Segunda opción</u></strong>
                </td>
                <!--Se agrega una estructura de celda en la octava fila y se abre una estructura php para agregar el resultado del formulario correspondiente a
                la segunda opción de carrera del aspirante de la universidad-->
                <td colspan="2" align="center">
                    <?php echo $opción2; ?>
                </td>
            </tr>

        </body> 
    </table>
    <html>