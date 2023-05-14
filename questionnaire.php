<?php
$name = $_POST["name"];
$email = $_POST["email"];
$rate = $_POST["rate"];
$mostLiked = $_POST["select"];
$experience = $_POST["experience"];
$feedback = $_POST["feedback"];
$suggestion = $_POST["suggestion"];

//save connection information
$servername = "localhost";
$username = "id20504934_webproject";
$password = "Webproject@2023";//
$dbname = "id20504934_sportfieldbooking";
//Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql2="insert into `QuestionnaireDB`(name, email, rating, mostLiked, experience, feedback, suggestions)"."values('$name','$email','$rate','$mostLiked','$experience','$feedback','$suggestion')";

$result2 = mysqli_query($conn, $sql2);


?>
<!--
    link with css tyle and create the header of a table to display the records after adding in the questionnaire form
-->

<link rel="stylesheet" href="q.css">
        <center>
        <br>
        <p>The record has been added successfully</p>
        
        <br>
        <!--
            
        -->
        <!--
            a return button which send you back to questionnaire page
            -->
        <a href="https://sportfieldbooking.000webhostapp.com/questionnaire.html"><button>Return</button></a><br>
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
            // getting the server information
            $servername = "localhost";
            $username = "id20504934_webproject";
            $password = "Webproject@2023";//
            $dbname = "id20504934_sportfieldbooking";
            $conn = new mysqli($servername, $username, $password, $dbname);
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
                }
            //select all data from QuestionnaireDB table database
            $sql="SELECT * FROM QuestionnaireDB";
            $result = mysqli_query($conn, $sql);
            

            //printing all the records as a table.
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
        