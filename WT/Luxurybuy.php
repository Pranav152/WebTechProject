<?php
session_start(); 
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
        background-color: rgba(0,0,0,0.4); 
       
      
    }
    

    .modal-content {
        background-color: #fefefe;
        margin: auto;
        padding: 20px;
        border: 1px solid #888;
        width: 25%;
        height:53%;
    }
    
    
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
        <body background="plain3.png">
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
                    <center><p class="heading">Buy</p></center>
            <table >
                <tr>
                    <td>
                           <img src="villa.jpg" width="325px" height="250px">	
                        <h3>Builder:Mantri<br><h3>Price: &#8377 2.3Cr</h3>
                    </td>
        <td width="1500px" valign="top" ><h2 align="center">4 BHK Villa</h2><br /><h3 style="padding-left:200px">Society:Bannerghatta</h3><h3 style="padding-left:200px;padding-top:2px">Area:4000sqft</h3><h3 style="padding-left:200px;padding-top:2px">Status:Ready to move in</h3><h3 style="padding-left:200px;padding-top:2px;padding-bottom:20px">Details:4 bath |Furnished| 1 car Parking</h3><center><button id='myBtn' style="padding-top:2px;background-color: black; width: 150px; height: 35px; border: 1px solid black;border-radius:25px;color:white">Contact Builder</button></center></td></tr>
         <tr>
                    <td>
                           <img src="alanya.jpg" width="325px" height="250px">	
                        <h3>Builder:Alanya Constructions<br><br>Price: &#8377 3.3Cr</h3>
                    </td>
        <td width="1500px" valign="top" ><h2 align="center">4 BHK Villa</h2><br /><h3 style="padding-left:200px">Society:Bannerghatta</h3><h3 style="padding-left:200px;padding-top:2px">Area:5000sqft</h3><h3 style="padding-left:200px;padding-top:2px">Status:Ready to move in</h3><h3 style="padding-left:200px;padding-top:2px;padding-bottom:20px">Details:4 bath |Furnished| 1 car Parking</h3><center><button id='myBtn1' style="padding-top:2px;background-color: black; width: 150px; height: 35px; border: 1px solid black;border-radius:25px;color:white">Contact Builder</button></center></td></tr>
         <tr>
                    <td>
                           <img src="mufti.jpg" width="325px" height="250px">	
                        <h3>Builder:Mufti Constructions<br><br>Price: &#8377 4.3Cr</h3>
                    </td>
        <td width="1500px" valign="top" ><h2 align="center">4 BHK Villa</h2><br /><h3 style="padding-left:200px">Society:Bannerghatta</h3><h3 style="padding-left:200px;padding-top:2px">Area:7000sqft</h3><h3 style="padding-left:200px;padding-top:2px">Status:Ready to move in</h3><h3 style="padding-left:200px;padding-top:2px;padding-bottom:20px">Details:4 bath |Furnished| 1 car Parking</h3><center><button id='myBtn2' style="padding-top:2px;background-color: black; width: 150px; height: 35px; border: 1px solid black;border-radius:25px;color:white">Contact Builder</button></center></td></tr>
         <tr>
                    <td>
                           <img src="thaivasa.jpg" width="325px" height="250px">	
                        <h3>Builder:Thaivasa Constructions<br><br>Price: &#8377 2.8Cr</h3>
                    </td>
        <td width="1500px" valign="top" ><h2 align="center">4 BHK Villa</h2><br /><h3 style="padding-left:200px">Society:Bannerghatta</h3><h3 style="padding-left:200px;padding-top:2px">Area:6000sqft</h3><h3 style="padding-left:200px;padding-top:2px">Status:Ready to move in</h3><h3 style="padding-left:200px;padding-top:2px;padding-bottom:20px">Details:4 bath |Furnished| 1 car Parking</h3><center><button id='myBtn3' style="padding-top:2px;background-color: black; width: 150px; height: 35px; border: 1px solid black;border-radius:25px;color:white">Contact Builder</button></center></td></tr>
         <tr>
                    <td>
                           <img src="ss.jpg" width="325px" height="250px">	
                        <h3>Builder:Mantri<br><br>Price: &#8377 3.6Cr</h3>
                    </td>
        <td width="1500px" valign="top" ><h2 align="center">4 BHK Villa</h2><br /><h3 style="padding-left:200px">Society:Bannerghatta</h3><h3 style="padding-left:200px;padding-top:2px">Area:4500sqft</h3><h3 style="padding-left:200px;padding-top:2px">Status:Ready to move in</h3><h3 style="padding-left:200px;padding-top:2px;padding-bottom:20px">Details:4 bath |Furnished| 1 car Parking</h3><center><button id='myBtn4' style="padding-top:2px;background-color: black; width: 150px; height: 35px; border: 1px solid black;border-radius:25px;color:white">Contact Builder</button></center></td></tr>
         <tr>
                    <td>
                           <img src="aa.jpg" width="325px" height="250px">	
                        <h3>Builder:Mantri<br><br>Price: &#8377 4.4Cr</h3>
                    </td>
        <td width="1500px" valign="top" ><h2 align="center">4 BHK Villa</h2><br /><h3 style="padding-left:200px">Society:Bannerghatta</h3><h3 style="padding-left:200px;padding-top:2px">Area:5000sqft</h3><h3 style="padding-left:200px;padding-top:2px">Status:Ready to move in</h3><h3 style="padding-left:200px;padding-top:2px;padding-bottom:20px">Details:4 bath |Furnished| 1 car Parking</h3><center><button id='myBtn5' style="padding-top:2px;background-color: black; width: 150px; height: 35px; border: 1px solid black;border-radius:25px;color:white">Contact Builder</button></center></td></tr>
         <tr>
                    <td>
                           <img src="ll.jpg" width="325px" height="250px">	
                        <h3>Builder:Mantri<br><br>Price: &#8377 4.2Cr</h3>
                    </td>
        <td width="1500px" valign="top" ><h2 align="center">4 BHK Villa</h2><br /><h3 style="padding-left:200px">Society:Bannerghatta</h3><h3 style="padding-left:200px;padding-top:2px">Area:4400sqft</h3><h3 style="padding-left:200px;padding-top:2px">Status:Ready to move in</h3><h3 style="padding-left:200px;padding-top:2px;padding-bottom:20px">Details:4 bath |Furnished| 1 car Parking</h3><center><button id='myBtn6' style="padding-top:2px;background-color: black; width: 150px; height: 35px; border: 1px solid black;border-radius:25px;color:white">Contact Builder</button></center></td></tr>
        
        </table>
        





<div id="myModal" class="modal">

  <div class="modal-content">
    <span class="close">&times;</span>
    
            <div>
            <form action="insert.php" method='POST'>
            <label for="fname">First Name</label>
            <input type="text" id="fname" name="name" placeholder="Your name">
                  
                      <label for="lname">Mobile No.</label>
                      <input type="text" id="lname" name="Mobile" placeholder="Mobile No.">

                      <label for="lname">Email</label>
                      <input type="text" id="gname" name="Email" placeholder="Email">
                  
                      <label for="country">Interested In</label>
                      <select id="country" name="country">
                        <option value="Immediate Purchase">Immediate Purchase</option>
                        <option value="site visit">Site visit</option>
                      </select>
                     <center> <input type="submit" value="Contact Now!"></center>
                    </form>
                  </div>
        
  </div>

</div>

<script>
// Get the modal
var modal = document.getElementById('myModal');

var btn = document.getElementById("myBtn");
var btn1 = document.getElementById("myBtn1");
var btn2 = document.getElementById("myBtn2");
var btn3 = document.getElementById("myBtn3");
var btn4 = document.getElementById("myBtn4");
var btn5 = document.getElementById("myBtn5");
var btn6 = document.getElementById("myBtn6");


var span = document.getElementsByClassName("close")[0];


btn.onclick = function() {
    modal.style.display = "block";
}
btn1.onclick = function() {
    modal.style.display = "block";
}
btn2.onclick = function() {
    modal.style.display = "block";
}
btn3.onclick = function() {
    modal.style.display = "block";
}
btn4.onclick = function() {
    modal.style.display = "block";
}
btn5.onclick = function() {
    modal.style.display = "block";
}
btn6.onclick = function() {
    modal.style.display = "block";
}



span.onclick = function() {
    modal.style.display = "none";
}


window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
        </body>
        </html>
        