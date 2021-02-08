<!DOCTYPE html>
<html>
    <head> 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <style>
    body{
                margin: auto;
                width: 65%;
                padding: 10px;    
            }
            </style>
    </head>
    <body>
<?php
require_once "header.php";
    if(isset($_POST['submit'])){
        session_start();
        if($_SESSION['OTP'] == $_POST['num']){

            // Create connection
            $conn = new mysqli("50.62.209.77:3306", "exhibitor", '$dw6lQ57',"exhibitor");

            // Check connection
            if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
            }
            $sql = "INSERT INTO User_Data (company, contactPerson, email, phone, address) VALUES('{$_SESSION['company']}','{$_SESSION['contact']}','{$_SESSION['email']}','{$_SESSION['phone']}','{$_SESSION['add']}')";
            if ($conn->query($sql) === TRUE) {
                echo "<strong style = 'color: green'>User Added successfully</strong>";
              } else {
                echo "<strong style = 'color: red'>User was not added.</strong>";
              }
              
              $conn->close();
            
        }
    }
?>
<div>
    <p>It May take couple of minutes to recieve OTP</p>
        <form action = "confirmOTP.php" method = "POST">

        <div class="form-group">
        <label for="otp">Enter OTP</label>
            <input class="form-control"  id= "otp" name = "num" type = "number" min = 10000 max = 99999 required/>
        </div>
            <div class="form-group">
            <input type = "submit" class= "btn btn-primary" name = "submit" value = "register">
        </div>
        </form>
</div>
<div>
    <a class="btn btn-outline-danger" href="index.php" role="button">Back</a>
</div>
    </body>
</html>