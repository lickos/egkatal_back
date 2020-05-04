<?php
/**
 * Inserts a car.
 */
require 'connect.php';

$json = file_get_contents('php://input');
echo $json;

$data = json_decode($json);


$kodikos = $data->kodikos;
$hmerominia = $data->hmerominia;
$eidos = $data->eidos;
$marka = $data->marka;
$xroma = $data->xroma;
$diefthinsi = $data->diefthinsi;
$paratiriseis = $data->paratiriseis;

echo $kodikos;
    
$sql = "INSERT INTO oximata (kodikos, hmerominia, eidos, marka, xroma, diefthinsi, paratiriseis) 
VALUES ('{$kodikos}', '{$hmerominia}','{$eidos}', '{$marka}', '{$xroma}', '{$diefthinsi}', '{$paratiriseis}')";

if ($con->query($sql) === TRUE) {
    return "New record created successfully";
} else {
    return "Error: " . $sql . "<br>" . $conn->error;
}
?>