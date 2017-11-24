<?php
session_start();
 ?>
<html>

<head>
  <title>Login</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
<style>body {
	color: #000;
	font: 14px Arial;
	margin: 0 auto;
	padding: 0;
	position: relative;
}
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
#username { background-position: 10px 10px !important }
#password { background-position: 10px -53px !important }
#content form input[type="submit"] {
	background: rgb(254,231,154);
	background: -moz-linear-gradient(top,  rgba(254,231,154,1) 0%, rgba(254,193,81,1) 100%);
	background: -webkit-linear-gradient(top,  rgba(254,231,154,1) 0%,rgba(254,193,81,1) 100%);
	background: -o-linear-gradient(top,  rgba(254,231,154,1) 0%,rgba(254,193,81,1) 100%);
	background: -ms-linear-gradient(top,  rgba(254,231,154,1) 0%,rgba(254,193,81,1) 100%);
	background: linear-gradient(top,  rgba(254,231,154,1) 0%,rgba(254,193,81,1) 100%);
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#fee79a', endColorstr='#fec151',GradientType=0 );
	-webkit-border-radius: 30px;
	-moz-border-radius: 30px;
	-ms-border-radius: 30px;
	-o-border-radius: 30px;
	border-radius: 30px;
	-webkit-box-shadow: 0 1px 0 rgba(255,255,255,0.8) inset;
	-moz-box-shadow: 0 1px 0 rgba(255,255,255,0.8) inset;
	-ms-box-shadow: 0 1px 0 rgba(255,255,255,0.8) inset;
	-o-box-shadow: 0 1px 0 rgba(255,255,255,0.8) inset;
	box-shadow: 0 1px 0 rgba(255,255,255,0.8) inset;
	border: 1px solid #D69E31;
	color: #85592e;
	cursor: pointer;
	float: left;
	font: bold 15px Helvetica, Arial, sans-serif;
	height: 35px;
	margin: 20px 0 35px 15px;
	position: relative;
	text-shadow: 0 1px 0 rgba(255,255,255,0.5);
	width: 120px;
}
#content form input[type="submit"]:hover {
	background: rgb(254,193,81);
	background: -moz-linear-gradient(top,  rgba(254,193,81,1) 0%, rgba(254,231,154,1) 100%);
	background: -webkit-linear-gradient(top,  rgba(254,193,81,1) 0%,rgba(254,231,154,1) 100%);
	background: -o-linear-gradient(top,  rgba(254,193,81,1) 0%,rgba(254,231,154,1) 100%);
	background: -ms-linear-gradient(top,  rgba(254,193,81,1) 0%,rgba(254,231,154,1) 100%);
	background: linear-gradient(top,  rgba(254,193,81,1) 0%,rgba(254,231,154,1) 100%);
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#fec151', endColorstr='#fee79a',GradientType=0 );
}
#content form input[type="text"],
#content form input[type="password"] {
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	-ms-border-radius: 3px;
	-o-border-radius: 3px;
	border-radius: 3px;
	-webkit-box-shadow: 0 1px 0 #fff, 0 -2px 5px rgba(0,0,0,0.08) inset;
	-moz-box-shadow: 0 1px 0 #fff, 0 -2px 5px rgba(0,0,0,0.08) inset;
	-ms-box-shadow: 0 1px 0 #fff, 0 -2px 5px rgba(0,0,0,0.08) inset;
	-o-box-shadow: 0 1px 0 #fff, 0 -2px 5px rgba(0,0,0,0.08) inset;
	box-shadow: 0 1px 0 #fff, 0 -2px 5px rgba(0,0,0,0.08) inset;
	-webkit-transition: all 0.5s ease;
	-moz-transition: all 0.5s ease;
	-ms-transition: all 0.5s ease;
	-o-transition: all 0.5s ease;
	transition: all 0.5s ease;
	background: #eae7e7 url(https://cssdeck.com/uploads/media/items/8/8bcLQqF.png) no-repeat;
	border: 1px solid #c8c8c8;
	color: #777;
	font: 13px Helvetica, Arial, sans-serif;
	margin: 0 0 10px;
	padding: 15px 10px 15px 40px;
	width: 80%;
}
h1{ font-size:28px;}
h2{ font-size:26px;}
h3{ font-size:18px;}
h4{ font-size:16px;}
h5{ font-size:14px;}
h6{ font-size:12px;}
h1,h2,h3,h4,h5,h6{ color:#563D64;}
small{ font-size:10px;}
b, strong{ font-weight:bold;}
a{ text-decoration: none; }
.left { float:left; }
.right { float:right; }
.alignleft { float: left; margin-right: 15px; }
.alignright { float: right; margin-left: 15px; }
.clearfix:after,
form:after {
	content: ".";
	display: block;
	height: 0;
	clear: both;
	visibility: hidden;
}
.container { margin: 25px auto; position: relative; width: 900px; }
#content {
	background: #f9f9f9;
	background: -moz-linear-gradient(top,  rgba(248,248,248,1) 0%, rgba(249,249,249,1) 100%);
	background: -webkit-linear-gradient(top,  rgba(248,248,248,1) 0%,rgba(249,249,249,1) 100%);
	background: -o-linear-gradient(top,  rgba(248,248,248,1) 0%,rgba(249,249,249,1) 100%);
	background: -ms-linear-gradient(top,  rgba(248,248,248,1) 0%,rgba(249,249,249,1) 100%);
	background: linear-gradient(top,  rgba(248,248,248,1) 0%,rgba(249,249,249,1) 100%);
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f8f8f8', endColorstr='#f9f9f9',GradientType=0 );
	-webkit-box-shadow: 0 1px 0 #fff inset;
	-moz-box-shadow: 0 1px 0 #fff inset;
	-ms-box-shadow: 0 1px 0 #fff inset;
	-o-box-shadow: 0 1px 0 #fff inset;
	box-shadow: 0 1px 0 #fff inset;
	border: 1px solid #c4c6ca;
	margin: 0 auto;
	padding: 25px 0 0;
	position: relative;
	text-align: center;
	text-shadow: 0 1px 0 #fff;
	width: 400px;
}
#content h1 {
	color: #7E7E7E;
	font: bold 25px Helvetica, Arial, sans-serif;
	letter-spacing: -0.05em;
	line-height: 20px;
	margin: 10px 0 30px;
}
#content h1:before,
#content h1:after {
	content: "";
	height: 1px;
	position: absolute;
	top: 10px;
	width: 27%;
}
#content h1:after {
	background: rgb(126,126,126);
	background: -moz-linear-gradient(left,  rgba(126,126,126,1) 0%, rgba(255,255,255,1) 100%);
	background: -webkit-linear-gradient(left,  rgba(126,126,126,1) 0%,rgba(255,255,255,1) 100%);
	background: -o-linear-gradient(left,  rgba(126,126,126,1) 0%,rgba(255,255,255,1) 100%);
	background: -ms-linear-gradient(left,  rgba(126,126,126,1) 0%,rgba(255,255,255,1) 100%);
	background: linear-gradient(left,  rgba(126,126,126,1) 0%,rgba(255,255,255,1) 100%);
    right: 0;
}
#content h1:before {
	background: rgb(126,126,126);
	background: -moz-linear-gradient(right,  rgba(126,126,126,1) 0%, rgba(255,255,255,1) 100%);
	background: -webkit-linear-gradient(right,  rgba(126,126,126,1) 0%,rgba(255,255,255,1) 100%);
	background: -o-linear-gradient(right,  rgba(126,126,126,1) 0%,rgba(255,255,255,1) 100%);
	background: -ms-linear-gradient(right,  rgba(126,126,126,1) 0%,rgba(255,255,255,1) 100%);
	background: linear-gradient(right,  rgba(126,126,126,1) 0%,rgba(255,255,255,1) 100%);
    left: 0;
}
#content:after,
#content:before {
	background: #f9f9f9;
	background: -moz-linear-gradient(top,  rgba(248,248,248,1) 0%, rgba(249,249,249,1) 100%);
	background: -webkit-linear-gradient(top,  rgba(248,248,248,1) 0%,rgba(249,249,249,1) 100%);
	background: -o-linear-gradient(top,  rgba(248,248,248,1) 0%,rgba(249,249,249,1) 100%);
	background: -ms-linear-gradient(top,  rgba(248,248,248,1) 0%,rgba(249,249,249,1) 100%);
	background: linear-gradient(top,  rgba(248,248,248,1) 0%,rgba(249,249,249,1) 100%);
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f8f8f8', endColorstr='#f9f9f9',GradientType=0 );
	border: 1px solid #c4c6ca;
	content: "";
	display: block;
	height: 100%;
	left: -1px;
	position: absolute;
	width: 100%;
}
#content:after {
	-webkit-transform: rotate(2deg);
	-moz-transform: rotate(2deg);
	-ms-transform: rotate(2deg);
	-o-transform: rotate(2deg);
	transform: rotate(2deg);
	top: 0;
	z-index: -1;
}
#content:before {
	-webkit-transform: rotate(-3deg);
	-moz-transform: rotate(-3deg);
	-ms-transform: rotate(-3deg);
	-o-transform: rotate(-3deg);
	transform: rotate(-3deg);
	top: 0;
	z-index: -2;
}
#username { background-position: 10px 10px !important }
#password { background-position: 10px -53px !important }
#content form input[type="text"]:focus,
#content form input[type="password"]:focus {
	-webkit-box-shadow: 0 0 2px #ed1c24 inset;
	-moz-box-shadow: 0 0 2px #ed1c24 inset;
	-ms-box-shadow: 0 0 2px #ed1c24 inset;
	-o-box-shadow: 0 0 2px #ed1c24 inset;
	box-shadow: 0 0 2px #ed1c24 inset;
	background-color: #fff;
	border: 1px solid #ed1c24;
	outline: none;
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
  <body background="house.jpeg"> 
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
  </div>
<div class="container" style="padding-top:200px">
	<section id="content">
			<form action="loggedin.php" method="POST" name="login">
			<h1>Login</h1>
			<div>
					<input type="text" name="uname" placeholder="Username" required />
			</div>
			<div>
					<input type="password" name="psw" placeholder="Password" required />
			</div>
			<div>
					<input name="submit" type="submit" value="Login" />
					</div></form>
					<p>Not registered yet? <a href='registration.php'>Register Here</a></p>
			</div>
		
	</section>
</div>
</center>
</body>
  
    <script src="js/index.js"></script>
</body>
</html>
