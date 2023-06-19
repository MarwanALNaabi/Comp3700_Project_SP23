<?php
// set the servaername, username, password, and database name
$servername = "localhost";
$username = "";
$password = "";
$dbname = "";

//create connection to the database
$conn = mysqli_connect($servername, $username, $password, $dbname);
//check connection to the database
if(!$conn){
    die("Connection failed: " .mysqli_connect_error());
} 
else{
    echo("Connected Successfully");
}



// to add the reservation with the reservation number 
function generateRandomNumber($conn,$len=4){
    $randomString = substr(MD5(time()),$len);

    //Check newly generated Code exist in DB table or not.
    $query = "select * from bookDB where ReservationNumber='".$randomString."'";
    $result=mysqli_query($conn,$query);
    $resultCount=mysqli_num_rows($result);

    if($resultCount>0){
        //IF code is already exist then function will call it self until unique code has been generated and inserted in Db.
        generateRandomNumber($conn);
    }else{
        //Unique generated code will be inserted in DB.
        $club = $_POST["form-select"];
        $sport = $_POST["sport-choice"];
        $date = $_POST["date"];
        $time = $_POST["time"];
        $duration = $_POST["duration"];
        $name = $_POST["name"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];
        $comment = $_POST["message"];
        $sql = "INSERT INTO bookDB(club, type, date, time, duration, name, email, phone, comment, ReservationNumber) VALUES ('$club', '$sport',
        '$date', '$time', '$duration', '$name', '$email', '$phone', '$comment', '$randomString')";
        $result = mysqli_query($conn,$sql);
        echo "<br>Reservation Successfully Booked.";
        echo "<br>Your Reservation Number is: " .$randomString." Please Do not miss it";
        return $randomString;
    }
}
//call the function 
generateRandomNumber($conn)


?>
<!-- button to return back to the book page -->
<link rel="stylesheet" href="b.css">        
    <br>
    <a href="https://sportfieldbooking.000webhostapp.com/book.php"><button>Return</button></a><br>












