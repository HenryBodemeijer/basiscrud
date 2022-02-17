<?php
include "connectdb.php";
var_dump($_POST);
$code = $_POST['code'];
$vestiging = $_POST['vestiging'];
$sectie = $_POST['sectie'];
$cohort = $_POST['cohort'];
$id = $_POST['id'];

            $sql = "UPDATE klas SET code = :code, vestiging = :vestiging, sectie = :sectie, cohort = :cohort WHERE id = :id";
            $st = $db->prepare($sql);
            $st->execute([':code' => $code, ':vestiging' => $vestiging, ':sectie' => $sectie, ':cohort' => $cohort, ':id' => $id]);
            header('location: klassen.php');
