<?php
$bookNum = $_POST['deleteReservation'];

$servername = "localhost";
$username = "id20504934_webproject";
$password = "Webproject@2023";//
$dbname = "id20504934_sportfieldbooking";

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}

$sql = "DELETE FROM bookDB WHERE ReservationNumber='$bookNum'";
$result = mysqli_query($conn,$sql);

if(mysqli_affected_rows($conn) > 0){
    print("Court with reservation number $bookNum is deleted");}
else{
    print("This commercial number does not exist !");}

    echo("<link rel=\"stylesheet\" href=\"q.css\">");
    echo("<a href=\"https://sportfieldbooking.000webhostapp.com//book.php\"><button>Return</button></a><br>");
mysqli_close($conn);

?>

