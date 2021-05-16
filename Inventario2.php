<?php

$Exis2=$_POST['Exis2'];
$Ing2=$_POST['Ing2'];
$Sal2=$_POST['Sal2'];
$opciones=$_POST['opciones'];

if ($_POST["opciones"] == "Existencia")
{
    echo "Hay en existencia: ".($Exis2+$Ing2);
    
}
else if ($_POST["opciones"] == "Retirar")
{
    echo "Quedan en existencia: ".($Exis2-$Sal2);
}
?>