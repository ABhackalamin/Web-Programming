<?php
$result_str = $result = '';

if(isset($_POST['submit'])){
    $units = $_POST['units'];
    if(!empty($units) && $units > 0){
        $result = calculate_units($units);
        $result_str = 'Total amount of '.$units.' units = '.$result.' Taka';
    } else {
        $result_str = 'Please enter a valid number of units.';
    }
}

/**
 * Summary of calculate_units
 * @param mixed $units
 * @return string
 */
function calculate_units($units){
    if($units <= 50){
        $bill = $units * 3.5;
    }
    else if($units > 50 && $units <= 100){
        $bill = (50 * 3.5) + ($units - 50) * 4.00;
    }
    else if($units > 100 && $units <= 200){
        $bill = (50 * 3.5) + (50 * 4.00) + ($units - 100) * 5.20;
    }
    else if($units > 200 && $units <= 250){
        $bill = (50 * 3.5) + (50 * 4.00) + (100 * 5.20) + ($units - 200) * 6.50;
    }
    else if($units > 250){
        $bill = (50 * 3.5) + (50 * 4.00) + (100 * 5.20) + (50 * 6.50) + ($units - 250) * 7.00;
    }
    return number_format((float)$bill, 2, '.', '');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>electricity bill calculation</title>
</head>
<body>
    <h1>Electricity Bill calculator</h1>
    <form action="07electricbill.php" name="php" method="POST">
        <label for="units">Enter the units of electricity consumed:</label>
        <input type="number" id="units" name="units"  >
        <button name="submit" type="submit" value="submit">Submit</button>
    </form>

    <?php
    echo '<br />' . $result_str;
    ?>
</body>
</html>
