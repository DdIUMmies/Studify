<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Studifyt</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
        <link href="../stylelogin.css" rel="stylesheet">
        <link rel="stylesheet" href="https://m.w3newbie.com/you-tube.css">
        <script type="text/javascript" lang="javascript" src="script.js"></script>
    </head>
    <body class="text-center">
        <nav class="navbar navbar-expand-md navbar-light bg-light sticky top">
            <nav class="navbar navbar-light bg-light">
              <div class="container">
                <a class="navbar-brand" href="index.html">
                  <img
                    src="../img/logo_small.png"
                    height="50"
                    alt=""
                    loading="lazy"
                  />
                </a>
              </div>
            </nav>
        
            </button>
        
            <div class="collapse navbar-collapse" id="collapseResponsive"></div>
            <ul class="navbar-nav ml-auto"> <!--per fare le scritte vicino la home-->
            <li class="nav-item active ">
                <a class="nav-link" href="../index.html">Home</a>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="../profile.php" id="navbarDropdownAppunti" role="button" data-toggle="dropdown"
                         aria-haspopup="true" aria-expanded="false">Il mio account</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownAppunti">
                        <a class="dropdown-item" href="../profile.php">I tuoi appunti </a>
                        <a class="dropdown-item" href="#">entra</a>
                        <a class="dropdown-item" href="#">esci</a>
                        <div class="dropdown-divider"></div>
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
                    <a class="nav-link" href="#">FAQ</a>
                <li class="nav-item active ">
                    <a class="nav-link" href="#">Lavora con noi</a>
                </ul>
        
        
            </div>
        </nav>
        <br>
        <div class="row">
            <div class="col-4">
              <div class="card h-100">
                <div class="card-body">
                  <p class="card-text">
                        <form method="POST" action="login.php" class="form-signin" name="myForm" onsubmit="return validaForm()">
                            <h1> Accedi </h1>
                            <input type="email" name="inputEmail" placeholder="Email" class="form-control" required>
                            <input type="password" name="inputPassword" placeholder="Password" class="form-control" required>
                            
                            <div id="divRemember" class="checkbox mb-3">
                                <input type="checkbox" name="remember">
                                <label for="remember">Ricordami per la prossima volta</label>
                            </div>
                            <input class="btn btn-lg btn-primary" name="loginButton" type="submit" style="width: auto;" value="Accedi"></input>

                        
                    </form>
                    <li class="nav-item active">    
                        Non hai un account esistente? Allora
                        <a class="btn btn-primary" href="../registrazione/index.html"> Registrati! </a>
                  </p>
                </div>
              </div>
            </div>
    </body>
</html>