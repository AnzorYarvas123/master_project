<?php
require_once '../config.php';
require_once '../functions.php';
?>
<!DOCTYPE html>
<html lang="en">

<!-- Head -->
<?php
$pageName = "kabardino-balkaria cities";
require_once '../layout/head.php';

if (!isset($_SESSION)) {
    session_start();
}


?>



<!DOCTYPE HTML>

<html>
	<head>
		
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->


				<!-- Main -->
					<div id="main">
						<article class="thumb">
							<a href="images/white-house5.jpg" class="image"><img src="images/white-house5.jpg" alt="" /></a>
							<h1>Nalchik</h1>
						</article>
						<article class="thumb">
							<a href="cities/Tyrnyauz.jpg" class="image"><img src="cities/Tyrnyauz.jpg" alt="" /></a>
							<h1>Tyrnyauz</h1>
						</article>
						<article class="thumb">
							<a href="./cities/Maysky.jpg" class="image"><img src="./cities/Maysky.jpg" alt="" /></a>
							<h1>Maysky</h1>
						</article>
						<article class="thumb">
							<a href="./cities/Prokhladneny.jpg" class="image"><img src="./cities/Prokhladneny.jpg" alt="" /></a>
							<h1>Prokhladneny</h1>
						</article>
						<article class="thumb">
							<a href="cities/Chegem.jpg" class="image"><img src="cities/Chegem.jpg" alt="" /></a>
							<h1>Chegem</h1>
						</article>
						<article class="thumb">
							<a href="./cities/Baksan.png" class="image"><img src="./cities/Baksan.png" alt="" /></a>
							<h1>Bakhsan</h1>
						</article>
						<article class="thumb">
							<a href="./cities/Terek.jpg" class="image"><img src="./cities/Terek.jpg" alt="" /></a>
							<h1>Terek</h1>
						</article>
						<article class="thumb">
							<a href="./cities/NartKala.jpg" class="image"><img src="./cities/NartKala.jpg" alt="" /></a>
							<h1>Nart Kala</h1>
						</article>
						<article class="thumb">
							<a href="./cities/Nartan.jpg" class="image"><img src="./cities/Nartan.jpg" alt="" /></a>
							<h1>Nartan</h1>
						</article>
					</div>

				
	

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.poptrox.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>