
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
    <script src="https://kit.fontawesome.com/797356307c.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

  </head>
  <body>

    <!---nav bar --->
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
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownAppunti" role="button" data-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false">Appunti</a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownAppunti">
                  <a class="dropdown-item" href="#">Informatica</a>
                  <a class="dropdown-item" href="#">Psicologia</a>
                  <a class="dropdown-item" href="#">Economia</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Altre facoltà</a>
          <li class="nav-item active ">
              <a class="nav-link" href="FAQ.html">FAQ</a></li>
          <li class="nav-item active ">
              <a class="nav-link" href="#">Lavora con noi</a></li>
          <li class="nav-item active">
              <a class="nav-link" href="registrazione/index.html" > <?php
            $nome=$_GET['name'];
            echo "$nome";
            ?>  </a></li>
          <li class="nav-item active">
              <a class="btn btn-primary" style="background-color: navy;" href="login/index.html">Esci</a></li>
          
      </ul>
  </nav>

    <br>
    <div class="container">
    <div class="jumbotron " style="background-image: url(/Studify/img/sfondo.png);">
    
      <div class="text-center">
          <h2>Buongiorno 
            <?php
            $nome=$_GET['name'];
            echo "$nome";
            ?> 
            &#128104;&#8205;&#127891; </h2></div>
      </div>

    </div>



    <div class="container">
      <div class="main-body">
      
     
            <!-- /Breadcrumb -->
      
            <div class="row gutters-sm">
              <div class="col-md-4 mb-3">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex flex-column align-items-center text-center">
                      <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150">
                      <div class="mt-3">
                        <h4>
                          <?php
                            $nome=$_GET['name'];
                            echo "$nome";
                          ?> 
                        </h4>
                        <p class="text-secondary mb-1">Studente Informatica presso "La Sapienza"</p>
                        <p class="text-muted font-size-sm">Italy Rome</p>
                        <button class="btn btn-outline-primary"><i class="fa fa-star" aria-hidden="true"></i></button>
                        <div class="btn btn-outline-primary">Message</button>
                      </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card mt-3">
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                      <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-globe mr-2 icon-inline"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg>Website</h6>
                      <span class="text-secondary">https://djdipech.com</span>
                    </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                      <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-twitter mr-2 icon-inline text-info"><path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path></svg>Twitter</h6>
                      <span class="text-secondary"></span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                      <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-instagram mr-2 icon-inline text-danger"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg>Instagram</h6>
                      <span class="text-secondary">alessandro_dipatria</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                      <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook mr-2 icon-inline text-primary"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg>Facebook</h6>
                      <span class="text-secondary">Alessandro Di Patria</span>
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
                          $nome=$_GET['name'];
                          $cognome=$_GET['surname'];
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
                        Universita degli studi "La Sapienza Roma"
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-sm-3">
                        <h6 class="mb-0">Corso Di Studi</h6>
                      </div>
                      <div class="col-sm-9 text-secondary">
                       Informatica L-31
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
                            $email=$_GET['emailadd'];
                            echo "$email";
                        ?> 
                      </div>
                    
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-sm-3">
                        <h6 class="mb-0">Mobile</h6>
                      </div>
                      <div class="col-sm-9 text-secondary">
                        3462434456
                      </div>
                    </div>
                    
                    <hr>
                    <div class="row">
                      <div class="col-sm-3">
                        <h6 class="mb-0">Address</h6>
                      </div>
                      <div class="col-sm-9 text-secondary">
                       via mameli 90 Roma 
                      </div>
                    </div>
                    
                  </div>
                </div>
                




             
            </ul>
            
          </div>
          </div>


    </div>

 
      </div>

      <div class=" text-center">
        <div class="container">
          <div class="jumbotron" style="background-image: url(/Studify/img/sfondo.png);">
        <h2> Documenti e Appunti caricati &#128218</h2>
        </div>
        </div>
      </div>

      <div class="album py-5 bg-light">
        <div class="container">

          <div class="row">
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="/Studify/img/basididati.jpg"  alt="Basi di Dati ">
              
                <div class="card-body">
                  <h5 > Libro Basi di Dati</h5>
                  <p class="card-text">Libro di Basi di dati del corso di informatica presso la sapienza.</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary" >Visualizza</button>
                      <button type="button" class="btn btn-sm btn-outline-secondary">Modifica</button>
                      <button class="btn btn-outline-primary"><i class="fa fa-heart" aria-hidden="true"></i>
                    </div>
                    <small class="text-muted">ora</small>
                  </div>
               
              </div>
            </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="/Studify/img/ingegneria.jpg" alt="Ingegneria del software">
                <div class="card-body">
                  <h5>Agile Process</h5>
                  <p class="card-text">Appunti di ingegneria del software "Agile Process".</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                     
                      <button type="button" class="btn btn-sm btn-outline-secondary">Visualizza</button>
                      <button type="button" class="btn btn-sm btn-outline-secondary">Modifica</button>
                      <button><i onclick="myFunction(this)" class="fa fa-thumbs-up" style="color: blue; background-color: white;"></i></button>
                      
                    </div>
                    <small class="text-muted">9 mins</small>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="/Studify/img/shitcoin.jpg" alt="Finanza e Marketing ">
                <div class="card-body">
                  <h5>Bitcoin & Criptocurrency</h5>
                  <p class="card-text">Appunti trovati online su bitcoin etherium e shitcoin varie.</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                      <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                    </div>
                    <div class="container">
                      <i id="btn" class="far fa fa-heart"></i>
                    </div>
                     
                      
                    </div>
                    <small class="text-muted">9 mins</small>
                  </div>
                </div>
              </div>
            </div>
        </div>
        <div class="container">
        
   
        <a class="btn btn-light btn-block"  style="border-color:lightblue;" href="/Studify/formappunti.html" role="button">Carica Documento</a>

        <br>
        </div>
        </div>
      </div>
      
            
              
      
                 
                    
                     
        <br>
                    
                  
 
            
    </main>

    

  
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



<!---JAVASCRIPT FUNCTIONS-->


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


