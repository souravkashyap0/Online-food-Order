<?php 

session_start();
if(isset($_SESSION['username'])){
  header('location:login.php');
}

 ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Hunger Games</title>
        <link  rel="shortcut icon" type="image/png"  href="favicon.png">
        <link rel="stylesheet" href="styles.css">
        <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <style >

body{
  background-image: url('images/photo-1447078806655-40579c2520d6.jpg');
}


  /* footer Begins */        
           

           *,*:before,*:after{
  box-sizing: border-box;
 }


.main13{
  display: -webkit-flex;
  display: -moz-flex;  
  display: -ms-flex;
  display: -o-flex;
  display: flex;
  align-items: center;
  justify-content: center;
  color: #9b9b9b;
  line-height: 3.8;
  font-size: 80px;
  text-transform: uppercase;
  font-weight: bold;
}
footer{
   display: -webkit-flex;
  display: -moz-flex;  
  display: -ms-flex;
  display: -o-flex;
  display: flex;
  flex-flow: row wrap;
  padding: 50px;
  color: #fff;
  background-color: #404040;
  padding-bottom: -20px;
}
.footer13 > *{
  flex: 1 100%;
}

.footer-left{
  margin-right: 1.25em;
  margin-bottom: 2em;
}

.footer-left img{
  width: 50%;
}

.product13{
  font-weight: 600;
  font-size: 17px;
}


.footer13 ul{
  list-style: none;
  padding-left: 0;
} 

.footer13 li{
  line-height: 2em;

}
.footer13 a{
  text-decoration: none;
}

.footer-right{
  display: -webkit-flex;
  display: -moz-flex;  
  display: -ms-flex;
  display: -o-flex;
  display: flex;
  flex-flow:  row wrap;
}

.footer-right > * {
  flex:1 50% ;
  margin-right: 1.25em;
  
}
.box13 a{
  color: #999;
}
.footer-bottom13{
  text-align: center;
  color: #999;
  padding-top: 50px;
}

.footer-left  p {
  padding-right: 20%;
  color: #999;
}

.socials a{
  background: #364a62;
  width: 40px;
  height: 40px;
  display: inline-block;
  margin-right: 10px;
}

.socials  a  i{
  color:#e7f2f4 ;
  padding: 10px 12px;
  font-size: 20px;
} 

@media screen and (min-width: 600px){
  .footer-right > * {
    flex:1;
  }
  .footer-left{
    flex: 1 0px;
  }
  .footer-right{
    flex: 2 0px;
  }
} 

@media (max-width: 600px){
  .footer13{
    padding: 15px;
  }
  .main13{
    font-size: 55px;
  }
}

/* end of footer */

/* CONTENT STARTS  */
.jumbotron {
  background: linear-gradient(teal, transparent),
  url('images/photo-1553549216-903af0603b16.jpg');
  background-size: cover;
  height: 300px;
  text-align: center;
  font-size: 25px;
  
}

.vertWrapper25{
  border: 1px solid ;
  position: relative;
  height: 60%;


}
.wrapper25{
  margin: 0 auto;
  width: 1200px;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}
.column25{
  border: 1px solid pink;
  width: 300px;
  height: 169px;
  margin: 5px;
  padding: 10px;
  
}
.after-box {
  clear: left;
}
.clearfix{
  overflow: auto;
}
.center25{
  text-align: center;
}
.center25 div{
  text-align: left;
}
.inlineExample25{
  display: inline-block;
}
#box125 {
  background-color: grey;
  border-radius: 8px;
  background-image: url('images/srcb64=aHR0cHM6Ly9kMXJhbHNvZ25qbmczNy5jbG91ZGZyb250Lm5ldC8zYTYwODYyNy1iNjBkLTQxM2QtOGZiOS05M2E0MmFjNDEwYTcuanBlZw==.webp' );
  background-size: 300px;
  background-repeat: no-repeat;
  color: white;
  float: left;
  text-align: center;
}

#box126{
  background-color: grey;
  border-radius: 8px;
  background-image: url('images/srcb64=aHR0cHM6Ly9kMXJhbHNvZ25qbmczNy5jbG91ZGZyb250Lm5ldC82ZGNlMzIxMi1mNjU4LTQzNmMtOTE4Ni0wZDNlMjJlMDhjZjIuanBlZw==.webp' );
  background-size: 300px;
  background-repeat: no-repeat;
  text-align: center;
  color: white;
}


#box127{
  background-color: grey;
  border-radius: 8px;
 background-image: url('images/srcb64=aHR0cHM6Ly9kMXJhbHNvZ25qbmczNy5jbG91ZGZyb250Lm5ldC84MjcxZWNkOS01OTk5LTQ1ZWYtOTRiZC05NTQ4ZTIwZTJjYzg=.webp');
  background-size: 300px;
  background-repeat: no-repeat;
  float: right;
  text-align: center;
  color: white;
}

#box1251 {
  background-color: grey;
  border-radius: 8px;
  background-image: url('images/b256d0dd8a29f9e0623ecaaea910534d1585809352.webp' );
  background-size: 300px;
  background-repeat: no-repeat;
  color: white;
  float: left;
  text-align: center;
}

#box1261{
  background-color: grey;
  border-radius: 8px;
  background-image: url('images/74213552-glowing-white-contour-fork-spoon-knife-on-black-background-outline.jpg' );
  background-size: 300px;
  background-repeat: no-repeat;
  text-align: center;
  color: white;
}

#box1271{
  background-color: grey;
  border-radius: 8px;
 background-image: url('images/photo-1517817748493-49ec54a32465.jpg');
  background-size: 300px;
  background-repeat: no-repeat;
  float: right;
  text-align: center;
  color: white;
}


/* list of cities */
ul.listcity{
 column-count: 5;
}




/* list of cities */


        </style>
    </head>  
            
    <body>
         


        <div id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a href="about.php">About</a>
            <a href="#">Orders</a>
            <a href="#">Favourites</a>
            <a href="#">Help</a>
            <a href="#">Wallet</a>
            <a href="#">Invite Friends</a>
            <br>
            <hr>
            <a href="#"><i>Create a Business Account</i></a>
            <br><hr>
            <a href="#"><i>Add your Restaurant</i></a>
            <br><hr>
            <a href="#"><i>Signup to Deliver</i></a>
            <hr>
            <footer class="footerformenu">
                    <div>  
                        <img src="images/logo13.png" width="100%">
                        <div class="nav7">
                            <p>    
                        <a href="https://play.google.com/store/apps/details?id=com.ubercab.eats"><img src="https://www.xda-developers.com/files/2020/07/android-red-velvet-cake.jpg" alt="Android or PlayStore" width="30%" ></a >
                        <a href="https://apps.apple.com/us/app/uber-eats-food-delivery/id1058959277"><img src="https://www.apple.com/itunes/marketing-on-music/images/og.jpg?201710051016" alt="Apple" width="30%" ></a >
                            </p></div>          
                    </div>
                </footer>
              </div>
            </div>

          <!--trying-->
          <div class="container">
            <div class="logo">
                <a href="index.php"><h1>HUNGER <span>GAMES</span></h1></a>
            </div>
            <div class="currentDetails">
                <div class="header-option">
                    <i data-feather="map.pin"></i>
                    <div><a href="https://www.google.com/maps/place/Bengaluru,+Karnataka/data=!4m2!3m1!1s0x3bae1670c9b44e6d:0xf8dfc3e8517e4fe0?sa=X&ved=2ahUKEwj0vr_WntrsAhWYIbcAHUi0ATQQ8gEwInoECCIQAQ">Banglore</a></div>
                </div>
                <div class="header-option">
                    <i data-feather="clock"></i>
                    <div><a href="https://www.google.com/maps/place/A+P+S+College+Of+Engineering/@12.7836606,77.4965437,15z/data=!4m5!3m4!1s0x0:0x7b13a010cf5e5b21!8m2!3d12.7836606!4d77.4965437"><span>Deliver To</span></a>
                    </div>
                </div>
            </div>
            <div class="searchBar">
                <div class="header-option">
                    <i data-feather="search"></i>
                    <a href="logout.php"><button type="button"> <span>Logout</span> </button> </a>
                </div>
                <div class="header-option">
                    <!--Login-->
                  <a href="login.php"><button type="button" .style.display='block'" style="width:auto;"><span>Log in/ Register</span></button> </a>
                </div>
                
            </div>
        </div>   
          <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; open</span>
          
          <script>
          function openNav() {
            document.getElementById("mySidenav").style.display = "block";
          }
          
          function closeNav() {
            document.getElementById("mySidenav").style.display = "none";
          }
          </script>

            <script>
    // Get the modal
    var modal = document.getElementById('id01');
    
    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
    </script>
          <hr>
          
          
          
          <!--index or Homepage-->
       <div class="jumbotron jumbotron-fluid">
    <div class="container25 text-center">
      <h1 class="display-3 text-center text-light"><b>Hunger Games<b></h1>
      <p class="lead text-center text-light">Hunger , any time of the Day !</p>
      <a href="restaurants.php"><button type="button" class="btn btn-info btn-lg  text-center " data-toggle="modal" data-target="#exampleModal">RESTAURANTS!</button></a>
    </div>
  </div>



      
      <div class="vertWrapper25">
        <h1 style="font-family: 'Brush Script MT', cursive;color: white;font-size: 100px;text-align: center;"><b>Our Cuisines<b></h1>
      <div class="wrapper25 clearfix25 center25">       
        <a href="chinese.php"><div class="column25 inlineExample25 " id="box125"><b>Chinese</b></div></a>
        <a href="Indian.php"><div class="column25 inlineExample25 " id="box126"><b>Indian</b></div></a>
        <a href="Italian.php"><div class="column25 inlineExample25 "id="box127"><b>Italian</b></div></a>
      </div>
    </div>


      <div class="vertWrapper25">
        <h1 style="font-family: 'Brush Script MT', cursive;color: white;font-size: 100px;text-align: center;"><b>Our Offerings<b></h1>
      <div class="wrapper25 clearfix25 center25">
        <a href="#"><div class="column25 inlineExample25 " id="box1251"><b>Hunger Games Pro</b></div></a>
        <a href="#"><div class="column25 inlineExample25 " id="box1261"><b>Add Your Restaurant</b></div></a>
        <a href="#"><div class="column25 inlineExample25 "id="box1271"><b>Sign Up to Deliver</b></div></a>
      </div>
    </div>

    <h2 style="color: white;text-align: left;padding-left: 80px;">Explore other options for you here</h2>
    
    <h3 style="color: white;text-align: left;padding-left: 80px;">Popular cuisines near me</h2>

    <h4 style="color: white;text-align: left;padding-left: 80px;">
      <ul>
        <li><a href="#" style="color: white;"><i>Chinese food near me</i> </a></li>
        <li><a href="#" style="color: white;">Indian  food near me </a></li>
        <li><a href="#" style="color: white;">Italian food near me </a></li>
      </ul>
    </h4>  
    <br>
    <h2 style="color: white;text-align: left;padding-left: 80px;">Top Restaurants Chains </h2> 
    
    <h4 style="color: white;text-align: left;padding-left: 80px;">
    <ul>
        <li><a href="#" style="color: white;"><i>Crystal China</i></a></li>
        <li><a href="#" style="color: white;"><i>Diamond India</i></a></li>
        <li><a href="#" style="color: white;"><i>Italian food near me </i></a></li>
      </ul>
    </h4>  

    <h2  style="color: white;text-align: left;padding-left: 80px;">Cities We Deliver To</h2> 

    <h4 style="color: white;text-align: left;padding-left: 80px;">
      <ul class="listcity">
        <li><a href="#" style="color: white;"><i>Delhi NCR</i> </a></li>
        <li><a href="#" style="color: white;"><i>Hyderabad</i> </a></li>
        <li><a href="#" style="color: white;"><i>Ahmedabad</i> </a></li>
        <li><a href="#" style="color: white;"><i>Ooty</i> </a></li>
        <li><a href="#" style="color: white;"><i>Kanpur</i> </a></li>
        <li><a href="#" style="color: white;"><i>Vishakapatnam</i> </a></li>
        <li><a href="#" style="color: white;"><i>Nagpur</i> </a></li>
        <li><a href="#" style="color: white;"><i>Surat</i> </a></li>
        <li><a href="#" style="color: white;"><i>Vishakapatnam</i> </a></li>
        <li><a href="#" style="color: white;"><i>Trivandarum</i> </a></li>
        <li><a href="#" style="color: white;"><i>Madurai</i> </a></li>
        <li><a href="#" style="color: white;"><i>Vijaywada</i> </a></li>
        <li><a href="#" style="color: white;"><i>Rishikesh</i> </a></li>
        <li><a href="#" style="color: white;"><i>Raipur</i> </a></li>
        <li><a href="#" style="color: white;"><i>Kolkata</i> </a></li>
        <li><a href="#" style="color: white;"><i>Chennai</i> </a></li>
        <li><a href="#" style="color: white;"><i>Chandigarh</i> </a></li>
        <li><a href="#" style="color: white;"><i>Shimla</i> </a></li>
        <li><a href="#" style="color: white;"><i>Allahabad</i> </a></li>
        <li><a href="#" style="color: white;"><i>Bhubaneswar</i> </a></li>
        <li><a href="#" style="color: white;"><i>Agra</i> </a></li>
        <li><a href="#" style="color: white;"><i>Varanasi</i> </a></li>
        <li><a href="#" style="color: white;"><i>Haridwar</i> </a></li>
        <li><a href="#" style="color: white;"><i>Khozikode</i> </a></li>
        <li><a href="#" style="color: white;"><i>Jodhpur</i> </a></li>
        <li><a href="#" style="color: white;"><i>Jalandhar</i> </a></li>
        <li><a href="#" style="color: white;"><i>Gorakhpur</i> </a></li>
        <li><a href="#" style="color: white;"><i>Mumbai</i> </a></li>
        <li><a href="#" style="color: white;"><i>Lucknow</i> </a></li>
        <li><a href="#" style="color: white;"><i>Goa</i> </a></li>
        <li><a href="#" style="color: white;"><i>Ludhiana</i> </a></li>
        <li><a href="#" style="color: white;"><i>Aurangabad</i> </a></li>
        <li><a href="#" style="color: white;"><i>Coimbatore</i> </a></li>
        <li><a href="#" style="color: white;"><i>Dehradun</i> </a></li>
        <li><a href="#" style="color: white;"><i>Patna</i> </a></li>
        <li><a href="#" style="color: white;"><i>Leh</i> </a></li>  
        <li><a href="#" style="color: white;"><i>Alapuzha</i> </a></li>
        <li><a href="#" style="color: white;"><i>Kota</i> </a></li>
        <li><a href="#" style="color: white;"><i>Jammu</i> </a></li>
        <li><a href="#" style="color: white;"><i>Bengaluru</i> </a></li>
        <li><a href="#" style="color: white;"><i>Mangalore</i> </a></li>
        <li><a href="#" style="color: white;"><i>Hubli</i> </a></li>
        <li><a href="#" style="color: white;"><i>Mysore</i> </a></li>
        <li><a href="#" style="color: white;"><i>Davanagere</i> </a></li>
        <li><a href="#" style="color: white;"><i>Chikmagalur</i> </a></li>
        <li><a href="#" style="color: white;"><i>Madikeri</i> </a></li>
        <li><a href="#" style="color: white;"><i>Gadag</i> </a></li>
        <li><a href="#" style="color: white;"><i>Tumakuru</i> </a></li>
        <li><a href="#" style="color: white;"><i>Belgaum</i> </a></li>
        <li><a href="#" style="color: white;"><i>Vijayapura</i> </a></li>
        <li><a href="#" style="color: white;"><i>Bagalkot</i> </a></li>
        <li><a href="#" style="color: white;"><i>Hassan</i> </a></li> 
        <li><a href="#" style="color: white;"><i>Shivamogga</i> </a></li> 
        <li><a href="#" style="color: white;"><i>Mandya</i> </a></li>
        <li><a href="#" style="color: white;"><i>Udaipur</i> </a></li>
        <li><a href="#" style="color: white;"><i>Ajmer</i> </a></li>
        <li><a href="#" style="color: white;"><i>Manali</i> </a></li>
        <li><a href="#" style="color: white;"><i>Pune</i> </a></li>
        <li><a href="#" style="color: white;"><i>Jaipur</i> </a></li>
        <li><a href="#" style="color: white;"><i>Nashik</i> </a></li>
        <li><a href="#" style="color: white;"><i>Amritsar</i> </a></li>
        <li><a href="#" style="color: white;"><i>Ranchi</i> </a></li> 
        <li><a href="#" style="color: white;"><i>Manipal</i> </a></li>
        <li><a href="#" style="color: white;"><i>Cuttack</i> </a></li>
        <li><a href="#" style="color: white;"><i>Mussoorie</i> </a></li>
        <li><a href="#" style="color: white;"><i>Dharmashala</i></a></li>
        <li><a href="#" style="color: white;"><i>Vadodara</i> </a></li>
        <li><a href="#" style="color: white;"><i>See More--></i> </a></li>
    </h4>  

   

          <!--index or Homepage-->







           
          <!--Footer starts -->
          <footer class="footer13">
            <div class="footer-left">
              <img src="images/logo13.png" alt="">
              <p>Hunger , any time of the Day !</p>
              <div class="socials">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="https://github.com/souravkashyap0"><i class="fa fa-github"></i></a>
                <a href="#"><i class="fa fa-youtube"></i></a>
                <a href="#"><i class="fa fa-tumblr"></i></a>
              </div>
            </div>
            <ul class="footer-right">
              <li>

                <h2 class="product13">About</h2>

                <ul class="box13">

                  <li><a href="about.php">About</a></li>
                  <li><a href="#">Read Our Blog</a></li>
                  <li><a href="#">Create A Business Account</a></li>
                  <li><a href="#">Add Your Restaurant</a></li>
                  <li><a href="#">Signup To Deliver</a></li>
                </ul>
              </li>
              
              <li class="features">

                <h2>Get Help</h2>

                <ul class="box13">

                  <li><a href="#">Read Faqs</a></li>
                  <li><a href="#">Report Fraud</a></li>
                  <li><a href="#">Sales</a></li>
                  <li><a href="#">Contact</a></li>
                  <li><a href="#">Customer Service</a></li>
                </ul>
              </li>


                <li>
                <h2>For You</h2>

                <ul class="box13">

                  <li><a href="#">Privacy</a></li>
                  <li><a href="#">Terms</a></li>
                  <li><a href="#">Security</a></li>
                </ul>
              </li>

           </ul>
           <div class="footer-bottom13">
             <p>All Rights Reserved &copy;<b>Pamposh and Sourav</b> 2020</p>
           </div>
          </footer>

          <!--Footer ends-->
    </body>
</html>