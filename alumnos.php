<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alumnos</title>
</head>
<body>
    <?php 
    if(isset($_POST["txtNombre"])){
        $nombres = $_POST["txtNombre"];
        $edad = $_POST["txtEdad"];  

        echo "Nombre: $nombres<br>";        
        echo "Edad: $edad";
    }    
    ?>
</body>
</html>