<?php
include("../db.php");

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $stmt = $conn->prepare("INSERT INTO category (catname,status) VALUES(?,?)");
    $stmt->bind_param("si",$catname,$status);

    $catname = $_POST['catname'];
    $status = $_POST['status'];

    if($stmt->execute()){
        echo 1;
    }else{
        echo 0;
    }

    $stmt->close();
}
?>