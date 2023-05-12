
<?php
//read  the commertial number from the form, and save it in a variable.
$courtNum = $_POST['deleteCourt'];
//defining the name of the database , servername , username and password.
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sportfieldbooking";
//creating  a connection to the data base.
$conn = new mysqli($servername, $username, $password, $dbname);
//checking if the connection exists., if not ; die.
if($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}
//deleting the record if it exists.
$sql = "DELETE from courts where commercialnumber='$courtNum'";
$result = mysqli_query($conn,$sql);
//check if there was any change in the database.
if(mysqli_affected_rows($conn) > 0){
    print("Court with commercial number $courtNum is deleted");}
else{
    print("This commercial number does not exist !");}

//closing the connection.
mysqli_close($conn);

?>