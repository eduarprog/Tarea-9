<?php


include("libs/engine.php");

function mostrarAtaques(){
    $result = obtenerAtaques();
   
    $result = $result->data;
    foreach($result as $ataque){
        echo"
             <tr>
             <td>{$ataque->id}</td>
             <td>{$ataque->Fecha}</td>
             <td>{$ataque->Hora}</td>
             <td>{$ataque->Ciudad}</td>
             <td>{$ataque->Latitud}</td>
             <td>{$ataque->Longitud}</td>
             <td>{$ataque->Tipo}</td>
             <td>{$ataque->Muertos}</td>
             <td>{$ataque->Heridos}</td>
             <td>{$ataque->Autor}</td>
            <td>
            <a href='editar.php?id={$ataque->id}' class='btn btn-primary'<Editar</a>
            </td>
        </tr>
        
        
        ";
    }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de ataques</title>
    
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="container"> 
    <h3>Tabla de ciudades afectadas</h3>
   <table class="table table-dark">
       <thead>
           <tr>
               <th>ID</th>
               <th>Fecha</th>
               <th>Hora</th>
               <th>Ciudad</th>
               <th>Latitud</th>
               <th>Longitud</th>
               <th>Tipo</th>
               <th>Muertos</th>
               <th>Heridos</th>
               <th>Autor</th>
           </tr>
       </thead>
       <tbody>
           <?php mostrarAtaques(); ?>
       </tbody>
   </table>
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