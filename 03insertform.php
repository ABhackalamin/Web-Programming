<?php
$base = mysqli_connect('localhost', 'root', '', 'insertform');

if(isset($_POST['submit'])){ // Note the corrected quotes around 'submit'

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    $sql = "INSERT INTO form(name, email, password) VALUES ('$name', '$email', '$password')"; // Corrected SQL syntax
    
    if(mysqli_query($base, $sql)){ // Changed from `mysql_query` to `mysqli_query`
        echo "Inserted successfully";
    }
    else{
        echo "Insertion failed: " . mysqli_error($base); // Added error message for debugging
    }
}

mysqli_close($base); // Close the connection after use
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
    <style>
        body{
            background-color: palegoldenrod;
        }
        h1{
            text-align: center;
            color:green;
        }
        input{
           width:100%;
           border-radius:8px;
           height: 30px;
        }

        button{
            border-radius: 8px;
            width:70px;
            height: 30px;

        }
    </style>
</head>
<body>
  <h1>Personal Details Form</h1>  
  <form action="insertform.php" method="POST" >
    <label for="name">Name: </label>
    <input type="text" id="name" name="name" required > <br>
    <label for="email">Email :</label>
    <input type="email" id="email" name="email" required><br>
    <label for="password">Password : </label>
    <input type="password" id="password" name="password" required> <br>
    <br>

    <button type="submit" name="submit" value="submit" >submit</button>

  </form>
</body>
</html>

