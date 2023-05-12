<html>
    <head>
    </head>
<body>

<?php
//creating a unction that get the information as an array , connection and table name , then write the information in the database.
function addCourt($info,$connection , $tableName){
    $sql ="insert into $tableName(commercialnumber ,name, typeOfField, number , email, sportType , province , state , openningTime , closingTime , facilities)"."values('{$info['commercialnumber']}','{$info['name']}','{$info['typeOfField']}','{$info['number']}','{$info['email']}','{$info['sportType']}','{$info['province']}','{$info['state']}','{$info['openningTime']}','{$info['closingTime']}','{$info['facilities']}')";
    $result = mysqli_query($connection, $sql);
    print("Your court {$info['name']} has been successfuly added to the website .");

}
//defining the name of the database , servername , username and password.
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sportfieldbooking";
$tname = "courts";
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

//Creating a array to save the information in it .
$info = array("commercialnumber"=>"$commercialNo" , "name"=>"$name" , "typeOfField"=>"$type" , "number"=>"$contactNo","email"=>"$email" , "sportType"=>"$sportType" , "province"=>"$Province","state"=>"$state","openningTime"=>"$openningTime" , "closingTime"=>"$closingTime" , "facilities"=>"$facilities");

//calling the function that adds the information in the data base.
addCourt($info,$conn,$tname);
}
//closing the connection.
mysqli_close($conn);
?>
</body>
</html>