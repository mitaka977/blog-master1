<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Stay Open for #WorldOfTechnology</title>



        <link href="{{ asset('/css/animate.min.css" rel="stylesheet') }}" rel="stylesheet">
		<link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet">
		<link href="{{ asset('/css/styles.css') }}" rel="stylesheet" type="text/css">


		<!-- Fonts -->
		<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>

	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle Navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand page-scroll" href="#first"><i class="ion-ios-analytics-outline"></i> World of Technic</a>
			</div>
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li>
						<a href="{{ url('/') }}">Начало</a>
					</li>
					<li>
						<a class="page-scroll" href="{{ url('smartphones.blade.php') }}">Смартфони</a>
					</li>
					<li>
						<a class="page-scroll" href="#three">Таблети</a>
					</li>
					<li>
						<a class="page-scroll" href="#four">Лаптопи</a>
					</li>
					<li>
						<a class="page-scroll" href="#last">Новини</a>
					</li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					@if (Auth::guest())
						<li>
							<a href="{{ url('/auth/login') }}">Login</a>
						</li>
						<li>
							<a href="{{ url('/auth/register') }}">Register</a>
						</li>
					@else
						<li class="dropdown">
							@if (Auth::user()->can_post())
							<a href="{{ url('/user/'.Auth::id().'/posts') }}" class="nav navbar-nav navbar-right" role="button" aria-expanded="false" style="margin-right: -100px;margin-top: -30px;">{{ Auth::user()->name }} <span class="caret"></span></a>

							<a href="{{ url('/new-post') }}" class="nav navbar-nav navbar-right" role="button" aria-expanded="false" style="margin-right: -10px;margin-top: -30px">Добави новина <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">

									<li>
										<a href="{{ url('/new-post') }}">Добави новина</a>
									</li>
									<li>
										<a href="{{ url('/user/'.Auth::id().'/posts') }}">Моите новини</a>
									</li>
								@endif

									<a href="{{ url('/user/'.Auth::id()) }}">Профил</a>
								
									<a href="{{ url('/auth/logout') }}" class="nav navbar-nav navbar-right" role="button" aria-expanded="false" style="margin-right: -10px;margin-top: -30px">Излез< <span class="caret"></span></a>

									<a href="{{ url('/auth/logout') }}">Излез</a>
								</li>
							</ul>
						</li>
					@endif
				</ul>
			</div>
		</div>
	</nav>

	<header id="first">
		<div class="header-content">
			<div class="inner">
				<h1 class="cursive">Worlds of Technic</h1>
				<h4>#Hi-Tech News & Reviews</h4>
				<hr>

				<a href="{{ url('/auth/register') }}" id="toggleVideo" data-toggle="collapse" class="btn btn-primary btn-xl">Регистрация</a> &nbsp; <a href="{{ url('/auth/login') }}" class="btn btn-primary btn-xl page-scroll">Влез</a>
			</div>
		</div>
		<video autoplay loop muted poster="" id="video-background">
			<source src="video/video.mp4" type="video/mp4">
		</video>
		</header>
	<section id="two">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center">
					<h2 class="text-primary">TechReview е онлайн медия за най-новото и интересното от света на технологиите. Благодарим Ви, че ни посетихте!</h2>
					<hr class="primary">
				</div>
			</div>
		</div>
		<div class="container">
			<p class="osn"> Основната ни цел е да предоставяме информация за по-голям спектър от света на технологиите. Целта на проекта е да изградим едно сплотено общество, в което могат да участват всички, които се интересуват от използването и прилагането на технологиите в живота и в бизнеса без разлика от пол, възраст, обем на знания в дадена област или пък ниво на професионализъм.</p>
		</div>
	</section>
	<section id="last">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center">
					<h2 class="text-primary">НОВИНИ, РЕВЮТА И СПЕЦИФИКАЦИИ НА ТЕЛЕФОНИ,ТЕБЛЕТИ И ЛАПТОПИ</h2>
					<hr class="primary">
					@if (Session::has('message'))
						<div class="flash alert-info">
							<div class="col-lg-12 text-center">
								<p class="row">
									{{ Session::get('message') }}
								</p>
							</div>
						</div>
				</div>
			</div>
			@endif
			@if ($errors->any())
				<div class='flash alert-danger'>
					<ul class="panel-body">
						@foreach ( $errors->all() as $error )
							<li>
								{{ $error }}
							</li>
						@endforeach
					</ul>
				</div>
			@endif

			<h2>@yield('title')</h2>
			@yield('title-meta')
		</div>
		<div class="col-lg-12 text-center">
			@yield('content')
		</div>
		</div>

		</div>
		</header>


				<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<p> <a href ="#">Home</a></p>
			</div>
		</div>
		</div>
		</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-4 text-center">
					<div class="feature">
						<i class="icon-lg ion-settings wow fadeIn" data-wow-delay=".3s"></i>
						<h3 class="topic">Технически</h3>
						<p class="text-muted">характеристики</p>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 text-center">
					<div class="feature">
						<i class="icon-lg ion-ios-paper-outline wow fadeInUp" data-wow-delay=".2s"></i>
						<h3 class="topic">Последни</h3>
						<p class="text-muted">новини</p>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 text-center">
					<div class="feature">
						<i class="icon-lg ion-ios-camera-outline wow fadeIn" data-wow-delay=".3s"></i>
						<h3 class="topic">Видео</h3>
						<p class="text-muted">ревю</p>

						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<footer id="footer">
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-6 col-sm-3 column">
					<ul class="down-menu">
						<li><a href="default.asp">Начало</a></li>
						<li><a href="news.asp">Новини</a></li>
						<li><a href="contact.asp">Смарфони</a></li>
					</ul>
				</div>

				<div class="col-xs-12 col-sm-3 column">
					<h4>Stay Posted</h4>
					<form>
						<div class="form-group">
							<input type="text" class="form-control" title="No spam, we promise!" placeholder="Tell us your email">
						</div>
						<div class="form-group">
							<button class="btn btn-primary" data-toggle="modal" data-target="#alertModal" type="button">Subscribe for updates</button>
						</div>
					</form>
				</div>
				<div class="col-xs-12 col-sm-3 text-right">
					<h1 class="world">Worlds Of Technologies</h1>
				</div>
			</div>
			<br/>
			<span class="pull-right text-muted small">Anton Borisov & Dimitar Petkov</a> ©2016 All Right Reserved</span>
		</div>
	</footer>






			</div>
			</header>
			<div class="row">
				<div class="col-md-10 col-md-offset-1">
					<p> <a href ="#">Home</a></p>
				</div>
			</div>
		</div>
			</div>

		<!-- Scripts -->
		<script src="{{ asset('/js/jquery.min-2.1.31.js') }}"></script>
		<script src="{{ asset('/js/bootstrap.min-3.31.1.js') }}"></script>


	</body>
</html>
