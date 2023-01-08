<?php
require_once './config.php';
require_once './functions.php';
?>
<!DOCTYPE html>
<html lang="en">

<!-- Head -->
<?php
$pageName = "Kabardino-balkaria";
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

<body class="animsition" style="background-color: #004F16;">

	<!-- Header -->
	<?php
    require_once './layout/header.php'
    	?>



	<!-- Slider -->
	<section class="section-slide">
		<div class="wrap-slick1 rs1-slick1">
			<div class="slick1">


				<div class="item-slick1"
					style="background-image: url(main_image/Kabardino-balkaria1.jpg); background-attachment: fixed;">
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
			<h1 class="ltext-105 cl5 txt-center respon1 text-light pb-5">
				Kabardino Balkaria
			</h1>
		</div>
		<div class="flex-w flex-c-m pt-3">

			<p class="paragrgh1">The Kabardino-Balkarian Republi: located in the North Caucasus. As of the 2010 Census,
				its population was 859,939 on 12,500 square km. Its capital is Nalchik. The area contains the highest
				mountain in Europe, Mount Elbrus, at 5,642 m. Mount Elbrus has 22 glaciers that feed three rivers —
				Baksan, Malka and Kuban.
				The mountain is covered with snow year-round.<br>

				Nalchik is the capital of the Kabardino-Balkarian Republic, located in the picturesque
				semicircle of the Caucasus Mountains. It is considered one of the largest resorts of
				the republic, and is also its main cultural center. According to historical chronicles,
				Nalchik was founded in 1724, when Prince Aslanbek Kaitukin migrated to these
				places with his auls.<br>
				The name of the city comes from the Kabardino-Balkarian word, which translates
				as "horseshoe". This name was given to the settlement in honor of the semicircle
				of mountains, in which Nalchik is located. The horseshoe is also the main emblem
				of the city and a popular souvenir in these places.
			</p>
		</div>
	</div>
	<div class="p-b-32 pt-5" style="padding: top 50px; background-color: #004F16;">
		<h4 class="ltext-105 cl5 txt-center respon1 text-light pb-5" style=" font-size:40px">
			Image from Kabarino balkaria
		</h4>
	</div>



	<!-- <div class="row"> -->
	<div style="background-color: #004F16;">
		<div class="container py-5" style="background-color: #004F16;">
			<div class="row row-cols-4">
				<div class="col">

					<!-- start -->
					<div class="block1 wrap-pic-w" style=" margin-right: 15px;">
						<img src="./Kabardino_b/image1.jpg" style=" width:260px; height:160px">

						<a href="./kabardino-balkaria/index.php"
							class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-8 p-tb-14 trans-03 respon3">
							<div class="block1-txt-child1 flex-col-l">
								<span class="block1-name ltext-102 trans-04 p-b-8 text-white">
									<h4>Bely Dom</h4>
								</span>

							</div>

						</a>
					</div>
					<!-- end -->
				</div>
				<div class="col">


					<!-- start -->
					<div class="block1 wrap-pic-w" style=" margin-right: 15px;">
						<img src="./Kabardino_b/image-2.jpg" style=" width:250px; height:160px">

						<a href="./kabardino-balkaria/Sosruko.php"
							class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-8 p-tb-14 trans-03 respon3">
							<div class="block1-txt-child1 flex-col-l">
								<span class="block1-name ltext-102 trans-04 p-b-8 text-white">
									<h4>Sosruko</h4>
								</span>

							</div>

						</a>
					</div>
					<!-- end -->

				</div>



				<div class="col">

					<!-- start -->
					<div class="block1 wrap-pic-w" style=" margin-right: 15px;">
						<img src="./main_image/Mount Elbrus.jpg" style=" width:250px; height:160px">

						<a href="./kabardino-balkaria/MountElbrus.php"
							class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-8 p-tb-14 trans-03 respon3">
							<div class="block1-txt-child1 flex-col-l">
								<span class="block1-name ltext-102 trans-04 p-b-8 text-white">
									<h4>Mount Elbrus</h4>
								</span>

							</div>

						</a>
					</div>
					<!-- end -->

				</div>
				<div class="col">


					<div class="block1 wrap-pic-w" style=" margin-right: 15px;">
						<img src="./main_image/image4.jpg" style=" width:250px; height:160px">

						<a href="./kabardino-balkaria/TheBlueLake.php"
							class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-8 p-tb-14 trans-03 respon3">
							<div class="block1-txt-child1 flex-col-l">
								<span class="block1-name ltext-102 trans-04 p-b-8 text-white">
									<h4>The Blue Lake</h4>
								</span>

							</div>

						</a>
					</div>
					<!-- end -->
				</div>
			</div>
		</div>
	</div>

	<div style="background-color: #004F16;">
		<div class="container py-5" style="background-color: #004F16;">
			<div class="row row-cols-4">
				<div class="col">


					<!-- start -->
					<div class="block1 wrap-pic-w" style=" margin-right: 15px;">
						<img src="./main_image/Castle6.jpg" style=" width:260px; height:160px">

						<a href="./kabardino-balkaria/Castle.php"
							class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-8 p-tb-14 trans-03 respon3">
							<div class="block1-txt-child1 flex-col-l">
								<span class="block1-name ltext-102 trans-04 p-b-8 text-white">
									<h4>Chateau Erken Castle</h4>
								</span>

							</div>

						</a>
					</div>
					<!-- end -->
				</div>
				<div class="col">


					<!-- start -->
					<div class="block1 wrap-pic-w" style=" margin-right: 15px;">
						<img src="./main_image/Bochka2.jpg" style=" width:250px; height:160px">

						<a href="./kabardino-balkaria/Bochka.php"
							class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-8 p-tb-14 trans-03 respon3">
							<div class="block1-txt-child1 flex-col-l">
								<span class="block1-name ltext-102 trans-04 p-b-8 text-white">
									<h4>Bochka <br>Restaurant</h4>
								</span>

							</div>

						</a>
					</div>
					<!-- end -->

				</div>



				<div class="col">

					<!-- start -->
					<div class="block1 wrap-pic-w" style=" margin-right: 15px;">
						<img src="./main_image/Mosque.jpg" style=" width:250px; height:160px">

						<a href="./kabardino-balkaria/Mosque.php"
							class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-8 p-tb-14 trans-03 respon3">
							<div class="block1-txt-child1 flex-col-l">
								<span class="block1-name ltext-102 trans-04 p-b-8 text-white">
									<h4>Nalchik <br>Mosques</h4>
								</span>

							</div>

						</a>
					</div>
					<!-- end -->

				</div>
				<div class="col">


					<div class="block1 wrap-pic-w" style=" margin-right: 15px;">
						<img src="./main_image/WaterfallsGedmishkh.jpg" style=" width:250px; height:160px">

						<a href="./kabardino-balkaria/WaterFallsGedmishkh.php"
							class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-8 p-tb-14 trans-03 respon3">
							<div class="block1-txt-child1 flex-col-l">
								<span class="block1-name ltext-102 trans-04 p-b-8 text-white">
									<h4>Waterfalls Gedmishkh</h4>
								</span>

							</div>

						</a>
					</div>
					<!-- end -->



				</div>
			</div>
		</div>
	</div>
	</div>


	<div style="background-color: #004F16;">
		<div class="container py-5 " style="background-color: #004F16;">
			<div class="row row-cols-4">
				<div class="col">


					<!-- start -->
					<div class="block1 wrap-pic-w" style=" margin-right: 15px;">
						<img src="./main_image/atazhukinskyPark.png" style=" width:260px; height:160px">

						<a href="./kabardino-balkaria/atazhukinskyPark.php"
							class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-8 p-tb-14 trans-03 respon3">
							<div class="block1-txt-child1 flex-col-l">
								<span class="block1-name ltext-102 trans-04 p-b-8 text-white">
									<h4>atazhukinsky <br>park</h4>
								</span>

							</div>

						</a>
					</div>
					<!-- end -->
				</div>
				<div class="col">


					<!-- start -->
					<div class="block1 wrap-pic-w" style=" margin-right: 15px;">
						<img src="./main_image/flyParaglid.jpg" style=" width:250px; height:160px">

						<a href="./kabardino-balkaria/FlyParaglid.php"
							class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-8 p-tb-14 trans-03 respon3">
							<div class="block1-txt-child1 flex-col-l">
								<span class="block1-name ltext-102 trans-04 p-b-8 text-white">
									<h4>Fly Paraglid</h4>
								</span>

							</div>

						</a>
					</div>
					<!-- end -->

				</div>



				<div class="col">

					<!-- start -->
					<div class="block1 wrap-pic-w" style=" margin-right: 15px;">
						<img src="./main_image/Narzan.jpg" style=" width:250px; height:160px">

						<a href="./kabardino-balkaria/Narzan.php"
							class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-8 p-tb-14 trans-03 respon3">
							<div class="block1-txt-child1 flex-col-l">
								<span class="block1-name ltext-102 trans-04 p-b-8 text-white">
									<h4>Narzan</h4>
								</span>

							</div>

						</a>
					</div>
					<!-- end -->

				</div>
				<div class="col">


					<div class="block1 wrap-pic-w m-b-150" style=" margin-right: 15px;">
						<img src="./main_image/Kabardino-Balkaria.png" style=" width:250px; height:160px">

						<a href="./kabardino-balkaria/Cities.php"
							class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-8 p-tb-14 trans-03 respon3">
							<div class="block1-txt-child1 flex-col-l">
								<span class="block1-name ltext-102 trans-04 p-b-8 text-white">
									<h4>kabardino-balkaria cities</h4>
								</span>

							</div>

						</a>
					</div>
					<!-- end -->



				</div>
			</div>
		</div>
	</div>
	</div>




	<!-- Blog -->
	<section class="sec-blog bg0 p-t-60 p-b-90" style="background-color: #636363;">
		<div class="container">
			<div class="p-b-66 ">
				<h3 class="ltext-105 cl5 txt-center respon1 text-light">
					Video
				</h3>
			</div>

			<div class="row">
				<div class="col-sm-6 col-md-4 p-b-40">
					<div class="blog-item">
						<div class="hov-img0">


							<iframe width="360" height="315" src="https://www.youtube.com/embed/BV7jqOZtoos"
								title="YouTube video player" frameborder="0"
								allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
								allowfullscreen></iframe>

						</div>

						<div class="p-t-15">
							<div class="stext-107 flex-w p-b-14">
								<span class="m-r-3">
									<span class="cl4 text-light">
										<h3 class="cl4 text-light">Nalchik</h3>
									</span>
								</span>
							</div>
						</div>
					</div>
				</div>


				<div class="col-sm-6 col-md-4 p-b-40">

					<div class="blog-item">
						<div class="hov-img0">
							<iframe width="360" height="315" src="https://www.youtube.com/embed/JCoXP48607c"
								title="YouTube video player" frameborder="0"
								allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
								allowfullscreen></iframe>
						</div>

						<div class="p-t-15">
							<div class="stext-107 flex-w p-b-14">
								<span class="m-r-3">
									<span class="cl4 text-light">
										<a href="./article1.php">
											<h4 class="cl4 text-light">Kabardino-Balkaria</h4>
										</a>
									</span>
							</div>



						</div>
					</div>
				</div>

				<div class="col-sm-6 col-md-4 p-b-40">
					<div class="blog-item">
						<div class="hov-img0">
							<iframe width="360" height="315" src="https://www.youtube.com/embed/v1z787ZeZFQ"
								title="YouTube video player" frameborder="0"
								allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
								allowfullscreen></iframe>
						</div>

						<div class="p-t-15">
							<div class="stext-107 flex-w p-b-14">
								<span class="m-r-3">
									<span class="cl4">
										<a href="./article2.php">
											<h4 class="cl4 text-light">Mount Elbrus</h4>
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