<html>
    <head>
        <link rel="stylesheet" href="book_style.css">
        <meta charset="lutf-8"> 
        <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
        <title>Sport Field Booking</title>
        <link rel="icon" type="images/x-icon" href="web Photos/2.ico"/>
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



    <body onload="createTable()">
            <center>Booking 
            <br><button><a href="https://sportfieldbooking.000webhostapp.com/viewAllCourts.php">View All Sport Fields</a></button></center> 
            <form action="https://sportfieldbooking.000webhostapp.com/bookDB.php"  id="book-form" onsubmit="return checkValidation()" method="post">
                <!-- for choosing the club-->
                <select id="clubName" class="form-select" name="form-select" aria-label="Default select example">
                    <option selected disabled>Select Club..</option> 
                    <?php 
                    $servername = "localhost";
                    $username = "";
                    $password = "";
                    $dbname = "";
                    $conn = new mysqli($servername, $username, $password, $dbname);
        
                    // Check connection
                    if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                    }
                    $sql="SELECT * FROM courts";
        
                    $result = mysqli_query($conn, $sql);

                    if(isset($_POST['submit'])){
                        $ClubName = $_POST['club'];}

                    if($result->num_rows> 0){
                        while($optionData=$result->fetch_assoc()){
                        $option =$optionData['name'];
                    ?>
                    <?php
                    //selected option
                    if(!empty($ClubName) && $ClubName== $option){
                    // selected option
                    ?>
                    <option value="<?php echo $option; ?>" selected><?php echo $option; ?> </option>
                    <?php 
                continue;
                }?>
                    <option value="<?php echo $option; ?>" ><?php echo $option; ?> </option>
                <?php
                    }}
                    ?>
                </select>

                <!-- for choosing the sport-->
                <p id="sport-time"> Select the sport: 
                
                    <label class="choice-form"> Football <input type="radio" name="sport-choice" class="choice-form"
                         value="football" id="footballchoice"/> </label>
    
                    <label class="choice-form"> Padel <input type="radio" name="sport-choice" class="choice-form"
                         value="Padel" id="padelchoice"/></label>
                </p>

                <!-- displaying the prices-->
                <input type="button" value="Show Prices" onclick="displayPrice()"/>
                <center>
                    <table>
                        <thead>
                          <tr>
                            <th>Sport</th>
                            <th>Duration</th>
                            <th>Price</th>
                          </tr>
                        </thead>
                        <tbody>
                        </tbody>
                      </table>
            </center>
                <br>
                <br>

                <!-- for choosing the duration-->
            <div class="form-group">
            <label for="date">Date:</label>
            <input type="date" id="date" name="date" class="date" required>
          </div>
            <div class="form-group">
              <label for="time">Time:</label>
              <input type="time" id="time" name="time" class="time" required>
            </div>
            <div class="form-group">
              <label for="duration">Duration:</label>
              <select id="duration" name="duration" class="duration" required>
                <option value="None" disabled selected>Select Duration</option>
                <option value="1 Hour">1 hour</option>
                <option value="1.5 Hours">1.5 hours</option>
                <option value="2 Hours">2 hours</option>
              </select>
            </div>
            <div class="form-group">
              <label for="name">Name:</label>
              <input type="text" id="name" name="name" class="name" required>
            </div>
            <div class="form-group">
              <label for="email">Email:</label>
              <input type="email" id="email" name="email" class="email" required placeholder="i.e. youremail@gmial.com">
            </div>
            <div class="form-group">
              <label for="phone">Phone:</label>
              <input type="tel" id="phone" name="phone" class="phone" required placeholder="i.e. 98765432">
            </div>
            <div class="form-group">
              <label for="message">Additional Comments:</label>
              <textarea id="message" name="message" class="comment"></textarea>
            </div>
            
            <button type="submit">Book Now</button>
            </form>

            <form id="deleteForm" action="https://sportfieldbooking.000webhostapp.com/deleteReservation.php" method="post">
            <label class ="fit">
            Enter the reservation number to delete the reservation: <br/>
            <input id="deleteReservation" class="fit" type="text" name="deleteReservation" required placeholder="Reservation .NO :">
            <button type="submit" style="color: black;" >Submit</button>
            </label><br/>
           </form>
            <div id="bookingData">

            </div>

            <script type="text/javascript">
                //to add a booking 
                function book(clubName, sportName, date, time, duration, personName,email, phone ) {
                    var list = [clubName, sportName, date,
                     time, duration, personName,email, phone];
                    return list
                }


                // list contains the sport name, duration and the duration's price
                const booking = [
                { sportName: 'Padel', duration: '60 min', price: 12 },
                { sportName: 'Padel', duration: '90 min', price: 18 },
                { sportName: 'Padel', duration: '120 min', price: 24 },
                { sportName: 'Football', duration: '60 min', price: 10 },
                { sportName: 'Football', duration: '90 min', price: 15 },
                { sportName: 'Football', duration: '120 min', price: 20 }
                ];

                //to check if the football or padel is choosen or shown
                var Fcheck = document.getElementById("footballchoice");
                var Pcheck = document.getElementById("padelchoice");
                var footBallShown = false;
                var padelShown = false;

                function displayPrice(){
                    const table = document.querySelector('table');
                    const tbody = table.querySelector('tbody');

                    //if the user chooses football display the table prices for football
                    if (Fcheck.checked){
                        if(!footBallShown){
                        for (let i = 3; i < booking.length; i++) {
                            const sport = booking[i];
                            const row = tbody.insertRow();
                            const sportNameCell = row.insertCell();
                            const durationCell = row.insertCell();
                            const priceCell = row.insertCell();
                            //add the information to the table
                            sportNameCell.textContent = sport.sportName;
                            durationCell.textContent = sport.duration;
                            priceCell.textContent = sport.price;
                        } 
                        // to not show it more than 1
                        footBallShown = true;
                    }
                }


                    //if the user chooses padel display the table prices for padel
                    else if(Pcheck.checked){
                        if(!padelShown){
                        for (let i = 0; i < 3; i++) {
                            const sport = booking[i];
                            const row = tbody.insertRow();
                            const sportNameCell = row.insertCell();
                            const durationCell = row.insertCell();
                            const priceCell = row.insertCell();
                            //add the information to the table
                            sportNameCell.textContent = sport.sportName;
                            durationCell.textContent = sport.duration;
                            priceCell.textContent = sport.price;
                        }
                        // to not show it more than 1
                        padelShown = true;
                    }
                    }
                }  
                //create the table with booking information - hidden 
                function createTable(){
                    var div =document.getElementById("bookingData");
                    var table=document.createElement("table");
                    div.appendChild(table)
                    table.setAttribute("border","2");
                    table.setAttribute("width","100%");
                    table.setAttribute("id","dataTable");
                    table.setAttribute("display","none");

                    //heading of the table
                    var dataList = book("Sport Field Name ", "Sport Name","Date", 
                    "Time","Duration",
                    "Name", "E-mail","Phone number");
                    table.innerHTML="";
                    var row=document.createElement("tr")
                    table.appendChild(row);
                    for(var i=0 ; i < 8 ; i++){
                        //add elemnts to the table
                        var column=document.createElement("th");
                        row.appendChild(column);
                        column.innerText = dataList[i];
                    }
                }

                // to add the information to the table about the reservation
                function addInfo(){
                     var list = confirmInfo();
                     var table = document.getElementById("dataTable");
                     var rows = table.rows.length;
                     var row1=table.insertRow(rows);
                     for(var i = 0 ; i < 8 ; i++){
                        var column = document.createElement("td")
                        row1.appendChild(column);
                        column.innerText = list[i];
                    }    
                }

                // to get the booking information from the form
                function confirmInfo(){
                var info1 = document.getElementById("clubName").value; //gets club name

                var sportType1 = document.getElementById("footballchoice").checked;
                var sportType2 = document.getElementById("padelchoice").checked;
                var info2 = "" //for the sport type
                if(sportType1){
                    info2 = "Foot Ball"
                }
                else if(sportType2){
                    info2 = "Padel"
                }

                var info3 = document.getElementById("date").value; // gets the date
                var info4 = document.getElementById("time").value; //gets the time 
                var info5 = document.getElementById("duration").value; // gets the duration
                var info6 = document.getElementById("name").value; //gets the name of the costumer
                var info7 = document.getElementById("email").value; //gets the email
                var info8 = document.getElementById("phone").value; // gets the phone number

                // add a booking as a list
                var infoList = book(info1 , info2 , info3 , info4
                 , info5, info6, info7, info8);
                return infoList;
            }

            // to validate the name and phone number from the form
            function checkValidation(){
              
              let name = document.forms["book-form"]["name"];
              let contact = document.forms["book-form"]["phone"];

              if(name.value.search(/\d/)!=-1){
                alert("The Name is not Valid !")
                return false;
              }

              if(contact.value.length != 8){
                alert("The Contact Number is not 8 Digit Number !")
                return false;
              }
              
              // if information is valid then add the reservation
              var list = confirmInfo();
              addInfo(list);
              

              return true;
            }
            
                
            </script>
    </body>



    <footer>
        <div class="container">
            <div class="row">
                <div class="col">
                    <h3>Website pages</h3>
                    <ul>
                        <li><a href="index.html">Home Page</a></li>
                        <li><a href="https://sportfieldbooking.000webhostapp.com/book.php">Book a sport field</a></li>
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
