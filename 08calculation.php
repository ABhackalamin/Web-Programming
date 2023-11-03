<?php
$sum = null;
$operation = null;
$x = 0;
$y = 0;
if(isset($_POST["operation"])){
    $x = $_POST["num1"];
    $y = $_POST["num2"];
    $operation = $_POST["operation"];

    if($operation == "+"){
        $sum = $x + $y;
    } elseif($operation == "-"){
        $sum = $x - $y;
    } elseif($operation == "*"){
        $sum = $x * $y;
    } elseif($operation == "/"){
        $sum = $x / $y;
        $sum = number_format($sum, 3);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A Simple Calculator</title>
</head>
<body>
    <!-- Your HTML code goes here -->
    <!-- ... -->
</body>
</html>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A Simple Calculator</title>
</head>
<body>
    <h1>A Simple Calculator</h1>
    <h4>Input</h4>
    <form action="calculation.php" method="POST">
        <label for="num1">Enter the first number</label>
        <input type="number" id="num1" name="num1" required > <br>

        <label for="num2">Enter the second number</label>
        <input type="number" id="num2" name="num2" required> <br>

        <button type="submit" name="operation" value="+">add</button>
        <button type="submit" name="operation" value="-">sub</button>
        <button type="submit" name="operation" value="*">multi</button>
        <button type="submit" name="operation" value="/">div</button>

        
        

    </form>
    <br>
    <label for="output"><h4>The Output of calculation</h4></label>
    <textarea name="output" id="output" cols="30" rows="5">

       <?php
            if($sum==null)
            {
                echo "$sum";
            }
            else
            {
                echo " $x $operation $y=$sum"; 
            }
            
       ?>
    </textarea>
</body>
</html>

