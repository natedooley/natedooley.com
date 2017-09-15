<!DOCTYPE html>
<html lang="en-us">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Nate Dooley</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
		<script type="text/javascript" src="assets/js/autosize.min.js"></script>
		<script type="text/javascript" src="assets/js/bowser.js"></script>
		<link rel="stylesheet" href="assets/css/main.css" type="text/css" />
		<link rel="stylesheet" href="assets/css/hamburger.css" type="text/css" />
		<link rel="stylesheet" href="assets/css/grid.css" type="text/css" />
		<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
		<link href="https://fonts.googleapis.com/css?family=Lato:400,300" rel="stylesheet">
	</head>
	<body>
		<div class="menu">
			<div class="menu-wrapper">
				<a class="svg-wrapper svg-wrapper-hamburger" href="#work">
	  				<svg height="60" width="320" xmlns="http://www.w3.org/2000/svg">
	    				<rect class="shape" height="60px" width="320" />
	  				</svg>
	  				<p class="text-button">
						My Work
					</p>
				</a>
				<a class="svg-wrapper svg-wrapper-hamburger" href="#about">
	  				<svg height="60" width="320" xmlns="http://www.w3.org/2000/svg">
	    				<rect class="shape" height="60px" width="320" />
	  				</svg>
	  				<p class="text-button">
						About Me
					</p>
				</a>
				<a class="svg-wrapper svg-wrapper-hamburger" href="#contact">
	  				<svg height="60" width="320" xmlns="http://www.w3.org/2000/svg">
	    				<rect class="shape" height="60px" width="320" />
	  				</svg>
	  				<p class="text-button">
						Contact
					</p>
				</a>
				<div class="copyright">Copyright &copy; 2017 Nate Dooley</div>
			</div>
		</div>
		<div class="section one">
			<nav class="header">

				<a href="#!" class="logo-header">
					<img src="assets/img/DVA.png" alt="logo"></img>
				</a>
				<button class="hamburger hamburger--emphatic" type="button" style="outline:none;z-index:1001;position:absolute;top:0;right:0">
					<span class="hamburger-box">
						<span class="hamburger-inner"></span>
					</span>
				</button>
			</nav>

			<div class="hero-content">
				<h2 style="margin:27px 0;text-align:center;letter-spacing:2px;text-shadow: 2px 2px 8px black;font-size: 48px">
					Nate Dooley
				</h2>
				<img class="circular--square" src="assets/img/nate.jpg" />
				<div class="hero-text">
					Rochester Institute of Technology 
					<hr> 
					B.S. Computing and Information Technologies '22 
					<hr>
					Computer Science House active member
					<br><br>
				<a class="svg-wrapper" href="#about">
	  				<svg height="60" width="320" xmlns="http://www.w3.org/2000/svg">
	    				<rect class="shape2" height="60px" width="320" />
	  				</svg>
	  				<p class="text-button">
						About Me
					</p>
				</a>

			</div>
		</div>
		<div class="hero-div">
		<video class="hero" autoplay muted loop>
			<source src="assets/videos/roc5.webm" type="video/webm" />
		</video>
		</div>
		<div class="section two" id="work">
			<div class="work-container">
				<div class="grid grid-pad">
					<div class="col-3-12" style="height:240px;vertical-align:middle">
						<div style="height:40px"></div>
						<h2 style="margin:27px 0;letter-spacing:2px;color:#363636">
							My Projects
						</h2>
						<p style="color:#363636;font-weight:300;font-size:12px">
							We're shocked. Oh well, here are some of our favorite pieces, sure to win you over.
						</p>
					</div>
					<div class="col-9-12">
						<div class="thumbnail-carousel">

						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="section three" id="about">
			<div class="about-wrapper">
				<div class="about-content">
					<h2>
						About Me
					</h2>

					I'm a Computer and Information Technology major at RIT specializing in Networking and System Administration. I'm a member of the Computer Science House and a top-tier student. 
				</div>
			</div>
		</div>
		<div class="section four" id="contact">
			<div class="contact-wrapper">
				<h2 style="font-family:'Lato', sans-serif;font-weight:300;text-align:center;;letter-spacing:2px;color:#363636;padding:70px 70px 0 70px;margin:0">
					Contact Me
				</h2>
				<p style="font-family:'Lato';color:#363636;font-size:14px;text-align:center;padding-bottom:55px">Any Questions? Comments? Cries of outrage? Leave 'em below and we'll get back to you as soon as we see 'em.</p>
				<form class="contact-form" method="post" action="index.php#contact">
  					<input class="text" name="name" placeholder="NAME"></input>
  					<input class="text" name="email" placeholder="EMAIL" style="float:right"></input>
  					<input class="text" name="subject" placeholder="SUBJECT" style="width:calc(100% - 24px)"></input>
  					<textarea class="text message" name="message" placeholder="MESSAGE"></textarea>
  					<input class="text" type="submit" name="submit" value="SUBMIT" style="width:165px;display:block;color:#ababae;margin:0 auto;cursor:pointer"></input>
				</form>

				<?php
					if (isset($_POST['submit'])) {

						?>

							<div class="echo" style="padding:100px;font-size:16px;font-family:lato;color:#585858;text-align:center;">

						<?php
						if (!isset($_POST['name']) ||
						!isset($_POST['email']) ||
						!isset($_POST['subject']) ||
						!isset($_POST['message'])) {
							echo 'There\'s something wrong with your contact information';
						} else {
							$email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
							$email = $_POST['email'];

							if(!preg_match($email_exp,$email)) {
								echo 'Your E-Mail address is invalid. Try again.';
							} else {
								$headers = 'From: ' . $email . "\r\n" .
								'Reply-To: ' . $email . "\r\n" .
								'X-Mailer: PHP/' . phpversion();

								if (mail( 'andrewrobinson615@gmail.com', $_POST['subject'], $_POST['message'], $headers)) {
									echo 'Sent! We\'ll get back to you as soon as we can!';
								}
							}
						}

						?>

							</div>

						<?php
					}
				?>
			</div>
		</div>

		<div class="social">
			<div class="social-wrapper">
				<a href="https://vimeo.com/marcdooley" class="social-icon v">
					<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 width="52px" height="52px" viewBox="0 0 52 52" style="enable-background:new 0 0 512 512;" xml:space="preserve">
	<path d="M256,0C114.615,0,0,114.615,0,256s114.615,256,256,256s256-114.615,256-256S397.385,0,256,0z M408.027,408.027
		c-19.76,19.759-42.756,35.267-68.354,46.094c-6.502,2.75-13.105,5.164-19.801,7.246V423c0-20.167-6.916-35-20.75-44.5
		c8.668-0.833,16.625-2,23.875-3.5s14.918-3.667,23-6.5c8.084-2.833,15.334-6.208,21.75-10.125c6.418-3.917,12.584-9,18.5-15.25
		c5.918-6.25,10.875-13.333,14.875-21.25s7.168-17.417,9.5-28.5c2.334-11.083,3.5-23.292,3.5-36.625c0-25.833-8.416-47.833-25.25-66
		c7.668-20,6.834-41.75-2.5-65.25l-6.25-0.75c-4.332-0.5-12.125,1.333-23.375,5.5s-23.875,11-37.875,20.5
		c-19.832-5.5-40.416-8.25-61.749-8.25c-21.5,0-42,2.75-61.5,8.25c-8.833-6-17.208-10.958-25.125-14.875s-14.25-6.583-19-8
		s-9.167-2.292-13.25-2.625s-6.708-0.417-7.875-0.25s-2,0.333-2.5,0.5c-9.333,23.667-10.167,45.417-2.5,65.25
		c-16.833,18.167-25.25,40.167-25.25,66c0,13.333,1.167,25.542,3.5,36.625s5.5,20.583,9.5,28.5s8.958,15,14.875,21.25
		s12.083,11.333,18.5,15.25s13.667,7.292,21.75,10.125s15.75,5,23,6.5s15.208,2.667,23.875,3.5c-13.667,9.333-20.5,24.167-20.5,44.5
		v39.115c-7.549-2.247-14.99-4.902-22.3-7.994c-25.597-10.827-48.594-26.335-68.353-46.094
		c-19.758-19.758-35.267-42.756-46.093-68.354C46.679,313.195,41,285.043,41,256s5.679-57.195,16.879-83.675
		c10.827-25.597,26.335-48.594,46.093-68.353c19.758-19.759,42.756-35.267,68.353-46.093C198.805,46.679,226.957,41,256,41
		s57.195,5.679,83.676,16.879c25.598,10.827,48.594,26.335,68.354,46.093c19.758,19.758,35.266,42.756,46.092,68.353
		C465.32,198.805,471,226.957,471,256s-5.68,57.195-16.879,83.675C443.295,365.271,427.785,388.27,408.027,408.027z"/>
					</svg>
				</a>
				<a href="#" class="social-icon fb">
					<svg xmlns="http://www.w3.org/2000/svg" height="52" viewBox="0 0 32 32" width="52">
    					<path d="m12.7 16.7-2 0 0-4.1 2 0 0-4.3c0.1-1.9 1.6-3.2 3.6-3.2l4.6 0 0 4.1-2.7 0c-0.5 0-0.7 0.2-0.7 0.8l0 2.6 3.4 0-0.7 4.1-2.7 0 0 10.2-4.8 0z" style="fill:#C3C3C3;stroke-width:0.01"/>
					</svg>
				</a>
				<a href="#" class="social-icon t">
					<svg xmlns="http://www.w3.org/2000/svg" height="32" viewBox="0 0 32 32" width="32">
						<path d="m3.1 24.7c3.5 0.1 5.6-0.5 7.9-2.3-2.3 0-4.3-1.4-5-3.7 0.6 0.3 1.4 0.1 2.2 0C7.1 18.5 4.2 17.3 4.1 13.5 4.9 13.8 5.7 14.2 6.5 14.2 5.2 13.5 3 10.7 4.7 7.1 7.4 10.5 11.8 12.5 15.7 12.6 14.6 10.3 17 6 20.9 6.1 23 6.2 23.8 7 24.7 7.8 26 7.5 27.1 7 28 6.5 27.6 7.6 27.1 8.7 25.8 9.3L28.9 8.7c-0.6 0.9-1 1.5-2.6 2.7 0.1 3.1-0.8 6.4-2.9 9.4-6.6 8.7-16.5 6.5-20.3 3.8z" style="fill:#c3c3c3;stroke-width:0.01"/>
					</svg>
				</a>
			</div>
		</div>
		<div class="footer">
			<div class="copyright-ftr">&copy; 2017 Nate Dooley | All Rights Reserved | Website in collaboration with Andrew Robinson</div>
		</div>

		<script>
			/*global $*/

			var $hamburger = $(".hamburger");
			$hamburger.on("click", function(e) {
				$hamburger.toggleClass("is-active");
				$(".menu").toggleClass("menu-active");
				$("body").toggleClass("noscroll");
			});

			$(".svg-wrapper-hamburger").on("click", function () {
				$hamburger.toggleClass("is-active");
				$(".menu").toggleClass("menu-active");
				$("body").toggleClass("noscroll");
			});
		</script>
	</body>
</html>
