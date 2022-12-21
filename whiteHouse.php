<?php
require_once './config.php';
require_once './functions.php';
?>
<!DOCTYPE html>
<html lang="en">

<!-- Head -->
<?php
$pageName = "Bely Dom";
require_once './layout/head.php';

if (!isset($_SESSION)) {
    session_start();
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>1864 May 21</title>
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








	<!-- Content page -->
	<section class="bg0 p-t-52 p-b-20" style="background-color: #004F16;">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-lg-12 p-b-80">
					<div class="p-r-45 p-r-0-lg">
						<!--  -->
						<div class="wrap-pic-w how-pos5-parent">
							<img src="./IMAGE/whiteHouse1.jpg" alt="IMG-BLOG">

						</div>

						<div class="p-t-32">


							<h4 class="ltext-109 cl2 p-b-28 text-light">
							Bely Dom
							</h4>

							<p class="stext-117 cl6 p-b-26 text-light">
                            The building of the Government of Kabardino-Balkaria<br>
Historical building, which is a monument of architecture. The bright and beautiful building is made in the classical style with baroque elements. The Government House looks solemn in any weather thanks to the white facades and round columns at the entrance to it. Place de la Concorde in front of the building is decorated with flower beds and lawns. But its main focus is the light and music fountain dancing to classical music.
							</p>

							<p class="stext-117 cl6 p-b-26 text-light">
								Praesent vel mi bibendum, finibus leo ac, condimentum arcu. Pellentesque sem ex, tristique sit amet suscipit in, mattis imperdiet enim. Integer tempus justo nec velit fringilla, eget eleifend neque blandit. Sed tempor magna sed congue auctor. Mauris eu turpis eget tortor ultricies elementum. Phasellus vel placerat orci, a venenatis justo. Phasellus faucibus venenatis nisl vitae vestibulum. Praesent id nibh arcu. Vivamus sagittis accumsan felis, quis vulputate
							</p>
						</div>


					</div>
				</div>


				</div>
			</div>
		</div>
	</section>	
	<div  style="background-color: #004F16;">
	<div class="container px-4 text-center"  style="background-color: #004F16;">
  <div class="row gx-5">
    <div class="col" style="margin-bottom:10%">
     <img src="./IMAGE/whiteHouse7.png" style="width:100%">
    </div>
	<div class="col" style="margin-bottom:10%">
     <img src="./IMAGE/whiteHouse2.png" style="width:100%">
    </div>
    <div class="col" style=" margin-bottom:10%">
    
		<img src="./IMAGE/whiteHouse3.png" style="width:100%">

	</div>
	
  </div>
</div>
	</div>





	<div  style="background-color: #004F16;">
	<div class="container px-4 text-center"  style="background-color: #004F16;">
  <div class="row gx-5">
    <div class="col" style="margin-bottom:10%">
     <img src="./IMAGE/whiteHouse4.png" style="width:100%">
    </div>
	<div class="col" style="margin-bottom:10%">
     <img src="./IMAGE/whiteHouse5.png" style="width:100%">
    </div>
    <div class="col" style=" margin-bottom:10%">
    
		<img src="./IMAGE/whiteHouse6.png" style="width:100%">
	</div>
  </div>
</div>
	</div>


		



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