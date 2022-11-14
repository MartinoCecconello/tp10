<!-- Comienza código: read.php -->
<table class="table table-bordered table-hover">
    <thead>
        <tr>
            <th>ID</th>
            <th>Apellido</th>
            <th>Nombre</th>
            <th>Teléfono</th>
            <th>E-mail</th>
            
        </tr>
    </thead>
    <tbody>
        <?PHP
            $query = "SELECT * FROM tp10";
            $result = mysqli_query($DB_conn, $query);

            while($register = mysqli_fetch_array($result)) { ?>
                <tr onclick="document.location = './edit.php?person_id=<?PHP echo $register['person_id']; ?>'">
                    <td><?PHP echo $register['person_id']; ?></td>
                    <td><?PHP echo $register['person_name']; ?></td>
                    <td><?PHP echo $register['person_surname']; ?></td>
                    <td><?PHP echo $register['person_phone']; ?></td>
                    <td><?PHP echo $register['person_email']; ?></td>
                    <td>

                        <a href="./edit.php?person_id=<?PHP echo $register['person_id']; ?>" class="btn btn-success" title="Editar el registro <?PHP echo $register['person_id']; ?>">
                            <!-- icono para editar -->
                            <i class="fas fa-user-edit"></i>
                        </a>
                        <a href="./delete.php?person_id=<?PHP echo $register['person_id']; ?>" class="btn btn-danger" title="Borrar el registro <?PHP echo $register['person_id']; ?>">
                            <!-- icono para eliminar -->
                            <i class="fas fa-trash-alt"></i>
                        </a>
                    </td>
                </tr>
            <?PHP } ?>
    </tbody>

</table>
