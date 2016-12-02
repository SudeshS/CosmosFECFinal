<?php

$Fname = $_POST["firstname"];
$Lname = $_POST["lastname"];
$Email = $_POST["email"];
$PartyPackage = $_POST["partypackage"];
$ReservationDate = $_POST["reservationdate"];
$ReservationStartTime = $_POST["reservationtime"];

$dataFile = "reservations.txt";
$fh = fopen($dataFile, 'a');
$comma_delmited_list = implode("\t", $_POST) . "\n";
fwrite($fh, $comma_delmited_list);
fclase($fh);

?>
