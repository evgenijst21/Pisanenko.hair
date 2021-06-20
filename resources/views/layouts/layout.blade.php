@section('head')
 @include('layouts.head')
@show



@section('modal')
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
								<li class="has-dropdown"><a href="">Блог</a>
									<ul class="sub-menu text-left">
										
										<li><a href="{{ route('blog') }}">Все статьи</a></li>
										<li><a href="http://pisanenko.hair/blog/category/1">Процедуры По Восстановлению Волос</a></li>
										<li><a href="http://pisanenko.hair/blog/category/2">Уход За Волосами</a></li>
										
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
@section('banner') 
	<div class="banner padding-tb-20px background-overlay" style="background-image: url('assets/img/banner.png');">>
		<div class="container">

			<div class="padding-tb-120px z-index-2 position-relative">
				<div class="text-center">
					<h1 class="banner pull-l icon-large font-weight-500 margin-bottom-40px">Кератин, ботокс, нанопластика в Белгороде</h1>
					<h3 class="banner icon-large font-weight-100">500+ довольных клиентов!</h3>
				</div>
				<div class="margin-top-45px">
					<div class="row justify-content-center margin-tb-50px">
						<div class="col-lg-8">
							<div class="listing-search">
								<form class="row no-gutters">
									
									<div class="col-md-8">
										<h2 class="font-weight-700 text-main-color text-center padding-5px">Чек-лист по уходу за волосами -></h2>
									</div>
									<div class="col-md-4">
										<a class="listing-bottom background-main-color box-shadow" href="#myModal" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Получить...</a>
										
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- //container  -->
	</div>
	@show

	@section('pull')
	
	@show

@section('content')

<div id="intro" class="container">
	<h1 class="text-center text-capitalize">Писаненко Ирина Викторовна</h1>
	<h4 class="text-center text-capitalize">Мастер по восстановлению волос</h4>
</div>

<section id="about" class="section">
	<div class="container">
		<div class="row">
			<div class="col col-md-12">

				<!-- Social Links -->
				<div id="intro-div" class="card content-wrapper">
					<!-- Profile Picture [Square] -->
					<div id="profile" class="center-block animated zoomIn">
						<img src="assets/img/irina.jpg">
					</div>
					

					<!-- Some Intro About You -->
					<p class="text-center">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi venenatis et tortor ac tincidunt.
						In euismod iaculis lobortis. Vestibulum posuere molestie ipsum vel sollicitudin. Vestibulum
						venenatis pharetra mi, ut vestibulum elit ultricies a. Vestibulum at mollis ex, ac consectetur
						massa. Donec nunc dui, laoreet a nibh et, semper tincidunt nunc. Donec ac posuere tellus.
						Pellentesque tempus suscipit velit sit amet bibendum.
					</p>

					<div class="row">
						<!-- Download & Contact Button -->
						<div class="col col-xs-12 col-sm-12 col-md-12 text-center">
							<!-- Your CV File -->
							
							<a href="#contact" class="btn waves-effect waves-light background-main-color custom-btn">Contact Me</a>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
</section>


<section class="padding-tb-100px background-white">
	<div class="container">

		<div class="title text-center">
			<h2 class="font-weight-700 text-main-color"> Мои работы</h2>
			<div class="row justify-content-center margin-bottom-45px">
				<div class="col-md-7">
					<p class="text-grey-2"></p>
				</div>
			</div>
		</div>

		<div class="testimonial-carousel owl-carousel owl-theme">

			<div class="item margin-lr-15px">
				<div class="background-white opacity-hover-9 padding-30px">
					<img class="border-radius-8 box-shadow" src="{{asset("assets/img/work1.jpg") }}" alt="">
				</div>
			</div>

			<div class="item margin-lr-15px">
				<div class="background-white opacity-hover-9 padding-30px">
					<img class="border-radius-8 box-shadow" src="{{asset("assets/img/work2.jpg") }}" alt="">
				</div>
			</div>

			<div class="item margin-lr-15px">
				<div class="background-white opacity-hover-9 padding-30px">
					<img class="border-radius-8 box-shadow" src="{{asset("assets/img/work3.jpg") }}" alt="">
				</div>
			</div>

			<div class="item margin-lr-15px">
				<div class="background-white opacity-hover-9 padding-30px">
					<img class="border-radius-8 box-shadow" src="{{asset("assets/img/work4.jpg") }}" alt="">
				</div>
			</div>

			<div class="item margin-lr-15px">
				<div class="background-white opacity-hover-9 padding-30px">
					<img class="border-radius-8 box-shadow" src="{{asset("assets/img/work5.jpg") }}" alt="">
				</div>
			</div>

			<div class="item margin-lr-15px">
				<div class="background-white opacity-hover-9 padding-30px">
					<img class="border-radius-8 box-shadow" src="{{asset("assets/img/work6.jpg") }}" alt="">
				</div>
			</div>
		</div>

		<div class="text-center">
			<a href="https://www.instagram.com/pisanenko.hair/" class="btn box-shadow margin-top-50px padding-tb-10px btn-sm border-2 border-radius-30 btn-inline-block width-210px background-dark text-white">Смотреть больше</a>
		</div>

	</div>
</section>


	<section class="padding-tb-100px background-brown-0">
		<div class="container">
			<div class="title text-center">
				<h2 class="font-weight-700 text-main-color"> Отзывы клиентов</h2>
				<div class="row justify-content-center margin-bottom-45px">
					<div class="col-md-7">
						<p class="text-grey-2"></p>
					</div>
				</div>
			</div>
			<div class="testimonial-carousel owl-carousel owl-theme">
				<div class="item margin-lr-15px">
					<div class="background-white opacity-hover-9 padding-30px">
						<video controls>
							<source src="{{asset("assets/img/gif4.mp4") }}" type="video/mp4">
						</video>	
					</div>
				</div>
				<div class="item margin-lr-15px">
					<div class="background-white opacity-hover-9 padding-30px">
						<img src="{{asset("assets/img/review (3).jpg") }}" alt="">
					</div>
				</div>
				<div class="item margin-lr-15px">
					<div class="background-white opacity-hover-9 padding-30px">
						<img src="{{asset("assets/img/review (2).jpg") }}" alt="">
					</div>
				</div>
				<div class="item margin-lr-15px">
					<div class="background-white opacity-hover-9 padding-30px">
						
							<img src="{{asset("assets/img/review (1).jpg") }}" alt="">
						
					</div>
				</div>
				<div class="item margin-lr-15px">
					<div class="background-white opacity-hover-9 padding-30px">
						<video controls>
							<source src="{{asset("assets/img/gif3.mp4") }}" type="video/mp4">
						</video>
					</div>
				</div>
				<div class="item margin-lr-15px">
					<div class="background-white opacity-hover-9 padding-30px">
						<video controls>
							<source src="{{asset("assets/img/gif2.mp4") }}" type="video/mp4">
						</video>
					</div>
				</div>
				<div class="item margin-lr-15px">
					<div class="background-white opacity-hover-9 padding-30px">
						
							<video controls>
								<source src="{{asset("assets/img/gif.mp4") }}" type="video/mp4">
							</video>
						
						
					</div>
				</div>
			</div>


		</div>
	</section>


	
@show

	
@section('instagram')
	

	<div class="instgram-feed">
		<div class="row no-gutters">
			<div class="col-md-2 col-6">
				<a href="https://www.instagram.com/p/CMUaBERjW1o/"><img src="{{asset("assets/img/instagram-1.jpg") }}" alt></a>
			</div>
			<div class="col-md-2 col-6">
				<a href="https://www.instagram.com/p/CMKB37EjJ7d/"><img src="{{asset("assets/img/instagram-2.jpg") }}" alt></a>
			</div>
			<div class="col-md-2 col-6">
				<a href="https://www.instagram.com/p/CMzAi4GjTgT/"><img src="{{asset("assets/img/instagram-3.jpg") }}" alt></a>
			</div>
			<div class="col-md-2 col-6">
				<a href="https://www.instagram.com/p/CNCiL9PsiCs/"><img src="{{asset("assets/img/instagram-4.jpg") }}" alt></a>
			</div>
			<div class="col-md-2 col-6">
				<a href="https://www.instagram.com/p/CNXPrsHs5OI/"><img src="{{asset("assets/img/instagram-5.jpg") }}" alt></a>
			</div>
			<div class="col-md-2 col-6">
				<a href="https://www.instagram.com/p/CO77KLxtAXR/"><img src="{{asset("assets/img/instagram-6.jpg") }}" alt></a>
			</div>
		</div>
	</div>
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

	<script src="assets/js/jquery-3.2.1.min.js"></script>
	<script src="assets/js/sticky-sidebar.js"></script>
	<script src="assets/js/owl.carousel.min.js"></script>
	<script src="assets/js/imagesloaded.min.js"></script>
	<script src="assets/js/masonry.min.js"></script>
	<script src="assets/js/wow.min.js"></script>
	<script src="assets/js/custom.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>

	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
</body>

</html>
@show