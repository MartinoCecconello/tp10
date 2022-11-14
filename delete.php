<!-- Comienza código: delete.php -->
<?PHP

require_once ("./db.php");

if($_GET['person_id']) {
    $id = $_GET['person_id'];
    $query = "DELETE FROM tp10
                WHERE person_id = $id";
    $result = mysqli_query($DB_conn, $query);
    if(!$result) {
        $_SESSION['message'] = "Error: NO se eliminó el registro solicitado, hubo un error en la consulta SQL.";
        $_SESSION['message_type'] = "danger";
    }
    else {
        $_SESSION['message'] = "Éxito: se eliminó correctamente el registro solicitado.";
        $_SESSION['message_type'] = "success";
    }
    
    header("Location: ./crud.php");
}

?>


