 <!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Hunger Games</title>
        <link  rel="shortcut icon " href="/gulag/images/favicon.icon">
        <link rel="stylesheet" href="styles.css">
        <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">       
        <style >
            body{
                background-image: none;
            }


        </style>
    </head>    

        <body>  
        <div id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a href="#">About</a>
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



    <!--add restaurant content starts-->
    <div>
        <br>
        <h1 style="padding-left:  20px;"><b>Why Hunger Games?</b></h1>
        <div style="float: left;padding-left: 40px;">
            <h3>Deliver your way</h3>
            <h4 style="text-align: justify;">Our offerings are flexible so you can customise<br> them to your needs. Get started with your<br> couriers or ours. 
            </h4>
        </div>

        <div style="display: flex;text-align: center;padding-left: 250px;">
            <h3>Boost your visibility</h3>
            
        </div>

        <div style="float: right;padding-top:  -90px;">
            <h3>Connect with customers</h3>
            <h4>Turn customers into regulars with actionable<br> data insights, respond to reviews or offer a<br> loyalty programme.</h4>
        </div>

    </div>



    <!--add restaurant content  ends -->


</body>