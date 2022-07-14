<?php
    $First = $_POST['First'];
    $Last = $_POST['Last'];
    $email = $_POST['email'];
    $business = $_POST['business'];
    $phone = $_POST['phone'];
    $textarea1 = $_POST['textarea1'];

    //Database Connection
    $conn = new mysqli('localhost', 'root', '', 'Portfolio_Website');
    if($conn->connect_error){
        die('Oops, Connection Failed : ' .$conn->connect_error);
    }else{
        $stmt = $conn->prepare("insert into registration(First, Last, email, business, phone, textarea1) values(?,?,?,?,?,?)" );
        $stmt -> bind_param("ssssis", $First, $Last, $email, $business, $phone, $textarea1);
        $stmt -> execute();
        echo "Thanks for providing information, submitted successfully!";
        $stmt->close();
        $conn->close();
    }
?>