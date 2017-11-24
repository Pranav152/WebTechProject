<?php
session_start();
 ?>
<html>
    <head>
        <title>Contact</title>
        <meta name="viewport" content="width=device-width, initial-scale = 1.0">
        <style>
        .top {
    top: 0;
}
.white, .hover-white:hover {
    color: #000!important;
    background-color: #fff!important;
}
.bar .bar-item {
    padding: 8px 16px;
    float: left;
    width: auto;
    border: none;
    outline: none;
    display: block;
}
.btn, .button {
    border: none;
    display: inline-block;
    outline: 0;
    padding: 8px 16px;
    vertical-align: middle;
    overflow: hidden;
    text-decoration: none;
    color: inherit;
    background-color: inherit;
    text-align: center;
    cursor: pointer;
    white-space: nowrap;
}
.card, .card-2 {
    box-shadow: 0 2px 5px 0 rgba(0,0,0,0.16), 0 2px 10px 0 rgba(0,0,0,0.12);
}
.bar {
    width: 1000px;
    overflow: hidden;
}
.wide {
    letter-spacing: 4px;
}
html, body {
    font-family: Verdana,sans-serif;
    font-size: 20px;
    line-height: 1.5;
}
.padding {
    padding: 8px 16px!important;
}

.moveright{
     position: relative;
    left: 100px;
top:400px;

}
.opac{
opacity: 0.75;
}
h1, h2, h3, h4, h5, h6 {
    font-family: "Segoe UI",Arial,sans-serif;
    font-weight: 400px

}
.center {
    text-align: center!important;
 position: absolute;
top:250px;
left:500px;
}
.wide {
    letter-spacing: 8px;
}
.large {
    font-size: 55px!important;
}
body{
    background-image: url("plain.png");
    background-size: 100%;
    background-repeat: no-repeat;	
    position: relative;
  
}
.grow { transition: all .2s ease-in-out; }
.grow:hover { transform: scale(1.1); }

.dropbtn {
    background-color: rgb(252, 252, 252);
    color: black;
    padding: 8px 16px;
    font-size: 20px;
    border: none;
    cursor: pointer;
    letter-spacing: 6px;
}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
    display: block;
}

.dropdown:hover .dropbtn {
    background-color:#5b5e5b;
}
a:hover{background-color:#5b5e5b }
            .header1{
                background-color: black; 
                padding: 0%; 
                height: 200px;
                border: 2px solid black;
                border-radius:50px;
            }
            .font1{
                padding-top: 55px;
                font-family: Verdana, Geneva, Tahoma, sans-serif; 
                font-size: 55;

            }
            body{
                background-color: aliceblue;
            }
        </style>
    </head>
    <body>
    <div class="top">
        <div class="white wide padding card-2">
          <a href="Project.php" class="bar-item button">Home</a>
          
          <div class="dropdown white wide padding ">
            <button class="dropbtn" style="padding-right:15px;padding-left:5px;" >Buy</button>
            <div class="dropdown-content">
              <a href="Housebuy.php">House</a>
              <a href="Luxurybuy.php">Luxury</a>
              <a href="Flatbuy.php">Flats</a>
            </div>
          </div>
          <div class="dropdown">
            <button class="dropbtn">Rent</button>
            <div class="dropdown-content">
              <a href="houserent.php">House</a>
              <a href="Luxuryrent.php">Luxury</a>
              <a href="flatrent.php">Flats</a>
            </div>
        </div>
        <a href="sell.php" class="bar-item button">Sell	</a>
        <a href="contact.php" class="bar-item button">Contact	</a>
        <?php 
              echo" <a href='login.php' class='bar-item button' style='float: right;'>".'Logged in as '.$_SESSION['user']."</a>";
          ?>
        </div>
        <div class="header1">
            <div class="font1">
                <center style="color:white"><bold>Contact Us Here</bold></center>
            </div>
        </div>
        <br><br><br>
        <form action="contactindex.php" method='POST'>
        <div style="font-family: Verdana, Geneva, Tahoma, sans-serif;">
            <center>
                <h2>We value your feedback. Please fill the below form to make your future experiences better.<br><br></h2>
                <input  id="name" name="name" placeholder="    Name" type="text" style="height: 40px; width: 300px; border-radius:25px">
                &nbsp;&nbsp;
                <input id="email" name="email" placeholder="   Email" type="email" required style="height: 40px; width: 300px;border-radius:25px">
                <br><br><br><input type='text'  id="comments" name="comments" placeholder="   Comment"  style="border-radius:25px;width:800px;height:200px;"></textarea><br>
                <br><br><br><input name="submit"  type="submit" value="Send" style="background-color: black; width: 100px; height: 35px; border: 1px solid black;border-radius:25px;color:white">
            </center>
        </div>
        </form>
        <br><br><br><br><br>
        <hr>
        <div><center>
            <h3><p>Or contact us here and we'll get back to you within 48 hours</p></h3>
            <p>Bangalore,India</p>
            <p>+00 1515151515</p>
            <p>myemail@something.com</p>
        </center></div>
    </body>
</html>
