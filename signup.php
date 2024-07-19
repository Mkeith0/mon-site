<?php
session_start();

include("db.php");

if($_SERVER['REQUEST_METHOD']== "post")
{
    $firstnme = $_POST['fname'];
    $lastname = $_POST['iname'];
    $Gender = $_POST['gender'];
    $tel = $_POST['number'];
    $address = $_POST['add'];
    $gmail = $_POST['mail'];
    $password = $_POST['pass'];

    if(!empty($gmail) && !empty($password) && !is_numeric($gmail))
    {

        $query = "insert into form (fname, iname, gender, cnum, address, email, pass)values('$firstnme',' $lastname', '$Gender', '$tel', '$address',' $gmail','$password')";
        mysqli_query($con,$query);

        echo "<script type='text/javascript'> alert('successfully Register')</script>";

    }
    else
    {
echo"<script type='text/javascript'> alert('please Enter some Valid Information')</script>";
    }
}
?>

<!DOCTYPE html>
<html>
    <head>
<meta charset="utf-8">
<meta name="viewport" content="whidth=device-width, initial-scale">
<title>Form Login and Register</title>
<link rel="style.css" href="style.css">
</head>
<body>
    <div class="signup">
        <h1>sign up</h1>
        <h4>it's free and only takes a minute</h4>
        <form method="signup">
            <label>first name</label>
            <input type="text" name="fname" required>
            <label> last name</label>
<input type="text" name="iname" required>
<label>genre</label>
<input type="text" name="gender" required>
<label>contact</label>
<input type="tel" name="number" required>
<label>address</label>
<input type="text" name="add" required>
<label>Email</label>
<input type="email" name="mail"required>
<label>Password</label>
<input type="password" name="pass"required>
<input type="submit" name="" value="submit">
        </form>
        <P>By clicking the sign up button, you agree to our<br>
            <a href="">Terms and condition</a> and <a href="login.php">login Here</a>

        </P>
    </div>
</body>