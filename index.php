<!DOCTYPE html>
<html lang="tr">
	<head>
		<?php include "google-scripts.php"; ?>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Bandırma Deniz Oto Kurtarıcı Çekici - 7/24 Yol Yardım</title>
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
				<div id="anasayfa" class="h-screen flex items-center justify-center text-xl bg-cover">
					<!-- Anasayfa section -->
					<div class="absolute bg-white bg-opacity-50 h-screen w-full z-10"></div>
					<div class="z-20 text-center bg-black bg-opacity-70 mx-4 md:mx-12 px-6 py-12 text-gray-200 rounded-md">
						<h1 class="text-4xl md:text-6xl font-bold pb-6">Deniz Oto Kurtarma</h1>
						<p class="py-4 text-xl md:text-2xl">Bandırma merkezli olarak Balıkesir, Çanakkale ve Bursa bölgelerinde yol yardımı ve çekici/kurtarıcı hizmetimizle <span class="inline-block text-green-600 text-3xl md:text-4xl border border-white rounded-md p-1 md:p-2 bg-transparent hover:bg-white transition duration-300">7/24</span> yanınızdayız.
						</p>
						<p class="py-4 text-xl md:text-2xl">Size sadece bir telefon mesafesindeyiz.</p>
						<p class="text-red-500 text-4xl md:text-5xl py-4">ACİL HATTIMIZ:</p>
						<a href="tel:+905515530228" class="text-4xl md:text-5xl text-green-600">+90 551 553 0228</a>
					</div>
				</div>

				<div id="gorseller" class="flex pt-24">
					<!-- Görseller section -->
					<div class="container mx-auto px-6 py-4">
						<h2 class="text-4xl font-bold mb-10 text-center heading">Görseller</h2>
						<div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-6 py-6">
							<!-- Replace the image sources and alt texts with your own -->

							<div class="cursor-pointer">
								<a href="images/01.jpg" data-lightbox="roadtrip" class="w-full h-40 block">
								  <img src="images/01-thumb.jpg" alt="Image" class="w-full h-40 rounded-lg shadow-md object-cover max-w-full">
								</a>
							</div>
							<div class="cursor-pointer">
								<a href="images/02.jpg" data-lightbox="roadtrip" class="w-full h-40 block">
									<img src="images/02-thumb.jpg" alt="Image" class="w-full h-40 rounded-lg shadow-md object-cover max-w-full">
								</a>
							</div>
							<div class="cursor-pointer">
								<a href="images/03.jpg" data-lightbox="roadtrip" class="w-full h-40 block">
									<img src="images/03-thumb.jpg" alt="Image" class="w-full h-40 rounded-lg shadow-md object-cover max-w-full">
								</a>
							</div>
							<div class="cursor-pointer">
								<a href="images/04.jpg" data-lightbox="roadtrip" class="w-full h-40 block">
									<img src="images/04-thumb.jpg" alt="Image" class="w-full h-40 rounded-lg shadow-md object-cover max-w-full">
								</a>
							</div>
							<div class="cursor-pointer">
								<a href="images/05.jpg" data-lightbox="roadtrip" class="w-full h-40 block">
									<img src="images/05-thumb.jpg" alt="Image" class="w-full h-40 rounded-lg shadow-md object-cover max-w-full">
								</a>
							</div>
							<div class="cursor-pointer">
								<a href="images/06.jpg" data-lightbox="roadtrip" class="w-full h-40 block">
									<img src="images/06-thumb.jpg" alt="Image" class="w-full h-40 rounded-lg shadow-md object-cover max-w-full">
								</a>
							</div>
							<div class="cursor-pointer">
								<a href="images/07.jpg" data-lightbox="roadtrip" class="w-full h-40 block">
									<img src="images/07-thumb.jpg" alt="Image" class="w-full h-40 rounded-lg shadow-md object-cover max-w-full">
								</a>
							</div>
							<div class="cursor-pointer">
								<a href="images/08.jpg" data-lightbox="roadtrip" class="w-full h-40 block">
									<img src="images/08-thumb.jpg" alt="Image" class="w-full h-40 rounded-lg shadow-md object-cover max-w-full">
								</a>
							</div>
							<div class="cursor-pointer">
								<a href="images/09.jpg" data-lightbox="roadtrip" class="w-full h-40 block">
									<img src="images/09-thumb.jpg" alt="Image" class="w-full h-40 rounded-lg shadow-md object-cover max-w-full">
								</a>
							</div>
							<div class="cursor-pointer">
								<a href="images/10.jpg" data-lightbox="roadtrip" class="w-full h-40 block">
									<img src="images/10-thumb.jpg" alt="Image" class="w-full h-40 rounded-lg shadow-md object-cover max-w-full">
								</a>
							</div>
							<div class="cursor-pointer">
								<a href="images/11.jpg" data-lightbox="roadtrip" class="w-full h-40 block">
									<img src="images/11-thumb.jpg" alt="Image" class="w-full h-40 rounded-lg shadow-md object-cover max-w-full">
								</a>
							</div>
							<div class="cursor-pointer">
								<a href="images/12.jpg" data-lightbox="roadtrip" class="w-full h-40 block">
									<img src="images/12-thumb.jpg" alt="Image" class="w-full h-40 rounded-lg shadow-md object-cover max-w-full">
								</a>
							</div>
							<div class="cursor-pointer">
								<a href="images/13.jpg" data-lightbox="roadtrip" class="w-full h-40 block">
									<img src="images/13-thumb.jpg" alt="Image" class="w-full h-40 rounded-lg shadow-md object-cover max-w-full">
								</a>
							</div>
							<div class="cursor-pointer">
								<a href="images/14.jpg" data-lightbox="roadtrip" class="w-full h-40 block">
									<img src="images/14-thumb.jpg" alt="Image" class="w-full h-40 rounded-lg shadow-md object-cover max-w-full">
								</a>
							</div>
							<div class="cursor-pointer">
								<a href="images/15.jpg" data-lightbox="roadtrip" class="w-full h-40 block">
									<img src="images/15-thumb.jpg" alt="Image" class="w-full h-40 rounded-lg shadow-md object-cover max-w-full">
								</a>
							</div>
							<div class="cursor-pointer">
								<a href="images/16.jpg" data-lightbox="roadtrip" class="w-full h-40 block">
									<img src="images/16-thumb.jpg" alt="Image" class="w-full h-40 rounded-lg shadow-md object-cover max-w-full">
								</a>
							</div>
							<div class="cursor-pointer">
								<a href="images/17.jpg" data-lightbox="roadtrip" class="w-full h-40 block">
									<img src="images/17-thumb.jpg" alt="Image" class="w-full h-40 rounded-lg shadow-md object-cover max-w-full">
								</a>
							</div>
							<div class="cursor-pointer">
								<a href="images/18.jpg" data-lightbox="roadtrip" class="w-full h-40 block">
									<img src="images/18-thumb.jpg" alt="Image" class="w-full h-40 rounded-lg shadow-md object-cover max-w-full">
								</a>
							</div>
							<div class="cursor-pointer">
								<a href="images/19.jpg" data-lightbox="roadtrip" class="w-full h-40 block">
									<img src="images/19-thumb.jpg" alt="Image" class="w-full h-40 rounded-lg shadow-md object-cover max-w-full">
								</a>
							</div>
							<div class="cursor-pointer">
								<a href="images/20.jpg" data-lightbox="roadtrip" class="w-full h-40 block">
									<img src="images/20-thumb.jpg" alt="Image" class="w-full h-40 rounded-lg shadow-md object-cover max-w-full">
								</a>
							</div>
							<div class="cursor-pointer">
								<a href="images/21.jpg" data-lightbox="roadtrip" class="w-full h-40 block">
									<img src="images/21-thumb.jpg" alt="Image" class="w-full h-40 rounded-lg shadow-md object-cover max-w-full">
								</a>
							</div>
							<div class="cursor-pointer">
								<a href="images/22.jpg" data-lightbox="roadtrip" class="w-full h-40 block">
									<img src="images/22-thumb.jpg" alt="Image" class="w-full h-40 rounded-lg shadow-md object-cover max-w-full">
								</a>
							</div>
							<div class="cursor-pointer">
								<a href="images/23.jpg" data-lightbox="roadtrip" class="w-full h-40 block">
									<img src="images/23-thumb.jpg" alt="Image" class="w-full h-40 rounded-lg shadow-md object-cover max-w-full">
								</a>
							</div>
							<div class="cursor-pointer">
								<a href="images/24.jpg" data-lightbox="roadtrip" class="w-full h-40 block">
									<img src="images/24-thumb.jpg" alt="Image" class="w-full h-40 rounded-lg shadow-md object-cover max-w-full">
								</a>
							</div>
							<div class="cursor-pointer">
								<a href="images/25.jpg" data-lightbox="roadtrip" class="w-full h-40 block">
									<img src="images/25-thumb.jpg" alt="Image" class="w-full h-40 rounded-lg shadow-md object-cover max-w-full">
								</a>
							</div>
							<div class="cursor-pointer">
								<a href="images/26.jpg" data-lightbox="roadtrip" class="w-full h-40 block">
									<img src="images/26-thumb.jpg" alt="Image" class="w-full h-40 rounded-lg shadow-md object-cover max-w-full">
								</a>
							</div>
							<div class="cursor-pointer">
								<a href="images/27.jpg" data-lightbox="roadtrip" class="w-full h-40 block">
									<img src="images/27-thumb.jpg" alt="Image" class="w-full h-40 rounded-lg shadow-md object-cover max-w-full">
								</a>
							</div>
							<div class="cursor-pointer">
								<a href="images/28.jpg" data-lightbox="roadtrip" class="w-full h-40 block">
									<img src="images/28-thumb.jpg" alt="Image" class="w-full h-40 rounded-lg shadow-md object-cover max-w-full">
								</a>
							</div>
						</div>
					</div>
				</div>

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

				<div id="iletisim" class="flex text-xl pt-24 pb-36">
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
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3041.23784716733!2d27.979440812062798!3d40.33706946036404!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14b5d39a952bb597%3A0x8f796a926081b5af!2zNjAwIEV2bGVyLCBZYcWfYXIgRG_En3UgQ2QuIE5vOjI0LCAxMDIwMCBCYW5kxLFybWEvQmFsxLFrZXNpcg!5e0!3m2!1sen!2str!4v1708343309539!5m2!1sen!2str" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="h-80 w-full rounded-md"></iframe>
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
