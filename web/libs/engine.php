
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscar proyecto| API REST</title>
</head>
<body>
    
</body>
</html>
<?php

include('../config.php');
if(!defined('APP_URL')){
    define('APP_URL', '');
}


function obtenerAtaques(){
    $url = APP_URL. '/api/apicrud.php?opt=list';
    $result = file_get_contents($url);
    if($result === false){
        echo "
        <script>
               window.location = '../install.php';
        </script>
        
        ";
        exit();
    }
    $result = json_decode($result);
    return $result;
}