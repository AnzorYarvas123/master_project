<?php
require_once './config.php';
require_once './functions.php';
?>
<!DOCTYPE html>
<html lang="en">

<!-- Head -->
<?php
$pageName = "1864 May 21";
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
							<img src="./main_image/Article.png" alt="IMG-BLOG">

						</div>

						<div class="p-t-32">


							<h4 class="ltext-109 cl2 p-b-28 text-light">
							1864 May 21
							</h4>

							<p class="stext-117 cl6 p-b-6 text-light">
							The Circassian Day of Mourning or the Day of Mouning for the Victims of the Circassian Genocide is mourned every year on 21 May in remembrance of the victims of the Russo-Circassian War and the subsequent Circassian genocide by members of the Circassian diaspora. The choice of the date is due to the fact that on 21 May 1864, General Pavel Grabbe held a military parade in the what is now Krasnaya Polyana in honor of the victory in the Battle of Qbaada</p>

							<p class="stext-117 cl6 p-b-6 text-light">
							From 1763 to 1864 the Circassians fought against the Russians in the Russian-Circassian War. During the war, Russian Empire employed a genocidal strategy of massacring Circassian civilians. Only a small percentage who accepted Russification and resettlement within the Russian Empire were completely spared. The remaining Circassian population who refused were variously dispersed or killed en masse. Circassian villages would be located and burnt, systematically starved, or their entire population massacred. Leo Tolstoy reports that Russian soldiers would attack village houses at night. Sir Pelgrave, a British diplomat who witnessed the events, adds that "their only crime was not being Russian."
							</p>

							<p class="stext-117 cl6 p-b-6 text-light">
							A mass deportation was launched against the surviving population before the end of the war in 1864 and it was mostly completed by 1867. Some died from epidemics or starvation among the crowds of deportees and were reportedly eaten by dogs after their death. Others died when the ships underway sank during storms. Calculations, including taking into account the Russian government's own archival figures, have estimated a loss of 80–97% of the Circassian population in the process. The displaced people were settled primarily to the Ottoman Empire.
							</p>

							<p class="stext-117 cl6 p-b-6 text-light">
							In 1914, Nicholas II celebrated the 50th anniversary of the defeat of the Circassians, describing it as one of the empire's greatest victories. Boris Yeltsin acknowledged in 1996 when signing a peace treaty with Chechnya during the First Chechen War that the war was a tragedy whose responsibility lies with Russia.							</p>



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