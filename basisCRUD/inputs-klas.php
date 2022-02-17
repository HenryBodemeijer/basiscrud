<?php
$code = "";

if (!empty($klas)) {

$code = $klas['code'];
}

$vestiging = "";

if (!empty($klas)) {

$vestiging = $klas["vestiging"];
}

$sectie = "";

if (!empty($klas)) {

$sectie = $klas["sectie"];
}

$cohort = "";

if (!empty($klas)) {

$cohort = $klas["cohort"];
}

?>


<input type="hidden" name="id" value="<?php echo $klas["id"]; ?>">

<div class="form-group">
    <h2>wat is je code</h2>
    <input class="form-control" type="text" name="code" value="<?php echo $code;?>" required>
    <br>

    <h2>wat is je vestiging</h2>
    <input class="form-control" type="text" name="vestiging" value="<?php echo $vestiging;?>" required>
    <br>

    <h2>wat is je sectie</h2>
    <input class="form-control" type="text" name="sectie" value="<?php echo $sectie;?>" required>
    <br>

    <h2>wat is je cohort</h2>
    <input class="form-control" type="text" name="cohort" value="<?php echo $cohort;?>" required>
    <br>
    <input class="btn btn-primary" type="submit" value="verstuur">
</div>
</div>
</form>
