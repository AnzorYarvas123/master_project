<?php
require_once './config.php';
require_once './functions.php';
?>
<!DOCTYPE html>
<html lang="en">

<!-- Head -->
<?php
$pageName = "Circassian dance";
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
							<img src="./main_image/article9.jpg" alt="IMG-BLOG">

						</div>

						<div class="p-t-32">


							<h4 class="ltext-109 cl2 p-b-28 text-light">
							Circassian dance
							</h4>

							<p class="stext-117 cl6 p-b-26 text-light">
							Circassian dance is an important and defining part of the culture of Circassian people. The national dances evoke imagery of combat and courtship. They play a role in efforts to preserve Circassian tradition and culture in the diaspora. There are several dances including the kabardinka. The version of this dance performed in Turkey is called Kafkas, from Kafkasya, the Turkish word for the Caucasus mountain region that was home to the Circassian people before the Circassian genocide. Another similar dance is called the lezginka.							</p>

							<p class="stext-117 cl6 p-b-26 text-light">
							Dancing ability is very important for social standing in Circassian communities, especially with regards to marriage and establishing romantic relationships. Children living in the Adyghe communities in jordan receive dance instruction from a young age as part of their school curriculum.							</p>
						</div>
						<div>
						<p class="stext-117 cl6 p-b-26 text-light">
						Circassian dances share some common traits with ballet: men dance on the tips of their toes wearing special leather boots. Women move very lightly, gliding across the floor without moving their heads or upper bodies.
					</p>
						</div>
						<div>
						<p class="stext-117 cl6 p-b-26 text-light">
						Circassian men wear a black outfit called a cherkes on stage. It is a military style outfit with an imposing coat and bullet cartridges worn across the chest. Men often wear a dagger, and a dagger or sword may be incorporated into some of the dances.					</p>
						</div>

						<div>
						<p class="stext-117 cl6 p-b-26 text-light">
						Circassian dances are often performed at national festivals and cultural celebrations.						</div>


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