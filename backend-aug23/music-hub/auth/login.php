<?php

    include "./../db-config.php";
    $errmsg = "";
    
    if(isset($_POST['submit'])) {
        $email = mysqli_real_escape_string($conn,$_POST['email']);
        $pwd = mysqli_real_escape_string($conn,$_POST['pwd']);

        if($email!="" && $pwd!="") {
            $sql_query = "SELECT count(*) AS usercount FROM users WHERE email='$email' AND password='$pwd';";
            $result = mysqli_query($conn,$sql_query);
            $rows = mysqli_fetch_array($result);
            if($rows['usercount']==1) {
                $sql_query = "SELECT name,id FROM users WHERE email='$email';";
                $result = mysqli_query($conn,$sql_query);
                $rows = mysqli_fetch_array($result);
                session_start();
                $_SESSION['userid'] = $rows['id'];
                $_SESSION['username'] = $rows['name'];
                header("Location:./../index.php");
            } 
            else {
                $errmsg = "Email address or password did not match";
            }      
        }
        else {
            $errmsg = "All fields are mandatory";
        }
    }
?>

<!DOCTYPE html>
<html lang="en" >
    <head>
    <meta charset="UTF-8">
    <title>Simple login Form Example</title>
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Rubik:400,700'>
    <link rel="stylesheet" href="assets/css/style.css">
    <style>
        * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        -webkit-font-smoothing: antialiased;
        }

        body {
        background: #e35869;
        font-family: 'Rubik', sans-serif;
        }

        .login-form {
        background: #fff;
        width: 500px;
        margin: 120px auto;
        display: -webkit-box;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
                flex-direction: column;
        border-radius: 4px;
        box-shadow: 0 2px 25px rgba(0, 0, 0, 0.2);
        }
        .login-form h1 {
        padding: 35px 35px 0 35px;
        font-weight: 300;
        }
        .login-form .content {
        padding: 35px;
        text-align: center;
        }
        .login-form .input-field {
        padding: 12px 5px;
        }
        .login-form .input-field input {
        font-size: 16px;
        display: block;
        font-family: 'Rubik', sans-serif;
        width: 100%;
        padding: 10px 1px;
        border: 0;
        border-bottom: 1px solid #747474;
        outline: none;
        -webkit-transition: all .2s;
        transition: all .2s;
        }
        .login-form .input-field input::-webkit-input-placeholder {
        text-transform: uppercase;
        }
        .login-form .input-field input::-moz-placeholder {
        text-transform: uppercase;
        }
        .login-form .input-field input:-ms-input-placeholder {
        text-transform: uppercase;
        }
        .login-form .input-field input::-ms-input-placeholder {
        text-transform: uppercase;
        }
        .login-form .input-field input::placeholder {
        text-transform: uppercase;
        }
        .login-form .input-field input:focus {
        border-color: #222;
        }
        .login-form button.link {
        text-decoration: none;
        background-color: lightgray;
        padding:5px 10px;
        border: none;
        color: #747474;
        letter-spacing: 0.2px;
        text-transform: uppercase;
        display: inline-block;
        margin-top: 20px;
        }
        .login-form .action {
        display: -webkit-box;
        display: flex;
        -webkit-box-orient: horizontal;
        -webkit-box-direction: normal;
                flex-direction: row;
        }
        .login-form .action button {
        width: 100%;
        border: none;
        padding: 18px;
        font-family: 'Rubik', sans-serif;
        cursor: pointer;
        text-transform: uppercase;
        background: #e8e9ec;
        color: #777;
        border-bottom-left-radius: 4px;
        border-bottom-right-radius: 0;
        letter-spacing: 0.2px;
        outline: 0;
        -webkit-transition: all .3s;
        transition: all .3s;
        }
        .login-form .action button:hover {
        background: #d8d8d8;
        }
        .login-form .action button:nth-child(1) {
        background: #2d3b55;
        color: #fff;
        border-bottom-left-radius: 0;
        border-bottom-right-radius: 4px;
        }
        .login-form .action button:nth-child(1):hover {
        background: #3c4d6d;
        }
        .login-form .error {
        color: red;
        margin-top: 10px;
        }
    </style>
    </head>
    <body>
        <div class="login-form">
            <form method="post" action=""> 
                <h1>Login</h1>
                <div class="content">
                    <div class="input-field">
                        <input type="email" placeholder="Email" name="email" required>
                    </div>
                    <div class="input-field">
                        <input type="password" placeholder="Enter Password" name="pwd" cautocomplete="new-password" required>
                    </div>
                    <p class="error"><?php echo $errmsg ?></p>
                    <button type="submit" name="submit" value="login" class="link">SUBMIT</button><br>
                    <a href="#" class="link">Forgot Your Password?</a>
                    </div>
                    <div class="action">
                    <button>Register</button>
                    <button>Sign in</button>
                </div>
            </form>
        </div>
    </body>
</html>