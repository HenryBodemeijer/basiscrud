<?php
include "connectdb.php";
$id = $_GET['id'];

$sql = "DELETE FROM klas WHERE id = :id";

$st = $db->prepare($sql);
$st->execute(['id' => $id]);
header('location: klassen.php');