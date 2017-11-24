<?php
session_start();
$server='localhost'; 
$user='root'; 
$password=''; 



$con = mysqli_connect($server,$user,$password,"register") or die("Failed to connect to MySQL: " ); 
 

if(mysqli_connect_errno($con)) 
	{ 
		echo "Failed to connect to MySQL"; 
	}

 else {
 
 		checkdatabase($con); 
	 	
	 	}
$userName="";

function checkdatabase($con)
{
	if(!empty($_POST['uname'])) 
	 		{ 

	 		   
	 		    $userName = $_POST['uname']; 
	 			$pass = $_POST['psw']; 

	 			$query = mysqli_query($con,"SELECT * FROM websiteusers WHERE userName = '$userName' AND pass = '$pass'");
	 		 	$row = mysqli_fetch_array($query);

	 		 	if( !empty($row['userName']) )
	 		 	 { 	
					$_SESSION["user"] = $userName;
	 		 	}
	 		 
	 		 	
	 		 	else 
                  {  echo "<br>";
                    echo "<br>";
                    echo "<br>";
                    echo "<br>";
                    echo "<br>";
                    echo "<br>";
                   
                    
	 		 		echo "..........................................................SORRY... YOU ENTERED WRONG ID AND PASSWORD... PLEASE RETRY..................................................."; 
                      echo "<br>";
                      
                    echo "<br>";
                    echo "<br>";
                    echo "<br>";
                    echo "<br>";
                    echo "<br>";
                    echo "<br>";
                    echo "<br>";
                    echo "<br>";
					  echo"<a href='registration.php'>REGISTER NOW</a> ";
					  $_SESSION["user"] = "Login";
				 } 
	 		}
}
?>
<html>
    <title>Project</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<head>
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
    background-image: url("house.jpeg");
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
</style>
</head>
    <body>
    <div class="top">
      <div class="white wide padding card-2">
        <a href="Project.php" class="bar-item button">Home</a>
        <!-- Float links to the right. Hide them on small screens -->
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
    <h1 class="center wide large opac" style="color:white;background-color:black;width:500px;">BUY RENT SELL!</h1> 
    <header class="moveright">
    <a href="#contact"><img src="snip1.PNG" alt="Mountain View" hspace="100" style="width:288px;height:228px;padding-top:180px;" class="grow"></a>
    <a href="#contact"><img src="snip2.PNG" alt="Mountain View" hspace="50" style="width:288px;height:228px;" class="grow"></a>
    <a href="#contact"><img src="snip3.PNG" alt="Mountain View" hspace="60" style="width:288px;height:228px;" class="grow"></a>
    </header>
    </body>
    </html>