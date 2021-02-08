<?php
$otp = rand(10000,99999);
session_start();
$_SESSION['OTP'] = $otp;
$_SESSION['company'] = $_POST['cName'];
$_SESSION['contact'] = $_POST['pName'];
$_SESSION['email'] = $_POST['email'];
$_SESSION['phone'] = $_POST['num'];
$_SESSION['add'] = $_POST['add'];
if(isset($_POST['submit'])){    
    $num = $_POST['num'];
    $url = "http://75sms.com/vendorsms/pushsms.aspx?user=spa123&password=spa123&msisdn=".$num."&sid=AQUASP&msg=Your%20OTP%20is%20".$otp."&fl=0&gwid=2";
    $ch = curl_init($url);
    $result = curl_exec($ch);
    curl_close($ch);
    echo isset($result) ? "Your OTP is sent to your Number" : "Failed To send OTP";
}
include 'confirmOTP.php'
?>