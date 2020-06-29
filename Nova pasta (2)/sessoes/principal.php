<?php 
    session_start();
    if($_SESSION['user_login'] == 1){
        echo "<center><font color='green'>Bem vindo</font></center>";
    }else{
        header('location: index.php ?mensagem=<font color="red">voce errou, coloca a senha ou usuario certo mano');
    }
?> 