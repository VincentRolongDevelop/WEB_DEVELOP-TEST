<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../view/style/estilo_frm.css">  

    <title>TABLA#2</title>
</head>
<body>
    <h1 class="titulo">TABLA FORMULARIO 2</h1>
    </br>
    </br>
    
</body>
</html>



<?php

$genero= isset($_POST["genero"])? $_POST["genero"]:'';
$hobbie1= isset($_POST["hobbie1"])?$_POST["hobbie1"]:'';
$hobbie2= isset($_POST["hobbie2"])?$_POST["hobbie2"]:'';
$hobbie3= isset($_POST["hobbie3"])?$_POST["hobbie3"]:'';
$hobbie4= isset($_POST["hobbie4"])?$_POST["hobbie4"]:'';

 
if($genero!='M'&& $genero!='F'){

    $genero="NO SELECCIONADO";
    

}

if($genero=='M'){

    $genero="MASCULINO";

}

if($genero=='F'){

    $genero="FEMENINO";

}


if($hobbie1=='leer'){

    $hobbie1="SI";

}else{
    $hobbie1="NO";
}

if($hobbie2=='cine'){

    $hobbie2="SI";

}else{
    $hobbie2="NO";
}

if($hobbie3=='tv'){

    $hobbie3="SI";

}else{
    $hobbie3="NO";
}

if($hobbie4=='jugar'){

    $hobbie4="SI";

}else{
    $hobbie4="NO";
}

echo '<table width="80%" align="center" cellpadding="12px" cellspacing="0px"border="1px">';
echo '<tr>';
echo '<td align="center">Genero</td>';
echo '<td align="center">Lee</td>';
echo '<td align="center">Cine</td>';
echo '<td align="center">Tv</td>';
echo '<td align="center">Jugar</td>';
echo '</tr>';
echo '<tr>';
echo '<td align="center">'.$genero.'</td>';
echo '<td align="center">'.$hobbie1.'</td>';
echo '<td align="center">'.$hobbie2.'</td>';
echo '<td align="center">'.$hobbie3.'</td>';
echo '<td align="center">'.$hobbie4.'</td>';
echo '</tr>';
echo '</table>';
?>

<html>
<body>
</br>
<a href="../view/ACTIVIDAD1.html" target="_blanck"><button>Regresar</button></a>
</body>
</html>