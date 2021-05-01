<?php

    //Se declaran las peticiones del formulario FormularioTaco.html
    $answer1 = (isset($_POST["question1"]) && $_POST["question1"] != "") ?$_POST["question1"] : "No especifico";
    $answer2 = (isset($_POST["question2"]) && $_POST["question2"] != "") ?$_POST["question2"] : "No especifico";
    $answer3 = (isset($_POST["question3"]) && $_POST["question3"] != "") ?$_POST["question3"] : "No especifico";
    $answer4 = (isset($_POST["question4"]) && $_POST["question4"] != "") ?$_POST["question4"] : "No especifico";
    $answer5 = (isset($_POST["question5"]) && $_POST["question5"] != "") ?$_POST["question5"] : "No especifico";
    $answer6 = (isset($_POST["question6"]) && $_POST["question6"] != "") ?$_POST["question6"] : "No especifico";
    $answer7 = (isset($_POST["question7"]) && $_POST["question7"] != "") ?$_POST["question7"] : "No especifico";
    $answer8 = (isset($_POST["question8"]) && $_POST["question8"] != "") ?$_POST["question8"] : "No especifico";
    $answer9 = (isset($_POST["question9"]) && $_POST["question9"] != "") ?$_POST["question9"] : "No especifico";
    $answer10 = (isset($_POST["question10"]) && $_POST["question10"] != "") ?$_POST["question10"] : "No especifico";

    //Se declaran 4 variables principales las cuales llevarán el conteo del número de respuestas correspondientes a cada letra
    $letraA = 0;
    $letraB = 0;
    $letraC = 0;
    $letraD = 0;

    /*Se declara el arreglo asociativo "tacos", el cual tiene como llaves cada una de las combinaciones de respuestas posibles junto con el taco correspondiente 
    a dichas combinaciones*/
    $tacos = ["A" => "Eres un taco al pastor",
              "B" => "Eres un taco de suadero",
              "C" => "Eres un taco de barbacoa",
              "D" => "Eres un taco lagunero",
              "AB" => "Eres un taco campechano",
              "BC" => "Eres un taco de carnitas",
              "CD" => "Eres un taco bell",
              "AD" => "Eres un taco light",
              "AC" => "Eres un taco placero",
              "BD" => "Eres un taco mixiote",
              "O" => "Eres un taco de sal"
    ];

    /*Se declara el arreglo "respuestas" el cual lleva como localidades las variables correspondientes a las respuestas declaradas anteriormente 
    de las peticiones del formulario*/
    $respuestas = [$answer1, $answer2, $answer3, $answer4, $answer5, $answer6, $answer7, $answer8, $answer9, $answer10];

    //Se declara un for que recorre el arreglo con las respuestas del formulario
    for($i = 0; $i < count($respuestas); $i++){
        //Si la localidad del formulario llevada por la variable de control "i" tiene por respuesta la letra "A" se aumenta unitariamente la variable "letraA"
        if($respuestas[$i] == "A"){
            $letraA++;
        }
        //Si la localidad del formulario llevada por la variable de control "i" tiene por respuesta la letra "B" se aumenta unitariamente la variable "letraB"
        if($respuestas[$i] == "B"){
            $letraB++;
        }
        //Si la localidad del formulario llevada por la variable de control "i" tiene por respuesta la letra "C" se aumenta unitariamente la variable "letraC"
        if($respuestas[$i] == "C"){
            $letraC++;
        }
        //Si la localidad del formulario llevada por la variable de control "i" tiene por respuesta la letra "D" se aumenta unitariamente la variable "letraD"
        if($respuestas[$i] == "D"){
            $letraD++;
        }
    }

    /*Esto es para comprobar los valores de las variables que llevan el conteo de las respuestas del formulario y ver que sí corresponde 
    a la respuesta del arreglo que debe ser*/
    echo $letraA;
    echo $letraB;
    echo $letraC;
    echo $letraD;

    //Si la variable "letraA" es mayor al resto de las variables se imprime en pantalla el valor correspondiente a la llave "A" del arreglo "tacos"
    if($letraA > $letraB && $letraA > $letraC && $letraA > $letraD){
        echo $tacos["A"];
    }
    //Si la variable "letraB" es mayor al resto de las variables se imprime en pantalla el valor correspondiente a la llave "B" del arreglo "tacos"
    if($letraB > $letraA && $letraB > $letraC && $letraB > $letraD){
        echo $tacos["B"];
    }
    //Si la variable "letraC" es mayor al resto de las variables se imprime en pantalla el valor correspondiente a la llave "C" del arreglo "tacos"
    if($letraC > $letraA && $letraC > $letraB && $letraC > $letraD){
        echo $tacos["C"];
    }
    //Si la variable "letraD" es mayor al resto de las variables se imprime en pantalla el valor correspondiente a la llave "D" del arreglo "tacos"
    if($letraD > $letraA && $letraD > $letraB && $letraD > $letraC){
        echo $tacos["D"];
    }
    /*Si la variable "letraA" es igual a la variable "letraB" pero es mayor al resto de las variables se imprime en pantalla el valor correspondiente 
    a la llave "AB" del arreglo "tacos"*/
    if($letraA == $letraB && $letraA > $letraC && $letraA > $letraD && $letraB > $letraC && $letraB > $letraD){
        echo $tacos["AB"];
    }
    /*Si la variable "letraB" es igual a la variable "letraC" pero es mayor al resto de las variables se imprime en pantalla el valor correspondiente 
    a la llave "BC" del arreglo "tacos"*/
    if($letraB == $letraC && $letraB > $letraA && $letraB > $letraD){
        echo $tacos["BC"];
    }
    /*Si la variable "letraC" es igual a la variable "letraD" pero es mayor al resto de las variables se imprime en pantalla el valor correspondiente 
    a la llave "CD" del arreglo "tacos"*/
    if($letraC == $letraD && $letraC > $letraA && $letraC > $letraB){
        echo $tacos["CD"];
    }
    /*Si la variable "letraA" es igual a la variable "letraD" pero es mayor al resto de las variables se imprime en pantalla el valor correspondiente 
    a la llave "AD" del arreglo "tacos"*/
    if($letraA == $letraD && $letraA > $letraB && $letraA > $letraC){
        echo $tacos["AD"];
    }
    /*Si la variable "letraA" es igual a la variable "letraC" pero es mayor al resto de las variables se imprime en pantalla el valor correspondiente 
    a la llave "AC" del arreglo "tacos"*/
    if($letraA == $letraC && $letraA > $letraB && $letraA > $letraD){
        echo $tacos["AC"];
    }
    /*Si la variable "letraB" es igual a la variable "letraD" pero es mayor al resto de las variables se imprime en pantalla el valor correspondiente 
    a la llave "BD" del arreglo "tacos"*/
    if($letraB == $letraD && $letraB > $letraA && $letraB > $letraC){
        echo $tacos["BD"];
    }

?>