<?php
require_once './config.php';
require_once './functions.php';
?>
<!DOCTYPE html>
<html lang="en">

<!-- Head -->
<?php
$pageName = "Contact Us";
require_once './layout/head.php';

if (!isset($_SESSION)) {
    session_start();
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
	<title>Contact</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body class="animsition">
	


<!-- Head -->
<?php
$pageName = "index";
require_once './layout/head.php';

if (!isset($_SESSION)) {
    session_start();
}
require_once './layout/header.php'


?>





	<section class="bg-img1  p-lr-15 p-tb-292" style="background-image: url('main_image/contact1.png');">

	</section>	
	<div class="p-b-32 pt-5" style="background-color: #004F16;">
				<h1 class="ltext-105 cl5 txt-center respon1 text-light" style="padding-top:130px; padding-bottom:3%">
				Contact Us
				</h1>
			</div>

	<!-- Content page -->
	<section class="bg0 p-t-14 p-b-116" style="background-color: #004F16;">
		<div class="container">
			<div class="flex-w flex-tr">
				<div class="size-210 bor10 p-lr-70 p-t-55 p-b-70 p-lr-15-lg w-full-md" style=" border-radius: 25px;">
					<form>
						<h4 class="mtext-105 cl2 txt-center p-b-30 text-light">
							Send Us A Message
						</h4>

						<div class="bor8 m-b-20 how-pos4-parent">
							<input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text" name="email" placeholder="Your Email Address">
							<img class="how-pos4 pointer-none" src="./main_image/icon-email.png" alt="ICON">
						</div>

						<div class="bor8 m-b-30">
							<textarea class="stext-111 cl2 plh3 size-120 p-lr-28 p-tb-25" name="msg" placeholder="How Can We Help?"></textarea>
						</div>

						<button class="flex-c-m stext-101 cl0 size-121 bg3 bor1 p-lr-15 trans-04 pointer btn-outline-success">
							Send
						</button>
					</form>
				</div>

				<div class="size-210 bor10 flex-w flex-col-m p-lr-93 p-tb-30 p-lr-15-lg w-full-md" style=" border-radius: 25px;">
					<div class="flex-w w-full p-b-42">
						<span class="fs-18 cl5 txt-center size-211">
							<span class="lnr lnr-map-marker text-light"></span>
						</span>

						<div class="size-212 p-t-2">
							<span class="mtext-110 cl2 text-light">
								Address
							</span>

							<p class="stext-115 cl6 size-213 p-t-18 text-light">
								Circassian Center 8th floor, Shafa Badran St, Amman, Jordan.
							</p>
						</div>
					</div>

					<div class="flex-w w-full p-b-42">
						<span class="fs-18 cl5 txt-center size-211">
							<span class="lnr lnr-phone-handset  text-light"></span>
						</span>

						<div class="size-212 p-t-2">
							<span class="mtext-110 cl2  text-light">
								Lets Talk
							</span>

							<p class="stext-115 cl1 size-213 p-t-18  text-light">
								+962-778084983
							</p>
						</div>
					</div>

					<div class="flex-w w-full">
						<span class="fs-18 cl5 txt-center size-211">
							<span class="lnr lnr-envelope  text-light"></span>
						</span>

						<div class="size-212 p-t-2">
							<span class="mtext-110 cl2  text-light">
								Sale Support
							</span>

							<p class="stext-115 cl1 size-213 p-t-18  text-light">
								Circassian@gmail.com
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>	
	
	



	<?php
require './layout/footer.php'
?>
				</p>
			</div>
		</div>
	</footer>


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
	<!-- <script src="vendor/select2/select2.min.js"></script>
	<script>
		$(".js-select2").each(function(){
			$(this).select2({
				minimumResultsForSearch: 20,
				dropdownParent: $(this).next('.dropDownSelect2')
			});
		})
	</script> -->
<!--===============================================================================================-->
	<script src="vendor/MagnificPopup/jquery.magnific-popup.min.js"></script>
<!--===============================================================================================-->
	<!-- <script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script> -->
	<!-- <script>
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
	</script> -->
	<!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAKFWBqlKAGCeS1rMVoaNlwyayu0e0YRes"></script>
	<script src="js/map-custom.js"></script> -->

	<script src="js/main.js"></script>
	<?php require_once './layout/scripts.php'; ?>

</body>
</html>