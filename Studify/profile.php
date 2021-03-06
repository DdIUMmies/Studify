<?php
  session_start();

  if(isset($_SESSION['id'])) { // Se l'utente è loggato, mostra il profilo
    ?>
    <?php $dbconn= pg_connect("host=localhost port=5432
    dbname=StudifyDB
    user=postgres password=password")
    or die('Impossibile connettersi: '.pg_last_error());?>


<!DOCTYPE html >
<head>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Studify</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <link href="profile.css" rel="stylesheet">
    <link rel="stylesheet" href="https://m.w3newbie.com/you-tube.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/Studify/all.css">
    <script src="https://kit.fontawesome.com/797356307c.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script> src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"</script>
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

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
			<a class="nav-link" href="index.php">Home</a></li>
				
		<li class="nav-item ">
			<a class="nav-link" href="APPUNTI.php">Appunti</a></li>
		<li class="nav-item ">
			<a class="nav-link" href="chiSiamo.html">Chi Siamo</a></li>
			<?php
					if(isset($_SESSION['id'])) {
						
						?>
					    <li class="nav-item dropdown">
							<a class="nav-link active dropdown-toggle" href="profile.php" id="navbarDropdownAppunti" role="button" data-toggle="dropdown"
							aria-haspopup="true" aria-expanded="false"> <?php echo($_SESSION['username']) ?> </a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdownAppunti">
							<a class="dropdown-item " href="profile.php"> Il tuo profilo </a>
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
<br>
<div data-aos="fade-right" class="container ">
<div class="jumbotron-fluid" style="background-image:url(/Studify/img/school.jpg)">
    <br>
    <br>
    
    
      <div class="text-center">
          <h2>Buongiorno 
            <?php
            $username=$_SESSION['username'];
            echo "$username";
            ?> 
            &#128104;&#8205;&#127891; </h2></div>
            <br>
    <br>
      </div>

    </div>
    </div>

    <br>

      <br>
      <div class="row">
        
      </div>
      
 



    <div class="container">
      <div class="main-body">
        <div class="text-center">

        </div>
     
            <!-- Breadcrumb -->
      
            <div class="row gutters-sm">
              <div class="col-md-4 mb-3">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex flex-column align-items-center text-center">
                      <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150">
                      <div class="mt-3">
                        <h4>
                          <?php
                            $username=$_SESSION['username'];
                            echo "$username";
                          ?> 
                        </h4>
                        <p class="text-secondary mb-1">Studente di <?php
                            $corso=$_SESSION['corso'];
                            echo "$corso";
                          ?> presso <?php
                          $universita=$_SESSION['universita'];
                          echo "$universita";
                        ?> </p>
                        
                        
                      <br>
                      <br>
                      <a href="/Studify/modificaProfilo.html"><button type="button" class="btn btn-light" style="background-color:whitesmoke">Modifica Informazioni personali </button></a>
                      

                      </div>
                    </div>
                  </div>
                </div>
                <div class="card mt-3">
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                      <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-globe mr-2 icon-inline"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg>Website</h6>
                      <span class="text-secondary"><?php
                          if (isset($_SESSION['sito'])) {
                            $sito=$_SESSION['sito'];
                            echo $sito; }
                          else {
                            echo ("");
                          }
                        ?></span>
                    </li>
                      <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                      <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-twitter mr-2 icon-inline text-info"><path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path></svg>Twitter</h6>
                      <span class="text-secondary"></span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                      <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-instagram mr-2 icon-inline text-danger"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg>Instagram</h6>
                      <span class="text-secondary"><?php
                          if (isset($_SESSION['instagram'])) {
                            $instagram=$_SESSION['instagram'];
                            echo $instagram; }
                          else {
                            echo ("");
                          } ?> </span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                      <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook mr-2 icon-inline text-primary"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg>Facebook</h6>
                      <span class="text-secondary"><?php
                          if (isset($_SESSION['facebook'])) {
                            $facebook=$_SESSION['facebook'];
                            echo $facebook; }
                          else {
                            echo ("");
                          }
                        ?></span>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="col-md-8">
                <div class="card mb-3">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-sm-3">
                        <h6 class="mb-0">Full Name</h6>
                      </div>
                      <div class="col-sm-9 text-secondary">
                        <?php
                          $nome=$_SESSION['nome'];
                          $cognome=$_SESSION['cognome'];
                          echo "$cognome, $nome";
                        ?> 
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-sm-3">
                        <h6 class="mb-0">Università</h6>
                      </div>
                      <div class="col-sm-9 text-secondary">
                        <?php
                          $universita=$_SESSION['universita'];
                          echo "$universita";
                        ?> 
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-sm-3">
                        <h6 class="mb-0">Corso Di Studi</h6>
                      </div>
                      <div class="col-sm-9 text-secondary">
                        <?php
                          $corso=$_SESSION['corso'];
                          echo "$corso";
                        ?> 
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-sm-3">
                        <h6 class="mb-0">
                          Indirizzo email
                        </h6>
                      </div>
                      <div class="col-sm-9 text-secondary">
                        <?php
                            $email=$_SESSION['email'];
                            echo "$email";
                        ?> 
                      </div>
                    
                    </div>
                    <hr>
                    
                  </div>
                </div>
            </ul>
          </div>
          </div>
    </div>
      </div>
      <div class="container">

      <div class=" text-center">
      <div data-aos="fade-right" class="container ">
<div class="jumbotron-fluid" style="background-image:url(/Studify/img/school.jpg)">
    <br>
    <br>
    
    
      <div class="text-center">
        <h3>I tuoi documenti</h3>
            <br>
    <br>
      </div>

    </div>
    </div>
    <br>
    <br>

<!-- Visualizza i documenti caricati dall'utente -->
      <?php
          $utente=$_SESSION['username'];
          $query_check="SELECT * FROM appunti app, utenti u WHERE app.utente='$utente'";
          $ris=pg_query($dbconn, $query_check);
          $num=pg_num_rows($ris);

          if ($num==0 || $num==-1) {
            echo ("");
          }

          else {
                ?>

      <div class="album py-5 bg-light">
        <div class="container">

          <div class="row">
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="/Studify/img/PDF_file_icon.jpg"  alt="Basi di Dati ">

                <div class="card-body">
                  <h5 ><?php 
                    $query_titolo_1="SELECT nome_documento FROM appunti app WHERE app.utente='$utente' ORDER BY id DESC";
                    $result=pg_query($dbconn,$query_titolo_1);
                    $titolo_1=pg_fetch_array($result,0,PGSQL_NUM);
                    echo $titolo_1[0];?></p></h5>

                  <p class="card-text">
                  <?php $query_descr_1="SELECT descrizione FROM appunti app WHERE app.utente='$utente' ORDER BY id DESC";
                    $result1=pg_query($dbconn,$query_descr_1);
                    $descr_1=pg_fetch_array($result1,0,PGSQL_NUM);
                    echo $descr_1[0];?></p>

                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary" >
                        <?php 
                          $query_file="SELECT * FROM appunti app WHERE app.nome_documento='$titolo_1[0]'";
                          $result0=pg_query($dbconn,$query_file);
                          $riga=pg_fetch_array($result0);
                          $nome_file=$riga['nome_file'];
                          echo "<a href=\"$nome_file\">Visualizza </a>";
                        ?>
                      </button>
                    <div>
                  </div>
              

                    </div>
                    <small class="text-muted">
                    <?php $query_categoria_1="SELECT categoria FROM appunti app WHERE app.utente='$utente' ORDER BY id DESC";
                    $result2=pg_query($dbconn,$query_categoria_1);
                    $categoria_1=pg_fetch_array($result2,0,PGSQL_NUM);
                    echo $categoria_1[0];?></small>
                  </div>
               
              </div>
            </div>
            </div>
            
            <div class="col-md-4">
            <?php
          $query_check="SELECT * FROM appunti app WHERE app.utente='$utente'";
          $ris=pg_query($dbconn, $query_check);
          $num=pg_num_rows($ris);

          if ($num<=1) {
            echo ("");
          }

          else { 
                ?>
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="/Studify/img/PDF_file_icon.jpg" alt="Ingegneria del software">
                <div class="card-body">
                  <h5><?php $query_titolo_2="SELECT nome_documento FROM appunti app WHERE app.utente='$utente' ORDER BY id DESC";
                    $result3=pg_query($dbconn,$query_titolo_2);
                    $titolo_2=pg_fetch_array($result3,1,PGSQL_NUM);
                    echo $titolo_2[0];?></h5>

                  <p class="card-text">
                  <?php $query_descr_2="SELECT descrizione FROM appunti app WHERE app.utente='$utente' ORDER BY id DESC";
                    $result4=pg_query($dbconn,$query_descr_2);
                    $descr_2=pg_fetch_array($result4,1,PGSQL_NUM);
                    echo $descr_2[0];?>
                  </p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                     
                      <button type="button" class="btn btn-sm btn-outline-secondary">
                        <?php 
                          $query_file="SELECT * FROM appunti app WHERE app.nome_documento='$titolo_2[0]'";
                          $result0=pg_query($dbconn,$query_file);
                          $riga=pg_fetch_array($result0);
                          $nome_file=$riga['nome_file'];
                          echo "<a href=\"$nome_file\">Visualizza </a>";
                        ?>
                      </button>
                    </div>

                    <small class="text-muted">
                    <?php $query_categoria_2="SELECT categoria FROM appunti app WHERE app.utente='$utente' ORDER BY id DESC";
                    $result5=pg_query($dbconn,$query_categoria_2);
                    $categoria_2=pg_fetch_array($result5,1,PGSQL_NUM);
                    echo $categoria_2[0];?>
                    </small>

                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-4">
            <?php
          $query_check="SELECT * FROM appunti app WHERE app.utente='$utente'";
          $ris=pg_query($dbconn, $query_check);
          $num=pg_num_rows($ris);

          if ($num<=2) {
            echo ("");
          }

          else {
                ?>
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="/Studify/img/PDF_file_icon.jpg" alt="Ingegneria del software">
                <div class="card-body">
                  <h5><?php $query_titolo_3="SELECT nome_documento FROM appunti app WHERE app.utente='$utente' ORDER BY id DESC";
                    $result6=pg_query($dbconn,$query_titolo_3);
                    $titolo_3=pg_fetch_array($result6,2,PGSQL_NUM);
                    echo $titolo_3[0];?></h5>

                  <p class="card-text">
                  <?php $query_descr_3="SELECT descrizione FROM appunti app WHERE app.utente='$utente' ORDER BY id DESC";
                    $result7=pg_query($dbconn,$query_descr_3);
                    $descr_3=pg_fetch_array($result7,2,PGSQL_NUM);
                    echo $descr_3[0];?>
                  </p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                     
                      <button type="button" class="btn btn-sm btn-outline-secondary">
                      <?php 
                          $query_file="SELECT * FROM appunti app WHERE app.nome_documento='$titolo_3[0]'";
                          $result0=pg_query($dbconn,$query_file);
                          $riga=pg_fetch_array($result0);
                          $nome_file=$riga['nome_file'];
                          echo "<a href=\"$nome_file\">Visualizza </a>";
                        ?>
                      </button>
                    </div>

                    <small class="text-muted">
                    <?php $query_categoria_3="SELECT categoria FROM appunti app WHERE app.utente='$utente' ORDER BY id DESC";
                    $result8=pg_query($dbconn,$query_categoria_3);
                    $categoria_3=pg_fetch_array($result8,2,PGSQL_NUM);
                    echo $categoria_3[0];?>
                    </small>

                  </div>
                </div>
              </div>
              
            </div>

            <?php
          }}}
    ?>
        </div>

        <div class="container">
        
   
        <a class="btn btn-light btn-block"  style="border-color:lightgrey;" href="/Studify/formappunti.php" role="button">Carica Documento</a>

        <br>
        </div>
        </div>
      </div>             
        <br>   

    </div>
        </div>
  </body>
</head>
</div>

<br>
<br>


<!--- Footer -->
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
  
<!--  Newsletter  -->
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

<!-- Copyright -->
	<div class="text-center p-3" >
	  © 2021 Copyright:
	  <a class="text-dark" href="https://mdbootstrap.com/">Studify.it</a>
	</div>
  </footer>
</body>
</html>

<script>
 $(document).ready(function(){
  $("#heart").click(function(){
    if($("#heart").hasClass("liked")){
      $("#heart").html('<i class="fa fa-heart-o" aria-hidden="true"></i>');
      $("#heart").removeClass("liked");
    }else{
      $("#heart").html('<i class="fa fa-heart" aria-hidden="true"></i>');
      $("#heart").addClass("liked");
    }
  });
});
</script>

    <?php

} else { // Se l'utente non è loggato, reindirizzalo 
    header("Location: noAccess.html");
    ?>
    <form action="login/index.php" method="post">
    <input type="submit" value="Login"/>
    </form>
    <?php
}
?>

<script>
	 AOS.init({
		duration:1000,
		offset:120,
		easing: 'ease-in-out'

	});
	</script>