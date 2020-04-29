<?php
/**
 * Inserts a car.
 */
require 'connect.php';
// header('Access-Control-Allow-Origin: *');

$cars = [];
$sql = "SELECT * from oximata";

if($result = mysqli_query($con,$sql))
{
  $cr = 0;
  while($row = mysqli_fetch_assoc($result))
  {
    $cars[$cr]['kodikos'] = $row['kodikos'];
    $cars[$cr]['hmerominia'] = $row['hmerominia'];
    $cars[$cr]['eidos'] = $row['eidos'];
    $cars[$cr]['marka'] = $row['marka'];
    $cars[$cr]['xroma'] = $row['xroma'];
    $cars[$cr]['diefthinsi'] = $row['diefthinsi'];
    $cars[$cr]['paratiriseis'] = $row['paratiriseis'];
    $cr++;
  }
    
  echo json_encode(['data'=>$cars]);
}
else
{
  http_response_code(404);
}
?>