

<link rel="stylesheet" href="q.css">
        <center>
        
        <a href="https://sportfieldbooking.000webhostapp.com/book.php"><button>Return</button></a><br>
        <table border="1" style="width:70%;border-collapse: collapse;">
            <tr>
            <th>Name</th>
            <th>typeOfField</th>
            <th>Number</th>
            <th>Email</th>
            <th>Sport type</th>
            <th>Province</th>
            <th>State</th>
            <th>Opening time</th>
            <th>Closing time</th>
            <th>facilities</th>
            </tr>
            <?php
            $servername = "localhost";
            $username = "id20504934_webproject";
            $password = "Webproject@2023";//
            $dbname = "id20504934_sportfieldbooking";
            $conn = new mysqli($servername, $username, $password, $dbname);

            // Check connection
            if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
            }
            $sql="SELECT * FROM courts";

            $result = mysqli_query($conn, $sql);

            if($result)
                        {
                        while ($record=mysqli_fetch_assoc($result)){
                            
                            echo("<tr><td>".$name=$record['name']);
                            echo("<td>".$typeOfField=$record['typeOfField']);
                            echo("<td>".$number=$record['number']);
                            echo("<td>".$email=$record['email']);
                            echo("<td>".$sportType=$record['sportType']);
                            echo("<td>".$province=$record['province']);
                            echo("<td>".$state=$record['state']);
                            echo("<td>".$openningTime=$record['openningTime']);
                            echo("<td>".$closingTime=$record['closingTime']);
                            echo("<td>".$facilities=$record['facilities']);
                            

                        }
                        }
                        
            ?>
        </table>
        </center>