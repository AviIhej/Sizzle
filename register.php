<?php
    include("includes/handlers/register-handler.php");
    include("includes/handlers/login-handler.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome to Twinkler</title>
</head>
<body>
    <div id="inputContainer">
        <form action="register.php" id="loginForm" method="POST">
            <h2>Login to your Account</h2>
            
            <p>
                  <label for="loginUsername">Username</label>
                  <input type="loginUsername" id="loginUsername" type="text" placeholder="e.g bart simpson" required>
            </p>

            <p>
                <label for="loginPassword">Password</label>
                <input type="loginPassword" id="loginPassword" type="password" placeholder="Your Password" required>
            </p>

            <button type="submit" name="loginButton">Log In</button>
        </form>


        <!-- Register Form -->
        <form action="register.php" id="registerForm" method="POST">
            <h2>Create your free account</h2>
            
            <p>
                  <label for="username">Username</label>
                  <input  id="username" name="username" type="text"  type="text" placeholder="e.g bart simpson" required>
            </p>

            <p>
                    <label for="firstName">First Name</label>
                  <input type="firstName" name="firstName" id="firstName" type="text" placeholder="e.g Bart" required>
            </p>

            <p>
                  <label for="lastName">Last Name</label>
                  <input type="lastName" name="lastName" id="lastName" type="text" placeholder="e.g Simpson" required>
            </p>

            <p>
                    <label for="email">Email</label>
                  <input  name="email" id="email" type="email" placeholder="e.g name@example.com" required>
            </p>

            <p>
                <label for="email2">Confirm Email</label>
                  <input type="email2" name="email2" id="email2" type="email" placeholder="e.g name@example.com" required>
            </p>

            <p>
                <label for="password">Password</label>
                <input  id="password" name="password" type="password" placeholder="Your Password" required>
            </p>

            <p>
                <label for="password2">Confirm password</label>
                <input  id="password2" name="password2" "type="password2" placeholder="Your Password" required>
            </p>

            <button type="submit" name="registerButton">Sign Up</button>
        </form>
    </div>
</body>
</html>