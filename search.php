<!--
    implement the header and the footer of the website in this page  
        -->
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
                <li><a href="https://sportfieldbooking.000webhostapp.com/book.php">Book</a></li>
                <li><a href="add.html">Add</a></li>
                <li><a href="questionnaire.html">questionnaire</a></li>
                <li><a href="game.html">game</a></li>
                <li><a href="calculate.html">calculate</a></li>
                <li><a href="contact_us.html">contact us</a></li>
                <li><a href="about_us.html">About us</a></li>
                <li><a href="https://sportfieldbooking.000webhostapp.com/search.php">Search</a></li>
            </ul>
        </nav>
        
    </header>

    <body>
        <center>
            <!--
            form that contains a text input for searching purpose with a button
        -->
        <form action="https://sportfieldbooking.000webhostapp.com/search.php" method="post" id="book-form" name="book-form">
            <input type="text" name="search" id="search" placeholder="Search for a reservation using the phone number " required>
            <button name="submit">Search</button>
            <?php
            // the information of database server
            $servername = "localhost";
            $username = "";
            $password = "";
            $dbname = "";
            $conn = new mysqli($servername, $username, $password, $dbname);
            //checking the connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
                }
        
            
                //getting the id from the form

                //if the search button is clicked search for it and print the results in a table,
                if(isset($_POST['submit'])){
                $search=$_POST['search'];
                $search=intval($search);
                // Connect to database and get records with same search variable
                $sql="SELECT * FROM bookDB where phone like '$search'";
                $result = mysqli_query($conn,$sql);
                echo("<br>Connected to DB successfully");
                echo("<br>Searching for: ".$search);
                
                $num=mysqli_num_rows($result);
                //print the number of found record
                echo("<br>The number of records found was: ".$num."<br>");
                // if there is a record print the table with all the found record
                if(mysqli_num_rows($result)>0){
                    echo'
                    <table border="1" style="width:70%;border-collapse: collapse;">
                    <tr>
                    <th>Club Name</th>
                    <th>Type</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Duration</th>
                    <th>email</th>
                    <th>Phone No.</th>
                    <th>Comment</th>
                    <th>Reservation Number</th>
                    </tr>
                    ';
                    //print all the record that have the same entered value
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

                    // Otherwise print no result found
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
                        <li><a href="https://sportfieldbooking.000webhostapp.com/book.php">Book</a></li>
                        <li><a href="add.html">Add a sport field </a></li>
                        <li><a href="questionnaire.html">questionnaire</a></li>
                        <li><a href="game.html">game</a></li>
                        <li><a href="calculate.html">calculate</a></li>
                        <li><a href="contact_us.html">contact us</a></li>
                        <li><a href="about_us.html">About us</a></li>      
                        <li><a href="https://sportfieldbooking.000webhostapp.com/search.php">Search</a></li>                     
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
