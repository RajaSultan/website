<?php // <--- do NOT put anything before this PHP tag
include('functions.php');
$cookieMessage = getCookieMessage();
?>
<!doctype html>
<html>

<head>
	<meta charset="UTF-8" />
	<link rel="stylesheet" href="./css/shopstyle.css">
	<title>TODO put title here</title>
	<link rel="stylesheet" type="text/css" href="shopstyle.css" />

</head>

<body>
	<?php
	// display any cookie messages. TODO style this message so that it is noticeable.
	echo $cookieMessage;
	?>
	<!-- 
			// TODO put a search box here and a submit button.
			
			// TODO the rest of this page is your choice, but you must not leave it blank.
			
			Possible ideas:
			•	List the 10 most recently purchased products.
			•	Use a CSS Animated Slider.
			•	Display any sales or promotions (using an image)

		-->
	<nav class="navbar">
		<div class="navbar-container ">
			<ul class="menu-items">
				<li><a href="./Homepage.php">Homepage</a></li>
				<li><a href="#">ProductList</a></li>
				<li><a href="#">ViewCart</a></li>
				<li><a href="./CustomerList.php">CustomerList</a></li>
				<li><a href="#">OrderList</a></li>
				<li><a href="./signUp.php">SignUp</a></li>
			</ul>
			<h1 class="main-title">My Store</h1>
		</div>
	</nav>
	<div class="wrapper">
		<div class="search-container">
			<form role="search" method="get" class="search-form form" action="">
				<label>
					<input type="search" class="search-field" placeholder="Type something..." value="" name="s" title="" />
				</label>
			</form>
		</div>
	</div>

	<div class="gallery-wrapper">
		<h1>Popular Products</h1>
		<div class="gallery-container">
			<div class="horizontal"><img src="https://picsum.photos/500/200" alt=""></div>
			<div class="vertical"><img src="https://picsum.photos/200/350" alt=""></div>
			<div><img src="https://picsum.photos/200/200" alt=""></div>
			<div class="big"><img src="https://picsum.photos/600/600" alt=""></div>
			<div class="vertical"><img src="https://picsum.photos/250/400" alt=""></div>
			<div class="horizontal"><img src="https://picsum.photos/400/150" alt=""></div>
			<div><img src="https://picsum.photos/200/220" alt=""></div>
			<div class="horizontal"><img src="https://picsum.photos/450/200" alt=""></div>
			<div><img src="https://picsum.photos/220/250" alt=""></div>
			<div><img src="https://picsum.photos/250/200" alt=""></div>
		</div>
	</div>

</body>

</html>