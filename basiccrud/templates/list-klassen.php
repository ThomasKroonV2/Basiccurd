<script>

    function confirmDelete(klasId) {

        $("#modal-confirm").modal('show');


        $('#btn-delete-confirmed').on('click', function(){deleteStudent(klasId);});

    }
    function deleteStudent(klasId) {

        $('#modal-confirm').modal('hide');

        $.get('templates/delete-klas.php',

            {id: klasId}).then(

            function() {

                window.location.href = 'index.php';

                window.location.reload(true);});

    }

</script>

<?php

include 'scripts/connectdb.php';
$sql = "SELECT * FROM klas";

$sth = $db->prepare($sql);

$sth->execute();

?>



<table class="table">

    <thead>

    <tr>

        <th> Id</th>

        <th>Code</th>

        <th>Vestiging</th>



    </tr>

    </thead>

    <tbody>

    <?php while($row = $sth->fetch()) { ?>

        <tr>

            <td><?php echo $row["id"]; ?></td>

            <td><?php echo $row["code"]; ?></td>

            <td><?php echo $row["vestiging"]; ?></td>

            <td><a class="btn btn-primary" role="button" href="templates/update-klas-form.php?id=<?php echo $row["id"];?>">Wijzig</a></td>

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