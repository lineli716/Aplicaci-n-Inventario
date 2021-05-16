<?php

$Exis1=$_POST['Exis1'];
$Ing1=$_POST['Ing1'];
$Sal1=$_POST['Sal1'];
$opciones=$_POST['opciones'];

if ($_POST["opciones"] == "Existencia")
{
    echo "Hay en existencia: ".($Exis1+$Ing1);
    
}
else if ($_POST["opciones"] == "Retirar")
{
    echo "Quedan en existencia: ".($Exis1-$Sal1);
}
?>
