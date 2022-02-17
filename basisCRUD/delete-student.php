<?php
include "connectdb.php";
$id = $_GET['id'];



$sql = "DELETE FROM student WHERE id = :id";

$st = $db->prepare($sql);
$st->execute(['id' => $id]);
header('location: students.php');