<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Mannaz Conseils - Page d'accueil</title>
	<!-- Bootstrap CSS-->
	<link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/custom/css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- Font -->
	<link type="text/css" href="http://fonts.googleapis.com/css?family=Lato:300,700"/>
	<!-- FavIcon -->
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url(); ?>assets/favicon/mannaz-12.png">
	<link rel="manifest" href="<?php echo base_url(); ?>assets/favicon/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="<?php echo base_url(); ?>assets/favicon/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
	<?php
	if ($style != '') {
		echo "<link rel=\"stylesheet\" href=" . base_url() . "assets/custom/css/" . $style . ".css>";
	}
	?>
</head>

<!-- NE PAS TOUCHER EN HAUT -->

<header>
	<!-- LA BARRE DE NAVIGATION DEBUT -->
	<div id="navigation">
		<ul>
			<li><a href="<?php echo base_url('') ?>"><img id="logotop" src="<?php echo base_url(); ?>assets/img/mannaz-11.png"></a></li>
			<li><a href="<?php echo base_url('') ?>"><a style="color:#FF8F71" href="">Accueil</a></li>
			<li><a style="margin-right:20px"href="">Développement personnel</a></li>
			<li><a style="margin-right:20px"href="">Qu'est ce que Mannaz ?</a></li>
			<li><a style="margin-right:20px"href="">Mon approche</a></li>
			<li><a style="margin-right:20px"href="">Blog</a></li>
			<li><a href="<?php echo base_url('') ?>"><img style="height: 15px; width: 15px;"id="i" src="<?php echo base_url(); ?>assets/img/i.svg"><img style="height: 15px; width: 15px; margin-left: 18px" id="f" src="<?php echo base_url(); ?>assets/img/f.svg"><img style="height: 22px; width: 22px; margin-left: 18px"id="in" src="<?php echo base_url(); ?>assets/img/in.svg"></a></li>
			<li><input id="connexion" type="button" value="Connexion">
            

		</ul>
	</div>

	<!-- LA BARRE DE NAVIGATION FIN -->
</header>
<div id="video">
	<video controls>
    <source src="\assets\img\video.png"
            type="video/webm">
    <source src="\assets\img\video.png"
            type="video/mp4">
    Sorry, your browser doesn't support embedded videos.
</video>
</div>
<div id="thema">
	<p id="thema_1">Différentes thématiques que nous pourrions aborder ensemble</p>
	<p ip="thema_2">Survolez les illustrations</p>
</div>
<!-- Footer -->

			<!-- Grid row-->
			<div class="row py-4 d-flex align-items-center">
				<!-- Grid column -->

				<!-- Grid column -->
				<div class="col-md-6 col-lg-7 text-center text-md-right">

					<!-- Facebook -->
					<a class="fb-ic" href="#"> <i class="fa fa-facebook whiteicon mr-4"> </i> </a>
					<!-- Twitter -->
					<a class="tw-ic" href="#"> <i class="fa fa-twitter whiteicon mr-4"> </i> </a>
					<!--Instagram-->
					<a class="ins-ic" href="#"> <i class="fa fa-instagram whiteicon mr-4"> </i> </a>

				</div>
				<!-- Grid column -->

			</div>
			<!-- Grid row-->

		</div>
	</div>

	<!-- Footer Links -->
	<div class="container text-center text-md-left mt-5">

		<!-- Grid row -->
		<div class="row mt-3">

			<!-- Grid column -->
			<div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">

				<!-- Content -->
				<h6 class="text-uppercase font-weight-bold">Mannaz</h6>
				<p>L'équilibre naît de l'action.</p>

			</div>
			<!-- Grid column -->
			<div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">

				<!-- Links -->
				<h6 class="text-uppercase font-weight-bold">onglet 1</h6>
				<p class="footerSecText">
					<a href="<?php echo base_url('/sneakers') ?>">onglet 2</a>
				</p>
				<p class="footerSecText">
					<a href="#!">onglet 3</a>
				</p>
				<p class="footerSecText">
					<a href="#!">onglet 4</a>
				</p>

			</div>
			<!-- Grid column -->

			<!-- Grid column -->
			<div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">

				<!-- Links -->
				<h6 class="text-uppercase font-weight-bold">Liens 1</h6>
				<p class="footerSecText">
					<a href="#!">Liens 2</a>
				</p>
				<p class="footerSecText">
					<a href="#!">Liens 3</a>
				</p>
				<p class="footerSecText">
					<a href="#!">Liens 4</a>
				</p>

			</div>
			<!-- Grid column -->

			<!-- Grid column -->
			<div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">

				<!-- Links -->
				<h6 class="text-uppercase font-weight-bold">Contact</h6>
				<p>
					<i class="fa fa-home mr-3"></i> Aix-En-Provence 13090 FR</p>
				<p>
					<i class="fa fa-envelope mr-3"></i> hello@mannaz.com</p>
				<p>
					<i class="fa fa-phone mr-3"></i> + 33 11 11 11 11</p>

			</div>
			<!-- Grid column -->

		</div>
		<!-- Grid row -->

	</div>
	<!-- Footer Links -->

	<!-- Copyright -->
	<div class="footer-copyright text-center py-3 sec_footer">© 2019 Copyright: <a href="<?php echo base_url('') ?>"> Mannaz.fr</a>
	</div>
	<!-- Copyright -->

</footer>
<!-- Footer -->
<!-- NE PAS TOUCHER EN BAS -->
<!-- jQuery-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Bootstrap JS-->
<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>assets/custom/js/display_searchbar.js"></script>
<?php
if ($script != '') {
	echo "<script src=\"" . base_url() . "assets/custom/js/" . $script . ".js\"></script>";
}
?>

<?php
if ($this->session->flashdata('error_ins')) {
	echo "<script>$('#inscriptionModal').modal('show');</script>";
} else {
	if ($this->session->flashdata('error_ident')) {
		echo "<script>$('#myModal').modal('show');</script>";
	}
}
?>
</body>
</html>

