<?php
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$database = "Programmer"; 

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$id_to_delete = "sample_id"; 

$sql = "DELETE FROM Stu_Reg WHERE ID = '$id_to_delete'";

if ($conn->query($sql) === TRUE) {
    echo "Record with ID $id_to_delete deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>
