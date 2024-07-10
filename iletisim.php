<!DOCTYPE html>
<html lang="tr">
	<head>
		<?php include "google-scripts.php"; ?>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>İletişim - Bandırma Deniz Oto Kurtarıcı Çekici - 7/24 Yol Yardım</title>
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
				<div id="iletisim" class="flex text-xl pt-24">
					<!-- İletişim section -->
					<div class="container mx-auto px-6 py-4">
						<h2 class="text-4xl font-bold mb-12 text-center heading">İletişim</h2>
						<div class="table w-full">
							<div class="table-row-group">
							<div class="table-row">
								<div class="table-cell pt-4 font-bold">Adres:</div>
								<div class="table-cell pl-6">600 Evler Mahallesi Yaşardoğu Caddesi No: 24</br>
									10200 Bandırma / Balıkesir</div>
							</div>
							<div class="table-row">
								<div class="table-cell pt-4 font-bold">Telefon:</div>
								<div class="table-cell pl-6">
									<a href="tel:+905515530228" class="block mb-2">+90 551 553 02 28</a>
									<a href="tel:+905515530228" class="block">+90 266 721 44 60</a>
								</div>
							</div>
							<div class="table-row">
								<div class="table-cell pt-4 font-bold">E-posta:</div>
								<div class="table-cell pl-6 overflow-auto">
									<a href="mailto:denizotopark10@hotmail.com">denizotopark10 @ hotmail.com</a>
								</div>
							</div>
							</div>
						</div>
						<div class="mt-10 rounded-md border-2 border-amber-700">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d537.6244045747336!2d27.982346094908355!3d40.336513691993545!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14b5d39abfacf375%3A0xef3688b91a0ec7fd!2sOutdoor%20Parking!5e0!3m2!1sen!2str!4v1720612307619!5m2!1sen!2str" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="h-80 w-full rounded-md"></iframe>
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
