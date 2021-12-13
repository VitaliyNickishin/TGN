<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>TGN</title>
	<meta name="keywords" content="">
	<meta name="description" content="">
	<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
	<link rel="manifest" href="/site.webmanifest">
	<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
	<meta name="msapplication-TileColor" content="#2b5797">
	<meta name="theme-color" content="#ffffff">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<link href="./theme/css/main.min.css" rel="stylesheet">
</head>
<?php
include_once './functions.php';
$send = send_form();

// if (!empty($_GET['test_email_timeweb'])) {
// 	require_once __DIR__ . '/PHPMailer/PHPMailerAutoload.php';
// 	$email_message = "Test email";

// 	$mail_to_user = new PHPMailer(true);
// 	try {
// 		$mail_to_user->DKIM_private = '/root/digitalwsiagency.com.private';
// 		$mail_to_user->DKIM_selector = 'mail';
// 		$mail_to_user->CharSet = 'utf-8';
// 		$mail_to_user->isHTML(true);
// 		$mail_to_user->setFrom('info@digitalwsiagency.com');
// 		$mail_to_user->FromName = 'TGN';
// 		$mail_to_user->addAddress('maximus.perepel96@gmail.com');
// 		$mail_to_user->addAddress('test-tklpp5itz@srv1.mail-tester.com');
// 		$mail_to_user->Subject = 'Contact request from TGN';
// 		$mail_to_user->Body    = $email_message;
// 		$mail_to_user->send();
// 		$res_mail_to_user_send = true;
// 	} catch (Exception $e) {
// 		$res_mail_to_user_send = $mail_to_user->ErrorInfo;
// 	}
// 	var_dump($res_mail_to_user_send);
// }
?>

<body>
	<div class="app">
		<header class="header">
			<div class="container">
				<div class="header-inner">
					<a href="/" class="logo">
						<img src="./theme/img/logo.svg" alt="logo">
					</a>
					<nav class="nav" data-nav>
						<ul>
							<li class="mobile-menu">
								<button class="burger close" type="button"><span></span></button>
							</li>
							<li><a href="#services">Services</a></li>
							<li><a href="#work-process">Work process</a></li>
							<li><a href="#contact-us">Contact us</a></li>
							<!-- <li><a href="#">Cases</a></li> -->
							<!-- <li><a href="#">Testimonials</a></li> -->
							<!-- <li><a href="#">Leadership</a></li> -->
						</ul>
						<button type="button" class="button openmodal">Contact now</button>
						<button class="burger" type="button"><span></span></button>
					</nav>
				</div>
			</div>
		</header>

		<main class="main">

			<section class="hero">
				<div class="container">
					<div class="row">
						<div class="column one-half">
							<div class="hero__content">
								<div class="title-wrap">
									<h1>Marketing and software development agency for
										<span class="text-gradient">fintech and high tech </span>companies
									</h1>
									<div class="hero__img-mobile">
										<img src="./theme/img/hero-img.png" alt="hero-img">
									</div>
									<p class="undertitle">Get the best practices and development methodologies
										for rapid building and promoting your project. Let us
										bring you new clients, increase brand awareness or
										build a user-friendly platform. Make your business soar!
									</p>
								</div>
								<div class="hero__btn">
									<button type="button" class="button openmodal">Contact now</a>
								</div>
							</div>
						</div>
						<div class="columns five">
							<div class="hero__img-desktop">
								<img src="./theme/img/hero-img.png" alt="hero-img">
							</div>
						</div>
					</div>
			</section>

			<section id="services" class="offer" data-aos="fade-up">
				<div class="container">
					<div class="row">
						<div class="column">
							<div class="title-wrap">
								<h2 class="text-center">What do
									<span class="text-gradient">we offer?</span>
								</h2>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="column one-half">
							<div class="offer__img-desk offer-img">
								<img data-img="solutions" src="./theme/img/offer-img/slide-1.png" alt="PR solutions">
								<img class="hide" data-img="paid" src="./theme/img/offer-img/slide-2.png" alt="Paid traffic">
								<img class="hide" data-img="software" src="./theme/img/offer-img/slide-3.png" alt="Software">
								<img class="hide" data-img="collaboration" src="./theme/img/offer-img/slide-4.png" alt="Collaboration">
								<img class="hide" data-img="video" src="./theme/img/offer-img/slide-5.png" alt="Video Production">
								<img class="hide" data-img="paper" src="./theme/img/offer-img/slide-6.png" alt="White Paper">
							</div>

						</div>
						<div class="column one-half">
							<div class="accordion" data-action="accordion">
								<div class="accordion-inner">

									<div class="tab active">
										<div class="offer__img-mob offer-img">
											<img data-img="solutions" src="theme/img/offer-img/slide-1.png" alt="PR solutions">
										</div>
										<input id="tab-1" type="checkbox" name="fooby[1][]" value="solutions" checked>
										<label for="tab-1">
											<p class="tab-title">
												PR solutions
											</p>
										</label>
										<div class="tab-content">
											<p>We ensure that your startup, organization or event
												is recognized across the world’s top media: we announce your
												recent news and set publications for your project in international
												media.</p>
										</div>
									</div>

									<div class="tab">
										<div class="offer__img-mob offer-img">
											<img class="hide" data-img="paid" src="theme/img/offer-img/slide-2.png" alt="Paid traffic">
										</div>
										<input id="tab-2" type="checkbox" name="fooby[1][]" value="paid">
										<label for="tab-2">
											<p class="tab-title">
												Paid traffic
											</p>
										</label>
										<div class="tab-content">
											<p>Leverage our strong solutions to boost your online presence.
												Our approach to driving traffic can get you organic traffic
												through Google Ads, Yandex Direct, Twitter, Facebook or Instagram.
												We will help to entice the audience and lead the narrative within
												the target audience.</p>
										</div>
									</div>

									<div class="tab">
										<div class="offer__img-mob offer-img">
											<img class="hide" data-img="software" src="theme/img/offer-img/slide-3.png" alt="Software">
										</div>
										<input id="tab-3" type="checkbox" name="fooby[1][]" value="software">
										<label for="tab-3">
											<p class="tab-title">
												Software development
											</p>
										</label>
										<div class="tab-content">
											<p>From IT strategy consulting and top-notch technologies to the end-to-end
												development of scalable solutions. We provide customers with full-cycle
												software development services that adapt seamlessly to your project
												requirements.</p>
										</div>
									</div>

									<div class="tab">
										<div class="offer__img-mob offer-img">
											<img class="hide" data-img="collaboration" src="theme/img/offer-img/slide-4.png" alt="Collaboration">
										</div>
										<input id="tab-4" type="checkbox" name="fooby[1][]" value="collaboration">
										<label for="tab-4">
											<p class="tab-title">
												Collaboration with influencers
											</p>
										</label>
										<div class="tab-content">
											<p>We integrate the most effective influencer marketing solutions
												to help you reach new customers, build brand awareness,
												and grow your marketing ROI and boost your sales.</p>
										</div>
									</div>

									<div class="tab">
										<div class="offer__img-mob offer-img">
											<img class="hide" data-img="video" src="theme/img/offer-img/slide-5.png" alt="Video Production">
										</div>
										<input id="tab-5" type="checkbox" name="fooby[1][]" value="video">
										<label for="tab-5">
											<p class="tab-title">
												Video Production
											</p>
										</label>
										<div class="tab-content">
											<p>We make high-quality cinematic content aimed at inspiring and
												creating brand awareness while educating the audience about
												your business and its community.</p>
										</div>
									</div>

									<div class="tab">
										<div class="offer__img-mob offer-img">
											<img class="hide" data-img="paper" src="theme/img/offer-img/slide-6.png" alt="White Paper">
										</div>
										<input id="tab-6" type="checkbox" name="fooby[1][]" value="paper">
										<label for="tab-6">
											<p class="tab-title">
												White Paper
											</p>
										</label>
										<div class="tab-content">
											<p>We create the best possible technical document that will help to
												turn your potential audience into investors, in turn raising
												millions for your business.</p>
										</div>
									</div>

								</div>
							</div>

						</div>

			</section>

			<section class="seciton-banner" data-aos="fade-up">
				<div class="container">
					<div class="banner">
						<div class="banner-inner">
							<div class="row">
								<div class="column one-half">
									<div class="title-wrap banner__title">
										<h3>Get an analysis for your project from our
											<span class="text-gradient">top marketing and IT experts!</span>
										</h3>
									</div>
									<div class="banner__btn">
										<button type="button" class="button openmodal">Apply now</a>
									</div>

								</div>
								<div class="column one-half">
									<div id="banner-parallax" class="banner__img">
										<div class="layer bulb" data-speedX='0.1' data-speedY="0.1">
											<img src="./theme/img/banner/bulb-6.png" alt="bulb">
										</div>
										<div class="layer note" data-speedX='0.2' data-speedY="0.15">
											<img src="./theme/img/banner/note-5.png" alt="note">
										</div>
										<div class="layer business" data-speedX='0.15' data-speedY="0.1">
											<img src="./theme/img/banner/business-4.png" alt="business">
										</div>
										<div class="layer pin" data-speedX='0.3' data-speedY="0.2">
											<img src="./theme/img/banner/pin-2.png" alt="pin">
										</div>
										<div class="layer list" data-speedX='0.25' data-speedY="0.1">
											<img src="./theme/img/banner/list-3.png" alt="list">
										</div>
										<div class="person">
											<img src="./theme/img/banner/banner-img.png" alt="banner-img">
										</div>

									</div>
								</div>
							</div>

						</div>
					</div>
				</div>
			</section>

			<section id="work-process" class="our-work" data-aos="fade-up">
				<div class="container">
					<div class="row">
						<div class="column">
							<div class="title-wrap">
								<h2 class="text-center">How do
									<span class="text-gradient">we work?</span>
								</h2>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="column one-half">
							<div class="our-work__img">
								<img src="./theme/img/target.png" alt="target">
							</div>
						</div>
						<div class="column one-half">
							<div class="list-steps-wrap">
								<div class="steps step-one">
									<span class="number number-one">1</span>
									<p>Learn all the details about your project</p>
								</div>
								<div class="steps step-two">
									<span class="number number-two">2</span>
									<p>Conduct marketing research</p>
								</div>
								<div class="steps step-three">
									<span class="number number-three">3</span>
									<p>Pick the most suitable channels and platforms to cover your goals</p>
								</div>
								<div class="steps step-four">
									<span class="number number-four">4</span>
									<p>Carry a successful marketing campaign</p>
								</div>
								<div class="steps step-five">
									<span class="number number-five">5</span>
									<p>Analyze marketing campaign and define the most prominent segments</p>
								</div>
								<div class="steps step-six">
									<span class="number number-six">6</span>
									<p>Detailed report and recommendations that should be integrated as the next steps</p>
								</div>

								<div class="border">
									<div class="circle"></div>
								</div>
							</div>
						</div>

					</div>
				</div>
			</section>

			<section class="meeting" data-aos="fade-up">
				<div class="container">
					<div class="row">
						<div class="column">
							<div class="title-wrap">
								<h2 class="text-center">Let’s have
									<span class="text-gradient">a meeting</span>
								</h2>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="column">
							<div class="meeting-inner">
								<div class="map">
									<div class="map-img">
										<img src="./theme/img/map-meeting.svg" alt="map-meeting">
									</div>
								</div>

								<div class="location location-venezuela">
									<div class="location-inner">
										<div class="city">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<circle cx="11.6769" cy="11.8153" r="9.3641" fill="#0A111A" stroke="url(#paint0_linear_180_4793)" stroke-width="4" />
												<defs>
													<linearGradient id="paint0_linear_180_4793" x1="23.041" y1="-8.91921" x2="-5.79447" y2="-4.37036" gradientUnits="userSpaceOnUse">
														<stop stop-color="#5AACF8" />
														<stop offset="1" stop-color="#395FE4" />
													</linearGradient>
												</defs>
											</svg>
											<p>Venezuela</p>
										</div>

										<div class="info-popup">
											<div class="info-popup-inner">
												<div class="info-popup-header">
													<p>Venezuela</p>
													<div class="icon-wrap">
														<span>Show on Maps</span>
														<a href="https://www.google.com.ua/maps/place/%D0%92%D0%B5%D0%BD%D0%B5%D1%81%D1%83%D1%8D%D0%BB%D0%B0/@7.1850013,-68.8709926,6.73z/data=!4m13!1m7!3m6!1s0x8c2853cb36cbd801:0xdca0f2587cd54dd3!2z0JLQtdC90LXRgdGD0Y3Qu9Cw!3b1!8m2!3d6.42375!4d-66.58973!3m4!1s0x8c2853cb36cbd801:0xdca0f2587cd54dd3!8m2!3d6.42375!4d-66.58973?hl=ru" class="map-icon" target="_blank">
															<img src="./theme/img/google-map.svg" alt="google-map">
														</a>
													</div>
												</div>
												<div class="info-popup-contacts">
													<p><strong>+370 488 498-54-32</strong></p>
													<p>Vito Gerulaičio gatvė 1</p>
													<p>08200 Vilnius</p>
													<p>Lithuania</p>
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="location location-spain">
									<div class="location-inner">
										<div class="city">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<circle cx="11.6769" cy="11.8153" r="9.3641" fill="#0A111A" stroke="url(#paint0_linear_180_4793)" stroke-width="4" />
												<defs>
													<linearGradient id="paint0_linear_180_4793" x1="23.041" y1="-8.91921" x2="-5.79447" y2="-4.37036" gradientUnits="userSpaceOnUse">
														<stop stop-color="#5AACF8" />
														<stop offset="1" stop-color="#395FE4" />
													</linearGradient>
												</defs>
											</svg>
											<p>Spain</p>
										</div>

										<div class="info-popup">
											<div class="info-popup-inner">
												<div class="info-popup-header">
													<p>Spain</p>
													<div class="icon-wrap">
														<span>Show on Maps</span>
														<a href="https://www.google.com.ua/maps/place/%D0%98%D1%81%D0%BF%D0%B0%D0%BD%D0%B8%D1%8F/@40.1300291,-8.2052579,6z/data=!3m1!4b1!4m5!3m4!1s0xc42e3783261bc8b:0xa6ec2c940768a3ec!8m2!3d40.463667!4d-3.74922?hl=ru" class="map-icon" target="_blank">
															<img src="./theme/img/google-map.svg" alt="google-map">
														</a>
													</div>
												</div>
												<div class="info-popup-contacts">
													<p><strong>+370 488 498-54-32</strong></p>
													<p>Vito Gerulaičio gatvė 1</p>
													<p>08200 Vilnius</p>
													<p>Lithuania</p>
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="location location-germany">
									<div class="location-inner">
										<div class="city">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<circle cx="11.6769" cy="11.8153" r="9.3641" fill="#0A111A" stroke="url(#paint0_linear_180_4793)" stroke-width="4" />
												<defs>
													<linearGradient id="paint0_linear_180_4793" x1="23.041" y1="-8.91921" x2="-5.79447" y2="-4.37036" gradientUnits="userSpaceOnUse">
														<stop stop-color="#5AACF8" />
														<stop offset="1" stop-color="#395FE4" />
													</linearGradient>
												</defs>
											</svg>
											<p>Germany</p>
										</div>

										<div class="info-popup">
											<div class="info-popup-inner">
												<div class="info-popup-header">
													<p>Germany</p>
													<div class="icon-wrap">
														<span>Show on Maps</span>
														<a href="https://www.google.com.ua/maps/place/%D0%93%D0%B5%D1%80%D0%BC%D0%B0%D0%BD%D0%B8%D1%8F/@51.0967557,5.9662427,6z/data=!3m1!4b1!4m5!3m4!1s0x479a721ec2b1be6b:0x75e85d6b8e91e55b!8m2!3d51.165691!4d10.451526?hl=ru" class="map-icon" target="_blank">
															<img src="./theme/img/google-map.svg" alt="google-map">
														</a>
													</div>
												</div>
												<div class="info-popup-contacts">
													<p><strong>+370 488 498-54-32</strong></p>
													<p>Vito Gerulaičio gatvė 1</p>
													<p>08200 Vilnius</p>
													<p>Germany</p>
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="location location-belarus">
									<div class="location-inner">
										<div class="city">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<circle cx="11.6769" cy="11.8153" r="9.3641" fill="#0A111A" stroke="url(#paint0_linear_180_4793)" stroke-width="4" />
												<defs>
													<linearGradient id="paint0_linear_180_4793" x1="23.041" y1="-8.91921" x2="-5.79447" y2="-4.37036" gradientUnits="userSpaceOnUse">
														<stop stop-color="#5AACF8" />
														<stop offset="1" stop-color="#395FE4" />
													</linearGradient>
												</defs>
											</svg>
											<p>Belarus</p>
										</div>

										<div class="info-popup">
											<div class="info-popup-inner">
												<div class="info-popup-header">
													<p>Belarus</p>
													<div class="icon-wrap">
														<span>Show on Maps</span>
														<a href="https://www.google.com.ua/maps/place/%D0%91%D0%B5%D0%BB%D0%B0%D1%80%D1%83%D1%81%D1%8C/@53.6395376,23.4907492,6z/data=!3m1!4b1!4m5!3m4!1s0x46da2584e2ad4881:0xa1d181ec8c10!8m2!3d53.709807!4d27.953389?hl=ru" class="map-icon" target="_blank">
															<img src="./theme/img/google-map.svg" alt="google-map">
														</a>
													</div>
												</div>
												<div class="info-popup-contacts">
													<p><strong>+370 488 498-54-32</strong></p>
													<p>Vito Gerulaičio gatvė 1</p>
													<p>08200 Vilnius</p>
													<p>Belarus</p>
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="location location-russia">
									<div class="location-inner">
										<div class="city">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<circle cx="11.6769" cy="11.8153" r="9.3641" fill="#0A111A" stroke="url(#paint0_linear_180_4793)" stroke-width="4" />
												<defs>
													<linearGradient id="paint0_linear_180_4793" x1="23.041" y1="-8.91921" x2="-5.79447" y2="-4.37036" gradientUnits="userSpaceOnUse">
														<stop stop-color="#5AACF8" />
														<stop offset="1" stop-color="#395FE4" />
													</linearGradient>
												</defs>
											</svg>
											<p>Russia</p>
										</div>

										<div class="info-popup">
											<div class="info-popup-inner">
												<div class="info-popup-header">
													<p>Russia</p>
													<div class="icon-wrap">
														<span>Show on Maps</span>
														<a href="https://www.google.com.ua/maps/place/%D0%A0%D0%BE%D1%81%D1%81%D0%B8%D1%8F/@49.7624107,68.6691234,3z/data=!3m1!4b1!4m5!3m4!1s0x453c569a896724fb:0x1409fdf86611f613!8m2!3d61.52401!4d105.318756?hl=ru" class="map-icon" target="_blank">
															<img src="./theme/img/google-map.svg" alt="google-map">
														</a>
													</div>
												</div>
												<div class="info-popup-contacts">
													<p><strong>+370 488 498-54-32</strong></p>
													<p>Vito Gerulaičio gatvė 1</p>
													<p>08200 Vilnius</p>
													<p>Russia</p>
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="location location-japan">
									<div class="location-inner">
										<div class="city">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<circle cx="11.6769" cy="11.8153" r="9.3641" fill="#0A111A" stroke="url(#paint0_linear_180_4793)" stroke-width="4" />
												<defs>
													<linearGradient id="paint0_linear_180_4793" x1="23.041" y1="-8.91921" x2="-5.79447" y2="-4.37036" gradientUnits="userSpaceOnUse">
														<stop stop-color="#5AACF8" />
														<stop offset="1" stop-color="#395FE4" />
													</linearGradient>
												</defs>
											</svg>
											<p>Japan</p>
										</div>

										<div class="info-popup">
											<div class="info-popup-inner">
												<div class="info-popup-header">
													<p>Japan</p>
													<div class="icon-wrap">
														<span>Show on Maps</span>
														<a href="https://www.google.com.ua/maps/place/%D0%AF%D0%BF%D0%BE%D0%BD%D0%B8%D1%8F/@32.2045905,118.9961107,4z/data=!3m1!4b1!4m5!3m4!1s0x34674e0fd77f192f:0xf54275d47c665244!8m2!3d36.204824!4d138.252924?hl=ru" class="map-icon" target="_blank">
															<img src="./theme/img/google-map.svg" alt="google-map">
														</a>
													</div>
												</div>
												<div class="info-popup-contacts">
													<p><strong>+370 488 498-54-32</strong></p>
													<p>Vito Gerulaičio gatvė 1</p>
													<p>08200 Vilnius</p>
													<p>Japan</p>
												</div>
											</div>
										</div>
									</div>
								</div>

							</div>

						</div>
					</div>
				</div>
			</section>

		</main>
		<footer id="contact-us" class="footer" data-aos="fade-up">

			<div class="container">
				<div class="footer-inner">
					<div class="row">
						<div class="left column">
							<div class="title-wrap">
								<p class="h3">Let us help you build and grow <span class="text-gradient">your company.</span></p>
								<p class="undertitle">Our team strives to provide you with the best customer
									experience. We are always here to help you and assist
									your project at all stages of marketing and software
									development activities.
								</p>
							</div>


						</div>
						<div class="right column">
							<div class="contact-form">
								<form class="footer-form" action="/" method="post">
									<input type="hidden" name="get_cf_footer" value="1" />

									<input type="hidden" name="utm_source" value="" />
									<input type="hidden" name="utm_medium" value="" />
									<input type="hidden" name="utm_campaign" value="" />
									<input type="hidden" name="utm_content" value="" />
									<input type="hidden" name="utm_term" value="" />

									<div class="first-row form-row">
										<div class="input-wrap">
											<input name="name" type="text" required placeholder="How can we call you?">
										</div>
										<div class="input-wrap">
											<input name="phone" type="tel" required placeholder="WhatsApp / Telegram">
										</div>
										<div class="input-wrap">
											<input name="email" type="email" placeholder="E-mail">
										</div>
									</div>
									<div class="second-row form-row">
										<textarea name="message" cols="40" rows="10" class="textarea" placeholder="Describe your situation. How can we help you?"></textarea>
									</div>
									<div class="btn-row form-row">
										<button class="button" type="submit">Apply now</button>
									</div>
								</form>
							</div>
						</div>
					</div>
					<div class="row footer-copyright">
						<div class="column">
							<div class="copy">
								<p>TNG Agency © 2017-2021 — All rights reserved.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer>
	</div>

	<div class="modalbox">
		<div class="modal-contact-us-wrap">
			<div class="modal-contact-us">
				<button class="burger close openmodal" type="button" area-label="modal"><span></span></button>
				<div class="title-wrap">
					<p class="h3">Contact us</p>
					<p class="undertitle">Let us help you build and grow your company</p>
				</div>
				<form action="/" method="post">
					<input type="hidden" name="get_cf_modal" value="1" />
					<input type="hidden" name="utm_source" value="" />
					<input type="hidden" name="utm_medium" value="" />
					<input type="hidden" name="utm_campaign" value="" />
					<input type="hidden" name="utm_content" value="" />
					<input type="hidden" name="utm_term" value="" />
					<div class="fieldset flex">
						<div class="item">
							<label for="name">How can we call you?</label>
							<input type="text" name="name" value="" id="name" required placeholder="Enter your Name and Surname">
						</div>
						<div class="item">
							<label for="tg">WhatsApp / Telegram</label>
							<input type="text" name="phone" value="" id="tg" required placeholder="@">
						</div>
					</div>
					<div class="fieldset">
						<label for="email">E-mail</label>
						<input type="text" name="email" type="email" value="" id="email" placeholder="Enter your E-mail">
						<!-- <div class="error">Please, enter correct E-mail</div> -->
					</div>
					<div class="fieldset">
						<label for="email">Text message</label>
						<textarea id="textarea" name="message" placeholder="Describe your situation. How can we help you?"></textarea>
					</div>
					<button type="submit" class="button">Send</button>
				</form>
			</div>

		</div>

	</div>

	<div class="modalsuccess <?php if (!empty($send['status']) && $send['status'] == 'success_send_form') : ?>modalbox active open<?php endif; ?>">
		<div class="info">
			<button class="close_modalsuccess"></button>
			<div class="title">Awesome!</div>
			<div class="desc"><?php echo $send['message']; ?></div>
		</div>
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/simple-parallax-js@5.5.1/dist/simpleParallax.min.js"></script>
	<script src="./theme/js/main.min.js"></script>
	<script src="./theme/js/custom.js"></script>
</body>

</html>