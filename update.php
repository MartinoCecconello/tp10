<!-- Comienza código: update.php -->
<?PHP
include ("./db.php");

if(isset($_POST['update'])) {    
    $id        = $_POST["id"];
    $name       = $_POST["name"];
    $surname    = $_POST["surname"];
    $phone      = $_POST["phone"];
    $email      = $_POST["email"];

    $query = "UPDATE tp10 SET    person_name = '$name',
                                    person_surname = '$surname',
                                    person_phone = '$phone',
                                    person_email = '$email'
                             WHERE  person_id = $id";
    mysqli_query($DB_conn, $query);
    echo "query: ".$query;

    $_SESSION['message'] = "Éxito: se actualizaron correctamente los datos del registro en la base.";
    $_SESSION['message_type'] = "primary";
   
    header("Location: ./crud.php");
}

?>
