<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paralax Dining-Order Online</title>
     <!-- to add google icons -->
     <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

     <!-- to add social media icons -->
     <link href="https://netdna.bootstrapcdn.com/font-awesome/4.0.1/css/font-awesome.css" rel="stylesheet">
     
 
    <!-- ORDER ONLINE CSS -->
    <link rel="stylesheet" href="style_order_online.css">
    <link rel="stylesheet" href="../css/Footer_style.css">


    <style> 
    body{ background-image: url("../images/orderdetailbg.png");
        background-size: contain;
    }
        </style>


</head>

<body id="deliveryBG" >

 <!-- OUR NAVIGATION BAR -->
  
 <div>
        <ul class="topnav">
            <li> <div class="closeheads">
         
                <img src="../images/Nature Flower Red beauty salon stamp Logo .png" width="100px">
            </div></li>
            <li> <a href="../PARALLEX DINING.html" class="navig1">HOME </a></li>
            <li> <a href="../menu.html" class="navig1" >MENU </a></li>
            <li> <a href="../Reservationphp.php" class="navig1">RESERVATION </a></li>
            <li> <a href="../REVIEWSphp.php" class="navig1">CUSTOMER REVIEWS </a></li>
            <li> <a href="../OrderOnline/orderMenu.html" class="navig1">ORDER ONLINE </a></li>
            <li> <a href="../CAREERSphp.php" class="navig1">CAREERS </a></li>
        </ul>

    <div> 

    <!-- Delivery Detail Form -->

    <center>
        <br>
        <h style="font-size: 50px;"><b> <u>Order Info</u></b></h>
    </center>
    <br><br> 
    <form class="order" action="orderdetailsphp.php" method="post">
        <fieldset>
            <legend>
                <h3 class="curvey">Delivery Details </h3>
            </legend><br><br>
            <div class="order-label">Full Name</div>
            <input type="text" name="name" placeholder="E.g. Poorva Kumari" class="input-responsive" required>
            <span class="feedback"></span>
            <div class="order-label">Phone Number</div>
            <input type="tel" name="phoneno" placeholder="E.g. 9843xxxxxx" class="input-responsive" required>
            <span class="feedback"></span>
            <div class="order-label">Email</div>
            <input type="email" name="email" placeholder="E.g. abc@xyz.com" value="" class="input-responsive" required>
            <span class="feedback" id="Email"></span>
            <div class="order-label">Address</div>
            <textarea name="address" rows="10" placeholder="E.g. Street, City, Country" class="input-responsive" required></textarea>
            <span class="feedback"></span>
            <input type="submit" name="submit" value="Confirm details" class="btn btn-primary btn-submit" id="submit">
            <br><br>
        </fieldset>

        
     <!-- USING PHP TO MAKE THE PAGE DYNAMIC -->

      <?php

      //Taking in the user data

        if (isset($_POST['submit'])) {
            $name = $_POST['name'];
            $phoneno=$_POST['phoneno'];
            $email=$_POST['email'];
            $address = $_POST['address'];                

            
              
        
        // Connecting to the Database

        //these are the by default values we use on our local server.
        //Once the website goes to the public domain the username and server names change
            $servername="localhost";
            $username="root";
            $password="";
        //Name of the DataBase we want to use
            $database="PARALLAX USER DATA";

        //Creating a connection with MySql i.e., connecting the user data with database

        //the function used to connect is myseli_connect and it takes the 4 parameters defined above
            $conn=mysqli_connect($servername, $username, $password, $database);
        
        //mysqli_connect gives a bool value of true or false
        #if sql connects successfully, insert the data else display error

            if ($conn) {
            //Submitting user response to our database
            //SQL query to be executed
            $sql="INSERT INTO orderdetail ( `Name`, `Address`, `Email`,  `Phone Number`) VALUES ('$name','$address','$email', '$phoneno')";
                                   //table name            //columns                                                   //Different cases or row data


            //making a query connect the database to the page
            $result= mysqli_query($conn, $sql);

            // Add a new booking to the Table reservation database and Provide response to the user.
            if ($result) {
                echo "<small> <strong> Yoohoooo $name! <strong> Your order has been placed and your delicious food is on the way! Please keep the cash ready";
            } 
            else {
            echo "Error in storing your details :| --> ".
            mysqli_error($conn);
                    }
                }
            }
        ?>
   


    </form>
    
  
    
    <br><br><br><br>
    <br><br><br><br>
    <br><br><br><br>
    



            <!-- footer of the WebPage -->
            <footer>
          <ul>
          <li class="footerli">
              <div class="li1">  
                  <h5 class="newfont">CONTACT US</h5>
               
               
                      <div class="newfont" style="font-size:13px">
                          <span class="material-icons" id="smallicon">
                              phone
                              </span>
                          +91 8839574839
                          <br>
                          <div>
                          <span class="material-icons" id="smallicon">
                              alternate_email
                              </span>
                              info@parallaxdining.com
                          </div>
                      </div>
              
                  
                        
                         
                     
              </div>

          </li>
          <li class="footerli">
              <div class="li2">  
                  <h5 class="newfont">FOLLOW US</h5>
              
              
                      <!-- adding social media icons -->
                      <div >

                          <i class="fa fa-facebook circle"></i>
                          <i class="fa fa-twitter circle"></i>
                          <i class="fa fa-google-plus circle"></i>

                      </div>
                        
                         
                     
              </div>

              <li class="footerli">
                  <div class="li3">  
                  <h5 class="newfont">DEVELOPED BY</h5>
                  
                  
                  <!-- adding social media icons -->
                      <div >
                              <span class="material-icons" id="smallicon">person</span> Ayushi Choudhary
                                  <br>
                                  <span class="material-icons" id="smallicon">
                                      person
                                      </span> Astha Vishnoi
                                      <br>
                                      <span class="material-icons" id="smallicon">
                                          person
                                          </span> Disha Patel

  
                          </div>
                            
                             
                         
                  </div>

          </li>
      </ul>

      </footer>

</body>

</html>