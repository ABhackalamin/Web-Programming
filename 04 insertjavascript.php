<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Form</title>
    <style>
        body {
            background-color: antiquewhite;
            font-family: Arial, Helvetica, sans-serif;
        }
        h1 {
            text-align: center;
        }
        label {
            font-weight: bold;
            margin-bottom: 5px;
        }
        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border-radius: 8px;
            border-color: green;
        }
        input[type="submit"] {
            background-color: blueviolet;
            color: white;
            cursor: pointer;
            padding: 5px 5px;
            margin: 0 auto;
            display: block;
        }
    </style>
</head>
<body>
    <h1>Personal Details</h1>
  
    <form name="myForm" onsubmit="return validateForm()"  action="insertform.php" method="POST">
        
        <label for="name">First Name : </label>
        <input type="text" id="name" name="name" placeholder="Enter your name"><br>
        <label for="email">Email : </label>
        <input type="email" id="email" name="email" placeholder="Enter valid email "><br>
        <label for="phone">Phone Number: </label>
        <input type="tel" id="phone" name="phone" placeholder="Enter 10 digit phone number "><br>
        <label for="password">Password : </label>
        <input type="password" id="password" name="password" placeholder="Enter 6 digit password"><br>
        <input type="submit" name="submit" value="Submit">
    </form>

    <script>
        function validateForm() {
            // Name validation
            var name = document.forms["myForm"]["name"].value;
            if (name.length < 6 || !/^[a-zA-Z]+$/.test(name)) {
                alert("Name should contain alphabets and the length should not be less than 6 characters.");
                return false;
            }
            // Email validation
            var email = document.forms["myForm"]["email"].value;
            var emailRegex = /\S+@\S+\.\S+/;
            if (email == "" || !emailRegex.test(email)) {
                alert("Please enter a valid email address.");
                return false;
            }
            // Phone Number validation
            var phone = document.forms["myForm"]["phone"].value;
            var phoneRegex = /^\d{10}$/;
            if (phone == "" || !phoneRegex.test(phone)) {
                alert("Please enter a valid phone number with 10 digits only.");
                return false;
            }
            // Password validation
            var password = document.forms["myForm"]["password"].value; 
            if (password == "" || password.length < 6) {
                alert("Please enter a valid password with length not less than 6 characters.");
                return false;
            }

            alert("Successfully submitted the registration form!");
            return true;
        }
    </script>
</body>
</html>
