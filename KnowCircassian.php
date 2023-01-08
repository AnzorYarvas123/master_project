<?php
require_once './config.php';
require_once './functions.php';
?>
<!DOCTYPE html>
<html lang="en">

<!-- Head -->
<?php
$pageName = "Know Circassian";
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
		.paragrgh1 {
			font-size: 30px;
			color: white;
			margin-left: 10%;
			margin-right: 10%;
		}
	</style>
	<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.png" />
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
    require_once './layout/header.php'
    	?>



	<!-- Slider -->
	<section class="section-slide">
		<div class="wrap-slick1 rs1-slick1">
			<div class="slick1">


				<div class="item-slick1" style="background-image: url(main_image/mainn1.jpg);">
					<div class="container h-full">
						<div class="flex-col-l-m h-full p-t-100 p-b-30">



						</div>
					</div>
				</div>
			</div>
	</section>


	<!-- Banner -->
	<div class="sec-banner" style="background-color: #004F16; padding-top: 8%;">
		<div class="p-b-32 pt-5" style="padding: top 50px;">
			<h3 class="ltext-105 cl5 txt-center respon1 text-light pb-5">
				WHO ARE THE CIRCASSIANS?
			</h3>
		</div>
		<div class="flex-w flex-c-m pt-3">

			<p class="paragrgh1">The Circassians: are an indigenous Northwest Caucasian ethnic group and nation
				native to the historical country-region of Circassia in the North Caucasus.
				As a consequence of the Circassian genocide, which was perpetrated by the
				Russian Empire in the 19th century during the Russo-Circassian War,
				most Circassians were exiled from their homeland in Circassia to modern-day
				Turkey and the rest of the Middle East, where the majority of them are
				concentrated today.[30] The Unrepresented Nations and Peoples Organization
				estimated in the early 1990s that there are as many as 3.7 million Circassians
				in diaspora in over 50 countries.</p>
		</div>
	</div>

	<!-- Banner -->
	<div class="sec-banner" style="background-color: #004F16; padding-bottom: 3%">

		<div class="flex-w flex-c-m pt-5">
			<img src="./main_image/Photo.png" style="width:60%">
		</div>
	</div>
	<div class="flex-w flex-c-m pt-3" style="background-color: #004F16;">

		<p class="paragrgh1">The Circassian language is the ancestral language of the Circassian people, and
			Islam has been the dominant religion among them since the 17th century.
			Circassia has been subject to repeated invasions since ancient times; its isolated
			terrain coupled with the strategic value that external societies have placed on
			the region have shaped the Circassian national identity to a large extent</p>
	</div>

	<div class="sec-banner" style="background-color: #004F16; padding-bottom: 3%">

		<div class="flex-w flex-c-m pt-5">
			<img src="./main_image/category4.png" style="width:60%">
		</div>
	</div>

	<div class="flex-w flex-c-m pt-3" style="background-color: #004F16; padding-bottom: 5%">

		<p class="paragrgh1">Circassians have played major roles in areas where they settled: in Turkey, those
			with Circassian origin have had massive influence since their arrival, not least of
			which being instrumental in the Turkish War of Independence and were always
			among the elites of Turkey's intelligence agency; in Jordan, they founded the
			capital city, Amman, and continue to play a role in the country; in Syria,
			they served as the guards of the Allies against the Nazis and still have high
			positions; in Libya, they serve in high military positions; in Egypt, they were part
			of the ruling class, and contributed to business life during the reign of
			Muhammad Ali pasha.</p>
	</div>



	<!-- Product -->



	<!-- Blog -->
	<section class="sec-blog bg0 p-t-60 p-b-90" style="background-color: #636363; ">
		<div class="container">
			<div class="p-b-66">
				<h3 class="ltext-105 cl5 txt-center respon1 text-light">
					Video
				</h3>
			</div>

			<div class="row">
				<div class="col-sm-6 col-md-4 p-b-40">
					<div class="blog-item">
						<div class="hov-img0">

							<iframe width="360" height="315" src="https://www.youtube.com/embed/xegJL5aWoGk"
								title="YouTube video player" frameborder="0"
								allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
								allowfullscreen></iframe>

							</iframe>

						</div>

						<div class="p-t-15">
							<div class="stext-107 flex-w p-b-14">
								<span class="m-r-3">
									<span class="cl4 text-light">
										<h3 class="cl4 text-light">1864 May 21</h3>
									</span>
								</span>
							</div>
						</div>
					</div>
				</div>


				<div class="col-sm-6 col-md-4 p-b-40">

					<div class="blog-item">
						<div class="hov-img0">
							<iframe width="360" height="315" src="https://www.youtube.com/embed/TZHMyVNnU5o"
								title="YouTube video player" frameborder="0"
								allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
								allowfullscreen></iframe>
						</div>

						<div class="p-t-15">
							<div class="stext-107 flex-w p-b-14">
								<span class="m-r-3">
									<span class="cl4 text-light">
										<a href="./article1.php">
											<h4 class="cl4 text-light">Who are the CIRCASSIANS</br>in Arabic</h4>
										</a>
									</span>
							</div>



						</div>
					</div>
				</div>

				<div class="col-sm-6 col-md-4 p-b-40">
					<div class="blog-item">
						<div class="hov-img0">
							<iframe width="360" height="315" src="https://www.youtube.com/embed/ehjtgFQjwQc"
								title="YouTube video player" frameborder="0"
								allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
								allowfullscreen></iframe>
						</div>

						<div class="p-t-15">
							<div class="stext-107 flex-w p-b-14">
								<span class="m-r-3">
									<span class="cl4">
										<a href="./article2.php">
											<h4 class="cl4 text-light">CIRCASSIAN MUSIC</h4>
										</a>
									</span>

								</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<div style="padding-top:10%; background-color: #004F16">

	</div>

	<section class="sec-blog bg0 p-t-60 p-b-90" style="background-color: #636363; ">
		<div class="container">
			<div class="p-b-66">
				<h3 class="ltext-105 cl5 txt-center respon1 text-light">
					Articles
				</h3>
			</div>

			<div class="row">
				<div class="col-sm-6 col-md-4 p-b-40">
					<div class="blog-item">
						<div class="hov-img0">
							<a href="./article3.php">
								<img src="./main_image/article6.png" alt="IMG-BLOG">
							</a>
						</div>

						<div class="p-t-15">
							<div class="stext-107 flex-w p-b-14">
								<span class="m-r-3">
									<span class="cl4 text-light">
										<a href="./article3.php">
											<h3 class="cl4 text-light">Circassian customs and traditions</h3>
										</a>
									</span>
								</span>
							</div>
						</div>
					</div>
				</div>


				<div class="col-sm-6 col-md-4 p-b-40">

					<div class="blog-item">
						<div class="hov-img0">
							<a href="./article4.php">
								<img src="./main_image/article7.png" alt="IMG-BLOG">
							</a>
						</div>

						<div class="p-t-15">
							<div class="stext-107 flex-w p-b-14">
								<span class="m-r-3">
									<span class="cl4 text-light">
										<a href="./article4.php">
											<h3 class="cl4 text-light">Circassian dance</h3>
										</a>
									</span>
							</div>



						</div>
					</div>
				</div>

				<div class="col-sm-6 col-md-4 p-b-40">
					<div class="blog-item">
						<div class="hov-img0">
							<a href="./article5.php">
								<img src="./main_image/music.png" alt="IMG-BLOG">
							</a>
						</div>

						<div class="p-t-15">
							<div class="stext-107 flex-w p-b-14">
								<span class="m-r-3">
									<span class="cl4">
										<a href="./article5.php">
											<h3 class="cl4 text-light">Circassian music</h3>
										</a>
									</span>

								</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<div style="padding-top:10%; background-color: #004F16">

	</div>


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
		$(".js-select2").each(function () {
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
		$('.gallery-lb').each(function () { // the containers for all your galleries
			$(this).magnificPopup({
				delegate: 'a', // the selector for gallery item
				type: 'image',
				gallery: {
					enabled: true
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
		$('.js-addwish-b2').on('click', function (e) {
			e.preventDefault();
		});

		$('.js-addwish-b2').each(function () {
			var nameProduct = $(this).parent().parent().find('.js-name-b2').html();
			$(this).on('click', function () {
				swal(nameProduct, "is added to wishlist !", "success");

				$(this).addClass('js-addedwish-b2');
				$(this).off('click');
			});
		});

		$('.js-addwish-detail').each(function () {
			var nameProduct = $(this).parent().parent().parent().find('.js-name-detail').html();

			$(this).on('click', function () {
				swal(nameProduct, "is added to wishlist !", "success");

				$(this).addClass('js-addedwish-detail');
				$(this).off('click');
			});
		});

		/*---------------------------------------------*/

		$('.js-addcart-detail').each(function () {
			var nameProduct = $(this).parent().parent().parent().parent().find('.js-name-detail').html();
			$(this).on('click', function () {
				swal(nameProduct, "is added to cart !", "success");
			});
		});
	</script>
	<!--===============================================================================================-->
	<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
	<script>
		$('.js-pscroll').each(function () {
			$(this).css('position', 'relative');
			$(this).css('overflow', 'hidden');
			var ps = new PerfectScrollbar(this, {
				wheelSpeed: 1,
				scrollingThreshold: 1000,
				wheelPropagation: false,
			});

			$(window).on('resize', function () {
				ps.update();
			})
		});
	</script>
	<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>

</html>