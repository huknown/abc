<!-- Database connection -->
<?php include('config/setup.php'); ?>

<!DOCTYPE html>

<html>

	<head>
		
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<!-- CSS page styling -->
		<?php include('config/css.php'); ?>

		<!-- Javascript page styling -->
		<?php include('config/js.php'); ?>
		
		<title> <?php echo $page['title'].' | '.$site_title; ?></title>
	</head>
	
	<body>
		
		
			<nav class="navbar navbar-expand-lg navbar-light" role=navigation style="background-color: #FF4500;">
				<a class="navbar-brand" href="index.php?page=1">Wajasiri Group <img src="../../CSS/Images/wajlogo4.svg" alt="Wajasiri Logo"> </a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
		
		  		<div class="collapse navbar-collapse" id="navbarSupportedContent">
		    		<div class="container">
		    			<ul class="navbar-nav mr-auto">
		      				<li class="nav-item<?php if($pageid==1){echo " active"; }?>">
		        				<a class="nav-link" href="index.php?page=1"><?php if($pageid==1){echo "<strong>Home</strong>"; } else {echo "Home";}?> <span class="sr-only">(current)</span></a>
		      				</li>
		     
						    <li class="nav-item<?php if($pageid==5){echo " active"; }?>">
						    	<a class="nav-link" href="index.php?page=5"><?php if($pageid==5){echo "<strong>Real Estate</strong>"; } else {echo "Real Estate";}?></a>
						    </li>  						    
						    <li class="nav-item<?php if($pageid==6){echo " active"; }?>">
						    	<a class="nav-link" href="index.php?page=6"><?php if($pageid==6){echo "<strong>Furniture</strong>"; } else {echo "Furniture";}?></a>
						    </li>  						    
						    <li class="nav-item<?php if($pageid==7){echo " active"; }?>">
						    	<a class="nav-link" href="index.php?page=7"><?php if($pageid==7){echo "<strong>Farm Produce</strong>"; } else {echo "Farm Produce";}?></a>
						    </li>  						    
						    <li class="nav-item<?php if($pageid==8){echo " active"; }?>">
						    	<a class="nav-link" href="index.php?page=8"><?php if($pageid==8){echo "<strong>IT Solutions</strong>"; } else {echo "IT Solutions";}?></a>
						    </li>  						    
						    
						    <li class="nav-item<?php if($pageid==3){echo " active"; }?>">
						    	<a class="nav-link" href="index.php?page=3"><?php if($pageid==3){echo "<strong>Contact Us</strong>"; } else {echo "Contact Us";}?></a>
						    </li>  
						    <li class="nav-item<?php if($pageid==2){echo " active"; }?>">
						        <a class="nav-link" href="index.php?page=2"><?php if($pageid==2){echo "<strong>About Us</strong>"; } else {echo "About Us";}?></a>
						    </li>  
						</ul>
		    		</div>
		  		</div>
			</nav>


			<div class="container offset-col-sm-2 col-sm-8">
				<div class="row">
					<div class="bcontent">
						<h1> 
							<?php echo $page['header']; ?>  
						</h1>
						<?php
						if(($pageid==1)||($pageid==2)||($pageid==3)){
							echo '<img src="../../CSS/Images/grass-run-modded.jpg" alt="Furniture" class="splash-image">';
						}?>
						
						<p class="wrap-body-text">
						<?php echo $page['body']; ?>
						</p>
					</div>
					
					
					<?php if(($pageid==1)||($pageid==4)){
					echo'
					<div class="panel panel-default col-sm-6">
					 <a href="index.php?page=5" class="panel-link-color">
					  <div class="panel-heading">Wajasiri Real Estate</div>
					  <div class="panel-body">
					    <img src="../../CSS/Images/real-estate-modded.jpg" alt="Real Estate" class="resp-image">
					  </div>
					  <div class="panel-body">
					    <p>
					    With a growing porfolio of real estate, we believe Wajasiri can be the end of your search for a new home or business opportunity...
					    </p>
					  </div>
					  </a>
					</div>
					
					<div class="panel panel-default col-sm-6">
					 <a href="index.php?page=6" class="panel-link-color">
					  <div class="panel-heading">Wajasiri Furniture</div>
					  <div class="panel-body">
					    <img src="../../CSS/Images/furniture-modded.jpg" alt="Furniture" class="resp-image">
					  </div>
					  <div class="panel-body">
					    <p>
					    With over 20 years of experience in the furniture industry Wajasiri has grown to be a steady source of fashionable furniture crafted locally..
					    </p>
					  </div>
					  </a>
					</div>
					
					<div class="panel panel-info col-sm-6">
					 <a href="index.php?page=7" class="panel-link-color">
					  <div class="panel-heading">Wajasiri Farms</div>
					  <div class="panel-body">
					    <img src="../../CSS/Images/rice-modded.jpg" alt="Farm Produce" class="resp-image">
					  </div>
					  <div class="panel-body">
					    <p>
					    Wajasiri endeavors on farming various tropical and mainstead produce ranging from Watermelons all the way to rice and maize...
					    </p>
					  </div>
					  </a>
					</div>
					
					
					<div class="panel panel-default col-sm-6">
					 <a href="index.php?page=8" class="panel-link-color">
					  <div class="panel-heading">Wajasiri IT Solutions & Consultancy</div>
					  <div class="panel-body">
						<img src="../../CSS/Images/office-2-modded.jpg" alt="IT Services" class="resp-image">
					  </div>
					  <div class="panel-body">
					    <p>
					    Our talented and experienced work force can help to provide you the IT solution that you need to grow and survive...
					    </p>
					  </div>
					 </a>					  
					</div>
					';
												
					}?>


					<?php if($pageid==5){
					echo'
					<div class="panel panel-default col-sm-4">
					 <a href="#" class="panel-link-color">
					  <div class="panel-heading">Mikocheni B</div>
					  <div class="panel-body">
					    <img src="../../CSS/Images/house1-modded.jpg" alt="House 4 rent sale Tanzania" class="resp-image">
					  </div>
					  <div class="panel-body">
					    <p>
					    Location: Mikocheni B 
					    <br>
					    Price:
					    <br>
					    Description: Available for renting
					    </p>
					  </div>
					  </a>
					</div>
					
					<div class="panel panel-default col-sm-4">
					 <a href="#" class="panel-link-color">
					  <div class="panel-heading">Kigamboni</div>
					  <div class="panel-body">
					    <img src="../../CSS/Images/house2-modded.jpg" alt="House 3 rent sale Tanzania" class="resp-image">
					  </div>
					  <div class="panel-body">
					    <p>
					    Location: Kigamboni
					    <br>
					    Price:
					    <br>
					    Description: Available for renting
					    </p>
					  </div>
					  </a>
					</div>
					
					<div class="panel panel-info col-sm-4">
					 <a href="#" class="panel-link-color">
					  <div class="panel-heading">Dodoma city</div>
					  <div class="panel-body">
					    <img src="../../CSS/Images/house3-modded.jpg" alt="House 2 rent sale Tanzania" class="resp-image">
					  </div>
					  <div class="panel-body">
					    <p>
					    Location: Dodoma, 31 km from city
					    <br>
					    Price:
					    <br>
					    Description: Available for sale				    
					    </p>
					  </div>
					  </a>
					</div>
					
					
					<div class="panel panel-default col-sm-4">
					 <a href="#" class="panel-link-color">
					  <div class="panel-heading">And another..</div>
					  <div class="panel-body">
						<img src="../../CSS/Images/house1-modded.jpg" alt="House 1 rent sale Tanzania" class="resp-image">
					  </div>
					  <div class="panel-body">
					    <p>
					    Location: Out of ideas...
					    <br>
					    Price:
					    <br>
					    Description: Available for renting					    
					    </p>
					  </div>
					 </a>					  
					</div>
					';
												
					}?>

					<?php if($pageid==6){
					echo'
					<div class="panel panel-default col-sm-4">
					 <a href="#" class="panel-link-color">
					  <div class="panel-heading">Simple old fashioned bed</div>
					  <div class="panel-body">
					    <img src="../../CSS/Images/bed1-modded.jpg" alt="Wood bed tanzania" class="resp-image">
					  </div>
					  <div class="panel-body">
					    <p>
					    Name: Hardwood simple bed
					    <br>
					    Price: xxx Tzshs
						<br>
					    Description: Hand crafted and vanished finishing
					    <br>
					    </p>
					  </div>
					  </a>
					</div>
					
					<div class="panel panel-default col-sm-4">
					 <a href="#" class="panel-link-color">
					  <div class="panel-heading">Elegant old fashioned bed</div>
					  <div class="panel-body">
					    <img src="../../CSS/Images/bed2-modded.jpg" alt="Wood Bed Tanzania" class="resp-image">
					  </div>
					  <div class="panel-body">
					    <p>
					    Name: Hardwood victorian bed
					    <br>
					    Price: xxx Tzshs
					    <br>
					    Description: Decorative design and carving on top panel of bed
					    </p>
					  </div>
					  </a>
					</div>
					
					<div class="panel panel-info col-sm-4">
					 <a href="#" class="panel-link-color">
					  <div class="panel-heading">Wajasiri Dining Set</div>
					  <div class="panel-body">
					    <img src="../../CSS/Images/diningset-modded.jpg" alt="Dining Set Tanzania" class="resp-image">
					  </div>
					  <div class="panel-body">
					    <p>
					    Name: Hardwood dining set
					    <br>
					    Price: xxx Tzshs
					    <br>
					    Description: A favourite of ours, hand crafted with delicately carved decorations...					    					    
					    </p>
					  </div>
					  </a>
					</div>

					<div class="panel panel-info col-sm-4">
					 <a href="#" class="panel-link-color">
					  <div class="panel-heading">Simple Park Bench</div>
					  <div class="panel-body">
					    <img src="../../CSS/Images/simplebench-modded.jpg" alt="Simple wood bench Tanzania" class="resp-image">
					  </div>
					  <div class="panel-body">
					    <p>
					    Name: Hardwood dining set
					    <br>
					    Price: xxx Tzshs
					    <br>
					    Description: A favourite of ours, hand crafted with delicately carved decorations...					    					    
					    </p>
					  </div>
					  </a>
					</div>
					
					<div class="panel panel-info col-sm-4">
					 <a href="#" class="panel-link-color">
					  <div class="panel-heading">Wall inbuild cupboard</div>
					  <div class="panel-body">
					    <img src="../../CSS/Images/cupboardmodern-modded.jpg" alt="Cupboard Wall Tanzania" class="resp-image">
					  </div>
					  <div class="panel-body">
					    <p>
					    Name: Hardwood dining set
					    <br>
					    Price: xxx Tzshs
					    <br>
					    Description: A favourite of ours, hand crafted with delicately carved decorations...					    					    
					    </p>
					  </div>
					  </a>
					</div>					
					
					</div>
					';
												
					}?>
					

					<?php if($pageid==7){
					echo'
					<div class="panel panel-default col-sm-4">
					 <a href="#" class="panel-link-color">
					  <div class="panel-heading">Wajasiri Rice</div>
					  <div class="panel-body">
					    <img src="../../CSS/Images/rice2-modded.jpg" alt="Rice Farm Sale Tanzania" class="resp-image">
					  </div>
					  <div class="panel-body">
					    <p>
					    Location: Mikocheni B 
					    <br>
					    Price:
					    <br>
					    Description: Available for renting
					    </p>
					  </div>
					  </a>
					</div>
					
					<div class="panel panel-default col-sm-4">
					 <a href="#" class="panel-link-color">
					  <div class="panel-heading">Wajasiri Maize</div>
					  <div class="panel-body">
					    <img src="../../CSS/Images/maize-modded.jpg" alt="Maize Farm Sale Tanzania" class="resp-image">
					  </div>
					  <div class="panel-body">
					    <p>
					    Location: Kigamboni
					    <br>
					    Price:
					    <br>
					    Description: Available for renting
					    </p>
					  </div>
					  </a>
					</div>
					
					<div class="panel panel-info col-sm-4">
					 <a href="#" class="panel-link-color">
					  <div class="panel-heading">Wajasiri Watermelons</div>
					  <div class="panel-body">
					    <img src="../../CSS/Images/watermelon-modded.jpg" alt="Watermelon Farm Sale Tanzania" class="resp-image">
					  </div>
					  <div class="panel-body">
					    <p>
					    Location: Dodoma, 31 km from city
					    <br>
					    Price:
					    <br>
					    Description: Available for sale				    
					    </p>
					  </div>
					  </a>
					</div>
					';
												
					}?>

					    
			    </div> 
			    <div class="push"></div>
			</div>
		
    
    
    <footer class="footer">
      <div class="container">
        <span class="text-muted">Wajasiri Ltd &copy; 2018 </span>
      </div>
    </footer><!-- Begin page content -->
			
	</body>

</html>
