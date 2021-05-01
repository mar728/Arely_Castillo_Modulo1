<?php

    //fila = variable auxiliar del ciclo for que indica el número de filas del tablero
    $fila=1;
    //columna = variable auxiliar del ciclo for que indica el número de filas del tablero
    $columna=1;
    //x = número de filas y columnas que debe tener el tablero
    $x=5;

    //Se hace echo para agregar la estructura inicial de la tabla y añadir borde
    echo "<table border='1'>";
        /*Se inicia con el primer ciclo for, la variable filas comienza en el 1 y se indica que mientras esta variable sea menor 
        o igual al valor de la variable x no se detendrá el ciclo y se realizará lo que esté dentro de él*/
        for($fila=1; $fila <= $x; $fila++){
            //Se hace un echo para añadir una fila a la tabla
            echo "<tr>";
                /*Se incia con el ciclo de las columnas, la variable columnas incia de igual manera en 1 y se indica que mientras el valor de la variable
                sea menor o igual a su valor no se detendrá el ciclo y se realizará lo que esté dentro de él*/
                for($columna = 1; $columna <= $x; $columna++){
                    /*Se revisa que el módulo de la división del número de filas entre 2 sea idéntico a 0, de ser así se ejecutará el primer caso, de lo contrario
                    se ejecutará el caso else*/
                    if($fila%2 == 0){
                        if($columna%2 == 0){
                            echo "<td><img src='./blanco.jpg' width='100px' height='100px'></td>";
                        }
                        else{
                            echo "<td><img src='./negro.jpg' width='100px' height='100px'></td>";
                        }
                    }
                    /*Se revisa que el módulo de la división del número de filas entre 2 sea diferente a 0, de ser así se ejecutará el primer caso, de lo contrario
                    se ejecutará el caso else*/
                    if($fila%2 != 0){
                        if($columna%2 == 0){
                            echo "<td><img src='./negro.jpg' width='100px' height='100px'></td>";
                        }
                        else{
                            echo "<td><img src='./blanco.jpg' width='100px' height='100px'></td>";
                        }
                    }
                }
            //Se cierra la columna y se repite el ciclo for
            echo "</tr>";
        }
    //Se cierra la tabla
    echo "</table>";


?>