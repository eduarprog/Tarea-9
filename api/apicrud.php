<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro ataques | Ucrania</title>
</head>
<body>
</body>
</html>

<?php

include("desa.php");

extract($_GET);

if(isset($opt) && $opt == 'insert'){

    if(count($_POST) < 3 ){
        echo json_message("Por favor mandar datos de la ciudad de ucrania");
        exit();
    }


    if(!is_dir("datos")){
        mkdir("datos");
    }

     $opciones = new stdClass();

    if(!is_file('config.json')){
        $opciones->num = 0;
        }
    else{
        $opciones = json_decode(file_get_contents('config.json'));
    }

    $datos = $_POST;
    $datos['id'] = $opciones->num;
    $datos = json_encode($datos);
    file_put_contents('datos/'.$opciones->num.'.json', $datos);
    $opciones->num++;
    file_put_contents('config.json', json_encode($opciones));
    echo json_message("Datos guardados", "success");
}

if(isset($opt) && $opt == 'list'){

    $datos = [];

    $dir = scandir("datos");
    foreach($dir as $file){
        $path = "datos/$file";
        if(is_file($path)){
            $datos[] = json_decode(file_get_contents($path));
        }
    }

    $final = new serverResult();
    $final->status = "success";
    $final->message = "";
    $final->data = $datos;
    echo $final;
}

if(isset($opt) && $opt == 'delete'){

    if(isset($_GET['id'])){

        $path = "datos/".$_GET['id'].".json";
        if(is_file($path)){
            unlink($path);
            echo json_message("Eliminado", "success");
            exit();
        }
        else{
            echo json_message("No existe el archivo", "error");
            exit();
        }
    }

            echo json_message("No se pudo eliminar, error");
            exit();
}

if(isset($opt) && $opt == 'update'){

    if(isset($_GET['id'])){

        $path = "datos/".$_GET['id'].".json";
        if(is_file($path)){
            $_POST['id'] - $_GET['id'];
           $datos = json_encode($_POST);
           
           file_put_contents($path, $datos);
            echo json_message("Registro actualizado", "success");
            exit();
        }
        else{
            echo json_message("No existe el archivo", "error");
            exit();
        }
    }

            echo json_message("No se pudo actualizar, error");
            exit();
}