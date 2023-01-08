<?php
require_once './config.php';
require_once './functions.php';
?>
<!DOCTYPE html>
<html lang="en">

<!-- Head -->
<?php
$pageName = "Circassian traditions";
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



	<!-- Header -->
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
							<img src="./main_image/КОНЬ-КАБАРДИНСКОЙ-ПАРОДЫ.jpg" alt="IMG-BLOG">

						</div>

						<div class="p-t-32">


							<h4 class="ltext-109 cl2 p-b-28 text-light">
							Circassian customs and traditions
							</h4>

							<p class="stext-117 cl6 p-b-26 text-light">
							CIRCASSIAN customs and social norms are enshrined in an orallytransmitted code called ‘Adige Xabze’—‘Circassian Etiquette’. This rigid and complex system of morals had evolved to ensure that strict militaristic discipline was maintained at all times to defend the country against the many invaders who coveted Circassian lands. In addition, social niceties and graces greased the wheels of social interaction, and a person’s good conduct ensured his survival and prosperity.							</p>

							<p class="stext-117 cl6 p-b-26 text-light">
							The Xabze served as the law for ad hoc courts and councils set up to resolve contentious cases and other moot issues, and pronounce binding judgements. Administration of justice in this way was indispensable in the absence of independent full-time judiciary. Blood-revenge, the Caucasian version of ‘eye for an eye, tooth for a tooth,’ had a bearing on keeping the peace and made sure that human life was respected, some say revered. However, at times things went out of control and feuds led to internecine wars.							</p>
						</div>

						<p class="stext-117 cl6 p-b-26 text-light">
						Traditionally, the roots of the Etiquette are referred to the golden age of the Narts, when its core rules were prescribed. The mores and mannerisms of the Narts, as depicted in the rich oral tradition, were paragons that Circassians through the ages worked diligently to emulate. The collective and individual attributes of these legendary heroes have shaped the code of behaviour of Circassian society since time immemorial and moulded the knightly characters of its nobility. These qualities included love of the fatherland and its defense to the last, idolization of honour, bravery and concomitant abhorrence of cowardice, observance of the code of chivalry, loathing for oppression, loyalty to clan and kin, fealty to bonds of camaraderie, care of and fidelity to one’s horse.
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