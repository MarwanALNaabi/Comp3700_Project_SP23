<?php
$courtNum = $_POST['deleteCourt'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sportfieldbooking";

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}

$sql = "DELETE FROM courts WHERE commercialnumber='$courtNum'";
$result = mysqli_query($conn,$sql);

if(mysqli_affected_rows($conn) > 0){
    print("Court with commercial number $courtNum is deleted");}
else{
    print("This commercial number does not exist !");}

    
mysqli_close($conn);

?>