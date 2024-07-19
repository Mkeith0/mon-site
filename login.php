<?php
session_start();

include("db.php");
if($_SERVER['REQUEST_METHOD']== "post")
{
    $gmail = $_POST['mail'];
    $password = $_POST['pass'];
    if(!empty($gmail) && !empty($password) && !is_numeric($gmail))
    {
        $query = "select * from from where email=' $gmail limit 1";
        $resul= mysqli_query($con,$query);
        if($result)
        {
            if($result && mysqli_num_rows($result) > 0)
            {
                $user_data = mysqli_fetch_assoc($result);
                if($user_data['pass']==$password)
                {
                    header("locaction: index.php");
                    die;
                }
            }
        }
        echo"<script type='text/javascript'> alert('wrong username or password')</script>";
    }
    else{
    echo"<script type='text/javascript'> alert('wrong username or password')</script>";
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
    <div class="Login">
        <h1>sign up</h1>
        <h4>it's free and only takes a minute</h4>
        <form>
            
<label>Email</label>
<input type="email" name="mail"required>
<label>Password</label>
<input type="password" name="pass"required>
<input type="submit" name="" value="submit">
        </form>
        <p>not have an account? <a href="signup.php">sign up here</a></p>
    </div>
</body>