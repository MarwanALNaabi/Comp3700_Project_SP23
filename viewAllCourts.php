

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
            // database information
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

            class Courts{
                //constructor
                private $name;
                private $typeOfField;
                private $number;
                private $email;
                private $sportType;
                private $province;
                private $state;
                private $openingTime;
                private $closingTime;
                private $facilities;    
                
                public function __construct($name,$typeOfField,$number,$email,$sportType,$province,$state,$openingTime,$closingTime,$facilities){
                    $this->name = $name;
                    $this->typeOfField = $typeOfField;
                    $this->number = $number;
                    $this->email = $email;
                    $this->sportType = $sportType;
                    $this->province = $province;
                    $this->state = $state;
                    $this->openingTime = $openingTime;
                    $this->closingTime = $closingTime;
                    $this->facilities = $facilities;
                    }
                    public function getName(){
                        return $this->name;
                    }
                    public function getTypeOfField(){       
                        return $this->typeOfField;
                    }
                    public function getNumber(){
                        return $this->number;
                    }
                    public function getEmail(){
                        return $this->email;
                    }
                    public function getSportType(){
                        return $this->sportType;
                    }
                    public function getProvince(){
                        return $this->province;
                    }
                    public function getState(){
                        return $this->state;
                    }
                    public function getOpeningTime(){
                        return $this->openingTime;
                    }
                    public function getClosingTime(){
                        return $this->closingTime;
                    }
                    public function getFacilities(){
                        return $this->facilities;
                    }

            }
            function display($result){
            //get the number of rows
            $rowCount = mysqli_num_rows($result);
            if ($rowCount <= 0){
                echo("<center?>There is No Records!</center>");
            }else{
                // define an array
                $array = array();
                while ($record=mysqli_fetch_assoc($result)){
                    //set an object of court class with constructor
                    $court = new Courts($record['name'], $record['typeOfField'], $record['number'], $record['email'], $record['sportType'], $record['province'], $record['state'],$record['openningTime'], $record['closingTime'], $record['facilities']);
                    // add court variable to array variable
                    $array[] = $court;
                }

                // array length
                $length = count($array);

                for($j=0;$j<$length;$j++){
                    // print the courts
                    echo("<tr><td>".$array[$j]->getName());
                    echo("<td>".$array[$j]->getTypeOfField());
                    echo("<td>".$array[$j]->getNumber());
                    echo("<td>".$array[$j]->getEmail());
                    echo("<td>".$array[$j]->getSportType());
                    echo("<td>".$array[$j]->getProvince());
                    echo("<td>".$array[$j]->getState());
                    echo("<td>".$array[$j]->getOpeningTime());
                    echo("<td>".$array[$j]->getClosingTime());
                    echo("<td>".$array[$j]->getFacilities());

                }
            }
            }
            display($result);
            
            
            
           
            /**
                    //second method
                    // if there is a record of the courts, print them all
                          if($result)
                        {
                        while ($record=mysqli_fetch_assoc($result)){
                            // printing the records
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



             
             */


            
                        
            ?>
        </table>
        </center>
