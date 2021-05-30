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
	<script> src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"</script>
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
	

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script>
	src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"</script>

	<link href="style.css" rel="stylesheet">
	<link rel="stylesheet" href="https://m.w3newbie.com/you-tube.css">
</head>
<body>


<!-- Navigation -->
<nav class="navbar navbar-expand-md navbar-light bg-light sticky top">
	<nav class="navbar navbar-light bg-light">
	  <div class="container">
		<a class="navbar-brand" href="index.php">
		  <img src="img/logo_small.png" height="50" alt="" loading="lazy"/>
		</a>
	  </div>
	</nav>

	<div class="collapse navbar-collapse" id="collapseResponsive"></div>
	<ul class="navbar-nav ml-auto"> <!--per fare le scritte vicino la home-->
		<li class="nav-item ">
			<a class="nav-link active" aria-current="page" href="index.php">Home</a></li>
				
		<li class="nav-item ">
			<a class="nav-link" href="APPUNTI.php">Appunti</a></li>
		<li class="nav-item ">
			<a class="nav-link" href="chiSiamo.html">Chi Siamo</a></li>
			<?php
					if(isset($_SESSION['id'])) {
						
						?>
					    <li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="profile.php" id="navbarDropdownAppunti" role="button" data-toggle="dropdown"
							aria-haspopup="true" aria-expanded="false"> <?php echo($_SESSION['username']) ?> </a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdownAppunti">
							<a class="dropdown-item" href="profile.php"> Il tuo profilo </a>
						</li>
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

<!---image--->
<div class="jumbotron" style="height: 600px;  padding-top: 150px;" >
<!-- search bar-->

<h1 class="text-center" style="color: aliceblue;">La Rivoluzione degli appunti è appena iniziata!</h1>
<p class="text-center" style="color: aliceblue;">Potenzia al meglio il tuo studio con la raccolta di appunti di Studify!</p>

<div class="bmi">
<div data-aos="flip-left"
     data-aos-easing="ease-out-cubic"
     data-aos-duration="2000">

<div class="container">
		<div class= "input-group">
			<input type="text" id="barraRicerca" class="form-control" placeholder="Cerca Appunti, Lezioni e molto altro...">
			
			<div class ="input-group-btn">
				      
				<button style="background-color:navy;"    class="btn btn-lg btn-primary" name="bottoneCerca" type="submit" onclick="ricerca()">Cerca</button>		
				</div>
			</div>
			<br>
			<div class="container" id="elencoRoba" >
				<br>
						<ul id="elenco" class="menu">
							<li class="primo">
									Informatica
										<ul class="sub-menu">
											<li class="dropdown-item" href="informatica.php">
											<a  href="informatica.php" >Appunti Informatica </a>
												<ul class="sub-menu">
													<li class="dropdown-item" href="#"> Ingegneria del Software </li>
													<li class="dropdown-item" href="#"> Basi di Dati II </li>
												</ul>
											</li>
											<li class="dropdown-item" href="videoinfo.html">
												<a href="videoinfo.html"> Video Informatica</a>
											</li>
										</ul>
							</li>
							<li class="primo">
									Economia
										<ul class="sub-menu" >
											<li class="dropdown-item" href="#">Appunti Economia</li>
											<li class="dropdown-item" href="#">Video Economia</li>
											<li class="dropdown-item" href="#">FAQ Economia</li>
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

</div>
</div>

<div class=" text-center"data-aos="fade-up">
<div class="jumbotron" style="background-image: url();">
<h2> &#128218 Trova ciò che cerchi navigando attraverso le nostre sezioni! &#128218</h2>
</div>
</div>


<div class="bmi">
	<div class="card-deck" >
		<div class="card" data-aos="flip-left">
		  <img class="card-img-top" src="/Studify/img/home2.png" alt="Card image cap">
		  <div class="card-body">
			<h5 class="card-title">Appunti & Libri</h5>
			<p class="card-text" > <em>Porta il tuo studio verso un'altra dimensione con la raccolta di appunti universitari Studify!
				<br>
				Sfoglia migliaia di documenti di ogni materia e facoltà!.
				</em></p>
				<a href="/Studify/APPUNTI.php" style="background-color:lightgray;" class="btn btn-light">Vai agli appunti</a>

			<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
		  </div>
		</div>
		<div class="card" data-aos="flip-left">
		  <img class="card-img-top" src="/Studify/img/home1.png" alt="Card image cap">
		  <div class="card-body">
			<h5 class="card-title">Videolezioni</h5>
			<p class="card-text"><em>Ti presentiamo la nostra nuova sezione dedicata alle videolezioni selezionate direttamente dalla nostra community.
		Cosa aspetti, entra subito!</em>  </p>
		<br>
		<a href="videoinfo.html" class="btn btn-light" style="background-color:lightgrey" >Videolezioni</a>
			<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
		  </div>
		</div>
		<div class="card"data-aos="flip-left"  >
		  <img class="card-img-top" src="/Studify/img/discord.jpg" alt="Card image cap">
		  <div class="card-body">
			<h5 class="card-title">Server Studenti</h5>
			<p class="card-text"><em>Entra nel server Discord, potrai studiare in compagnia nelle apposite stanze (testuali/vocali),
									prenderti una pausa e fare amicizia nella "terrazza virtuale". Potrai studiare in compagnia 
									anche comodamente dal tuo dispositivo.
			</em></p>
			

			
			<a href="https://discord.gg/hrwyUy7G9v" class="btn btn-light" style="background-color:lightgray;">Vai al Server</a>

			<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
		  </div>
		</div>
	  </div>
</div>
</div>
<div class=" text-center" data-aos="fade-up" >
	<h2>  Vivi la migliore esperienza di studio possibile.   </h2>
	</div>
	
       
<div class="bmi">
	<div data-aos="fade-right">

        <hr class="featurette-divider" data-aos="slide-right">

        <div class="row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading" data-aos="slide-right"  >Migliora il tuo workflow </h2>
            <p class="lead" data-aos="slide-right">Da oggi cambia il modo di studiare, segui le videolezioni online, sfoglia migliaia di documenti e mettiti alla prova con i tuoi compagni!
			Ti presentiamo la piu grande raccolta di appunti offerta da una community italiana.
					Completamente gratuita e visionabile dal tuo account.
					Potrai finalmente avere tra le mani tutto ciò di cui avevi bisogno per affrontare i tuoi esami.
					Non accontentarti di un misero 18 scegli la raccolta Studify! </p>
          </div>
          <div class="col-md-5">
            <img  data-aos="zoom-in-up"class="featurette-image img-fluid mx-auto" src="/Studify/img/ragazzoimmage.jpg" alt="Generic placeholder image">
          </div>
        </div>
	</div>
        <hr class="featurette-divider">
		

        <div class="row featurette">
          <div class="col-md-7 order-md-2">
				
            <h2 data-aos="slide-left" class="featurette-heading">Studiare non è mai stato cosi social!</h2>
            <p  data-aos="slide-left" class="lead">La nostra community vanta un gran numero di studenti attivi in tutta italia.
				Abbiamo studenti da ogni parte di italia di qualsiasi facoltà.
				Puoi fare amicizia con loro oppure crearti un gruppo di studio indipendente.
				Inoltre disponiamo di stanze Discord di ogni materia nelle quali potrai confrontarti con colleghi provenienti da ogni parte di italia.
			
			</p>
			<a  data-aos="zoom-in-up" href="https://discord.gg/hrwyUy7G9v" class="btn btn-light" style="background-color:lightgrey" >Entra</a> 

          </div>
          <div class="col-md-5 order-md-1">
            <img  data-aos="zoom-out-right" class="featurette-image img-fluid mx-auto" src="/Studify/img/student-school-boy-studying-computer-online-lesson-education-vector-concept-student-school-boy-studying-computer-114522764.jpg" alt="Generic placeholder image">
          </div>
        </div>

        <hr class="featurette-divider">
</div>




 

<!---                                   Footer                                     -->
<footer class="bg-light text-center text-black" style="background-color: antiquewhite;">
	<div class="container p-4">
	  <!-- Sezione: Social media -->
	  <section class="mb-4">
		<!-- Discord -->
		<a class="btn btn-outline-dark btn-floating m-1" href="https://discord.gg/hrwyUy7G9v" role="button"
		  ><i class="fab fa-discord"></i
		
		<!-- Facebook -->
		<a class="btn btn-outline-dark btn-floating m-1" href="https://www.facebook.com/" role="button"
		  ><i class="fab fa-facebook-f"></i
		></a>
  
		<!-- Twitter -->
		<a class="btn btn-outline-dark btn-floating m-1" href="https://twitter.com/?lang=it" role="button" 
		  ><i class="fab fa-twitter"></i
		></a>
  
		<!-- Google -->
		<a class="btn btn-outline-dark btn-floating m-1" href="#!" role="button"
		  ><i class="fab fa-google"></i
		></a>
  
		<!-- Instagram -->
		<a class="btn btn-outline-dark btn-floating m-1" href="https://www.instagram.com/" role="button"
		  ><i class="fab fa-instagram"></i
		></a>
  
		<!-- Linkedin -->
		<a class="btn btn-outline-dark  btn-floating m-1" href="https://it.linkedin.com/" role="button"
		  ><i class="fab fa-linkedin-in"></i
		></a>
  
		<!-- Github -->
		<a class="btn btn-outline-dark btn-floating m-1" href="https://github.com/DdIUMmies/Studify" role="button"
		  ><i class="fab fa-github"></i
		></a>
	  </section>
  
<!--                  Newsletter                -->
	  <section class="">
		<form action=""> 
		  <div class="row d-flex justify-content-center">
			<div class="col-auto">
			  <p class="pt-2">
				<strong>Iscriviti alla newsletter!</strong>
			  </p>
			</div>

			<div class="col-md-5 col-12">
			  <div class="form-outline form-dark mb-4">
				<input type="email" id="form5Example2" class="form-control" />
				<label class="form-label" for="form5Example2">Email </label>
			  </div>
			</div>
  
			<div class="col-auto">
			  <button type="submit" class="btn btn-outline-dark mb-4">
				Iscriviti
			  </button>
			</div>
		  </div>
		</form>
	  </section>

	  <section class="mb-4">
		<p>
		  Questo sito è stato progettato per il corso di linguaggi e tecnologie per il web del corso di laurea in Ingegneria 
		  Informatica de La Sapienza di Roma. Anche se è stato fatto a scopo didattico, i contenuti sono proprietà intellettuale dei suoi creatori e ne è vietata la duplicazione 
		  (parziale o totale) senza l'esplicito consenso di essi.
		</p>
	  </section>

<!--             Copyright                 -->
	<div class="text-center p-3" >
	  © 2021 Copyright:
	  <a class="text-dark" href="https://mdbootstrap.com/">Studify.it</a>
	</div>
  </footer>
</body>
</html>

<script>
	 AOS.init({
		duration:1000,
		offset:120,
		easing: 'ease-in-out'

	});
	</script>



<script>
    $(document).ready(function(){
      $(".btn1").click(function(){
        $("pp").hide(1000);
      });
      $(".btn2").click(function(){
        $("pp").show(1000);
      });
    });
    </script>