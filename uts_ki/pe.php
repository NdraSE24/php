<?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "can";

    $conn = mysqli_connect($host, $username, $password, $database);

    $id = $_GET['id'];
    $password = $_GET['password'];

    $sql = mysqli_query($conn, "SELECT * FROM masuk WHERE id='{$id}' AND password='{$password}'");

    if(mysqli_num_rows($sql) == 0){
        die("id atau password salah"); 
    }else{
        echo "berhasil masuk";
    }
?>