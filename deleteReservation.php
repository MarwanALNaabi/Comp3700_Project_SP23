<?php
//get the reservation number form the form
$bookNum = $_POST['deleteReservation'];

$servername = "localhost";
$username = "id20504934_webproject";
$password = "Webproject@2023";//
$dbname = "id20504934_sportfieldbooking";
//create connection
$conn = new mysqli($servername, $username, $password, $dbname);

//check connection
if($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}
//delete the reservation from the bookDB table
$sql = "DELETE FROM bookDB WHERE ReservationNumber='$bookNum'";
$result = mysqli_query($conn,$sql);

// the reservation exists 
if(mysqli_affected_rows($conn) > 0){
    print("Court with reservation number $bookNum is deleted");}
//the reservation was not found
else{
    print("This reservation number does not exist !");}
//to return to the book page
    echo("<link rel=\"stylesheet\" href=\"q.css\">");
    echo("<a href=\"https://sportfieldbooking.000webhostapp.com//book.php\"><button>Return</button></a><br>");
//close connection
mysqli_close($conn);

?>

