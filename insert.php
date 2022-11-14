<!-- Comienza código: insert.php -->
<?PHP
require_once ("./db.php");

$name       = $_POST["name"];
$surname    = $_POST["surname"];
$phone      = $_POST["phone"];
$email      = $_POST["email"];

$query = "INSERT 
            INTO tp10(
                person_id, 
                person_name, 
                person_surname, 
                person_phone,
                person_email)
            VALUE (
                NULL, 
                '$name', 
                '$surname',
                '$phone',
                '$email');";

//echo $query;

$rs = mysqli_query($DB_conn, $query);

 if(!$rs) {
    echo "Error: No se pudo insertar en la base de datos MySQL." . NEWLINE;
    echo "Nro de error: " . mysqli_connect_errno() . NEWLINE;
    echo "Mensaje de depuración: " . mysqli_connect_error() . NEWLINE;
    exit;
 }

 $_SESSION['message'] = "Éxito: se guardaron correctamente los datos en la base.";
 $_SESSION['message_type'] = "success";

header("Location: ./crud.php");
?>