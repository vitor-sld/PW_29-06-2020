<?php
    session_start();
    $name = $_POST['nome'];
    $password = $_POST['senha'];
    echo "$name e $password <br>";
    $user = "Samuel";
    $senha = 20439;
    if($name == $user && $password == $senha){
        $_SESSION['user_login']=1;
        
    }			else{
        
             $_SESSION['user_login']=0;
    }
    echo $_SESSION['user_login'];
       header('location: principal.php');
    ?>