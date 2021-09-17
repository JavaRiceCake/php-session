<?php
require('session.php');
valid_status();
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <h1>Home Page!</h1>
    <form action="logout.php" method="post">
        <input type="submit"  name="btnLogout" value="Logout">
    </form>
    <form action="about.php" method="post">
        <input type="submit"   value="About">
    </form>
</body>
</html>