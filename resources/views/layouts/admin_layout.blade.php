@section('head')
<!DOCTYPE html>
<html lang="en-US">

<head>
	<title>{{ $title }}</title>
	<meta name="author" content="Nile-Theme">
	<meta http-equiv="content-type" content="text/html; charset=utf-8">
	<meta name="keywords" content="recipes food, recipes , chinese food, italian food">
	<meta name="description" content="Cook Note - Food & Recipes Food Template">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- google fonts -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,800%7CPoppins:100,200,300i,300,400,700,400i,500%7CDancing+Script:700" rel="stylesheet">
	<!-- animate -->
	<link rel="stylesheet" href="{{ asset("assets/css/animate.css") }}" />
	<!-- owl Carousel assets -->
	<link href="{{ asset("assets/css/owl.carousel.css") }}" rel="stylesheet">
	<link href="{{ asset("assets/css/owl.theme.css") }}" rel="stylesheet">
	<!-- bootstrap -->
	<link rel="stylesheet" href="{{ asset("assets/css/bootstrap.min.css") }}">
	<!-- hover anmation -->
	<link rel="stylesheet" href="{{ asset("assets/css/hover-min.css") }}">
	<!-- flag icon -->
	<link rel="stylesheet" href="{{ asset("assets/css/flag-icon.min.css") }}">
	<!-- main style -->
	<link rel="stylesheet" href="{{ asset("assets/css/style.css") }}">
	<!-- colors -->
	<link rel="stylesheet" href="{{ asset("assets/css/colors/main.css") }}">
	<!-- elegant icon -->
	<link rel="stylesheet" href="{{ asset("assets/css/elegant_icon.css") }}">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="{{ asset("assets/css/fontawesome-all.min.css") }}">
	<!-- Custom styles for this template -->
    <link rel="stylesheet" id="css-main" href="{{ asset("assets/css/dashmix.min.css") }}">
	<link rel="shortcut icon" href="{{ asset("assets/img/icon/favicon.ico") }}" type="image/x-icon">
    

</head>
@show

@section('header')
<body>
	<header class="background-main-color">
		<div class="container">
			<div class="header-output">
				<div class="header-in">

					<div class="row">
						<div class="col-lg-2 col-md-12">
							<a id="logo" href="{{ route('home') }}" class="d-inline-block margin-tb-5px"><img src="{{asset("assets/img/logo_home1.png") }}" alt=""></a>
							<a class="mobile-toggle padding-13px background-main-color" href="#"><i class="fas fa-bars"></i></a>
						</div>
						<div class="col-lg-10 col-md-12 position-inherit">
							<ul id="menu-main" class="white-link dropdown-dark text-lg-right nav-menu link-padding-tb-17px">
								<li class="has-dropdown"><a href="{{ route('home') }}">Главная</a></li>
								<li class="has-dropdown"><a href="#">Блог</a>
									<ul class="sub-menu text-left">
										
										<li><a href="{{ route('blog') }}">Blog List</a></li>
										
									</ul>
								</li>
								<li class="has-dropdown"><a href="#">Запись</a>
									<ul class="sub-menu text-left">
										<li><a href="https://t.me/banano_chelentano">Запись через Telegram</a></li>
										<li><a href="https://wa.me/79030247334?text=Привет!%20Хочу%20записаться%20на%20процедуру.">Запись через WhatsApp</a></li>
										<li><a href="https://instagram.com/pisanenko.hair?utm_medium=copy_..">Запись чререз Instagram</a></li>
										<li><a href="https://wa.me/79030247334?text=Привет!%20Хочу%20быть%20моделью.">Хочешь быть моделью? Пиши сюда</a></li>
									</ul>
								</li>
								<li><a href="{{ route('contact') }}">Контакты</a></li>
							</ul>
						</div>
						
					</div>

				</div>
			</div>
		</div>
	</header>
	<!-- // Header  -->
@show  
@section('content')


@show

@section('footer')
	<footer class="padding-top-100px padding-bottom-70px background-dark">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-4 sm-mb-30px">
					<div class="logo margin-bottom-10px"><img src="{{ asset("assets/img/logo_home.png") }}" alt=""></div>
					<div class="text-grey-2 text-up-small font-weight-300"> Для того что-бы записаться на процедуру, вы можете воспользоваться разделом "Запись" в верхнем меню. Выберите удобную для вас платформу и задавайте вопросы, я проконсультирую в течении 20 минут.</div>
					<ul class="list-inline text-left margin-tb-20px margin-lr-0px text-white">
						<li class="list-inline-item"><a class="facebook" href="https://www.facebook.com/irka.kurganova/"><i class="fab fa-facebook-f"></i></a></li>
						<li class="list-inline-item"><a class="facebook" href="https://www.instagram.com/pisanenko.hair/"><i class="fab fa-instagram"></i></a></li>
						<li class="list-inline-item"><a class="facebook" href="https://t.me/banano_chelentano"><i class="fab fa-telegram"></i></a></li>
						<li class="list-inline-item"><a class="facebook" href="https://vk.com/id.irka.keratin"><i class="fab fa-vk"></i></a></li>
					</ul>
					<!-- // Social -->
				</div>

				<div class="col-lg-4  col-md-4 sm-mb-30px">
					<ul class="footer-menu-2 row margin-0px padding-0px list-unstyled text-up-small">
						<li class="col-6  padding-tb-5px"><a href="{{ route('home') }}" class="text-grey-2">Главная</a></li>
						<li class="col-6  padding-tb-5px"><a href="https://wa.me/79030247334" class="text-grey-2">Обратная связь</a></li>
						<li class="col-6  padding-tb-5px"><a href="https://wa.me/79030247334?text=Привет!%20Хочу%20записаться%20на%20процедуру." class="text-grey-2">Запись на процедуры</a></li>
						<li class="col-6  padding-tb-5px"><a href="{{ route('blog') }}" class="text-grey-2">Блог</a></li>
						<li class="col-6  padding-tb-5px"><a href="#" class="text-grey-2">Кератин</a></li>
						<li class="col-6  padding-tb-5px"><a href="#" class="text-grey-2">Ботокс</a></li>
						<li class="col-6  padding-tb-5px"><a href="#" class="text-grey-2">Нанопластика</a></li>
						<li class="col-6  padding-tb-5px"><a href="#" class="text-grey-2">Холодное восстановление</a></li>
					</ul>
				</div>


			</div>
		</div>
	</footer>


	<div class="padding-tb-10px background-main-color">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="text-white margin-tb-15px text-center text-lg-left text-up-small">
						Примечание | @2021 Все права защищены
					</div>
				</div>
				<div class="col-md-6">
					<ul class="list-inline text-lg-right text-center margin-lr-0px margin-tb-15px text-white">
						<li class="list-inline-item margin-lr-8px"><a class="facebook" href="https://www.facebook.com/irka.kurganova/"><i class="fab fa-facebook-f"></i></a></li>
						<li class="list-inline-item margin-lr-8px"><a class="facebook" href="https://www.instagram.com/pisanenko.hair/"><i class="fab fa-instagram"></i></a></li>
						<li class="list-inline-item margin-lr-8px"><a class="facebook" href="https://t.me/banano_chelentano"><i class="fab fa-telegram"></i></a></li>
						<li class="list-inline-item margin-lr-8px"><a class="facebook" href="https://vk.com/id.irka.keratin"><i class="fab fa-vk"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>

    <script src="{{asset("assets/js/dashmix.core.min.js") }}"></script>
    <script src="{{asset("assets/js/dashmix.app.min.js") }}"></script>
    <script src="{{asset("assets/js/ckeditor/ckeditor.js") }}"></script>
        <!-- Page JS Helpers (CKEditor plugin) -->
    <script>jQuery(function(){CKEDITOR.config.height = '450px';Dashmix.helpers(['ckeditor']);});</script>
	
    <script src="assets/js/jquery-3.2.1.min.js"></script>
	<script src="assets/js/sticky-sidebar.js"></script>
	<script src="assets/js/owl.carousel.min.js"></script>
	<script src="assets/js/imagesloaded.min.js"></script>
	<script src="assets/js/masonry.min.js"></script>
	<script src="assets/js/wow.min.js"></script>
	<script src="assets/js/custom.js"></script>
	
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
</body>

</html>
@show