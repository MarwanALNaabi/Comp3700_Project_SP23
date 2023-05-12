<html>
    <head>
        <title>Search for a book</title>
        <link rel="stylesheet" href="search.css">
    </head>
    <header>
        <a href="index.html"><img id="logo" src="web Photos/2.svg" alt="logo" width="110" height="110"></a>
        
        <h1 style="color:rgb(255, 255, 255)">Sport Field Booking</h1>
        <nav>
            <ul class="menu">
                <li><a href="index.html">Home</a></li>
                <li><a href="book.html">Book</a></li>
                <li><a href="add.html">Add</a></li>
                <li><a href="questionnaire.html">questionnaire</a></li>
                <li><a href="game.html">game</a></li>
                <li><a href="calculate.html">calculate</a></li>
                <li><a href="contact_us.html">contact us</a></li>
                <li><a href="about_us.html">About us</a></li>
                <li><a href="http://localhost:4555/search.php">Search</a></li>
            </ul>
        </nav>
        
    </header>

    <body>
        <center>
        <form action="http://localhost:4555/search.php" method="post" id="book-form" name="book-form">
            <input type="text" name="search" id="search" placeholder="Search for a reservation using the given ID" required>
            <button name="submit">Search</button>
            <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "id20504934_sportfieldbooking";
            $conn = new mysqli($servername, $username, $password, $dbname);
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
                }
            
        
            //$search = "Marwan.yn71@gmail.com";
                if(isset($_POST['submit'])){
                $search=$_POST['search'];
                $sql="SELECT * FROM bookDB where phone like '$search'";
                $result = mysqli_query($conn,$sql);
                echo("<br>Connected to DB successfully");
                $num=mysqli_num_rows($result);
                
                echo("<br>The number of records found was: ".$num."<br>");
                if(mysqli_num_rows($result)>0){
                    echo'
                    <table border="1" style="width:70%;border-collapse: collapse;">
                    <tr>
                    <th>Club Name</th>
                    <th>Type</th>
                    <th>Rate</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Duration</th>
                    <th>email</th>
                    <th>Phone No.</th>
                    <th>Comment</th>
                    <th>Reservation Number</th>
                    </tr>
                    ';
                    while ($record=mysqli_fetch_assoc($result)){
                        echo("<tr><td>".$club=$record['club']);
                        echo("<td>".$type=$record['type']);
                        echo("<td>".$date=$record['date']);
                        echo("<td>".$time=$record['time']);
                        echo("<td>".$duration=$record['duration']);
                        echo("<td>".$email=$record['email']);
                        echo("<td>".$phone=$record['phone']);
                        echo("<td>".$comment=$record['comment']);
                        echo("<td>".$ReservationNumber=$record['ReservationNumber']);
                        
                        
                    }
                    echo("</table>");
                }else{
                    echo("<br><h2 style=\"color: red;\">No result Found</h2>");
                }

                }
                
                
        
      
        ?>
        </form>
        
        </center>
        
    </body>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col">
                    <h3>Website pages</h3>
                    <ul>
                        <li><a href="index.html">Home Page</a></li>
                        <li><a href="book.html">Book a sport field</a></li>
                        <li><a href="add.html">Add a sport field </a></li>
                        <li><a href="questionnaire.html">questionnaire</a></li>
                        <li><a href="game.html">game</a></li>
                        <li><a href="calculate.html">calculate</a></li>
                        <li><a href="contact_us.html">contact us</a></li>
                        <li><a href="about_us.html">About us</a></li>      
                        <li><a href="http://localhost:4555/search.php">Search</a></li>                     
                    </ul>
                </div>
                <div class="col">
                    <ul>
                        <h3>Sultan Qaboos University</h3>
                        <h3>College of Science</h3>
                        <h3>Computer Science Department</h3>
                        <h3>COMP3700 SP23 Project</h3>    
                        <h3>Members:</h3>
                        <h4>Marwan ALNaabi</h4>
                        <h4>Majid ALManthari</h4>
                        <h4>Yaqoob ALBalushi</h4>


                    </ul>
                    
                </div>
            </div>
        </div>

    </footer>

</html>
