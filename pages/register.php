<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/css/main.css">
</head>
<body>
<?php
    include 'nav.php';
 ?> 
 <div class="container-login ">
    <div class="col-100 justify-center">
        <div class="input ">
            <form action="register-logic.php" name="register-logic" method="POST">
            <label> Username:</label>
            <input type="text" name="username" placeholder="username" required>
            <label>Password:</label>
                <input type="password" name="password" placeholder="password"required>
                <input type="submit" value="register" class="button">
            </div>  
</form>
        </div>
    </div>
</body>
</html>