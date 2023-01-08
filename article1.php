<?php
require_once './config.php';
require_once './functions.php';
?>
<!DOCTYPE html>
<html lang="en">

<!-- Head -->
<?php
$pageName = "CIRCASSIAN REFUGEES";
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
							<img src="./main_image/article2.png" alt="IMG-BLOG">

						</div>

						<div class="p-t-32">


							<h4 class="ltext-109 cl2 p-b-28 text-light">
							CIRCASSIAN REFUGEES AND THE MAKING OF AMMAN, 1878–1914
							</h4>

							<p class="stext-117 cl6 p-b-26 text-light">
							In the final decades of Ottoman rule, several waves of refugees from the Russian Empire's North Caucasus region immigrated to Transjordan, where they founded Amman and other agricultural villages. This article examines the economy of Amman in its formative years as a Circassian refugee settlement. By exploring connections between North Caucasian refugees, Syrian and Palestinian merchants, and Transjordanian urban and nomadic communities, this study posits refugees as drivers of economic expansion in the late Ottoman period. I argue that the settlement of North Caucasian refugees and their active participation in the real estate market in and around Amman contributed to the entrenchment of the post-1858 property regime in Ottoman Transjordan. Through a study of an upper-class Circassian household and its legal battles, this article also illustrates the rise of refugee elites who benefited from the commodification of land and the construction of state-sponsored infrastructure in the late Ottoman Levant.							</p>

							<p class="stext-117 cl6 p-b-26 text-light">
							Jordanian nationalist historiography describes the four centuries of Ottoman dominion over Arab lands (1516–1918) as a time of stagnation, chaos and despotism. This trend is seen in historical studies of the city of Amman which understate Ottoman accomplishments. Many sources separate the Ottoman and Hashemite periods by either beginning or ending their narrative of the city’s history in 1916, the year of the Arab Revolt, or 1921, when Emir Abdullah arrived in Amman. These historical narratives do not comprehensively identify the continuities between the Ottoman and British–Hashemite systems of governance in Amman. Expounding on Eugene Rogan’s work Frontiers of the State in the Late Ottoman Empire: Transjordan, 1850–1921, but focusing more narrowly on Amman, I chart the conceptual foundations of the re–birth and development of the town during the Ottoman and British–Hashemite eras in the nineteenth and twentieth centuries. I argue that a comprehensive account of the city’s history that crosses the traditional dividing years of 1916 and 1921 leads to a different understanding of the forces that make Amman what it is today. By looking at several themes and sources, I arrive at a synopsis of the urban identity of Amman and its different groups and classes. Amman was once a vibrant city with a long history of continued settlement. By the mid-fourteenth century, the city succumbed to plague and depopulation, leaving Amman devoid of settlement until the immigration of Circassians in the late nineteenth century. Modern Amman was developed as part of the Ottoman Empire’s modernisation efforts in the late nineteenth century. It was planned as a new provincial centre that would facilitate communication and military networks, house immigrants, and solidify the safety of the Islamic pilgrimage route.							</p>
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