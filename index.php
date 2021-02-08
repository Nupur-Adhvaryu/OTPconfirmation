<!DOCTYPE html>
<html>
    <head>
        <title>Submit Form</title>
       <!-- CSS only -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

        <!-- JS, Popper.js, and jQuery -->
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
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
    ?>
        <div>
        <form action="getOTP.php" method="POST">
        <div class="form-group">
        <label for="company">Company Name</label>
        <input id="company" class="form-control" type="text" name = "cName" required><br/>
        </div>

        <div class="form-group">
        <label for="contact">Contact Person</label>
        <input id="contact" class="form-control" type="text" name = "pName" required><br/>
        </div>

        <div class="form-group">
        <label for="email">Enter Email</label>
        <input id="email" class="form-control" type="email" name = "email" required><br/>
        </div>
            <div class="form-group">
            <label for="phone">Enter Phone Number</label>
            <input id="phone" class="form-control" type="tel" name = "num" required><br/>
            </div>
            <div class="form-group">
            <label for="add">Address</label>
            <textarea id="add" class="form-control" name = "add" required></textarea><br/>
            </div>

            <div class="form-group">
            <label for="ps">Products / Services</label>
            <textarea id="ps" class="form-control" name = "pc" required></textarea><br/>
            </div>
            <div class="form-group">
            <input type="checkbox" value="1" onchange="check(this)"> I hereby confirm my acceptance for company's terms and conditions<br>
            </div>
            <div class="form-group">
            <input type="submit" class="btn btn-primary" name = "submit" id = "s" value="Submit" disabled>
            </div>
        </form>
    </div>
        <script>
            var check = function(checkBox){
                if(checkBox.checked){
                    document.getElementById("s").disabled = false
                }
                else{
                    
                    document.getElementById("s").disabled = true
                }
            }
        </script>
    </html>