<!DOCTYPE html>
<html>
	<head>
		<title>Welcome to Cafe Coffee Bean!</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="styles\myStylesforHomePage.css">
		<link rel="stylesheet" href="styles\font-awesome.min.css">
	</head>
	
	<body>
		<header></header>
		
		<nav>
			<div><img id="logo" src="Images\logo.jpg" style="height:170px; width:170px; margin-left:35px; margin-top:20px"></div>
			<br>
		
			<ul>
			<!--	<li><a href="#home">&#10095 &nbsp home</a></li> -->
				<li><a href="storeLocation.html">&#10095 &nbsp store location</a></li>
				<li><a href="menu.html">&#10095 &nbsp our menu</a></li>
				<li><a href="coffee.html">&#10095 &nbsp coffee</a></li>
			<!--	<li><a href="essentials.html">&#10095 &nbsp essentials</a></li> -->
				<li><a href="contact.php">&#10095 &nbsp contact us</a></li>
				<li><a href="about.html">&#10095 &nbsp about us</a></li>
			</ul>
		</nav>
		
		<section>
			<div class="slideShowContainer">
				<div class="mySlides fade">
					 <img src="Images\img1.png">
					 <h1>Every <br><span style="font-size:55px">Coffee Bean</span><br>has a <br>delicious story!</h1>
					 <button class="shop">
						<a href="coffee.html">Shop</a>
					</button>
				</div>

				<div class="mySlides fade">
					 <img src="Images\img2.jpg">
					 <h1>Every <br><span style="font-size:55px">Coffee Bean</span><br>has a <br>delicious story!</h1>
					  <button class="shop">
						<a href="coffee.html">Shop</a>
					</button>
				</div>
				
				<div class="mySlides fade">
					 <img src="Images\img3.jpg">
					 <h1>Every <br><span style="font-size:55px">Coffee Bean</span><br>has a <br>delicious story!</h1>
					  <button class="shop">
						<a href="coffee.html">Shop</a>
					</button>
				</div>
				
				<div class="mySlides fade">
					 <img src="Images\img4.jpg">
					 <h1>Every <br><span style="font-size:55px">Coffee Bean</span><br>has a <br>delicious story!</h1>
					  <button class="shop">
						<a href="coffee.html">Shop</a>
					</button>
				</div>
				
				<div class="mySlides fade">
					 <img src="Images\img5.jpg">
					 <h1>Every <br><span style="font-size:55px">Coffee Bean</span><br>has a <br>delicious story!</h1>
					  <button class="shop">
						<a href="coffee.html">Shop</a>
					</button>
				</div>
			</div>
			<br>

			<div style="text-align:center">
			  <span class="dot"></span> 
			  <span class="dot"></span> 
			  <span class="dot"></span> 
			  <span class="dot"></span> 
			  <span class="dot"></span> 
			</div>
		</section>
		
		<section id="about">
			<h2 class="heading">cafe coffee bean!</h2>
			
			<p class="content">
				Welcome to the website of the Cafe Coffee Bean in Sri Lanka.<br>
				Amazing Drinks, Made by Amazing People for Good People Seeking Great Company in a Fun Space.Our amazing staff strive
				to carefully craft our drinks and food so you can experience happiness in every sip or bite. 
			</p>		
		</section>
		
		<footer>
			<div class="container">
				<div class="containerColumn">
					<h3>about us</h3>
					<div>
						<ul>
							<li><a href="#tags" alt="tags">Tags</a></li>
							<li><a href="#support" alt="support">Support</a></li>
							<li><a href="#terms" alt="terms">Terms & conditions</a></li>
							<li><a href="#privacyPolicy" alt="privacyPolicy">Privacy policy</a></li>
							<li><a href="#copyrightNotifications" alt="copyrightNotifications">Copyright notifications</a></li>
						</ul>
					</div>
				</div>
				
				<div class="containerColumn">
					<h3>contact us</h3>
					
					<div class="contact">
						<p>Address:<br>No.61,<br>Dalada Veediya,<br>Kandy,<br>Sri Lanka.</p>
					</div>
					
					<div class="contact">
						<p>Telephone:<br>0812503850</p>
					</div>
					
					<div class="contact">
						<p>Fax:<br>0812503850</p>
					</div>
				
					<div class="contact">
						<p>Email:<br>cafecoffeebean@gmail.com</p>
					</div>
					
				</div>
				
				<div class="containerColumn">
					<h3>follow us</h3>
					<div>
						<ul>
							<li>
								<a href="#">
									<img class="fa fa-facebook" src="Images\Facebook.png" style="width:40px; height:40px; text-align:center; border-radius:50%; box-sizing:border-box;">
								</a>
							</li>
							
							<li>
								<a href="#">
									<img class="fa fa-twitter" src="Images\twitter.png" style="width:40px; height:40px; text-align:center; border-radius:50%; box-sizing:border-box;">
								</a>
							</li>
							
							<li>
								<a href="#">
									<img class="fa fa-google" src="Images\google.jpg" style="width:40px; height:40px; text-align:center; border-radius:50%; box-sizing:border-box;">
								</a>
							</li>
							
							<li>
								<a href="#">
									<img class="fa fa-youtube" src="Images\youtube.png" style="width:40px; height:40px; text-align:center; border-radius:50%; box-sizing:border-box;">
								</a>
							</li>
						</ul>
					</div>
				</div>
				
				<div class="containerColumn">
					<h3>newsletter</h3>
					<div class="newsletter">
						<p>Sign up for the newsletter and be the first to get the most of news, videos, product updates and more. 
						You can unsubscribe at any time.</p>
					
						<form>
							<input type="email" name="email" id="email" placeholder="Enter Email">
							<button id="signup">Sign up</button>
						</form>	
					</div>
				</div>
				
			</div>
			
			<div>
				<img src="Images\coffeebeans.jpg" style="width:100%;height:280px">
				<div id="footerbottom">&copy2018 All Rights Reserved</div>
			</div>
			
		</footer>
		
		<script src="javaScriptFiles\homepage.js"></script>

	</body>
</html> 
