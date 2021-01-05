<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Hunger Games</title>
        <link  rel="shortcut icon " href="/gulag/images/favicon.icon">
        <link rel="stylesheet" href="styles.css">
        <link rel="stylesheet" href="food.css">
        <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>
            body{
                background-image: url('images/photo-1602587619322-6cd7fb701bd9.jpg');
                background-size: cover;
                background-repeat: no-repeat;
                height: fit-content;

            }

            .crystal{
                
                color:black;
                font-size: 65px;
                text-align: left;
                 
                 top: 10px; 
                 padding: 0 10px;}
            }
        
            .box {
                  background: #eaeaea ;
                  display: flex;
                  position: sticky;             
                 flex-basis: 17%;
                  height: 400px;
                  margin-bottom: 1em;
                  justify-content: right;
                  
                }


                .box-1 {
                 
                  background-color: white;
                 background-repeat: no-repeat;
                 background-image: fill;
                 background-size:cover;
                 background-attachment: fixed;
                 position: sticky;
                 height: 250px;
                 width:970px;
                 margin-left: 145px;
                 align-items: center;
                 

                }
                .footer{
                    position: sticky;
                    

                }
                body{
                    position: relative;
                }

                /* The Modal (background) */
                .modal {
                  display: none; /* Hidden by default */
                  position: fixed; /* Stay in place */
                  z-index: 1; /* Sit on top */
                  padding-top: 100px; /* Location of the box */
                  left: 0;
                  top: 0;
                  width: 100%; /* Full width */
                  height: 100%; /* Full height */
                  overflow: auto; /* Enable scroll if needed */
                  background-color: rgb(0,0,0); /* Fallback color */
                  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
                }

                /* Modal Content */
                .modal-content {
                  background-color: #fefefe ;
                  margin: auto;
                  padding: 20px;
                  border: 1px solid #888 ;
                  width: 45%;
                  height: 80%;
                }

                /* The Close Button */
                .close {
                  color: #aaaaaa;
                  float: right;
                  font-size: 28px;
                  font-weight: bold;
                }

                .close:hover,
                .close:focus {
                  color: #000;
                  text-decoration: none;
                  cursor: pointer;
                }
                
                hr {
  border:none;
  background:#E0E4CC;
  height:1px;
/*   width:60%;
  display:block;
  margin-left:0; */
}
.container1 {
  max-width: 900px; 
  margin: 1em auto; 
  background:#FFF; 
  padding:30px;
  border-radius:5px;
  margin-right: 400px;
}
.productcont1 {
  display: flex; 
}
.product1 {
  padding:1em; 
  border:1px solid #E0E4CC; 
  margin-right:1em; 
  border-radius:5px;
}
.cart-container {
  border:1px solid #E0E4CC;
  border-radius:5px;
  margin-top:1em;
  padding:1em;
}
.addtocart { 
    border:1px solid #FA6900; 
    color:#fff; 
    background: #F38630 ; 
    padding:0.6em 1em;
    font-size:1em; 
    line-height:1; 
    border-radius: 1.2em;
    transition: color 0.2s ease-in-out, background 0.2s ease-in-out, border-color 0.2s ease-in-out;
}
button:hover, button:focus, button:active, input[type="submit"]:hover, input[type="submit"]:focus, input[type="submit"]:active {
    background: #A7DBD8;
    border-color:#69D2E7;
    color:#000;
    cursor: pointer;
}
table {
  margin-bottom:1em;
  border-collapse:collapse;
}
table td, table th {
  text-align:left;
  padding:0.25em 1em;
  border-bottom:1px solid #E0E4CC;
}
#carttotals {
  margin-right:0;
  margin-left:auto;
}
.cart-buttons {
  width:auto;
  margin-right:0;
  margin-left:auto;
  display:flex;
  justify-content:flex-end;
  padding:1em 0;
  
}
#emptycart {
  margin-right:1em;
  border:1px solid #FA6900; 
    color:#fff; 
    background: #F38630 ; 
    padding:0.6em 1em;
    font-size:1em; 
    line-height:1; 
    border-radius: 1.2em;
    transition: color 0.2s ease-in-out, background 0.2s ease-in-out, border-color 0.2s ease-in-out;
}
#checkout {
  margin-right:1em;
  border:1px solid #FA6900; 
    color:#fff; 
    background: #F38630 ; 
    padding:0.6em 1em;
    font-size:1em; 
    line-height:1; 
    border-radius: 1.2em;
    transition: color 0.2s ease-in-out, background 0.2s ease-in-out, border-color 0.2s ease-in-out;
}




table td:nth-last-child(1) {
  text-align:right;
}
.message {
  border-width: 1px 0px;
  border-style:solid;
  border-color:#A7DBD8;
  color:#679996;
  padding:0.5em 0;
  margin:1em 0;
}


/* Footer starts*/

           *,*:before,*:after{
               box-sizing: border-box;
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
            /* Footer ends */
                
        </style>    
    </head>
    <body>
        <!--sidebar menu starts-->
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
        <!--sidebar ends-->

        <!--header starts-->
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
                   <a href="login.php"><button onclick="document.getElementById('id01').style.display='block'" style="width:auto;"><span>Log in/ Register</span></button> </a>
                </div>
               
            </div>
        </div>   
          <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; open</span>
          <!--javascript for sidebar(hamburger menu)-->
          <script>
          function openNav() {
            document.getElementById("mySidenav").style.display = "block";
          }
          
          function closeNav() {
            document.getElementById("mySidenav").style.display = "none";
          }
          </script><!--Javascript ends-->
          <!--Header ends-->

           <!--Javascript for login -->
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

            <!--javascript ends-->

         
          <!--Crystal china restaurant begins-->
        <div class="box box-1">
        <section class="demo">
        
        <div class="content-box">
        <h1 class="crystal"><i>Diamond India</i></h1>     
        </div>
        </section>
        <ul>
            <li><i>&#8377; Indian</i></li>
            <li><i>View delivery time and Booking time<i></li>
            <li><i>24, Vittal Mallya Rd, KG Halli, D' Souza Layout, Ashok Nagar, Bengaluru, <!-- Trigger/Open The Modal --><button id="myBtn">More Info</button></i></li>    
           
        </ul>
        </div>
        
        <!-- Trigger/Open The Modal -->
        
       

        <!-- The Modal -->
        <div id="myModal" class="modal">

          <!-- Modal content -->
          <div class="modal-content">
            <span class="close">&times;</span>
            
            <section class="maps"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3888.004095784063!2d77.5938698147705!3d12.9715894908559!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae16775069abf7%3A0xe138768bb2a0df8a!2sUB%20City!5e0!3m2!1sen!2sin!4v1607342727076!5m2!1sen!2sin" width="600" height="350" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></section>
            <hr>
            <p><b>LOCATION AND HOURS</b></p>
            <p><i>24, Vittal Mallya Rd, KG Halli, D' Souza Layout, Ashok Nagar, Bengaluru</i></p>
            <p>Every day <br>
                <i>06:00AM to 12:00pm</i>
            </p>
          </div>

        </div>

        <script>
        // Get the modal
        var modal = document.getElementById("myModal");

        // Get the button that opens the modal
        var btn = document.getElementById("myBtn");

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks the button, open the modal 
        btn.onclick = function() {
          modal.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
          modal.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
          if (event.target == modal) {
            modal.style.display = "none";
          }
        }
        </script>
        <!--Crystal china restaurant ends-->
       <br> 
       <br>
       <br>

       <!-- dynamically sized sticky css and html and sidebar components-->        
 <div class="container1"> 
   <h1>Diamond India </h1>
   <p>Special dishes picked for you </p>
   <p>Click 'Empty Cart' button to remove session cookies from browser.</p>
   <div id="alerts"></div>
<div class="productcont1">
        <div class="product1">
            <h3 class="productname">Samosa </h3>
            <p>Freshly handmade Samosa</p>
            <img src="images/srcb64=aHR0cHM6Ly9kMXJhbHNvZ25qbmczNy5jbG91ZGZyb250Lm5ldC80NDk3ZjFhZS04OGUwLTQ2NzEtYTBhZi1kZWQyMzMzM2MyMDc=.webp" width="200px">
            <p class="price">$5.05</p>
            <button class="addtocart">Add To Cart</button>
        </div>
        <div class="product1">
            <h3 class="productname">Chicken Biryani</h3>
            <p>Spiced basmati rice cooked with chicken.</p>
            <img src="images/srcb64=aHR0cHM6Ly9kMXJhbHNvZ25qbmczNy5jbG91ZGZyb250Lm5ldC9iYjkyMDNlOS0zZDFiLTQxZTgtOGI5Yi0yZTIyNmNhZDg0M2Y=.webp" width="200px">
            <p class="price">$8.50</p>
            <button class="addtocart">Add To Cart</button>
        </div>
        <div class="product1">
            <h3 class="productname">Saag Paneer </h3>
            <p>Spinach cooked with homemade cheese.</p>
            <img src="images/srcb64=aHR0cHM6Ly9kMXJhbHNvZ25qbmczNy5jbG91ZGZyb250Lm5ldC9mNzk1ODc3Yi04YTdkLTRmOTgtOWU5OS02NzkxMDQ0MDU1NzU=.webp" width="210px">
            <p class="price">$10.50</p>
            <button class="addtocart">Add To Cart</button>
        </div>
        </div>
        <div class="cart-container">
          <h2>Cart</h2>
          <table>
            <thead>
              <tr>
              <th><strong>Product</strong></th>
              <th><strong>Price</strong></th>
            </tr>
            </thead>
            <tbody id="carttable">
            </tbody>
          </table>
          <hr>
          <table id="carttotals">
            <tr>
              <td><strong>Items</strong></td>
              <td><strong>Total</strong></td>
            </tr>
            <tr>
              <td>x <span id="itemsquantity">0</span></td>
             
              <td>$<span id="total">0</span></td>
            </tr></table>

            
          <div class="cart-buttons">  
            <button id="emptycart">Empty Cart</button>
            <button id="checkout">Checkout</button>
          </div>
        </div>
</div>
<script>
    /* get cart total from session on load */
updateCartTotal();

/* button event listeners */
document.getElementById("emptycart").addEventListener("click", emptyCart);
var btns = document.getElementsByClassName('addtocart');
for (var i = 0; i < btns.length; i++) {
    btns[i].addEventListener('click', function() {addToCart(this);});
}

/* ADD TO CART functions */

function addToCart(elem) {
    //init
    var sibs = [];
    var getprice;
    var getproductName;
    var cart = [];
     var stringCart;
    //cycles siblings for product info near the add button
    while(elem = elem.previousSibling) {
        if (elem.nodeType === 3) continue; // text node
        if(elem.className == "price"){
            getprice = elem.innerText;
        }
        if (elem.className == "productname") {
            getproductName = elem.innerText;
        }
        sibs.push(elem);
    }
    //create product object
    var product = {
        productname : getproductName,
        price : getprice
    };
    //convert product data to JSON for storage
    var stringProduct = JSON.stringify(product);
    /*send product data to session storage */
    
    if(!sessionStorage.getItem('cart')){
        //append product JSON object to cart array
        cart.push(stringProduct);
        //cart to JSON
        stringCart = JSON.stringify(cart);
        //create session storage cart item
        sessionStorage.setItem('cart', stringCart);
        addedToCart(getproductName);
        updateCartTotal();
    }
    else {
        //get existing cart data from storage and convert back into array
       cart = JSON.parse(sessionStorage.getItem('cart'));
        //append new product JSON object
        cart.push(stringProduct);
        //cart back to JSON
        stringCart = JSON.stringify(cart);
        //overwrite cart data in sessionstorage 
        sessionStorage.setItem('cart', stringCart);
        addedToCart(getproductName);
        updateCartTotal();
    }
}
/* Calculate Cart Total */
function updateCartTotal(){
    //init
    var total = 0;
    var price = 0;
    var items = 0;
    var productname = "";
    var carttable = "";
    if(sessionStorage.getItem('cart')) {
        //get cart data & parse to array
        var cart = JSON.parse(sessionStorage.getItem('cart'));
        //get no of items in cart 
        items = cart.length;
        //loop over cart array
        for (var i = 0; i < items; i++){
            //convert each JSON product in array back into object
            var x = JSON.parse(cart[i]);
            //get property value of price
            price = parseFloat(x.price.split('$')[1]);
            productname = x.productname;
            //add price to total
            carttable += "<tr><td>" + productname + "</td><td>$" + price.toFixed(2) + "</td></tr>";
            total += price;
        }
        
    }
    //update total on website HTML
    document.getElementById("total").innerHTML = total.toFixed(2);
    //insert saved products to cart table
    document.getElementById("carttable").innerHTML = carttable;
    //update items in cart on website HTML
    document.getElementById("itemsquantity").innerHTML = items;
}
//user feedback on successful add
function addedToCart(pname) {
  var message = pname + " was added to the cart";
  var alerts = document.getElementById("alerts");
  alerts.innerHTML = message;
  if(!alerts.classList.contains("message")){
     alerts.classList.add("message");
  }
}
/* User Manually empty cart */
function emptyCart() {
    //remove cart session storage object & refresh cart totals
    if(sessionStorage.getItem('cart')){
        sessionStorage.removeItem('cart');
        updateCartTotal();
      //clear message and remove class style
      var alerts = document.getElementById("alerts");
      alerts.innerHTML = "";
      if(alerts.classList.contains("message")){
          alerts.classList.remove("message");
      }
    }
}
</script>
        




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