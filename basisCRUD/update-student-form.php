<?php include "templates/header.php"; ?>
<body>
<?php
$student=[];
include "read-student.php";
?>
<div class="box1">
    <form class="container" action="update-student.php" method="POST">
        <?php include "inputs-student.php"; ?>


</body>
<?php include "templates/footer.php"; ?>

