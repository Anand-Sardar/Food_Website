<?php
error_reporting(0);
$server = "localhost";
$username = "root";
$password = "";
$database = "registration";

// Create connection
$conn = mysqli_connect($server, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connection successful : ";
}


if (isset($_POST['Register'])) { // Check if the "register" field is set in $_POST
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $conf_password = $_POST['conf_password'];
    $gender = $_POST['gender'];
    $city = $_POST['city'];
    $check = $_POST['checkbox'];

$query = "INSERT INTO registration (first_name, last_name, email, password, conf_password, gender, city, checkbox)
 VALUES ('$first_name', '$last_name', '$email', '$password', '$conf_password', '$gender', '$city', '$checkbox')";


    $data = mysqli_query($conn, $query);

    if ($data) {
        echo "Data Inserted";
    } else {
        echo "Failed: " . mysqli_error($conn); // Display the error message
    }
}
?>
