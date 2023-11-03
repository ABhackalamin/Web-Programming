<?php
$servername = "localhost";
$username = "root"; 
$password = ""; 
$database = "Programmer";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM Stu_Reg";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "ID: " . $row["ID"] . "<br>";
        echo "Name: " . $row["Name"] . "<br>";
        echo "Image: " . $row["Image"] . "<br>";
        echo "Password: " . $row["Password"] . "<br>";
        echo "----------------------<br>";
    }
} else {
    echo "No records found";
}
$conn->close();
?>
