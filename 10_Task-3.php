<?php

    $conn=mysqli_connect("localhost","root","","programmer");
if(isset($_POST["submit"])){
    $id=$_POST['id'];
    $name=$_POST['name'];
    $pass=$_POST['pass'];
    $imge=$_FILES['imge']['name'];

    // $tempname=$_FILES['imge']['temp_name'];
    // $uploc='images/'.$imge;

    $sql = "INSERT INTO Stu_Reg(ID, Name, Image, Password) VALUES ('$id', '$name', '$imge', '$pass')";

    $result=mysqli_query($conn,$sql);

    if($result==TRUE){
        echo '<div class="alert alert-success" role="alert">
         <strong>Success></strong> Data  inserted Succesfully
      </div>';
        // move_uploaded_file($tempname,$uploc);
        echo "Data Submited";
    }else{
        echo "Not Submited";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <div class=" container mt-5 d-flex justify-content-center">
        <form action="" method="POST" enctype="multipart/form-data" >
            <label for="">ID</label>
            <input type="text" name="id" ><br><br>
            <label for="">Name</label>
            <input type="text" name="name"><br><br>
            <label for="">Image</label>
            <input type="file" name="imge"><br><br>
            <label for="password">Password</label>
            <input type="password" name="pass" id="password" required><br><br>
            <button type="submit" name="submit">Button</button>
        </form>
    </div>

    <div class="container mt-5 d-flex justify-content-center" >
        <table class="table table-bordered w-50" >
            <thead class="table-dark">
                <tr>
                    <th scope="col" >ID</th>
                    <th scope="col" >Name</th>
                    <th scope="col" >Image</th>
                </tr>
            </thead >
            <tbody>
                <!-- <?php
                $sql="Select * from stu_reg ";
                $result=mysqli_query($conn,$sql);
                $row=mysqli_fetch_assoc($result);
                while($row){
                    $id=$row["id"];
                    $name=$row["name"];
                    $imge=$row['imge'];
                }
                echo '<tr>
                    <td '.$id.'</td>
                    <td>'.$name.'</td>
                    <td>'.$imge.'</td>
                </tr> ';
        
                ?> -->

                <tr>
                    <td scope="row">1</td>
                    <td>Mark</td>
                    <td>otto</td>
                </tr>
            </tbody>
        </table>
    </div> 

    
</body>
</html>



