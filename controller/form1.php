<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../view/style/estilo_frm.css">  

    <title>TABLA</title>
</head>
<body>

    </br>
    <h1 class="titulo">TABLA FORMULARIO 1</h1>
    </br>
    </br>
    
</body>
</html>

<?php
$codigo= $_POST["Codigo"];
$Clave= $_POST["Clave"];
$Email= $_POST["Email"];
$Celular= $_POST["Celular"];
$Buscar= $_POST["Buscar"];

echo '<table width="80%" align="center" cellpadding="12px" cellspacing="0px"border="1px">';
echo '<tr>';
echo '<td align="center">Codigo</td>';
echo '<td align="center">Clave</td>';
echo '<td align="center">Email</td>';
echo '<td align="center">Celular</td>';
echo '<td align="center">Buscar</td>';
echo '</tr>';
echo '<tr>';
echo '<td align="center">'.$codigo.'</td>';
echo '<td align="center">'.$Clave.'</td>';
echo '<td align="center">'.$Email.'</td>';
echo '<td align="center">'.$Celular.'</td>';
echo '<td align="center">'.$Buscar.'</td>';
echo '</tr>';
echo '</table>';


?>

<html>
<body>
</br>
<a href="../view/ACTIVIDAD1.html" target="_blanck"><button>Regresar</button></a>
</body>
</html>