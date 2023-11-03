<html>
    <head></head>

<?php
$connect = mysqli_connect('localhost', 'root', '', 'student');
if(isset($_POST['insert'])){
    $id=$_POST['id'];
    $name=$_POST['name'];
    $session=$_POST['session'];
    $phone_no=$_POST['phone_no'];
    $city=$_POST['city'];
    $gender=$_POST['gender'];
    $insert = "INSERT INTO `semester_reg` (`ID`, `Name`, `Session`, `Phone_No`, `City`, `Gender`) VALUES ('$id','$name','$session','$phone_no','$city','$gender')";
    $result = mysqli_query($connect, $insert);
    if ($result == 1)
        echo "Success!";
    else
        echo "Error";
}
if(isset($_POST['delete'])){
    $id=$_POST['id'];
    $name=$_POST['name'];
    $session=$_POST['session'];
    $delete = "delete from `semester_reg` where ID='$id' and Name='$name' and Session='$session'";
    $result = mysqli_query($connect, $delete);
    if ($result == 1)
        echo "success";
    else
        echo "Error";
}
if(isset($_POST['update'])){
    $id=$_POST['id'];
    $name=$_POST['name'];
    $session=$_POST['session'];
    $phone_no=$_POST['phone_no'];
    $city=$_POST['city'];
    $gender=$_POST['gender'];
    $update = "update `semester_reg` set Name='$name',Session='$session',Phone_No='$phone_no',City='$city',Gender='$gender' where ID='$id'";
    $result = mysqli_query($connect, $update);
    if ($result == 1)
        echo "success";
    else
        echo "Error";
}
if(isset($_POST['select'])){
    $query = "SELECT * FROM `semester_reg` ";
    $result = mysqli_query($connect, $query);
    if($result==true){
        echo "All  Registered Students List <br>";
        echo "<table border='1' cellpadding=10>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Session</th>
            <th>Phone Number</th>
            <th>City</th>
            <th>Gender</th>
        </tr>";
        if(mysqli_num_rows($result)>0){
            while($row=mysqli_fetch_array($result)){
                
                echo "<tr>";
                echo "<td>".$row['ID']."</td>";
                echo "<td>".$row['Name']."</td>";
                echo "<td>" . $row['Session']. "</td>";
                echo "<td>".$row['Phone_No']."</td>";
                echo "<td>".$row['City']."</td>";
                echo "<td>" . $row['Gender'] . "</td>";
            }
            echo "</table>";
        }
        else{
            echo "NO record Found!";
        }
    }
}
?>

<body>
<h2>Student registration form</h2>
<form method="post" action="">
    <table border="0" style="text-align: center;">
    <tr>
        <th>ID</th>
        <td><input type="text" name='id' required></td>
    </tr>
    <tr>
        <th>Name</th>
        <td><input name="name" type="text" required></td>
    </tr>
    <tr>
        <th>Session</th>
        <td><input type="text" name="session" required></td>
    </tr>
    <tr>
        <th>Phone_No</th>
        <td><input type="text" name="phone_no" required></td>
    </tr>
    <tr>
        <th>City</th>
        <td><input type="text" name="city" required></td>
    </tr>
    <tr>
        <th>Gender</th>
        <td><input type="radio" name="gender" value="Male" checked>
        <input type="radio" name="gender" value="Female"></td>
    </tr>
    <tr>
        <td colspan="4">
            <input type="submit" name="insert" value="Insert">
            <input type="submit" name="delete" value="Delete">
            <input type="submit" name="update" value="Update">
            <input type="submit" name="select" value="Show">
        </td>
    </tr>
</table>
<label style="color:red">N.B. </label> 1. To delete a record please enter your ID, Name and Session.<br>
              2. You can update all information except ID Number. <br>
              3.To show all record enter your ID, Name and Session.
</form>
    </body>
</html>