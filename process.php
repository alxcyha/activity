<?php 
include("config.php");

if(isset($_POST["loginbutton"])){
    $username = $_POST ["username"];
    $password = $_POST ['password'];

    $sql = "SELECT `username`,`password`,`role` FROM `user` LIMIT 1";
    $sql_run = mysqli_query($conn, $sql);

    if(mysqli_num_rows($sql_run) > 0){
        $row = mysqli_fetch_assoc($sql_run);
        $role = $row["role"];

        if($role == 1){
            echo "welcome $username";
            exit;
        } elseif($role == 2){
            header("Location: student.php");
            exit;
        } else{
            echo "Invalid Role";
        }
    }
}

if(isset($_POST["regbutton"])){
    $username = $_POST ["username"];
    $password = $_POST ["password"];
    $firstname = $_POST ["firstName"];
    $middlename = $_POST ["middleName"];
    $lastname = $_POST ["lastName"];
    $role = $_POST ["role"];

    $reg_query = "INSERT INTO `user` 
        (`username`, 
        `password`, 
        `firstName`, 
        `middleName`, 
        `lastName`, 
        `role`, 
        `dateCreated`) 
        VALUES ('$username',
        '$password', 
        '$firstname', 
        '$middlename', 
        '$lastname', 
        '$role', 
        current_timestamp())";
    $reg_result = mysqli_query($conn, $reg_query);
    echo "Hello $username , welcome!";
}
?>