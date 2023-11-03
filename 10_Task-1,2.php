<?php
$servername = "localhost"; 
$username = "root"; 
$password = ""; 

$conn = new mysqli($servername, $username, $password);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "CREATE DATABASE IF NOT EXISTS Programmer";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully<br>";
} else {
    echo "Error creating database: " . $conn->error;
}
$conn->select_db("Programmer");

$sql = "CREATE TABLE IF NOT EXISTS Stu_Reg (
      ID VARCHAR(30) PRIMARY KEY,
      Name TEXT,
      Image VARCHAR(400),
      Password VARCHAR(20) NOT NULL 
)";
if ($conn->query($sql) === TRUE) {
    echo "Table created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>
