<?php

$Exis3=$_POST['Exis3'];
$Ing3=$_POST['Ing3'];
$Sal3=$_POST['Sal3'];
$opciones=$_POST['opciones'];

if ($_POST["opciones"] == "Existencia")
{
    echo "Hay en existencia: ".($Exis3+$Ing3);
    
}
else if ($_POST["opciones"] == "Retirar")
{
    echo "Quedan en existencia: ".($Exis3-$Sal3);
}
?>