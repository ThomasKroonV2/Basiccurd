<script>

    function confirmDelete(studentId) {

        $("#modal-confirm").modal('show');


        $('#btn-delete-confirmed').on('click', function(){deleteStudent(studentId);});

    }
    function deleteStudent(studentId) {

        $('#modal-confirm').modal('hide');

        $.get('templates/delete-student.php',

            {id: studentId}).then(

            function() {

                window.location.href = 'index.php';

                window.location.reload(true);});

    }

</script>

<?php

include 'scripts/connectdb.php';

$sql = "SELECT student.*, klas.code FROM student JOIN klas ON (klas.id = student.klasid)";

$sth = $db->prepare($sql);

$sth->execute();

?>



<table class="table">

    <thead>

    <tr>

        <th>Id</th>

        <th>Voornaam</th>

        <th>Achternaam</th>

        <th>Adres</th>

        <th>klas</th>

        <th>Acties</th>
    </tr>

    </thead>

    <tbody>

    <?php while($row = $sth->fetch()) { ?>

        <tr>

            <td><?php echo $row["id"]; ?></td>

            <td><?php echo $row["voornaam"]; ?></td>

            <td><?php echo $row["achternaam"]; ?></td>

            <td><?php echo $row["straatnaam"] . " " . $row["huisnummer"] . " " . $row["woonplaats"];?></td>

            <td><?php echo $row["code"]; ?></td>

            <td><a class="btn btn-primary" role="button" href="templates/student/update-student-form.php?id=<?php echo $row["id"];?>">Wijzig</a></td>

<!--            <td><a class="btn btn-primary" role="button" href="templates/delete-student.php?id=--><?php //echo $row["id"];?><!--">Delete</a></td>-->

            <td><button onclick="confirmDelete(<?php echo $row["id"]; ?>)" class="btn btn-danger">Verwijder</button></td>
        </tr>

    <?php } ?>

    </tbody>

</table>

<div id="modal-confirm" class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">verwijderen</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Weet je zeker dat je hem wilt verwijderen?</p>
            </div>
            <div class="modal-footer">
                <button id="btn-delete-confirmed" onclick="confirmDelete()" class="btn btn-danger">Verwijder</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>