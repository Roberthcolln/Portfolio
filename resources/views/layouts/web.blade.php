<!--
author: Boostraptheme
author URL: https://boostraptheme.com
License: Creative Commons Attribution 4.0 Unported
License URL: https://creativecommons.org/licenses/by/4.0/
-->

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<link rel="shortcut icon" href="{{asset('web/img/favicon.ico')}}">
	<title>Profile Bootstrap Theme</title>

	<!-- Global stylesheets -->
	<link href="{{asset('web/css/bootstrap/bootstrap.min.css')}}" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:100,200,300,400,500,600,700,800,900" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
	<link href="{{asset('web/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
	<link href="{{asset('web/css/devicons/css/devicons.min.css')}}" rel="stylesheet">
	<link href="{{asset('web/css/simple-line-icons/css/simple-line-icons.css')}}" rel="stylesheet">
	<link href="{{asset('web/css/style.css')}}" rel="stylesheet">
</head>

<body id="page-top">

	<nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
		<a class="navbar-brand js-scroll-trigger" href="#page-top">
			<span class="d-block d-lg-none  mx-0 px-0"><img src="{{asset('web/img/logo-white.png')}}" alt="" class="img-fluid"></span>
			<span class="d-none d-lg-block">
				<img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="{{asset('logo/'.$konf->logo_setting)}}" alt="">
			</span>
		</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link js-scroll-trigger" href="#about">About</a>
				</li>
				<li class="nav-item">
					<a class="nav-link js-scroll-trigger" href="#experience">Experience</a>
				</li>
				<li class="nav-item">
					<a class="nav-link js-scroll-trigger" href="#education">Education</a>
				</li>
				<li class="nav-item">
					<a class="nav-link js-scroll-trigger" href="#portfolio">Portfolio</a>
				</li>
				<li class="nav-item">
					<a class="nav-link js-scroll-trigger" href="#skills">Skills</a>
				</li>
				
				<li class="nav-item">
					<a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
				</li>
			</ul>
		</div>
	</nav>

	@yield('isi')



	<!-- Global javascript -->
	<script src="{{asset('web/js/jquery/jquery.min.js')}}"></script>
	<script src="{{asset('web/js/bootstrap/bootstrap.bundle.min.js')}}"></script>
	<script src="{{asset('web/js/jquery-easing/jquery.easing.min.js')}}"></script>
	<script src="{{asset('web/js/counter/jquery.waypoints.min.js')}}"></script>
	<script src="{{asset('web/js/counter/jquery.counterup.min.js')}}"></script>
	<script src="{{asset('web/js/custom.js')}}"></script>
	<script>
		$(document).ready(function() {

			$(".filter-b").click(function() {
				var value = $(this).attr('data-filter');
				if (value == "all") {
					$('.filter').show('1000');
				} else {
					$(".filter").not('.' + value).hide('3000');
					$('.filter').filter('.' + value).show('3000');
				}
			});

			if ($(".filter-b").removeClass("active")) {
				$(this).removeClass("active");
			}
			$(this).addClass("active");
		});

		// SKILLS
		$(function() {
			$('.counter').counterUp({
				delay: 10,
				time: 2000
			});

		});
	</script>
</body>

</html>