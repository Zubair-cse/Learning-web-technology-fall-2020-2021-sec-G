  
<?php


require_once('../db/db.php');

$conn = getConnection();
$value = $_GET['msg'];
$sql = "DELETE FROM user WHERE id='$value'";
mysqli_query($conn, $sql);
$conn->close();
header('location: ../view/home.php');
exit;

?>