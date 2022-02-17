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
    <label for="klasid">klasid</label>
    <select name="klasid" class="form-control">

        <?php include "../../scripts/connectdb.php";

        $sql = "SELECT * FROM klas";

        $stmt = $db->prepare($sql);

        $stmt->execute();


        while($klasid = $stmt->fetch()) { ?>
            <option value="<?php echo $klasid["id"]; ?>"> <?php echo $klasid["id"]; ?></option>
        <?php } ?>
        required
    </select>
</div>
<div class="form-group">
    <label for="voornaam">voornaam:</label><br>
    <input type="text" name="voornaam" value="<?php echo $voornaam ?>" class="form-control" required><br>
</div>
<div class="form-group">
    <label for="achternaam">achternaam:</label><br>
    <input type="text" name="achternaam" value="<?php echo $achternaam ?>" class="form-control" required><br>
</div>
<div class="form-group">
    <label for="email">e-mail:</label><br>
    <input type="text" name="email" value="<?php echo $email ?>" class="form-control" required><br>
</div>
<div class="form-group">
    <label for="telefoonnummer">telefoonnummer:</label><br>
    <input type="text" name="telefoonnummer" value="<?php echo $telefoonnummer ?>" class="form-control" required><br>
</div>
<div class="form-group">
    <label for="straatnaam">straatnaam:</label><br>
    <input type="text" name="straatnaam" value="<?php echo $straatnaam ?>" class="form-control" required><br>
</div>
<div class="form-group">
    <label for="huisnummer">huisnummer:</label><br>
    <input type="text" name="huisnummer" value="<?php echo $huisnummer ?>" class="form-control" required><br>
</div>
<div class="form-group">
    <label for="huisnummer_toevoeging">huisnummer toevoeging:</label><br>
    <input type="text" name="huisnummer_toevoeging" value="<?php echo $huisnummer_toevoeging?>" class="form-control"><br>
</div>
<div class="form-group">
    <label for="woonplaats">woonplaats:</label><br>
    <input type="text" name="woonplaats" value="<?php echo $woonplaats ?>" class="form-control" required><br>
</div>
<div class="form-group">
    <label for="postcode">postcode:</label><br>
    <input type="text" name="postcode" value="<?php echo $postcode ?>" class="form-control" required><br>
</div>
