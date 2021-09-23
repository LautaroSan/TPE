<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo('<h1>');
    echo ('Hola mundo!');
    echo('</h1>');

    $listaIndex = array("Moni","lauta","Gustavo","Rodrigo","Marysol","Pedro","Juan");
    
    if(isset($_GET["tope"])){
        $tope=$_GET["tope"];
    }else{
        $tope = count($listaIndex);
    }
    
    
    echo("<ul>");
    for ($i=0; $i <$tope ; $i++) { 
        echo("<li>" . $listaIndex[$i] ."</li>");
    }
  
    echo("</ul>");
    echo("<a href='ejvarios.php?tope=2'> ver 2 items </a>");
    echo("<a href='ejvarios.php?tope=3'> ver 3 items </a>");
    echo("<a href='ejvarios.php?tope=4'> ver 4 items </a>");


    $listaAsoc = array("Moni"=> 58, "Gus" => 61, "Lauta" => 31);
    echo("<ul>");
    foreach ($listaAsoc as $key => $value) {
        echo("<li>". $key."=". $value. "</li>");    
    }
    echo("</ul>");



    if(!empty($_GET)){
        if(($_GET["nombre"]!="")&& ($_GET["edad"]!="") && ($_GET["edad"]!="") ){
            $nombre = $_GET["nombre"];
            $apellido = $_GET["apellido"];
            $edad = (int) $_GET["edad"];
            echo( "nombre  : ". $nombre);
            echo(" apellido : " . $apellido);
            echo(" edad : " . $edad);
        }
    }
    

    ?>
</body>
</html>