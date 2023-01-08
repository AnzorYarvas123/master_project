<?php
require_once './config.php';
require_once './functions.php';
?>
<!DOCTYPE html>
<html lang="en">

<!-- Head -->
<?php
$pageName = "Circassian Activity";
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
    <style>
        .paragrgh1{
            font-size: 30px;
            color:white;
            margin-left: 10%;
            margin-right: 10%;
        }
    </style>
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
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/slick/slick.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/MagnificPopup/magnific-popup.css">
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



	<!-- Slider -->
	<section class="section-slide">
		<div class="wrap-slick1 rs1-slick1">
			<div class="slick1">
		 

				<div class="item-slick1" style="background-image: url(main_image/contact1.png);">
					<div class="container h-full">
						<div class="flex-col-l-m h-full p-t-100 p-b-30">
		
								
	
						</div>
					</div>
			</div>
		</div>
	</section>

<div  style="background-color: #004F16;">
	<div class="container px-4 text-center"  style="background-color: #004F16;">
  <div class="row gx-5">
    <div class="col" style="margin-top:10%">
     <img src="./main_image/active1.jpg" style="width:80%">
    </div>
	
    <div class="col" style=" margin-top:10%">
      
		<h1 style="background-color: #004F16; color:white">Circassian Charitable Society/ Center</h1>
		<p class=" text-left" style="color:white; font-size:20px; margin-top:5%;">The Circassian Charitable Association aims to provide community services and help the local community in many matters, as the association is considered to have a mediating role between the individual and the state. public and deepening the concept of social solidarity.</p>
		<br>
		<!-- To Know more about the association's work, click on the button</p><br><br> -->
		
		<button type="button" class="btn btn-secondary"><a href="./circassianCharity.php" class="text-light" >View</a></button>
	</div>
	
  </div>
</div>
	</div>

	<div  style="background-color: #004F16;">
	<div class="container px-4 text-center"  style="background-color: #004F16;">
  <div class="row gx-5">
    <div class="col" style="margin-top:10%">
     <img src="./main_image/El-Ahly.png" style="width:80%">
    </div>
    <div class="col text-light" style=" margin-top:10%">
      <h1>Al Ahli Club</h1>
	  <p class=" text-left" style="color:white; font-size:20px; margin-top:5%;" >is one of the oldest clubs in Jordan based in Amman, established in 1944 by a group of pioneers who helped in setting the groundwork of sport, social, and cultural life in Jordan.</p><br>
	  <button type="button" class="btn btn-secondary"><a href="./circassianCharity.php" class="text-light" >View</a></button>
  </div>
</div>
	</div>

	<div  style="background-color: #004F16">
	<div class="container px-4 text-center"  style="background-color: #004F16;">
  <div class="row gx-5">
    <div class="col" style="margin-top:10%">
     <img src="./main_image/Samawer.jpg" style="width:80%">
    </div>
    <div class="col text-light" style=" margin-top:10%">
     <h1>Samawer Restaurant & Kitchen</h1>
	 <p class=" text-left" style="color:white; font-size:20px; margin-top:5%;">Samour restaurant and kitchen for all Circassian and Arabic food</p>
	 <button type="button" class="btn btn-secondary"><a href="./circassianCharity.php" class="text-light" >View</a></button>
  </div>
</div>
	</div>

	<div style=" background-color: #004F16; padding-bottom:10%"></div>


	


	<?php
require './layout/footer.php'
?>


	<!-- Back to top -->
	<div class="btn-back-to-top" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="zmdi zmdi-chevron-up"></i>
		</span>
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
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/slick/slick.min.js"></script>
	<script src="js/slick-custom.js"></script>
<!--===============================================================================================-->
	<script src="vendor/parallax100/parallax100.js"></script>
	<script>
        $('.parallax100').parallax100();
	</script>
<!--===============================================================================================-->
	<script src="vendor/MagnificPopup/jquery.magnific-popup.min.js"></script>
	<script>
		$('.gallery-lb').each(function() { // the containers for all your galleries
			$(this).magnificPopup({
		        delegate: 'a', // the selector for gallery item
		        type: 'image',
		        gallery: {
		        	enabled:true
		        },
		        mainClass: 'mfp-fade'
		    });
		});
	</script>
<!--===============================================================================================-->
	<script src="vendor/isotope/isotope.pkgd.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/sweetalert/sweetalert.min.js"></script>
	<script>
		$('.js-addwish-b2').on('click', function(e){
			e.preventDefault();
		});

		$('.js-addwish-b2').each(function(){
			var nameProduct = $(this).parent().parent().find('.js-name-b2').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to wishlist !", "success");

				$(this).addClass('js-addedwish-b2');
				$(this).off('click');
			});
		});

		$('.js-addwish-detail').each(function(){
			var nameProduct = $(this).parent().parent().parent().find('.js-name-detail').html();

			$(this).on('click', function(){
				swal(nameProduct, "is added to wishlist !", "success");

				$(this).addClass('js-addedwish-detail');
				$(this).off('click');
			});
		});

		/*---------------------------------------------*/

		$('.js-addcart-detail').each(function(){
			var nameProduct = $(this).parent().parent().parent().parent().find('.js-name-detail').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to cart !", "success");
			});
		});
	</script>
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