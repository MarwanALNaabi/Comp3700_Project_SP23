<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "SportFieldBooking";

//check connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
if(!$conn){
    die("Connection failed: " .mysqli_connect_error());
} 
else{
    echo("Connected Successfully");
}

//get the data from the form
$club = $_POST["form-select"];
$sport = $_POST["sport-choice"];
$date = $_POST["date"];
$time = $_POST["time"];
$duration = $_POST["duration"];
$name = $_POST["name"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$comment = $_POST["message"];


// to add the reservation with the reservation number 
function reservationNumber(){
    $flag = true;
    $i=0;
    $list = array();
    while($flag){
        while($list != null){
            $i++;
        }
        array_push($list, $i+1);
        $flag = false;
    }
    return $i+1;
}
$reservationN = $this.reservationNumber();



$sqlB = "insert into `bookDB`(club, type, date, time, duration, name, email, phone, comment, ReservationNumber)"."values('$club', '$sport',
 '$date', '$time', '$duration', '$name', '$email', '$phone', '$comment', '$reservationN')";

$resultBook = mysqli_query($conn, $sqlB);


$cancelBooking = $_POST["cancelbooking"];
for ($j=0 ; $j < sizeof($list); $j++){
    if($list[$j] == $cancelBooking){
        $sqlD = "delete from `bookDB` where ReservationNumber = $list[$j]";
        print("<p> Your reservation is Canceled. </p>");
        break;
    }
    if($list[$j] > $cancelBooking){
        print("<p> Reservation NOT found. </p>");
        break;
    }
}

?>

<link rel="stylesheet" href="b.css">
    <p>The record has been added successfully</p>
        
    <br>
    <a href="http://127.0.0.1:5500/questionnaire.html"><button>Return</button></a><br>












