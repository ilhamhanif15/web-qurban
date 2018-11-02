<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->	
    <link rel="stylesheet" href="<?php echo parse_url(base_url().'assets/bootstrap4/css/bootstrap.min.css', PHP_URL_PATH) ?>" >
    <link rel="stylesheet" type="text/css" href="<?php echo parse_url(base_url().'assets/additional/custom.css', PHP_URL_PATH) ?>">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css">
    <title>Home</title>
  </head>

  <body>
  	<div class="jumbotron text-center bg-custom headWeb" style="margin-bottom:0;background-position: 0px -100px;">
	  <h1>Website Qurban</h1>
	  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim.</p> 
	</div>
	<!-- NAVBAR -->
	<nav class="navbar navbar-expand-lg navbar-dark" id="navbar" style="background-color: #377a53">
		<span class="container">
		  <a class="navbar-brand" href="#">LOGO</a>
		  <button class="navbar-toggler" id="btnToggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>

		  <div class="collapse navbar-collapse" id="navbarSupportedContent">
		    <ul class="navbar-nav" style="width: 100%">
		      <li class="nav-item active">
		        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="#">Link</a>
		      </li>
		      <li class="nav-item dropdown">
		        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		          Dropdown
		        </a>
		        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
		          <a class="dropdown-item" href="#">Action</a>
		          <a class="dropdown-item" href="#">Another action</a>
		          <div class="dropdown-divider"></div>
		          <a class="dropdown-item" href="#">Something else here</a>
		        </div>
		      </li>
		    </ul>
		    <form class="form-inline mx-2 my-auto d-inline" style="width: 100%" >
		        <div class="input-group">
			      <input type="text" class="form-control" placeholder="Search..." style="margin-left: 60%;" id="search">
			       <span class="input-group-append">
			       	<button class="btn btn-outline-light my-2 my-sm-0" id="btnSearch" style="border-radius: 0px;" type="submit" type="button"><i class="fa fa-search" ></i></button>
			       </span>
			    </div>
		    </form>
		  	<ul class="navbar-nav" style="margin-left: 10px;">
		  		<li class="nav-item" style="text-align: center">
		    	<a href="#" class="nav-link"><i class="fa fa-lg fa-user"></i><br/>Profil</a>
		    </li>
		  	</ul>
		  </div>
		</span>
	</nav>
	<!-- END OF NAVBAR -->
    <div class="container" style="margin-top: 30px;">
	  <div class="row">
	  	<div class="col-md-9 col-sm-12">
	  		<h1>TITTLE</h1>
	  		<p style="text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	  		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	  		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	  		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	  		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	  		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	  	</div>
	  	<div class="col-md-3 col-sm-12">
	  		<h1>Right Content</h1>
	  		<p style="text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	  		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	  		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	  		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	  		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	  		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	  	</div>
	  	<div class="col-md-12">
	  		<hr />
	  		<h2>Second Tittle</h2>
	  		<p style="text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	  		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	  		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	  		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	  		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	  		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	  	</div>
	  	<div class="col-md-12">
	  		<hr/>
	  		<h1>Third Tittle</h1>
	  		<p class="subtittle">Carousel</p>
	  		<div class="d-flex justify-content-center">
		  		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="width: 90%; height: 50%">
				  <ol class="carousel-indicators">
				    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
				    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
				    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
				  </ol>
				  <div class="carousel-inner">
				    <div class="carousel-item active">
				      <img class="d-block w-100" src="<?php echo base_url().'assets/photo/bg1.JPG' ?>" width="800" height="500" alt="First slide">
				    </div>
				    <div class="carousel-item">
				      <img class="d-block w-100" src="<?php echo base_url().'assets/photo/bg1.JPG' ?>" width="800" height="500" alt="Second slide">
				    </div>
				    <div class="carousel-item">
				      <img class="d-block w-100" src="<?php echo base_url().'assets/photo/bg1.JPG' ?>" width="800" height="500" alt="Third slide">
				    </div>
				  </div>
				  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
				    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
				    <span class="sr-only">Previous</span>
				  </a>
				  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
				    <span class="carousel-control-next-icon" aria-hidden="true"></span>
				    <span class="sr-only">Next</span>
				  </a>
				</div>
			</div>
			<p style="margin-top: 15px; text-align: justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	  	</div>
	  </div>
	</div>
	<footer style="margin-top: 50px;">
		<div class="card-footer" style="background-color: rgb(55,122,83,0.8); color: white;text-align: center;">
		  	<i style="font-size: small;">Copyright &copy; 2018
		  	<strong>WEB DESIGN</strong>
		  	All Rights</i>
		</div>
	</footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.1.0.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="<?php echo parse_url(base_url().'assets/bootstrap4/js/bootstrap.min.js', PHP_URL_PATH) ?>" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/ionicons@4.4.6/dist/ionicons.js"></script>
    <script type="text/javascript">
    	$( "#search" ).focusin(function() {
		  $(this).animate({
		  	marginLeft: '0%'
		  });
		}).focusout(function(){
			$(this).animate({
				marginLeft: '60%'
			});
		});

		//Sticky Navbar
		window.onscroll = function() {stickyNav()};
		// Get the navbar
		var navbar = document.getElementById("navbar");
		// Get the offset position of the navbar
		var sticky = navbar.offsetTop;
		function stickyNav(){
			 if (window.pageYOffset >= sticky) {
			    navbar.classList.add("fixed-top")
			  } else {
			    navbar.classList.remove("fixed-top");
			  }
		}
    </script>
  </body>
</html>