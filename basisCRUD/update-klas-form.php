<?php include "templates/header.php"; ?>
<body>
<?php
$klas=[];
include "read-klas.php";
?>
<div class="box1">
    <form class="container" action="update-klas.php" method="POST">
        <?php include "inputs-klas.php"; ?>


</body>
<?php include "templates/footer.php"; ?>
