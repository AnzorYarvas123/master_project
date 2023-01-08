<?php
require_once './config.php';
require_once './functions.php';
?>
<!DOCTYPE html>
<html lang="en">

<!-- Head -->
<?php
$pageName = "A FORGOTTEN GENOCIDE";
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
							<img src="./main_image/article5.jpg" alt="IMG-BLOG">

						</div>

						<div class="p-t-32">


							<h4 class="ltext-109 cl2 p-b-28 text-light">
							THE CIRCASSIANS: A FORGOTTEN GENOCIDE?
							</h4>

							<p class="stext-117 cl6 p-b-26 text-light">
							This is the question I am usually asked if I ever mention my interest in the Circassians. Except for specialists in the Caucasus, there are few people in the Western world (although more people in the Middle East) who remember who the Circassians were, where they came from or what happened to them. They are an almost forgotten people. You will find no place called ‘Circassia’ on any contemporary map. The nearest you will get to it, and then only should you happen to know what the Russian word for ‘Circassian’ (borrowed from the Turkish) ischerkess, will be the Karachai-Cherkess Autonomous Province in southern Russia. 							</p>

							<p class="stext-117 cl6 p-b-26 text-light">
							This area in fact lies somewhat to the north of the historical Circassia: it is where some of the Circassians were resettled following the tsarist conquest of their homeland. Moreover, the name of the territory is now somewhat misleading, inasmuch as the Circassians, who theoretically share it with the Turkic Karachai people, actually account for a mere 10 percent of its roughly half-million population.							</p>
						</div>

						<p class="stext-117 cl6 p-b-26 text-light">
						Perharps, however, you like poring over old maps, as i do. If so, take a look at a map of Russia dating from the early-nineteenth century, and you will find Circassia clearly marked – a country in the north-western Caucasus and along the north-eastern shore of the Black Sea, stretching southwards from the banks of the River Kuban, which at that time marked the southern boundary of the Russian empire. And you can read about Circassia in the old booksof nineteenth-century western travellers such as the French consul Gamba (1826), the English adventurer James Bell (1841), the French couple de Hell (1847), the American George Leighton Ditson (1850), and the Dutch consul de Marigny (1887). And if you go back in time a few more decades and inspect a map drawn in the middle of the eighteenth century, then you will see the name ‘Circassia’ boldly straddling both bank of the River Kuban, from the lowlands east of the Sea of Azov, between the Kuban, and the Don, all the way to the borders of Ossetia and Chechnya up in the main Caucasus mountain range and along the Black Sea coast from the isthmus of the Sea of Azov to Abkhazia.[2] Circassia at that time, prior to tsaristimperal conquest, occupied an area of 55,663 square kilometres – rather greater than the areaof Denmark – and possessed an indigenous population in excess of two million.
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