<?php
require_once './config.php';
require_once './functions.php';
?>
<!DOCTYPE html>
<html lang="en">

<!-- Head -->
<?php
$pageName = "Circassian music";
require_once './layout/head.php';

if (!isset($_SESSION)) {
    session_start();
}


?>



<!DOCTYPE html>
<html lang="en">
<head>
	
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/linearicons-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body class="animsition">



<?php
require "./layout/header.php"
?>



	<!-- Content page -->
	<section class="bg0 p-t-52 p-b-20" style="background-color: #004F16;">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-lg-12 p-b-80">
					<div class="p-r-45 p-r-0-lg">
						<!--  -->
						<div class="wrap-pic-w how-pos5-parent">
							<img src="./main_image/music.jpg" alt="IMG-BLOG">

						</div>

						<div class="p-t-32">


							<h4 class="ltext-109 cl2 p-b-28 text-light">
							Circassian music
							</h4>

							<p class="stext-117 cl6 p-b-26 text-light">
							Circassian music refers to the traditional songs and instruments of the Circassians.							</p>

							<p class="stext-117 cl6 p-b-26 text-light">
							While there is a culture of song-storytelling by travelling 'Woredi'o's or 'Song-tellers', Circassian music used most often today is closely tied to Circassian dance. There are several dances that are performed differently:
							</p>

							<p class="stext-117 cl6 p-b-26 text-light">
							Qaashuo: is a piece with time signature, and usually this piece demonstrates the relationship between the Sh'ale (boy) and the Pshashe (girl), this relationship which is built out of love, cooperation and strength. Usually 'Qafe' is the main social dance in a 'Djegu' (a Circassian dance gathering, literally meaning 'play') and there are more than 100 qafes written by different Circassian artists, apart from the original traditional dances, and the individualised styles by each self-trained of the Circassian society.
							</p>

							<p class="stext-117 cl6 p-b-26 text-light">
							Wygg:, and usually this piece is played before Challas are going to war, but nowadays it is played at the end of the Djegu involving all couples present, and usually it follows this rhythm each eight time intervals a new musical phrase is introduced, and this piece may be repeated several times since more than ten different Wuigs are available. It is said it was also used as a form of worship by circling a great tree that symbolises the forest God, Mez-i-t'ha. This 'rondel' type variant is the ancestor of the populasied dance known as The Circassian Circle danced by the Circassians' distant Celtic cousins after a cultural influx in the 18th century.
							</p>

							<p class="stext-117 cl6 p-b-26 text-light">
							Tlleperush: is a dance which originates from the Black Sea coastal area. and the word "Tleperush" means "leg kick" and usually this piece is faster than Kafa and Widj, almost equal in tempo to known "Lezginka" but different in style and this rhythm is produced by Pshina and Pxachach and Pkhetaw (a wood hitting instrument for tempo). Abkhazians have this dance too, and they call it "Apsua Koshara"
							</p>

						</div>


					</div>
				</div>


				</div>
			</div>
		</div>
	</section>	
	
		

	<?php
require './layout/footer.php'
?>
		



<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<script>
		$(".js-select2").each(function(){
			$(this).select2({
				minimumResultsForSearch: 20,
				dropdownParent: $(this).next('.dropDownSelect2')
			});
		})
	</script>
<!--===============================================================================================-->
	<script src="vendor/MagnificPopup/jquery.magnific-popup.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
	<script>
		$('.js-pscroll').each(function(){
			$(this).css('position','relative');
			$(this).css('overflow','hidden');
			var ps = new PerfectScrollbar(this, {
				wheelSpeed: 1,
				scrollingThreshold: 1000,
				wheelPropagation: false,
			});

			$(window).on('resize', function(){
				ps.update();
			})
		});
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>