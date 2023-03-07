<?php
    //archivo
    //define(FILE, "datos.txt")
    //funcion para listar datos
    function getData(){
        //si el archivo no existe, se crea
        if(!file_exists("datos.txt")){
            file_put_contents("datos.txt", "");
        }
        $data = file_get_contents("datos.txt");
        $data = json_decode($data, true);

        //si los datos no son array, lo inicializamos
        if(!is_array($data)){
            $data=array();
        }
        return $data;
    }
    //funcion para guardar datos
    function saveData($name, $lastname, $age){
        //obtener los datas actuales del archivo
        $data = getData();

        //crear un nuevo registro
        $record = array(
            "name" => $name,
            "lastname" => $lastname,
            "age" => $age
        );
        //agregar el nuevo registro al array de datos
        $data[] = $record;

        //convertir el array a formato json, y guardarlo
        $data = json_encode($data);
        file_put_contents("datos.txt", $data);
    };

    //funcion para editar registros
    function updatedata($cod, $name,$lastname,$age){
        $data=getData();
        //Actualizar el registro correspondiente
        $data[$cod]['name']=$name;
        $data[$cod]['lastname']=$lastname;
        $data[$cod]['age']=$age;

        //convertir a formato json
        $data = json_encode($data);
        file_put_contents("datos.txt", $data);
    };
    
    //funcion para eliminar
    function deletedata($cod){
        //obtener los datos
        $data = getData();

        //eliminar registro
        unset($data[$cod]);

        //reindexar el array
        $data = array_values($data);

        //convertir el array a json y guardar

        $data = json_encode($data);
        file_put_contents("datos.txt", $data);
    };
?> 