<?php
$name = $_POST["name"];
$email = $_POST["email"];
$rate = $_POST["rate"];
$mostLiked = $_POST["select"];
$experience = $_POST["experience"];
$feedback = $_POST["feedback"];
$suggestion = $_POST["suggestion"];


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "SportFieldBooking";
//Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql2="insert into `QuestionnaireDB`(name, email, rating, mostLiked, experience, feedback, suggestions)"."values('$name','$email','$rate','$mostLiked','$experience','$feedback','$suggestion')";

$result2 = mysqli_query($conn, $sql2);


?>
<link rel="stylesheet" href="q.css">
        <center>
        <br>
        <p>The record has been added successfully</p>
        
        <br>
        <a href="http://127.0.0.1:5500/questionnaire.html"><button>Return</button></a><br>
        <table border="1" style="width:70%;border-collapse: collapse;">
            <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Rate</th>
            <th>Most liked page</th>
            <th>Experience</th>
            <th>Feedback</th>
            <th>Suggestion</th>
            </tr>
            <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "SportFieldBooking";
            $conn = new mysqli($servername, $username, $password, $dbname);
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
                }
            $sql="SELECT * FROM QuestionnaireDB";
            $result = mysqli_query($conn, $sql);
            
            if($result)
            {
            while ($record=mysqli_fetch_assoc($result)){
                echo("<tr><td>".$name=$record['name']);
                echo("<td>".$email=$record['email']);
                echo("<td>".$rate=$record['rating']);
                echo("<td>".$mostLiked=$record['mostLiked']);
                echo("<td>".$experience=$record['experience']);
                echo("<td>".$feedback=$record['feedback']);
                echo("<td>".$suggestion=$record['suggestions']);
                

            }
            }
            
            ?>
        </table>
        </center>
        