<?php
include("config.php");
extract($_POST);
$sql = "INSERT INTO `contactdata`(`name`, `email`, `phone`,  `message`) VALUES ('".$name."','".$email."',".$phone.",'".$message."')";
$result = $mysqli->query($sql);
if(!$result){
    die("Couldn't enter data: ".$mysqli->error);
}
echo "Thank You For Contacting Us ";
$mysqli->close();
?>