<?php

$Fname = $_POST["firstname"];
$Lname = $_POST["lastname"];
$Email = $_POST["email"];
$PartyPackage = $_POST["partypackage"];
$ReservationDate = $_POST["reservationdate"];
$ReservationStartTime = $_POST["reservationtime"];

if($Fname !=''&& $Email !=''&& $Lname !=''&& $ReservationDate !='')
{
//  To redirect form on a particular page
header("Location:/PackagesandReservations");
}
else{
?><span><?php echo "Please fill all fields.";?></span> <?php
}

$dataFile = "reservations.txt";
$fh = fopen($dataFile, 'a');
$comma_delmited_list = implode("\t", $_POST) . "\n";
fwrite($fh, $comma_delmited_list);
fclase($fh);

?>
