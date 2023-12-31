<!DOCTYPE html>
<html>
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="css/index.css">
<link rel="icon" type="image/x-icon" href="images/favicon.png">
<title>EducationExpress Dashboard </title>

</head>
<body>

<header>
<div class="logo-txt">Dashboard EducationExpress</div>

  <div class="dropdown">
	   <button class="dropbtn" onclick="dropdown()">
		 <span><img src="images/avatar.png" alt="User avatar" title="User Avatar"></span>
		 <span class="chevron chevron-down"></span>
	  </button>

	  <div class="dropdown-content" id="userMenu">
		<a href="https://www.linkedin.com/in/mouad-fanine-446ba6240/">Profile</a>
		<a href="#setting">Setting</a>
		<a href="logoutdash.php" class="divider">Logout</a>
	  </div>
  </div>
  
</header>

<input type="checkbox" class="nav" id="nav">

<label for="nav" class="navbar-toggle">
<div class="icon bar1"></div>
<div class="icon bar2"></div>
<div class="icon bar3"></div>
</label>

<div id="overlay"></div>


<nav>
	<div class="user-profile">
        <img src="images/avatar.png" alt="Profile" title="User Avatar">
	  	<h4>Hello, <strong>Mouad fanine</strong></h4>
		<p>How are you today?</p>
	</div>

<ul>
<li><a href="#overview">Overview</a></li>
<li><a href="https://www.linkedin.com/in/mouad-fanine-446ba6240/" target="balank">My Account</a></li>
<li><a href="#html">HTML Module</a></li>
<li><a href="#css">CSS Module</a></li>
<li><a href="#javascript">JavaScript Module</a></li>
<li><a href="https://github.com/" target="balank">Projects</a></li>
<li><a href="#quiz">Quiz</a></li>
<li><a href="#instructor">Instructor</a></li>
<li><a href="#resource">Resources</a></li>
</ul>
<br><br><br><br><br><br><br><br><br><br>
</nav>

<!-- Page content -->
<main>
<div class="grid-container">
	<div class="overview">
		<div>
			<div class="overview-header">
				<h3>Course Overview</h3>
			</div>
			<div class="overview-content">
			<p><a href="#viewdetail">Vew detail</a></p>
			<div class="total">
			  <div><h3>360 Lessons</h3></div>
			  <div><h3>60 Projects</h3></div>
			  <div><h3>All Level</h3></div>  
			</div>
			
			  <ul>
				<li>HTML <span class="checkmark badge right">L</span></li>
				<li>CSS <span class="checkmark badge right">L</span></li>
				<li>JavaScript <span class="badge right"></span></li>
				<li>Projects <span class="checkmark badge right">L</span>
			  </ul>	
			</div>
		</div>
	</div>
	
	<div class="progress">
		<div>
			<div class="progress-header">
				<h3>Comprehension Progress</h3>
			</div>
			
			<div class="progress-content">
				<p>​​HTML</p>
				<div class="bar">
					<div class="progress-bar html">100%</div>
				</div>

				<p>CSS</p>
				<div class="bar">
					<div class="progress-bar css">90%</div>
				</div>

				<p>JavaScript</p>
				<div class="bar">
					<div class="progress-bar js">50%</div>
				</div>

				<p>Projects</p>
				<div class="bar">
					<div class="progress-bar projects">60%</div>
				</div>
			</div>
		</div>
	</div>
  
	<div class="recent-notification">
		<div>
 			<div class="message">
				<h3>Recent Notification</h3>			
			<a href="#notification" class="notification">
				<span class="txt">New Email</span><img src="images/bell.png" alt="bell icon">
				<span class="amount">3</span>
			</a>
			</div>
		</div>
	</div>

	<div class="new-file">
		<div>
			<div class="document">
				<h3>New Files</h3>
				<p><a href="#newfiles">JavaScript Module 5 Unit 1</a></p> 
			</div>
		</div>
	</div>

	<div class="upcoming-event">
		<div>
			<div class="event">
				<h3>Upcoming Event</h3>
				 <p><a href="#event">Synchronous meeting</a></p>
			</div>
		</div>
	</div>	
</div>

<footer>
	<div>E-Learning Dashboard UI</div>
</footer>

</main>

<script src="js/index.js"></script>

</body></html>