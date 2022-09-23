<!doctype html>
<html lang="fr">

  <head>
    <title>Flying Food</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <link href="https://fonts.googleapis.com/css?family=DM+Sans:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="css/aos.css">
	
    <link rel="stylesheet" href="css/style_background.css">
	
    <!-- MAIN CSS -->
    <link rel="stylesheet" href="css/style.css">
	
	<link rel="icon" href="images/icone.ico" />
	
	<link rel="stylesheet" href="css/shop_style.css">
	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

  </head>
  
  

  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

    <!-- NAVBAR -->
    <div class="site-wrap" id="home-section">

      <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
          <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
          </div>
        </div>
        <div class="site-mobile-menu-body"></div>
      </div>



      <header class="site-navbar site-navbar-target" role="banner">

        <div class="container">
          <div class="row align-items-center position-relative">

            <div class="col-3 ">
              <div class="site-logo">
                <img class="img-fluid" src="images/baniere_blanc.png" href="index.html">
              </div>
            </div>

            <div class="col-9  text-right">
              

              <span class="d-inline-block d-lg-none"><a href="#" class="text-white site-menu-toggle js-menu-toggle py-5 text-white"><span class="icon-menu h3 text-white"></span></a></span>

              

              <nav class="site-navigation text-right ml-auto d-none d-lg-block" role="navigation">
                <ul class="site-menu main-menu js-clone-nav ml-auto ">
                  <li><a href="index.html" class="nav-link">Accueil</a></li>
                  
                  <li class="active"><a href="shop.php" class="nav-link">Nos Produits</a></li>
                  <li><a href="about.html" class="nav-link">Notre Societe</a></li>
                  <li><a href="candidature.html" class="nav-link">Candidature</a></li>
                  <li><a href="contact.html" class="nav-link">Contact</a></li>
                </ul>
              </nav>
            </div>

            
          </div>
        </div>

      </header>

	 <!-- Message liste produits -->
    <div class="ftco-blocks-cover-1">
      <div class="site-section-cover overlay background_img">
        <div class="container">
          <div class="row align-items-center justify-content-center text-center">
            <div class="col-md-7 animate__animated animate__fadeIn">
              <h1 class="mb-3">Nos Produits</h1>
              <p>Retrouvez ici la liste des produits que vous pouvez commander sur notre site.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
	
	 <!-- Affichage infos produit -->
    <div class="site-section bg-light">
        <div class="container">
			
			<div class="infos_bg shadow border rounded">
					
				<?php
					$servername = "marvynlmarvyn.mysql.db";
					$username = "marvynlmarvyn";
					$password = "Pelican69";
					$dbname = "marvynlmarvyn";

					// création de la connexion
					$conn = new mysqli($servername, $username, $password, $dbname);
					// vérification de la connexion
					if ($conn->connect_error) {
					  die("Error: " . $conn->connect_error);
					}
					
					$id = $conn -> real_escape_string($_GET['article']);
					

					$sql = "SELECT id, name, quantity, mass, price, image_url, product_desc, ingredients FROM food where id ='$id'"; // récupèration des infos de l'article avec l'id envoyé par la page précèdente lors du clique sur le bouton infos
					$result = $conn->query($sql);

					if ($result->num_rows > 0) {
					  // récupération et affichage des infos de l'article
					  while($row = $result->fetch_assoc()) {
						echo "<hr><h1 class='text-center'>" . $row["name"] . "</h1><hr><br><div class='row'><div class='col-md-7'>";
						echo "<img src='" . $row["image_url"] . "' class='img-fluid rounded'></div><div class='col-md-5'><hr><h2>Présentation</h2><hr>";
						echo "<p>" . $row["product_desc"] . "</p><hr><h2>Ingrédients</h2><hr><p>" . $row["ingredients"] . "</p></div></div>";
					  }
					} else {
					  echo "Aucun article disponible";
					}
					$conn->close();
				?>
			

						
					
				
				
				
			</div>
				
        </div>
    </div>


   
    

    
	 <!-- PARTIE RECRUTEMENT -->
    <div class="site-section section-3 background_img2">
      <div class="container">
        <div class="row justify-content-center text-center">
          <div class="col-7 text-center mb-5">
            <h2 class="text-white scissors primary-color-icon text-center">Nous recrutons</h2>
            <p class="lead text-white mb-5">L'équipe de Flying Food recrute activement des membres, vous pouvez dès maintenant envoyer votre cv</p>
            <p><a href="candidature.html" class="btn btn-primary">Candidater</a></p>
          </div>
        </div>
      </div>
    </div>

    
	<!-- FOOTER -->
    <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-3">
           <!--  <img src="images/img_1.jpg" alt="Image" class="img-fluid mb-5"> -->
            <h2 class="footer-heading mb-3">Nos objectifs</h2>
                <p>Nous avons pour devoir de vous donner la satisfaction la plus complète en ne livrant que de la nouriture de qualitée et ce rapidement </p>
          </div>
          <div class="col-lg-8 ml-auto">
            <div class="row">
              <div class="col-lg-6 ml-auto">
                <h2 class="footer-heading mb-4">Liens rapides</h2>
                <ul class="list-unstyled">
                  <li><a href="about.html">Qui sommes-nous ?</a></li>
                  <li><a href="index.html#avis">Avis</a></li>
                  <li><a href="#">Terms of Service</a></li>
                  <li><a href="candidature.html">Candidater</a></li>
                  <li><a href="contact.html">Nous contacter</a></li>
                </ul>
              </div>
              <div class="col-lg-6">
                <h2 class="footer-heading mb-4">Newsletter</h2>
                <form action="#" class="d-flex" class="subscribe">
                  <input type="text" class="form-control mr-3" placeholder="Email">
                  <input type="submit" value="S'abonner" class="btn btn-primary">
                </form>
              </div>
              
            </div>
          </div>
        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <div class="border-top pt-5">
              <p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | <a href="index.html" target="_blank" >Flying Food INC</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
            </div>
          </div>

        </div>
      </div>
    </footer>

    </div>

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/jquery-migrate-3.0.0.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/jquery.fancybox.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/bootstrap-datepicker.min.js"></script>
    <script src="js/aos.js"></script>

    <script src="js/main.js"></script>

  </body>

</html>

