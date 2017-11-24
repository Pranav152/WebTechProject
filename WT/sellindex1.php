
<?php
session_start(); 
$server='localhost'; 
$user='root'; 
$password=''; 

$con = mysqli_connect($server,$user,$password,"sell1") or die("Failed to connect to MySQL: " ); 


if(mysqli_connect_errno($con)) 
	{ 
		echo "Failed to connect to MySQL"; 
	}

 else {
 		 
 		SignUp($con); 
	 	
	 	}


function NewUser($con) 
{  
	
} 
	 	
function SignUp($con) 
	 	{ 
	 		if(!empty($_POST['firstname']))
	 		{ 
	 		
                $Name = $_POST['firstname']; 
                $number = $_POST['lastname']; 
                $email = $_POST['location']; 
                $type= $_POST['type']; 
                $description= $_POST['description']; 
                
                    
                   $query = "INSERT INTO seller (first,last,location,type,description) VALUES ('$Name','$number','$email','$type','$description')"; 
                   $data = mysqli_query($con,$query);
                  
                   if($data)
                       {
                        
                       } 
                
                

            else
                {	
                    echo "SORRY...YOU ARE ALREADY REGISTERED USER...pls login :)"; 
                    echo"<br><br>";
                    echo "<a href='LOGIN.html'>Login</a>";
                }	
            
        } 
   
   } 
       

?>
     <html>
                 <head>
           
            <title>Buy</title>
        
         
            <style>
                      
                      body {
                        background-repeat: no-repeat;
                        background-size: cover;
                        background-attachment: fixed;
                    }
            
               table {
                        margin-top: 90px;
                        margin-left: 80px;
                        margin-right: 60px;
                    border-width: 10px;
                
                    }
            
                    tr {
                        background-color: cream;
                        border-radius: 10px;
                        border-color: black;
                        height:350px;
                        margin-bottom:200px;
                    }
            
                    td {
                        border-radius: 3px;
                        
                    }
            
                    tr:hover {
                    -webkit-transition: 0.3s;
            
                        box-shadow: 3px 3px 25px #5a5a5a;
                    }
            
                    img {
                        border-radius: 10px;   
                    }
                  
            
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
            input[type=text], select {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }
    
    input[type=submit] {
        width: 50%;
        background-color: red;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }
    
    input[type=submit]:hover {
        background-color: red;
    }
    
    .modal {
        display: none; 
        position: fixed; 
        z-index: 1; 
        padding-top: 100px; 
        padding-left:5%;
        left: 0;
        top: 0;
        width: 100%; 
        height: 100%; 
        overflow: auto; 
        background-color: rgba(0,0,0,0.4); /* Black w/ opacity */;
       
      
    }
    
    /* Modal Content */
    .modal-content {
        background-color: #fefefe;
        margin: auto;
        padding: 20px;
        border: 1px solid #888;
        width: 25%;
        height:53%;
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
        width: 100%;
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
     position: relative;
    top:200px;
    left:500px;
    }
    .wide {
        letter-spacing: 8px;
    }
    .large {
        font-size: 55px!important;
    }
    .body1 {
        
        background-image: url("house.jpeg");
        background-size: 100%;
        background-repeat: no-repeat;	
        text-align: center!important;
        position: absolute;
       top:300px;
       left:420px;
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
    .heading{
height:80px;background-color:black;font-size:55;color:white;border-radius:25px;
}
            </style>
        </head>
<body bgcolor="black">
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
<center>
<br><br><br>
<img src="sell.jpg" width="400px" height="325px">
<h1 style="color:white">Your Ad will be posted shortly.</h1>
</center>
</body>
</html>

 



