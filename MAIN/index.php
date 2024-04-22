<!DOCTYPE html>
<html>

<head>
	<link rel="shortcut icon" type="png" href="./images/projects/LOGO.png">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Comaptible" content="IE=edge">
	<title>Learn Science</title>
	<meta name="desciption" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript" src="script.js"></script>
	<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
	<script>
		$(window).on('scroll', function () {
			if ($(window).scrollTop()) {
				$('nav').addClass('black');
			} else {
				$('nav').removeClass('black');
			}
		})
	</script>
</head>
<!-- Start of LiveChat (www.livechat.com) code -->
<script>
	window.__lc = window.__lc || {};
	window.__lc.license = 17580576;
	; (function (n, t, c) { function i(n) { return e._h ? e._h.apply(null, n) : e._q.push(n) } var e = { _q: [], _h: null, _v: "2.0", on: function () { i(["on", c.call(arguments)]) }, once: function () { i(["once", c.call(arguments)]) }, off: function () { i(["off", c.call(arguments)]) }, get: function () { if (!e._h) throw new Error("[LiveChatWidget] You can't use getters before load."); return i(["get", c.call(arguments)]) }, call: function () { i(["call", c.call(arguments)]) }, init: function () { var n = t.createElement("script"); n.async = !0, n.type = "text/javascript", n.src = "https://cdn.livechatinc.com/tracking.js", t.head.appendChild(n) } }; !n.__lc.asyncInit && e.init(), n.LiveChatWidget = n.LiveChatWidget || e }(window, document, [].slice))
</script>
<noscript><a href="https://www.livechat.com/chat-with/17580576/" rel="nofollow">Chat with us</a>, powered by <a
		href="https://www.livechat.com/?welcome" rel="noopener nofollow" target="_blank">LiveChat</a></noscript>
<!-- End of LiveChat code -->

<body>
	<!-- Navigation Bar -->
	<header id="header">
		<nav>
			<?php
			session_start();
			if (isset($_SESSION['user_id'])) {
				// User is logged in, show the welcome message
				echo '<a class="get-started" href="../login/home.php">Welcome, ' . $_SESSION['username'] . '</a>';
			} else {
				// User is not logged in, show the Login button
				echo '<a class="get-started" href="../login/register.php">Login</a>';
			}
			?>
			<div class="logo"><img src="../images/projects/LOGO.png" alt="logo"></div>
			<ul>
				<li><a class="active" href="">Home</a></li>
				<li><a href="#about_section">About-Us</a></li>
				<li><a href="#team_section">Team</a></li>
				<li><a href="#services_section">Study Materials</a></li>
				<li><a href="#contactus_section">Contact</a></li>
			</ul>
			<!-- <div class="srch"><input type="text" class="search" placeholder="Search here..."><img src="images/icon/search.png" alt="search" onclick=slide()></div> -->
			<a class="get-started" href="../login/register.php">Login</a>
			<img src="images/icon/menu.png" class="menu" onclick="sideMenu(0)" alt="menu">
		</nav>
		<div class="head-container">
			<div class="quote">
				<p>Your ultimate destination for comprehensive board exam preparation
				<h5>for 10th and
					12th-grade students.
				</h5>
			</div>
			<div class="svg-image">
				<img src="../images/extra/svg1.png" alt="svg">
			</div>
		</div>
		<div class="side-menu" id="side-menu">
			<div class="close" onclick="sideMenu(1)"><img src="images/icon/close.png" alt=""></div>
			<div class="user">
				<img src="../images/projects/1st logo.png" alt="Username">
				<p>Learn Science</p>
			</div>
			<ul>
				<li><a href="#about_section">About</a></li>
				<li><a href="#portfolio_section">Portfolio</a></li>
				<li><a href="#team_section">Team</a></li>
				<li><a href="#services_section">Services</a></li>
				<li><a href="../login/home.php">Your-Profile</a></li>
				<li><a href="#contactus_section">Contact</a></li>
			</ul>
		</div>
	</header>


	<!-- Some Popular Subjects -->
	<div class="title">
		<span>What Learn Science Provides</span>
	</div>
	<br><br>
	<div class="course">
		<center>
			<div class="cbox">
				<!-- <div class="grib-container"> -->
					<div class="grib-box grib-row-1 wh">
						<div class="folder-image">
							<a href="./mock10th2.html">
								<img src="../images/icon/school-material.png" alt="" width="190px" height="auto">
							</a>
						</div>
						<h5>Study Materials</h5>
					</div>
					<div class="grib-box wh">
						<div class="folder-image">
							<a href="./mock10th3.html">
								<img src="../images/icon/pencil.png" alt="" width="160px" height="auto">
							</a>
						</div>
						<h5>Practice</h5>
					</div>

					<div class="grib-box wh">
						<a href="./mock10th1.html">
							<div class="folder-image">
								<img src="../images/icon/tour-guide (1).png" alt="" width="190px" height="auto">
							</div>
						</a>
						<h5>Guided Support</h5>
					</div>
					<div class="grib-box wh">
						<a href="./mock10th1.html">
							<div class="folder-image">
								<img src="../images/icon/commuication.png" alt="" width="190px" height="auto">
							</div>
						</a>
						<h4>Interactive Learning</h3>
					</div>

					<div class="grib-box wh">
						<a href="./mock10th1.html">
							<div class="folder-image">
								<img src="../images/icon/hourglass.png" alt="" width="160px" height="auto">
							</div>
						</a>
						<h4>Less-Time Consuming</h3>

						
					</div>
				<!-- </div> -->
		</center>
	</div>


	<!-- ABOUT -->
	<div class="diffSection" id="about_section">
		<center>
			<p style="font-size: 50px; padding: 100px">About Us</p>
		</center>
		<div class="about-content">
			<div class="side-image">
				<img class="sideImage" src="../images/extra/e1.jpg">
			</div>
			<div class="side-text">
				<h2>Welcome to Learn Science ,</h2>
				<p>

					Your ultimate destination for comprehensive board exam preparation for 10th and 12th-grade students.
					We understand the importance of mastering science subjects for academic success, and that's why
					we've created a platform tailored to meet all your needs.
					Whether you're tackling physics, chemistry, biology, or any other science subject, our curated
					resources, are here to support you every step of the way.
					Get ready to excel in your exams with Learn Science - where learning meets success!</p>
			</div>
		</div>
	</div>


	<!-- TEAM -->
	<div class="diffSection" id="team_section">
		<center>
			<p style="font-size: 50px; padding-top: 100px; padding-bottom: 60px;">We're the Creators</p>
		</center>
		<div class="totalcard">

			<div class="card">
				<center><img src="../images/projects/Shraddha.jpeg"></center>
				<center>
					<div class="card-title">Shraddha Bansal</div>
					<div id="detail">
						<p>“We're passionate about helping students thrive in their academic endeavors, providing them with the tools and guidance needed to ace science subjects!“</p>
						<div class="duty"></div>
						<a href="https://www.linkedin.com/in/shraddha-bansal-88b3b520b/" target="_blank"><button
								class="btn-akhil">Follow +</button></a>
					</div>
				</center>
			</div>
			<div class="card">
				<center><img src="../images/projects/Namrata.jpg"></center>
				<center>
					<div class="card-title">Namrata Das</div>
					<div id="detail">
						<p>“ Real education should consist of drawing the goodness and the best out of our own students.
							What better books can there be than the book of humanity “</p>
						<div class="duty"></div>
						<a href="https://www.linkedin.com/in/namrata-das-813bb2285/" target="_blank"><button
								class="btn-akhil">Follow +</button></a>
					</div>
				</center>
			</div>
			<div class="card">
				<center><img src="../images/projects/Shubham.jpg"></center>
				<center>
					<div class="card-title">Shubham Pasricha</div>
					<div id="detail">
						<p>“Our platform is your secret weapon, offering a blend of precision tools and insightful materials crafted for 10th and 12th-grade students“</p>
						<div class="duty"></div>
						<a href="https://www.linkedin.com/in/shubham-pasricha-582190274/" target="_blank"><button
								class="btn-akhil">Follow +</button></a>
					</div>
				</center>
			</div>
        			<div class="card">
				<center><img src="../images/projects/Sayam.jpeg"></center>
				<center>
					<div class="card-title">Sayam Batra</div>
					<div id="detail">
						<p>“ You can teach a student a lesson for a day; but if you can teach him to learn by creating
							curiosity, he will continue the learning process as long as he lives “</p>
						<div class="duty"></div>
						<a href="https://www.linkedin.com/in/sayam-batra-98253a269/?originalSubdomain=in"
							target="_blank"><button class="btn-roshan">Follow +</button></a>
					</div>
				</center>
			</div>
			<h1>YOUR SUCCESS STORY STARTS HERE!</h1>
		</div>
	</div>


	<!-- Study Materials -->
	<div class="service-swipe">
		<div class="diffSection" id="services_section">
			<center>
				<p style="font-size: 50px; padding: 100px; padding-bottom: 40px; color: #fff;">Study-Materials</p>
			</center>
		</div>
		<a href="">
			<div class="s-card"><img src="../images/icon/computer-courses.png">
				<p> PYQs </p>
			</div>
		</a>
		<a href="http://localhost/LearnScience/STUDY%20MATERIAL/MOCK/10th.html">
			<div class="s-card"><img src="../images/icon/q1.png">
				<p>Mock Tests </p>
			</div>
		</a>
		
		<a href="">
			<div class="s-card"><img src="../images/icon/online-tutorials.png">
				<p> Sample Question Paper </p>
			</div>
		</a>
		<a href="">
			<div class="s-card"><img src="../images/icon/papers.jpg">
				<p>Notes </p>
			</div>
		</a>
		<!-- <a href="#">
			<div class="s-card"><img src="images/icon/p3.png">
				<p>Performance and Ranking Report</p>
			</div>
		</a> -->
		<a href="">
			<div class="s-card"><img src="../images/icon/discussion.png">
				<p> Important Questions </p>
			</div>
		</a>
		<a href="">
			<div class="s-card"><img src="../images/icon/brainbooster.png">
				<p>Building Concepts for Board Exams </p>
			</div>
		</a>
		<a href="https://www.livechat.com/chat-with/17580576/" rel="nofollow">
			<div class="s-card"><img src="../images/icon/help.png">
				<p> Live Chat </p>
			</div>
		</a>

	</div>


	<!-- CONTACT US -->
	<div class="diffSection" id="contactus_section">
		<center>
			<p style="font-size: 50px; padding: 100px">Contact Us</p>
		</center>
		<div class="csec"></div>
		<div class="back-contact">
			<div class="cc">
				<form action="mailto:learnscience40@gmail.com" method="post" enctype="text/plain">
					<label>First Name <span class="imp">*</span></label><label style="margin-left: 185px">Last Name
						<span class="imp">*</span></label><br>
					<center>
						<input type="text" name="" style="margin-right: 10px; width: 175px" required="required"><input
							type="text" name="lname" style="width: 175px" required="required"><br>
					</center>
					<label>Email <span class="imp">*</span></label><br>
					<input type="email" name="mail" style="width: 100%" required="required"><br>
					<label>Message <span class="imp">*</span></label><br>
					<input type="text" name="message" style="width: 100%" required="required"><br>
					<label>Additional Details</label><br>
					<textarea name="addtional"></textarea><br>
					<button type="submit" id="csubmit">Send Message</button>
				</form>
			</div>
		</div>
	</div>



	<!-- FOOTER -->
	<footer>
		<div class="footer-container">
			<div class="left-col">
				<img src="./images/projects/LOGO.png" style="width: 200px;">
				<div class="logo"></div>
				<!-- <div class="social-media">
					<a href="#"><img src="images/icon\fb.png"></a>
					<a href="#"><img src="images/icon\insta.png"></a>
					<a href="#"><img src="images/icon\tt.png"></a>
					<a href="#"><img src="images/icon\ytube.png"></a>
					<a href="#"><img src="images/icon\linkedin.png"></a>
				</div><br><br> -->
				<p class="rights-text">Copyright All Rights Reserved.</p>
				<br>
				<p><img src="../images/icon/location.png">Uttarpradesh, Ghaziabad-201001, India</p><br>
				<p><img src="../images/icon/phone.png"> +91-1234-567-890<br><img
						src="../images/icon/mail.png">&nbsp;learnscience@gmail.com</p>
			</div>
		</div>
	</footer>

</body>

</html>