<html>
	<head>
		<title>
			<?php
			if(isset($title) && !empty($title))
    	    	echo $title; 
    		else
    	    	echo "MnzWebsite"; 
			?>
		</title>
		<?php


		?>
		<meta name="viewport" content="width=device-width, initial-scale=5">
		<link rel="stylesheet" type="text/css" href="<?php echo "../css/style.css";?>" id="css1"/>

    	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.0/css/bulma.min.css"/>
    	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css" integrity="sha384-G0fIWCsCzJIMAVNQPfjH08cyYaUtMwjJwqiRKxxE/rx96Uroj1BtIQ6MLJuheaO9" crossorigin="anonymous">
	</head>
	<body>
	<header>
  	<div class="container">


		<ul id="headerClass" class="nav navbar-nav topnav-right">
            <li style="padding-left: 10%; padding-bottom: 15%;">	  	<a href="#">
		  <img src="../ressources/zlogo.png" alt="" id="logo">
		</a></li>
			<li style="padding-left: 35%;"><a href="homepage.php">Home</i></a></li>
			<li><a href="about.php">About</i></a></li>
			<li><a href="services.php">Services</i></a></li>    
			<li><a href="portfolio.php">Portfolio</i></a></li>
			<li><a href="contact.php">Contact Us</i></a></li> 
		</ul>
  	</div>
</header>
	</body>
</html>