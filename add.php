<html>
    <head>
    </head>
<body>
<link rel="stylesheet" href="q.css"><br>
<?php

//defining the name of the database , servername , username and password.
// set the servaername, username, password, and database name
$servername = "localhost";
$username = "id20504934_webproject";
$password = "Webproject@2023";
$dbname = "id20504934_sportfieldbooking";

//creating  a connection to the data base.
$conn = new mysqli($servername, $username, $password, $dbname);
//checking if the connection exists., if not ; die.
if($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}

//reading the commertial registration number of the court.
$commercialNo = $_POST['commercialNo'];

$sql = "SELECT * from courts where commercialnumber ='$commercialNo' ";
$result = mysqli_query($conn, $sql);

//check if the regestration already exists in the database , if yes exist , if no read the remaining information then  write them in the database.
if(mysqli_num_rows($result) > 0){
    print("This Commertial Reg. Number already exists !");}


else{
//creating a variable for each given information in the (add.html). 

$name = $_POST['name'];
$type = "";
if (isset($_POST['type1']) && isset($_POST['type2'])) {
    $type = "In-Door and Out-Door";
} elseif (isset ($_POST['type1'])) {
    $type = "In-Door";
} elseif (isset ($_POST['type2'])) {
    $type = "Out-Door";
}

$contactNo = $_POST['contactNo'];

$email = $_POST['email'];

$sportType = $_POST['sportType'];

$Province = $_POST['Province'];

$state = $_POST['state'];

$openningTime = $_POST['openningTime'];

$closingTime = $_POST['closingTime'];

$facilities = null;
if (isset($_POST['Free-Wifi'])) {
    $facilities = $facilities . "Free-Wifi  ";
}
if (isset($_POST['Safety deposit box'])) {
    $facilities = $facilities . "Safety-deposit-box  ";
}
if (isset($_POST['Non-smoking-area'])) {
    $facilities = $facilities . "Non-smoking area  ";
}
if (isset($_POST['Toilets'])) {
    $facilities = $facilities . "Toilets  ";
}
if (isset($_POST['Waiting-area'])) {
    $facilities = $facilities . "Waiting-area  ";
}
if (isset($_POST['Parkings'])) {
    $facilities = $facilities . "Parkings  ";
}
if (isset($_POST['Cafeteria'])) {
    $facilities = $facilities . "Cafeteria  ";
}
if (isset($_POST['Shower-area'])) {
    $facilities = $facilities . "Shower area  ";
}
if (isset($_POST['Refreshments'])) {
    $facilities = $facilities . "Refreshments" ;
}
if ($facilities == null) {
    $facilities = "No facilities";
}


$sql2 ="insert into courts(commercialnumber ,name, typeOfField, number , email, sportType , province , state , openningTime , closingTime , facilities)"."values('$commercialNo','$name','$type','$contactNo','$email','$sportType','$Province','$state','$openningTime','$closingTime','$facilities')";
$result2 = mysqli_query($conn, $sql2);
print("<center><p style=\"color:white; font-size:25px\">Your court $name has been successfully added to the website.</p></center>");
}


//closing the connection.
mysqli_close($conn);
?>
<a href="https://sportfieldbooking.000webhostapp.com/add.html"><button>Return</button></a><br>

</body>
</html>