<?php
require('connection.php');
require('session.php');
login_session();

//validation here
if(isset($_POST['btnLogin'])){
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
    if(empty($username) || empty($password)){
        echo "Fill Up The Form";
    }else{
        $queryUser="SELECT * FROM tbusers WHERE username = '$username' AND password = md5('$password')";
        $sqlUser = $con->query($queryUser);
        $rowCount = mysqli_num_rows($sqlUser);//count if meron exist sa database
        $result = mysqli_fetch_array($sqlUser);
        
        if($rowCount > 0){
            $_SESSION['status'] = 'valid'; // this is session variable Set into valid;
            $_SESSION['username'] = $result['username'];
            echo "<script>window.location.href ='home.php'</script>";

        }else{ 
            $_SESSION['status'] = 'invalid';
            echo "Invalid Username and Password!";
        }
       
    }
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>log in</title>
</head>
<body>
    <form action="login.php" method="post">
        <input type="text" name="username" id="username">
        <input type="password" name="password" id="password">
        <input type="submit" name="btnLogin" value="Login">
    </form>
    
</body>
</html>