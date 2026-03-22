<?php

include "connect.php";

$name = $_POST['name'];
$country = $_POST['country'];
$program = $_POST['program'];
$fee = $_POST['fee'];

$sql = "INSERT INTO universities(name,country,program,fee)
VALUES('$name','$country','$program','$fee')";

if($conn->query($sql)===TRUE){
echo "University added successfully";
}else{
echo "Error: ".$conn->error;
}

$conn->close();

?>