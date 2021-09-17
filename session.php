<?php
session_start();

function valid_status(){
    if($_SESSION['status'] =='invalid' || empty($_SESSION['status'])){
        $_SESSION['status']='invalid';
        unset($_SESSION['username']);
        echo "<script>window.location.href ='login.php'</script>";
    }
}


function log_out(){
    if(isset($_POST['btnLogout']))
    {
        $_SESSION['status']='invalid';
        unset($_SESSION['username']);
        echo "<script>window.location.href ='login.php'</script>";
        
    }else
        {
          echo "<script>window.location.href ='home.php'</script>";
        }       
}

function login_session(){
    //session here
    if($_SESSION['status'] =='invalid' || empty($_SESSION['status'])){
    //default value of session 
    $_SESSION['status'] = 'invalid';
   }
   if($_SESSION['status']=='valid'){
    //if status is valid direct into home page you can't go back to log-in page. unless u destroy the session 
   echo "<script>window.location.href ='home.php'</script>";
   }
}




?>