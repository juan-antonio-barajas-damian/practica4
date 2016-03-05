
<?php 
if ($_POST)
{
$numero = $_POST["numero"];
$numero2 =  $_POST["numero2"];
$resultado = $numero + $numero2;


echo "LA SUMA DE " .$numero. " y " .$numero2. " es " .$resultado;
}

?>
