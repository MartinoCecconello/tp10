<!-- Comienza código: edit.php -->
<?PHP

include("./db.php");

if(isset($_GET['person_id'])) {
    $id = $_GET['person_id'];
    $query = "SELECT * FROM tp10
                WHERE person_id = $id";
    $result = mysqli_query($DB_conn, $query);
    if(mysqli_num_rows($result) == 1) {
        $register = mysqli_fetch_array($result);
        $name = $register['person_name'];
        $surname = $register['person_surname'];
        $phone = $register['person_phone'];
        $email = $register['person_email'];
    }
}

?>

<?php include ("./header.php"); ?>

<div class="container p-4">
    <div class="row">
        <div class="col-4 mx-auto">
            <div class="card" card-body>
            <div class="card-header">Editar Perfil</div>
                <form action="./update.php" method="POST">
                    <input type="hidden" name="id" value="<?PHP echo $id ?>">
                    <div class="form-group">
                        <div class="mb-3">
                            <label for="name">Nombre</label>
                            <input type="text" id="name" name="name" class="form-control" value="<?PHP echo $name ?>" placeholder="Escriba su nombre" autofocus required>
                        </div>
                    
                        <div class="mb-3">
                            <label for="surname">Apellido</label>
                            <input type="text" name="surname" class="form-control" value="<?PHP echo $surname ?>"  required>
                        </div>
                    
                        <div class="mb-3">
                            <label for="name">Teléfono</label>
                            <input type="text" name="phone" class="form-control" value="<?PHP echo $phone ?>">
                        </div>
                    
                        <div class="mb-3">
                            <label for="name">E-mail</label>
                            <input type="email" name="email" class="form-control" value="<?PHP echo $email ?>">
                        </div>
                    </div>
                    <input type="submit" class="btn btn-success" name="update" value="Actualizar">
                </form>
            </div>
        </div>
    </div>
</div>

<?php include ("./footer.php"); ?>