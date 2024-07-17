<!DOCTYPE html>
<html lang="tr">
	<head>
		<?php include "google-scripts.php"; ?>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Bandırma Deniz Oto Kurtarıcı Çekici - 7/24 Yol Yardım - Hizmetlerimiz</title>
		<?php include "head.php"; ?>
	</head>
	<body class="bg-gray-200">

		<!-- Loading Screen -->
		<div class="loading-screen">
			<div class="loader"></div>
		</div>

		<!-- Page Content (Initially Hidden) -->
		<div class="page-content hidden">

			<?php include "navbar.php"; ?>

			<!-- Content Sections -->
			<main>
				<div id="hizmetlerimiz" class="flex pt-24">
					<!-- Görseller section -->
					<div class="container mx-auto px-6 py-4">
						<h2 class="text-4xl font-bold mb-10 text-center heading">Hizmetlerimiz</h2>
						<div>
							<ul class="text-xl">
								<li class="border-2 border-amber-700 rounded-md p-3 mb-2 text-center">Araba Çekici Hizmeti</li>
								<li class="border-2 border-amber-700 rounded-md p-3 mb-2 text-center">Motosiklet Çekici Hizmeti</li>
								<li class="border-2 border-amber-700 rounded-md p-3 mb-2 text-center">Özel Araç Çekici Hizmeti</li>
								<li class="border-2 border-amber-700 rounded-md p-3 mb-2 text-center">Elektrik Takviyesi Hizmeti</li>
								<li class="border-2 border-amber-700 rounded-md p-3 mb-2 text-center">Aparatla Çekim Hizmeti</li>
								<li class="border-2 border-amber-700 rounded-md p-3 mb-2 text-center">Ağır Ticari Araç Çekim Hizmeti (Tır, 10 Teker Kamyon, Kırkayak)</li>
								<li class="border-2 border-amber-700 rounded-md p-3 text-center">Yeddiemin Otopark Hizmeti <span class="text-lg text-gray-600">(Otoparkımızda 7/24 görevli bulunmaktadır.)</span></li>
							</ul>	
						</div>
					</div>
				</div>
			</main>

			<!-- Scroll Up Button -->
			<button
				onclick="scrollToTop()"
				id="scrollButton"
				class="hidden fixed bottom-6 right-6 bg-gray-800 text-white px-4 py-4 rounded-full shadow-md hover:bg-gray-700">
				<!-- Up Arrow SVG -->
				<svg
					fill="#fff"
					class="w-7 h-7"
					version="1.1"
					id="Layer_1"
					xmlns="http://www.w3.org/2000/svg"
					viewBox="0 0 511.867 511.867"
					xml:space="preserve">
					<g>
						<g>
							<path
								d="M508.827,350.027L263.493,104.373c-4.267-4.053-10.88-4.053-15.147,0L3.12,350.027c-4.16,4.16-4.16,10.88,0,15.04
					l42.24,42.347c4.267,4.053,10.88,4.053,15.147,0L255.92,211.68l195.52,195.733c4.16,4.16,10.88,4.16,15.04,0l42.347-42.347
					C512.88,360.907,512.88,354.187,508.827,350.027z M459.013,384.8l-195.52-195.733c-4.16-4.16-10.88-4.16-15.04,0L52.933,384.8
					l-27.2-27.307L255.92,126.987l230.293,230.507L459.013,384.8z" />
						</g>
					</g>
				</svg>
			</button>

		</div>

		<?php include "footer.php"; ?>
		<?php include "custom-scripts.php"; ?>
		<script src="assets/lightbox2/js/lightbox-plus-jquery.min.js"></script>
	</body>
</html>
