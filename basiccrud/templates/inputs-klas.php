<?php
$code = "";
if (!empty($student)) {
    $code = $student["code"];
}

$vestiging = "";
if (!empty($student)) {
    $vestiging = $student["vestiging"];
}

$sectie = "";
if (!empty($student)) {
    $sectie = $student["sectie"];
}

$cohort = "";
if (!empty($student)) {
    $cohort = $student["cohort"];
}
?>
<input type="hidden" name="id" value="<?php echo $student["id"]; ?>">
<div class="form-group">
    <label for="code">code:</label><br>
    <input type="text" name="code" value="<?php echo $code ?>" class="form-control" required><br>
</div>
<div class="form-group">
    <label for="vestiging">vestiging:</label><br>
    <input type="text" name="vestiging" value="<?php echo $vestiging ?>" class="form-control" required><br>
</div>
<div class="form-group">
    <label for="sectie">sectie:</label><br>
    <input type="text" name="sectie" value="<?php echo $sectie ?>" class="form-control" required><br>
</div>
<div class="form-group">
    <label for="cohort">cohort:</label><br>
    <input type="text" name="cohort" value="<?php echo $cohort ?>" class="form-control" required><br>
</div>
