<?php
$courtNum = $_POST['deleteCourt'];

$servername = "localhost";
$username = "id20504934_webproject";
$password = "Webproject@2023";//
$dbname = "id20504934_sportfieldbooking";

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

    echo("<link rel=\"stylesheet\" href=\"q.css\">");
    echo("<a href=\"https://sportfieldbooking.000webhostapp.com//add.html\"><button>Return</button></a><br>");
mysqli_close($conn);

?>
<br>
     
