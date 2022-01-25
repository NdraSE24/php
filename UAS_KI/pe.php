<?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "wkwk";

    $conn = mysqli_connect($host, $username, $password, $database);

    if(isset($_POST['submit'])){
        $id = $_POST['id'];
        $password = $_POST['password'];

        $id_antimaling = $conn->real_escape_string($_POST['id']) ;
        $password_antimaling = $conn->real_escape_string($_POST['password']);
    
        $sql = mysqli_query($conn, "SELECT * FROM ui WHERE id='$id_antimaling' AND password='$password_antimaling'");
    
        if(mysqli_num_rows($sql) > 0){
            echo "berhasil masuk";
        }else{
            die("id atau password salah"); 
        }
    }
    
?>