<?php

require ("connection.php");

$name = $_POST["name"];
$email = $_POST["email"];
$mobile = $_POST["mobile"];
$fitness = $_POST["fitness"];
$gender = $_POST["gender"];
$reference = $_POST["reference"];
$weight = $_POST["weight"];
$plan_duration = $_POST["plan_duration"];
$plan_package = $_POST["plan_package"];
$insert = mysqli_query($conn,"INSERT INTO registration(name,email_id,	mobile,weight,reffrence_code,gender,fitness,plan_duration,plan_package)
 VALUES('" .$name. "','" .$email. "','" .$mobile. "','" .$weight. "','" .$reference. "','" .$gender. "','" .$fitness. "','" .$plan_duration. "','" .$plan_package. "')");
if($insert) {
                    $msg[] = 'Thank You for your Order';                 
                } else {
                    $msg[] = "Order Failed";
                    $msg['error'] = true;   
                }

        echo json_encode($msg); 

























?>