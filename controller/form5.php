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
    <h1 class="titulo">TABLA FORMULARIO 5</h1>
    </br>
    </br>
    
</body>
</html>

<?php

$estado_civil= $_POST["estado_civil"];
$idiomas= $_POST["idiomas"];

if($estado_civil=='0') $estado_civil="No respondio";
if($estado_civil=='1') $estado_civil="Casado";
if($estado_civil=='2') $estado_civil="Soltero";
if($estado_civil=='3') $estado_civil="Union libre";


if($idiomas=='esp') $idiomas="ESPAÑOL";
if($idiomas=='ing') $idiomas="INGLES";
if($idiomas=='ita') $idiomas="ITALIANO";
if($idiomas=='port') $idiomas="PORTUGUES";
if($idiomas=='fra') $idiomas="FRANCES";



echo '<table width="80%" align="center" cellpadding="12px" cellspacing="0px"border="1px">';
echo '<tr>';
echo '<td align="center">ESTADO CIVIL</td>';
echo '<td align="center">IDIOMA PRINCIPAL</td>';
echo '</tr>';
echo '<tr>';
echo '<td align="center">'.$estado_civil.'</td>';
echo '<td align="center">'.$idiomas.'</td>';
echo '</tr>';
echo '</table>';
?>

<html>
<body>
</br>
<a href="../view/ACTIVIDAD1.html" target="_blanck"><button>Regresar</button></a>
</body>
</html>