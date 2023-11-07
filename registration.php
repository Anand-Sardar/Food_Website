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
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
body{
    font-size: 14px;
    background-color: #f2f2f2;
}
.container{
    background-color: white;
    width: 500px;
    padding: 25px;
    margin: 50px auto 0;
    border-top: 5px solid blue;
    box-shadow: 0 0 7px 5px rgba(0, 0, 0, 0.5);
}
.container h2{
font-size: 24px;
line-height: 24px;
padding: 30px;
text-align: center;
}
.input-name{
    width: 90%;
    position: relative;
    margin: 20px auto;
}
.user{
    padding: 8px 11px;
}
.name{
    width: 45%;
    padding: 8px 0 8px 40px;
}
.input-name span{
    margin-left: 35px;

}
.text-name{
    width: 100%;
    padding: 8px 0 8px 40px;
}
.input-name i{
    position: absolute;
    font-size: 18px;
    color: blue;
    border-right: 1px solid #cccccc;
}
.email{
    padding: 8px;
}
.text-name,.name{
    border: 1px solid #cccccc;
    outline: none;
}
.text-name:hover,.name:hover{
    background-color: #fafafa;
}
.text-name:focus,.name:focus{
    border: 1px solid blue;
}
.radio-button{
    margin-right: 4px;
}
.city{
    display: inline-block;
    width: 100%;
    height: 35px;
    padding: 0px 15px;
    cursor: pointer;
    border: 1px solid #cccccc;
    color: #7b7b7b;
    background: white;
    appearance: none;
}
.city:hover, .city:focus{
    color: black;
    background-color: #fafafa;
}
.arrow{
    position: absolute;
    top: calc(50% - 4px);
    right: 15px;
    width: 0;
    height: 0;
    pointer-events: none;
    border-width: 8px 5px 0 5px;
    border-style: solid;
    border-color: #7b7b7b transparent transparent transparent;
}
.city:hover + .arrow, .city:focus +arrow{
    border-top: blue;
    position: absolute;
    top: calc(50% - 4px);
    right: 15px;
    width: 0;
    height: 0;
    pointer-events: none;
    border-width: 8px 5px 0 5px;
    border-style: solid;
    border-color: blue transparent transparent transparent;

}
.check{
    margin-right: 15px;
    position: relative;
}
.check::before{
    content: "";
    display: inline-block;
    width: 8px;
    height: 8px;
    margin-right: 8px;
    vertical-align: -2px;
    border: 2px solid #cccccc;
    padding: 2.5px;
    background-color: transparent;
    background-clip: content-box;
    transition: all 0.2s ease;
}
.check::after{
    border-right: 2px solid black;
    border-top: 2px solid black;
    content: "";
    height: 20px;
    left: 2px;
    position: absolute;
    top: 7px;
    transform: scale(-1) rotate(135deg);
    transform-origin: left top;
    width: 7px;
    display: none;
}
.check-button{
    border: 0;
    clear: rect(0 0 0 0);
    height: 1px;
    margin: -1px;
    overflow: hidden;
    padding: 0;
    position: absolute;
    width: 1px;
}
.check-button:hover +.check::before{
    border-color: blue;
}
.check-button:checked +.check::before{
    border-color: green;
}
.check-button:checked +.check::after{
    -webkit-animation: check 0.8s ease 0s running;
    animation: check 0.8s ease 0s running;
    display: block;
    width: 7px;
    height: 20px;
    border-color: green;
}
.button{
    background-color: blue;
    color: white;
    height: 35px;
    width: 100%;
    border: none;
    outline: none;
    border-radius: 12px;
    font-size: 18px;
    cursor: pointer;
    margin-bottom: 10px;
}
.button:hover{
    background: green;
}

</style>
<body>
    <div class="container">
        <h2>Registration Form</h2>
        <div class="form-container">
            <form action="#" method="post">
                <div class="input-name">
                    <i class="fa fa-user user"></i>
                    <input type="text" placeholder="First name" class="name" name="first_name">
                    <span>
                        <i class="fa fa-user user"></i>
                        <input type="text" placeholder="Last name" class="name" name="last_name">
                    </span>
                </div>

                <div class="input-name">
                    <i class="fa fa-envelope email"></i>
                    <input type="text" placeholder="email" class="text-name" name="email">
                </div>

                <div class="input-name">
                    <i class="fa fa-lock user"></i>
                    <input type="password" placeholder="password" class="text-name" name="password">
                </div>

                <div class="input-name">
                    <i class="fa fa-lock user"></i>
                    <input type="password" placeholder="confirm password" class="text-name" name="conf_password">
                </div>

                <div class="input-name">
                    <input type="radio" class="radio-button" name="gender" value="m">
                    <label style="margin-right: 30px;">Male</label>

                    <input type="radio" class="radio-button" name="gender" value="f">
                    <label>Female</label>
                </div>

                <div class="input-name">
                    <select class="city" name="city">
                        <option>select city</option>
                        <option>Pune</option>
                        <option>Mumbai</option>
                        <option>Nagpur</option>
                    </select>
                    <div class="arrow"></div>
                </div>

                <div class="input-name">
                    <input type="checkbox" id = "cb"class="check-button" name="checkbox">
                    <label for="cb" class="check">I accept all terms and conditions</label>
                </div>

                <div class="input-name">
                    <input type="submit" class="button" value="Register" name="Register">
               </div>

            </form>
        </div>
    </div>
</body>
</html>

<?php
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
