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
    <h1 class="titulo">TABLA FORMULARIO 3</h1>
    </br>
    </br>
    
</body>
</html>

<?php

$fecha= $_POST["fecha"];
$fechacompleta= $_POST["fechacompleta"];
$mes= $_POST["mes"];
$hora= $_POST["hora"];

echo '<table width="80%" align="center" cellpadding="12px" cellspacing="0px"border="1px">';
echo '<tr>';
echo '<td align="center">FECHA</td>';
echo '<td align="center">FECHA_FULL</td>';
echo '<td align="center">MES</td>';
echo '<td align="center">HORA</td>';
echo '</tr>';
echo '<tr>';
echo '<td align="center">'.$fecha.'</td>';
echo '<td align="center">'.$fechacompleta.'</td>';
echo '<td align="center">'.$mes.'</td>';
echo '<td align="center">'.$hora.'</td>';
echo '</tr>';
echo '</table>';
?>

<html>
<body>
</br>
<a href="../view/ACTIVIDAD1.html" target="_blanck"><button>Regresar</button></a>
</body>
</html>