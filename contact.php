<!DOCTYPE html>
<html>
	<head>
		<title>Contact Coffee Bean</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="styles\myStyles.css">
		<link rel="stylesheet" href="styles\contactStyles.css">
		<link rel="stylesheet" href="styles\font-awesome.min.css">
	</head>
	
	<body>
		<!-- <header></header> -->
		
		<nav>
			<div><img id="logo" src="Images\logo2.jpg"></div>
			<br>
		
			<ul>
				<li><a href="index.php"> &nbsp home</a></li>
				<li><a href="storeLocation.html"> &nbsp store location</a></li>
				<li><a href="menu.html"> &nbsp our menu</a></li>
				<li><a href="coffee.html">&nbsp coffee</a></li>
				<!-- <li><a href="essentials.html"> &nbsp essentials</a></li> -->	
				<li><a href="contact.php"> &nbsp contact us</a></li>
				<li><a href="about.html"> &nbsp about us</a></li>
			</ul>
		</nav>
		
		<section>
			<h2 class="customerRelationsHeading">customer relationship</h2>
			<p class="customerRelationsContent">Hello!<br>Got a new idea or new recipe to improve our service.<br>Great! tell us.We always love to hear from you.</p>
			
			<form action="includes/signup.inc.php" method="POST">
				<table class="customerRelations" align="center">
					<tr>
						<td class="customerRelationsData">Full Name</td>
						<td><input type="text" name="fullname"></td>
					</tr>
					<tr>
						<td class="customerRelationsData">Email</td>
						<td><input type="email" name="email"></td>
					</tr>
					<tr>
						<td class="customerRelationsData">Telephone </td>
						<td><input type="text" name="telephone"></td>
					</tr>
					<tr>
						<td class="customerRelationsData">Idea/Comment </td>
						<td><textarea name="idea" cols="16" rows="3"></textarea></td>
					</tr>
					
					<tr id="submitButton">
						<td colspan="2">
                          <!--  <input type="submit" value="Submit" name="submit">  -->

                            <button type="submit" name="submit">Submit</button>
                        </td>
					</tr>
				</table>
			</form>
			
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
							<input id="email" type="email" name="email" placeholder="Enter Email">
							
							<button id="signup" style="background-color:rgb(26, 13, 0); color:white; text-decoration:none; border:none; outline: none; cursor:pointer; padding:5px 10px 5px 10px; width:90px;">
								Sign up
							</button>
						</form>	
					</div>
				</div>
				
			</div>
			
			<div>
				<img src="Images\coffeebeans.jpg" style="width:100%;height:280px;position:relative;bottom:-5px">
				<div id="footerbottom">&copy2018 All Rights Reserved</div>
			</div>
			
		</footer>
	</body>
</html>