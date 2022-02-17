<?php include "../head.php";
include "read-student.php";
?>
<form action="update-student.php" method="POST" class="container">
<?php include "inputs-student.php";?>
    <input type="submit" class="btn btn-primary " value="wijzig student">
</form>
<?php include "../footer.php";?>