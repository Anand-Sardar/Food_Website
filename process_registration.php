<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Add your code here to validate and save the user data to a database.
    // You should also hash the password for security.

    // Redirect the user to a success page or display a message.
    header("Location: registration_success.html");
}
?>
