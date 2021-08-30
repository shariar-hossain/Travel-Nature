<?php
session_start();
include "db_conn.php";

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $schedule = $_POST["travelDate"];
    if(!empty($schedule)){
        date_default_timezone_set("Asia/Dhaka");
        $date = date("Y-m-d h:i:sa");
        $package = $_POST["travelPackageName"];
        $sql = "INSERT INTO `booking`(`user_id`, `dateTime`, `package`, `schedule`, `status`) VALUES ({$_SESSION['id']},'$date','$package','$schedule','pending');";
        if ($conn->query($sql) === TRUE) {
            
            header("Location: ../view/saintmartin.php");
            exit();
        } else {
            header("Location: ../view/saintmartin.php?error=something went wrong");
            exit();
            
        }

    }else{
        header("Location: ../view/saintmartin.php?error=Date required");
        exit();
    }
}




?>