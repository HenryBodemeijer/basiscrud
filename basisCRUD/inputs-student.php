<?php
$voornaam = "";

if (!empty($student)) {

    $voornaam = $student["voornaam"];

}

$achternaam = "";

if (!empty($student)) {

    $achternaam = $student["achternaam"];
}

$email = "";

if (!empty($student)) {

    $email = $student["email"];
}

$telefoonnummer = "";

if (!empty($student)) {

    $telefoonnummer = $student["telefoonnummer"];
}

$straatnaam = "";

if (!empty($student)) {

    $straatnaam = $student["straatnaam"];
}

$huisnummer = "";

if (!empty($student)) {

    $huisnummer = $student["huisnummer"];
}

$huisnummer_toevoeging = "";

if (!empty($student)) {

    $huisnummer_toevoeging = $student["huisnummer_toevoeging"];
}

$woonplaats = "";

if (!empty($student)) {

    $woonplaats = $student["woonplaats"];
}

$postcode = "";

if (!empty($student)) {

    $postcode = $student["postcode"];
}
?>


<input type="hidden" name="id" value="<?php echo $student["id"]; ?>">
<div class="form-group">
<h2>wat is je klasid</h2>
<select name="klasid" class="form-control">
    <?php include "connectdb.php";

    $sql = "SELECT * FROM klas";

    $sth = $db->prepare($sql);

    $sth->execute();

    while($klasid = $sth->fetch()) { ?>
        <option value="<?php echo $klasid["id"]; ?>"> <?php echo $klasid["id"]; ?></option>
    <?php } ?>
    required
</select>

    <h2>wat is je voornaam</h2>
    <input class="form-control" type="text" name="voornaam" value="<?php echo $voornaam;?>" required>
    <br>

    <h2>wat is je achternaam</h2>
    <input class="form-control" type="text" name="achternaam" value="<?php echo $achternaam;?>" required>
    <br>

    <h2>wat is je e_mail</h2>
    <input class="form-control" type="text" name="email" value="<?php echo $email;?>" required>
    <br>

    <h2>wat is je telefoonnummer</h2>
    <input class="form-control" type="text" name="telefoonnummer" value="<?php echo $telefoonnummer;?>" required>
    <br>

    <h2>wat is je straatnaam</h2>
    <input class="form-control" type="text" name="straatnaam" value="<?php echo $straatnaam;?>" required>
    <br>

    <h2>wat is je huisnummer</h2>
    <input class="form-control" type="number" name="huisnummer" placeholder="0" value="<?php echo $huisnummer;?>" required>
    <?php if(isset($_POST['huisnummer']) && is_numeric($_POST['huisnummer'])) ?>
    <br>

    <h2>wat is je huisnummer_toevoeging</h2>
    <input class="form-control" type="text" name="huisnummer_toevoeging" value="<?php echo $huisnummer_toevoeging;?>">
    <br>

    <h2>wat is je woonplaats</h2>
    <input class="form-control" type="text" name="woonplaats" value="<?php echo $woonplaats;?>" required>
    <br>

    <h2>wat is je postcode</h2>
    <input class="form-control" type="text" name="postcode" value="<?php echo $postcode;?>" required>
    <br>
    <input class="btn btn-primary" type="submit" value="verstuur">
</div>
</div>
</form>
