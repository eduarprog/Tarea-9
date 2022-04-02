<?php

if ($_POST) {
    $url = $_POST['url'];
    $texto = <<<TEXTO
<?php
#Aqui se configuro el script

    define('APP_URL', '{$url}');
  
TEXTO;

    file_put_contents('config.php', $texto);
    header("Location: ./web");
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscador de proyectos | API REST</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <h2> Busca el proyecto abajo al introducir la URL</h2>
    <hr>
    <div class="container" style="justify-content: center;">
    <form method="post" action="<?= $_SERVER['REQUEST_URI']; ?>">
        <input type="text" name="url" placeholder="Escriba la url del proyecto ">
        <button type="submit">Continuar </button>

    </form>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <hr>
   Eduardo Sanchez | 202010246
</body>

</html>