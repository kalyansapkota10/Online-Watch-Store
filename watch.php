<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>TimeKeepers</title>
   
</head>
<body onload="slider()">
    <div class="banner">
        <div class="slider" >
        <img src="img/watch4.jpg" id="slideimg">
        </div>
        <div class="overlay">
        <div class="navbar">
             <div class="menu" id="menu">
                <li><a href="#home" class="active-link">Home</a></li>
                <li><a href="#featured" class="nav_link">Featured</a></li>
                <li><a href="#products" class="nav_link ">Products</a></li>
                <li><a href="#new" class="nav_link">New</a></li>
                <li><a href="cart.php"><img src="img/cart1.png"></a></li>
                </div>
        </div>
         <img src="img/logo3.png" class="logo">
         <div class="lname">
            <span>TIMEKEEPERS</span><br><P>LUXURY WATCHES ONLINE</p>
         </div>
        <div class="content">
            <h1>Don't Miss The<br>Moments</h1>
            <h3>Set yourself apart from the realm of the ordinary & make your mark with a unique, stunning masterpiece.</h3>
            <h3>100% Authentic Timepieces</h3>
            <h2>Find Your Watch</h2>
            <div class="btn">
                <button type="button">SHOP NOW</button>
            </div>
        </div>
        </div>
    </div>
    <script>
        var slideimg=document.getElementById("slideimg");
        var images=new Array(
            "img/watch4.jpg",
            "img/watch3.jpg",
            "img/watch10.jpg"
        );
    var len=images.length;
    var i=0;
    function slider(){
        if(i>len-1){
        i=0;
        }
    slideimg.src=images[i];
    i++;
    setTimeout('slider()',3000);
    }
    </script>

    <!--FEATURED-->
<div class="featured_container" id="featured">
        <h2 class="featured_title">FEATURED</h2>
        <div class="featured_content">
        <form action="manage_cart.php" method="POST">
        <div class="featured_card">
            <span class="featured_tag">SALE</span>
            <img src="img/featured1.png">
            <li>JAZZMASTER</li>
            <h3>Rs,1050</h3>
            <button type="submit" class="featured_button" name="addtocart">
                ADD TO CART</button>
                <input type="hidden" name="item_name" value="JAZZMASTER">
                <input type="hidden" name="price" value="1050">
        </div>
        </form>
        <form action="manage_cart.php" method="POST">
        <div class="featured_card">
            <span class="featured_tag">SALE</span>
            <img src="img/featured2.png">
            <li>INGERSOLL</li>
            <h3>Rs,700</h3>
            <button type="submit" class="featured_button" name="addtocart">
                ADD TO CART</button>
                <input type="hidden" name="item_name" value="INGERSOLL">
                <input type="hidden" name="price" value="700">
        </div>
        </form>
        <form action="manage_cart.php" method="POST">
        <div class="featured_card">
            <span class="featured_tag">SALE</span>
            <img src="img/featured3.png">
            <li>ROSE GOLD</li>
            <h3>Rs,890</h3>
            <button type="submit" class="featured_button" name="addtocart">
                ADD TO CART</button>
                <input type="hidden" name="item_name" value="ROSE GOLD">
                <input type="hidden" name="price" value="890">
        </div>
        </form>
        </div>
</div>

<!--STORY-->
<section class="story_container">
    <h2 class="story_title">OUR STORY</h2>
    <div class="story_parts">
        <h1>Inspirational Watch of this year</h1>
        <h3>The lastest and modern watches of this year is available in various presentations in this store.<br>discover them now </h3>
        <button type="button" class="story_btn">DISCOVER</button>
    </div>
    <div class="story_content">
        <div class="story_img">
                <img src="img/story.png">
                </div>
    </div>
    
</section>

      <!--PRODUCTS-->
    <div class="product_container" id="products">
        <h2 class="product_title">PRODUCTS</h2>
        <div class="product_content">
        <form action="manage_cart.php" method="POST">
        <div class="product_card">
            <img src="img/product1.png">
             <li>SPIRIT ROSE</li>
             <h3>Rs,1500</h3>
             <button type="submit" class="product_button" name="addtocart">ADD TO CART</button>
             <input type="hidden" name="item_name" value="SPIRIT ROSE">
             <input type="hidden" name="price" value="1500">
        </div>
        </form>
        <form action="manage_cart.php" method="POST">
        <div class="product_card">
            <img src="img/product2.png">
             <li>KHAKI PILOT</li>
             <h3>Rs,1350</h3>
             <button type="submit" class="product_button" name="addtocart">ADD TO CART</button>
             <input type="hidden" name="item_name" value="KHAKI PILOT">
             <input type="hidden" name="price" value="1350">
        </div>
        </form>
        <form action="manage_cart.php" method="POST">
        <div class="product_card">
            <img src="img/product3.png">
            <li>JUBILEE BLACK</li>
            <h3>Rs,870</h3>
            <button type="submit" class="product_button" name="addtocart">ADD TO CART</button>
            <input type="hidden" name="item_name" value="JUBILEE BLACK">
            <input type="hidden" name="price" value="870">
        </div>
        </form>
        <form action="manage_cart.php" method="POST">
        <div class="product_card">
            <img src="img/product4.png">
            <li>FOSIL ME3</li>
            <h3>Rs,650</h3>
            <button type="submit" class="product_button" name="addtocart">ADD TO CART</button>
            <input type="hidden" name="item_name" value="FOSIL ME3">
            <input type="hidden" name="price" value="650">
        </div>
        </form>
        <form action="manage_cart.php" method="POST">
        <div class="product_card">
            <img src="img/product5.png">
            <li>DUCHEN</li>
            <h3>Rs,950</h3>
            <button type="submit" class="product_button" name="addtocart">ADD TO CART</button>
            <input type="hidden" name="item_name" value="DUCHEN">
            <input type="hidden" name="price" value="950">
        </div>
        </form>
        </div>
    </div>

    <!--NEW-->
    <div class="new_container" id="new">
        <h2 class="new_title">NEW ARRIVALS</h2>
        <div class="new_content">
                    <form action="manage_cart.php" method="POST">
                    <div class="new_card">
                        <span class="new_tag">NEW</span>
                        <img src="img/new1.png">
                        <li>LONGINES ROSE</li>
                        <h3>Rs,980</h3>
                        <button type="submit" class="new_button" name="addtocart">
                            ADD TO CART</button>
                        <input type="hidden" name="item_name" value="LONGINES ROSE">
                        <input type="hidden" name="price" value="980">
                    </div>
                   </form>
                    <form action="manage_cart.php" method="POST">
                    <div class="new_card">
                        <span class="new_tag">NEW</span>
                        <img src="img/new2.png">
                        <li>HAMILON</li>
                        <h3>Rs,1150</h3>
                        <button type="submit" class="new_button" name="addtocart">
                            ADD TO CART</button>
                        <input type="hidden" name="item_name" value="HAMILON">
                        <input type="hidden" name="price" value="1150">    
                    </div>
                    </form>
                    <form action="manage_cart.php" method="POST">
                    <div class="new_card">
                        <span class="new_tag">NEW</span>
                        <img src="img/new3.png">
                        <li>DREYFUSS GOLD</li>
                        <h3>Rs,750</h3>
                        <button type="submit" class="new_button" name="addtocart">
                            ADD TO CART</button>
                        <input type="hidden" name="item_name" value="DREYFUSS">
                        <input type="hidden" name="price" value="750">
                    </div>
                    </form>
        </div>
    </div>

<!--Footer-->
<div class="footer_container">
    <div class="footer_content">
        <h2 class="footer_title">Our Information</h2>
        <ul class="footer_list">
            <li><i class='bx bxs-info-circle'></i><a href="#">TimeKeepers.com</a></li>
            <li><i class='bx bxs-phone'></i>123-456-789</li>
            <li><i class='bx bx-current-location'></i>Balaju, Kathmandu</li>
        </ul>
    </div>
    <div class="footer_content">
        <h2 class="footer_title">About Us</h2>
        <ul class="footer_links">
            <li><a href="#" class="footer_link">Support Center</a></li>
            <li><a href="#" class="footer_link">Customer Support</a></li>
            <li><a href="#" class="footer_link">About us</a></li>
            <li><a href="#" class="footer_link">Copyright</a></li> 
        </ul>
    </div>
    <div class="footer_content">
        <h2 class="footer_title">Pricing</h2>
        <ul class="footer_links">
            <li><a href="#" class="footer_link">Overview</a></li>
            <li><a href="#" class="footer_link">Premium Plans</a></li>
            <li><a href="#" class="footer_link">Affiliate Program</a></li>
            <li><a href="#" class="footer_link">Promotions</a></li> 
        </ul>
    </div>
    <div class="footer_content">
        <h2 class="footer_title">Legal</h2>
        <ul class="footer_links">
            <li><a href="#" class="footer_link">Terms & Conditions</a></li>
            <li><a href="#" class="footer_link">Privacy Policy</a></li>
            <li><a href="#" class="footer_link">Terms of use</a></li>
        </ul>
    </div>
    <div class="footer_content" >
        <h2 class="footer_title">Contact Us</h2>
            <form action="">
                <input type="email" class="mail" placeholder="Email" required><br>
                <input type="text" class="mesg" placeholder="Your Message" required><br>
                <button type="submit" class="form_btn1">SEND</button>
            </form>
    </div>
</div>
<div class="footer_copy">
    <span>&#169;2023 TimeKeepers Luxury Watches Online Kathmandu,Nepal.All rights reserved</span>
    <a href="https://www.facebook.com/" target="_blank" class="social_link">
        <i class='bx bxl-facebook'></i>
       </a>
       <a href="https://www.twitter.com/" target="_blank" class="social_link">
        <i class='bx bxl-twitter'></i>
       </a>
       <a href="https://www.instagram.com/" target="_blank" class="social_link">
        <i class='bx bxl-instagram'></i>
       </a>
</div>
</a>
</body>
</html>