<?php
include "connectdb.php";
include "create-student-form.php";
include "functies.php";
$voornaam = $_POST['voornaam'];
$achternaam = $_POST['achternaam'];
$email = $_POST['email'];
$telefoonnummer = $_POST['telefoonnummer'];
$straatnaam = $_POST['straatnaam'];
$huisnummer = $_POST['huisnummer'];
$huisnummer_toevoeging = $_POST['huisnummer_toevoeging'];
$woonplaats = $_POST['woonplaats'];
$postcode = $_POST['postcode'];
$klasid = $_POST['klasid'];

if (emailcheck($email)){
if (postcodecheck($postcode)){
if (huisnummercheck($huisnummer)){


$sql = "INSERT INTO student (voornaam, achternaam, email, telefoonnummer, straatnaam, huisnummer, huisnummer_toevoeging, woonplaats, postcode, klasid) VALUES (:voornaam, :achternaam, :email, :telefoonnummer, :straatnaam, :huisnummer, :huisnummer_toevoeging, :woonplaats, :postcode, :klasid)";

$st = $db->prepare($sql);
$st->execute(['voornaam' => $voornaam, 'achternaam' => $achternaam, 'email' => $email, 'telefoonnummer' => $telefoonnummer, 'straatnaam' => $straatnaam, 'huisnummer' => $huisnummer, 'huisnummer_toevoeging' => $huisnummer_toevoeging, 'woonplaats' => $woonplaats, 'postcode' => $postcode, 'klasid' => $klasid]);
header('location: students.php');

}
}
}









