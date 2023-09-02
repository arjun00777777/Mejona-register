<?php
if (isset($_POST["register"])) {
    $name = $_POST["registerName"];
    $email = $_POST["registerEmail"];
    $mobile = $_POST["registerMobile"];
    $mobileOTP = $_POST["registerMobileOTP"];
    $password = $_POST["registerPassword"];
    $rePassword = $_POST["registerRePassword"];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "mejonaregistered";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO users (Name, Email, Mobile, Password,Repassword,Otp) VALUES ('$name', '$email', '$mobile', '$password','$rePassword','$mobileOtp')";

    if ($conn->query($sql) === TRUE) {
        echo "Registration successful!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
