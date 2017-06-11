@extends('layouts.main')

	@section('content')
		  <body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
		  	<!--banner-->
			<section id="banner" class="banner">
				<div class="bg-color">
					@include('public.navmain')
					<div class="container">

						<div class="row">
							<div class="banner-info">
								<div class="banner-logo text-center">
									<img src="/img/logo.png" class="img-responsive">
								</div>
								<div class="banner-text text-center">
									<h1 class="white">W zdrowym ciele zdrowy duch</h1>
									<p>W naszym sklepie znajdziesz leki, odżywki dla sportowców, zioła i inne produkty, które pomogą Ci cieszyć się dobrym zdrowiem na co dzień. </p>
									<a href="#contact" class="btn btn-appoint">Sprawdź gdzie jesteśmy</a>
								</div>
								<div class="overlay-detail text-center">
					               <a href="#service"><i class="fa fa-angle-down"></i></a>
					             </div>		
							</div>
						</div>
					</div>
				</div>
			</section>
			<!--/ banner-->
			<!--service-->
			<section id="service" class="section-padding">
				<div class="container">
					<div class="row">
						<div class="col-md-4 col-sm-4">
							<h2 class="ser-title">Czym się zajmujemy</h2>
							<hr class="botm-line">
							<p>Prowadzimy stacjonarną i wysyłkową sprzedaż leków bez recepty, kosmetyków, ziół i odżywek dla sportowców.</p>
						</div>
						<div class="col-md-4 col-sm-4">
							<div class="service-info">
								<div class="icon">
									<i class="fa fa-cart-plus" aria-hidden="true"></i>
								</div>
								<div class="icon-info">
									<h4>Czynne pięć dni w tygodniu</h4>
									<p>Jesteśmy otwarci przez pięć dni w tygodniu w godzinach od 8:00 do 16:00.</p>
								</div>
							</div>
							<div class="service-info">
								<div class="icon">
									<i class="fa fa-ambulance"></i>
								</div>
								<div class="icon-info">
									<h4>Emergency Services</h4>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-4">
							<div class="service-info">
								<div class="icon">
									<i class="fa fa-user-md"></i>
								</div>
								<div class="icon-info">
									<h4>Medical Counseling</h4>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
								</div>
							</div>
							<div class="service-info">
								<div class="icon">
									<i class="fa fa-medkit"></i>
								</div>
								<div class="icon-info">
									<h4>Premium Healthcare</h4>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!--/ service-->
			<!--cta-->
			
			<!--cta-->
			<!--about-->
			
			<!--/ about-->
			<!--doctor team-->
			<section id="products" class="section-padding">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h2 class="ser-title">Produkty w naszej ofercie</h2>
							<hr class="botm-line">
						</div>
						<div class="col-md-3 col-sm-3 col-xs-6">
					      <div class="thumbnail">
					      	<a href="/promocje">
					      	<img src="img/ziola.jpg" alt="Artykuły obecnie w promocji" class="team-img">
					      	</a>
					        <div class="caption">
					          <h3 class='text-center'><a href='/promocje'>Promocje</a></h3>
					          
					          
					        </div>
					      </div>
					    </div>
					    <div class="col-md-3 col-sm-3 col-xs-6">
					      <div class="thumbnail"> 
					      	<a href="/polecane">
					      	<img src="/img/suplementy.jpg" alt="Polecamy" class="team-img">
					      	</a>
					        <div class="caption">
					          <h3 class='text-center'><a href='/polecane'>Polecane</a></h3>
					          
					         
					        </div>
					      </div>
					    </div>
					    <div class="col-md-3 col-sm-3 col-xs-6">
					      <div class="thumbnail">
					      	<a href='/nowosci'>
					      	<img src="/img/kosmetyki.jpg" alt="Sprawdź nowości" class="team-img">
					        <div class="caption">
					        </a>
					          <h3 class='text-center'><a href='/nowosci'>Nowości </a></h3>
					         
					          
					        </div>
					      </div>
					    </div>
					    <div class="col-md-3 col-sm-3 col-xs-6">
					      <div class="thumbnail"> 
					      	<a href="/asortyment">
					      	<img src="/img/odzywki.jpg" alt="W naszym sklepie znajdziesz również" class="team-img">
					      	</a>
					        <div class="caption">
					          <h3 class='text-center'><a href='/asortyment'>Asortyment</a></h3>
					          
					          
					        </div>
					      </div>
					    </div>
					</div>
				</div>
			</section>


			
			<!--cta-->
			<!--contact-->
			<section id="contact" class="section-padding">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h2 class="ser-title">Skontaktuj się z nami</h2>
							<hr class="botm-line">
						</div>
						<div class="col-md-4 col-sm-4">
					      <h3>Kontakt</h3>
					      <div class="space"></div>
					      <p><i class="fa fa-map-marker fa-fw pull-left fa-2x"></i>Kościelna 10<br>
					        66-530 Drezdenko</p>
					      <div class="space"></div>
					      <p><i class="fa fa-envelope-o fa-fw pull-left fa-2x"></i>golisieniepierdoli@interia.com</p>
					      <div class="space"></div>
					      <p><i class="fa fa-phone fa-fw pull-left fa-2x"></i>+48 555 555 555</p>
					      <div class="space"></div>
					      <p><i class="fa fa fa-shopping-basket fa-fw pull-left fa-2x"></i>Poniedziałek - Piątek<br/>
					      godz. 8:00 - 16:00</p>

					    </div>
						<div class="col-md-8 col-sm-8 marb20">
							<div class="contact-info">
									<h3 class="cnt-ttl">Znajdziesz nas tutaj</h3>
									<div class="space"></div>
									<div class="google-maps">
									<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2410.07890483131!2d15.824696315216507!3d52.83896322029501!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4706c7c337fc43b5%3A0x3dd7d86a0ae004ec!2sPomorska+28%2C+66-530+Drezdenko!5e0!3m2!1spl!2spl!4v1490103783824" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
									</div>
							</div>
						</div>
					
				</div>
			</section>
		@endsection
		    
	