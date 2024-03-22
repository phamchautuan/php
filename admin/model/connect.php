<?php
    $server ='localhost';
    $user='root';
    $pass='';
    $database='websitephp';
    
    $conn = new mysqli($server, $user, $pass, $database);
    if($conn){
        mysqli_query($conn,"SET NAMES 'utf8'");
    }else 
    {
        echo "ket noi database khong thanh cong";
    }
?>