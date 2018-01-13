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
				<a class="navbar-brand" href="index.php?page=1">Wajasiri Group <i class="fa fa-leaf"></i> </a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
		
		  		<div class="collapse navbar-collapse" id="navbarSupportedContent">
		    		<div class="container">
		    			<ul class="navbar-nav mr-auto">
		      				<li class="nav-item<?php if($pageid==1){echo " active"; }?>">
		        				<a class="nav-link" href="index.php?page=1"><?php if($pageid==1){echo "<strong>Home</strong>"; } else {echo "Home";}?> <span class="sr-only">(current)</span></a>
		      				</li>
		      				<li class="nav-item<?php if($pageid==2){echo " active"; }?>">
								<a class="nav-link" href="index.php?page=2"><?php if($pageid==2){echo "<strong>About Us</strong>"; } else {echo "About Us";}?></a>
		     		 		</li>  
						    <li class="nav-item<?php if($pageid==3){echo " active"; }?>">
						    	<a class="nav-link" href="index.php?page=3"><?php if($pageid==3){echo "<strong>Contact Us</strong>"; } else {echo "Contact Us";}?></a>
						    </li>  
						    <li class="nav-item<?php if($pageid==4){echo " active"; }?>">
						        <a class="nav-link" href="index.php?page=4"><?php if($pageid==4){echo "<strong>Ventures</strong>"; } else {echo "Ventures";}?></a>
						    </li>  
						</ul>
		    		</div>
		  		</div>
			</nav>


			<div class="putleft col-sm-2 col-xs-12">
			    <nav class="nav flex-column nav-pills blackening">
				  <a class="nav-link active" href="#">Wajasiri Real Estate</a>
				  <a class="nav-link" href="#">Wajasiri Furniture</a>
				  <a class="nav-link" href="#">Wajasiri Farms</a>
				  <a class="nav-link" href="#">Wajasiri IT Services</a>
				</nav>
			</div>		    
		    
			<div class="container floatingthis col-sm-8">
				<div class="row">
					<div class="bcontent">
						<h1> 
							<?php echo $page['header']; ?>  
						</h1>
						<?php
						if(($pageid==1)||($pageid==2)){echo ' 
						<article class="decorants-1 deco">
						<p>
						 		Wajasiri....
						<p>
						</article>
				
						<article class="decorants-2 deco">
						<p>
						   		...Dare to dream....
						<p>
						</article>
						   
						<article class="decorants-3 deco">
						<p>
						   		...Dare to be brave..
						<p>
						</article>				
						';
						}?>
						
						<?php echo $page['body']; ?>
						
					</div>
					
					
					<?php if($pageid==4){
					echo'
					<div class="panel panel-primary col-sm-6">
					  <div class="panel-heading">Wajasiri Real Estate</div>
					  <div class="panel-body">
					    Image for Real Estate
					  </div>
					</div>
					
					<div class="panel panel-default col-sm-6">
					  <div class="panel-heading">Wajasiri Furniture</div>
					  <div class="panel-body">
					    Image for Furniture
					  </div>
					</div>
					
					<div class="panel panel-info col-sm-6">
					  <div class="panel-heading">Wajasiri Farms</div>
					  <div class="panel-body">
					    Image for Farms
					  </div>
					</div>
					
					<div class="panel panel-default col-sm-6">
					  <div class="panel-heading">Wajasiri IT Solutions & Consultancy</div>
					  <div class="panel-body">
					    Image for IT services
					  </div>
					</div>';
												
					}?>
					
					    
			    </div> 
			</div>
		
    
    <footer class="footer">
      <div class="container">
        <span class="text-muted">Wajasiri Ltd &copy; 2017 </span>
      </div>
    </footer><!-- Begin page content -->
			
	</body>

</html>
