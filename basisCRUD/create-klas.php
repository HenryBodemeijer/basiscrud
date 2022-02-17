<?php
include "connectdb.php";
include "create-klas-form.php";
include "functies.php";
$code = $_POST['code'];
$vestiging = $_POST['vestiging'];
$sectie = $_POST['sectie'];
$cohort = $_POST['cohort'];


            $sql = "INSERT INTO klas (code, vestiging, sectie, cohort) VALUES (:code, :vestiging, :sectie, :cohort)";

            $st = $db->prepare($sql);
            $st->execute(['code' => $code, 'vestiging' => $vestiging, 'sectie' => $sectie, 'cohort' => $cohort]);
            header('location: klassen.php');
            ?>