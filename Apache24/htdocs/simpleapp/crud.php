<?php
    //incluimos el archivo con las funciones
    include "functions.php";

    //obtener la accion a realizar
    $action=$_POST["action"];

    //obtener los valores del formulario
    $name = $POST_["name"];
    $lastname = $POST_["lastname"];
    $age = $_POST["age"];
    //evaluar acciones
    if($action == "guardar"){
        //guardar los datos en un array
        saveData($name, $lastname, $age);
        
        //redirigir
        header('Location: index.php');
    }

    //fucnion para editar el registro
    if($action == "editar"){
        $cod == $_POST['cod'];
        //actualizar datos
        updatedata($cod, $name, $lastname, $age);
        // redirigir
        header('Location: index.php');
    }

    //eliminar registro

    if($action == "eliminar"){
        $cod = $_POST['cod'];
        //llamado a la funcion eliminar
        deleteData($cod);
        header('Location: index.php');
    }
?>