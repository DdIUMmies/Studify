<?php
	session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Studify</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
	<script type="text/javascript" lang="javascript" src="script.js"></script>
	<link href="style.css" rel="stylesheet">
	<link rel="stylesheet" href="https://m.w3newbie.com/you-tube.css">
</head>
<body>


<!-- Navigation -->
<nav class="navbar navbar-expand-md navbar-light bg-light sticky top">
	<nav class="navbar navbar-light bg-light">
	  <div class="container">
		<a class="navbar-brand" href="index.html">
		  <img
			src="img/logo_small.png"
			height="50"
			alt=""
			loading="lazy"
		  />
		</a>
	  </div>
	</nav>

	<div class="collapse navbar-collapse" id="collapseResponsive"></div>
	<ul class="navbar-nav ml-auto"> <!--per fare le scritte vicino la home-->
		<li class="nav-item active ">
			<a class="nav-link" href="#">Home</a></li>
		<li class="nav-item dropdown">
			<a class="nav-link dropdown-toggle" href="/Studify/profile.htmlhb" id="navbarDropdownAppunti" role="button" data-toggle="dropdown"
				 aria-haspopup="true" aria-expanded="false">Il mio account</a>
			<div class="dropdown-menu" aria-labelledby="navbarDropdownAppunti">
				<a class="dropdown-item" href="profile.php?name=$nome&surname=$cognome&emailadd=$email">I tuoi appunti </a>
				<div class="dropdown-divider"></div>
				
		<li class="nav-item active ">
			<a class="nav-link" href="FAQ.html">FAQ</a></li>
		<li class="nav-item active ">
			<a class="nav-link" href="#">Lavora con noi</a></li>
			<?php
				if(isset($_SESSION['id'])) {
					?>
					<li class="nav-item active">
					<a class="nav-link" href="profile.php"> Account </a>
					<li class="nav-item active">
              			<form action="logout.php" method="post"> <input type="submit" value="Esci" class="btn btn-primary" style="background-color: navy;"/></form></li>
				<?php
				}
				else {
					?>
					<a class="nav-link" href="registrazione/index.html" > Registrati </a></li>
					<li class="nav-item active">
					<a class="btn btn-primary" style="background-color: navy;" href="login/index.php">Accedi</a></li>
					<?php
				}
				?>	
	</ul>
</nav>


<!--FORST JUMBOtron -->


<!---image--->
<div class="jumbotron" style="height: 600px;  padding-top: 150px;" >
<!-- search bar-->


<h1 class="text-center" style="color: aliceblue;">La Rivoluzione degli appunti è appena iniziata!</h1>
<p class="text-center" style="color: aliceblue;">Potenzia al meglio il tuo studio con la raccolta di appunti di Studify!</p>




<div class="bmi">
<div class="container">
		<div class= "input-group">
			<input type="text" id="barraRicerca" class="form-control" placeholder="Cerca Appunti, Lezioni e molto altro...">
			
			<div class ="input-group-btn">
				      
				<button style="background-color:navy;"    class="btn btn-lg btn-primary" name="bottoneCerca" type="submit" onclick="ricerca()">Cerca</button>		

			</div>
			<br>
			<div class="container" id="elencoRoba" >
				<br>
						<ul id="elenco" class="menu">
							<li class="primo">
									Informatica
										<ul class="sub-menu">
											<li class="dropdown-item" href="#">Appunti Informatica
												<ul class="sub-menu">
													<li class="dropdown-item" href="#"> Ingegneria del Software </li>
													<li class="dropdown-item" href="#"> Basi di Dati II </li>
												</ul>
											</li>
											<li class="dropdown-item" href="#">Video Informatica</li>
											<li class="dropdown-item" href="#">FAQ Informatica</li>
										</ul>
							</li>
							<li class="primo">
									Economia
										<ul class="sub-menu" >
											<li class="dropdown-item" href="#">Appunti Economia</li>
											<li class="dropdown-item" href="#">Video Economia</li>
											<li class="dropdown-item" href="#">FAQ Economia</li>
											<li class="dropdown-item">                        </li>
										</ul>	
							<li class="primo">
									Psicologia
										<ul class="sub-menu">
											<li class="dropdown-item" href="#">Appunti Psicologia</li>
											<li class="dropdown-item" href="#">Video Psicologia</li>
											<li class="dropdown-item" href="#">FAQ Psicologia</li>
										</ul>
						</ul>
					</div>
			</div>
		</div>
	</div>
<br>
<!-- <div class=" text-center">
<a class="btn btn-primary" style="background-color: navy;"  href="login/index.html">Documenti</a></li>

<a class="btn btn-primary" style="background-color: navy;" href="login/index.html">Appunti</a></li>
<a class="btn btn-primary" style="background-color: navy;" href="login/index.html">Lezioni</a></li>
</div>
-->



</div>
</div>

<div class=" text-center">
<div class="jumbotron" style="background-image: url();">
<h2> &#128218 Trova ciò che cerchi navigando attraverso le nostre sezioni! &#128218</h2>
</div>
</div>
<!--SECOND JUMBOTRON -->

 
<!--carousel -->


<!--- Jumbotron -->




<!--- Welcome Section -->


<!--- Three Column Section -->


<!--- Two Column Section -->


<!--- Fixed background -->


<!--- Emoji Section -->

  
<!--- Meet the team -->


<!--- Cards -->


<div class="bmi">
	<div class="card-deck">
		<div class="card">
		  <img class="card-img-top" src="/Studify/img/home2.png" alt="Card image cap">
		  <div class="card-body">
			<h5 class="card-title">Appunti & Libri</h5>
			<p class="card-text" > <em>Porta il tuo studio verso un'altra dimensione con la raccolta di appunti universitari Studify!
				<br>
				Sfoglia migliaia di documenti di ogni materia e facoltà!.<br>
				Pensaci, è come avere una biblioteca portatile!</em></p>
				<a href="/Studify/APPUNTI.html" style="background-color:navy;" class="btn btn-primary">Vai agli appunti</a>

			<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
		  </div>
		</div>
		<div class="card">
		  <img class="card-img-top" src="/Studify/img/home1.png" alt="Card image cap">
		  <div class="card-body">
			<h5 class="card-title">Videlezioni</h5>
			<p class="card-text"><em>Ti presentiamo la nostra nuova sezione dedicata alle videolezioni tenute da professionisti di tutto il mondo!<br>
			Il bello è che sono visionabili comodamente da casa. <br>
		cosa aspetti, entra subito!</em>  </p>
		<br>
		<a href="#" class="btn btn-primary" style="background-color:navy;" >Videolezioni</a>
			<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
		  </div>
		</div>
		<div class="card">
		  <img class="card-img-top" src="/Studify/img/team2.png" alt="Card image cap">
		  <div class="card-body">
			<h5 class="card-title">Forum Studenti</h5>
			<p class="card-text"><em>Entra nella community fai domande, rispondi e ottieni punti!</em></p>
			<br>
			<br>
			<br>

			
			<a href="#" class="btn btn-primary" style="background-color:navy;">Vai al Forum</a>

			<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
		  </div>
		</div>
	  </div>
</div>
</div>
<div class=" text-center">
	<h2>  &#128104 &#8205 &#127891&#128218 Vivi la migliore esperienza di studio possibile.  &#128104 &#8205 &#127891 &#128218   </h2>
	</div>
	</div>
       
<div class="bmi">

        <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading">Migliora il tuo workflow </h2>
            <p class="lead">Da oggi cambia il modo di studiare, segui le videolezioni online, sfoglia migliaia di documenti e mettiti alla prova con i tuoi compagni! </p>
          </div>
          <div class="col-md-5">
            <img class="featurette-image img-fluid mx-auto" src="/Studify/img/team1.png" alt="Generic placeholder image">
          </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7 order-md-2">
            <h2 class="featurette-heading">L'unico ed inimitabile</h2>
            <p class="lead">Studify vanta la più grande raccolta di documenti online di ogni facoltà!.</p>
          </div>
          <div class="col-md-5 order-md-1">
            <img class="featurette-image img-fluid mx-auto" src="/Studify/img/team2.png" alt="Generic placeholder image">
          </div>
        </div>

        <hr class="featurette-divider">

        
	
</div>

<!--- Two Column Section -->


<!--- Connect -->



 

<!---                                   Footer                                     -->
<footer class="bg-light text-center text-black" style="background-color: antiquewhite;">
	<!-- Grid container -->
	<div class="container p-4">
	  <!-- Section: Social media -->
	  <section class="mb-4">
		<!-- Facebook -->
		<a class="btn btn-outline-dark btn-floating m-1" href="#!" role="button"
		  ><i class="fab fa-facebook-f"></i
		></a>
  
		<!-- Twitter -->
		<a class="btn btn-outline-dark btn-floating m-1" href="#!" role="button" 
		  ><i class="fab fa-twitter"></i
		></a>
  
		<!-- Google -->
		<a class="btn btn-outline-dark btn-floating m-1" href="#!" role="button"
		  ><i class="fab fa-google"></i
		></a>
  
		<!-- Instagram -->
		<a class="btn btn-outline-dark btn-floating m-1" href="#!" role="button"
		  ><i class="fab fa-instagram"></i
		></a>
  
		<!-- Linkedin -->
		<a class="btn btn-outline-dark  btn-floating m-1" href="#!" role="button"
		  ><i class="fab fa-linkedin-in"></i
		></a>
  
		<!-- Github -->
		<a class="btn btn-outline-dark btn-floating m-1" href="#!" role="button"
		  ><i class="fab fa-github"></i
		></a>
	  </section>
	  <!-- Section: Social media -->
  
	  <!-- Section: Form -->
	  <section class="">
		<form action=""> 
		  <!--Grid row-->
		  <div class="row d-flex justify-content-center">
			<!--Grid column-->
			<div class="col-auto">
			  <p class="pt-2">
				<strong>Iscriviti alla newsletter!</strong>
			  </p>
			</div>
			<!--Grid column-->
  
			<!--Grid column-->
			<div class="col-md-5 col-12">
			  <!-- Email input -->
			  <div class="form-outline form-dark mb-4">
				<input type="email" id="form5Example2" class="form-control" />
				<label class="form-label" for="form5Example2">Email </label>
			  </div>
			</div>
			<!--Grid column-->
  
			<!--Grid column-->
			<div class="col-auto">
			  <!-- Submit button -->
			  <button type="submit" class="btn btn-outline-dark mb-4">
				Iscriviti
			  </button>
			</div>
			<!--Grid column-->
		  </div>
		  <!--Grid row-->
		</form>
	  </section>
	  <!-- Section: Form -->
  
	  <!-- Section: Text -->
	  <section class="mb-4">
		<p>
		  Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt distinctio earum
		  repellat quaerat voluptatibus placeat nam, commodi optio pariatur est quia magnam
		  eum harum corrupti dicta, aliquam sequi voluptate quas.
		</p>
	  </section>
	  <!-- Section: Text -->
  
	  <!-- Section: Links -->
	  
  
		  <!--Grid column-->
  
		  
  
	<!-- Copyright -->
	<div class="text-center p-3" >
	  © 2020 Copyright:
	  <a class="text-dark" href="https://mdbootstrap.com/">Studify.it</a>
	</div>
	<!-- Copyright -->
  </footer>
  <!-- Footer -->



</body>
</html>




<!-- View in Browser: Drew's #1 Trending YouTube Tutorial -->

<!-- End View in Browser: Drew's #1 Trending YouTube Tutorial -->



    </body>
</html>