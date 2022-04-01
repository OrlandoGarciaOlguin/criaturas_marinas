<!DOCTYPE HTML>
<!--
	Phantom by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Pagina de Criaturas marinas</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="/css/main.css" />
		<noscript><link rel="stylesheet" href="/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">
		<!-- Wrapper -->
			<div id="wrapper"> <!--<span class="background-image"><img src="images/mar.jpg" alt="" /></span>-->

				<!-- Header -->
					<header id="header">
						<div class="inner">

							<!-- Logo -->
								<a href="{{('inicio')}}" class="logo">
									<span class="symbol"><img src="images/logo.svg" alt="" /></span><span class="title">Bienvenido a la pagina donde encontraras informacion sobre las criaturas marinas mitologicas</span>
								</a>
								

				<!-- Main -->
					<div id="main">
						<div class="inner">
							<header>
								
								<h1>Orlando García Olguin<br/>
								<br>
								<p>3522IS 5TO CUATRIMESTRE.</p>
							</header>
							<section>
                                    <hr />
                                    <div style='text-align:center'>
                                    <h1>Los mas conocidos</h1>
                                    <hr />
                                </section>
							<section class="tiles">
								<article class="style2">
									<span class="image">
										<img src="images/Kraken1.jpg" alt="" />
									</span>
									<a href="{{('01generic')}}">
										<h2>El Kraken</h2>
										<div class="content">
											<p></p>
										</div>
									</a>
								</article>
								<article class="style2">
									<span class="image">
										<img src="images/R.jpg" alt="" />
									</span>
									<a href="{{('02generic')}}">
										<h2> Leviatán</h2>
										<div class="content">
											<p></p>
										</div>
									</a>
								</article>
								<article class="style2">
									<span class="image">
										<img src="images/sirena.jpg" alt="" />
									</span>
									<a href="{{('03generic')}}">
										<h2>Sirenas</h2>
										<div class="content">
											<p></p>
										</div>
									</a>
								</article>
								<article class="style2">
									<span class="image">
										<img src="images/moby_dick.jpg" alt="" />
									</span>
									<a href="{{('04generic')}}">
										<h2>Moby Dick</h2>
										<div class="content">
											<p></p>
										</div>
									</a>
								</article>
								<article class="style2">
									<span class="image">
										<img src="images/OIP.jpg" alt="" />
									</span>
									<a href="{{('05generic')}}">
										<h2>Monstruo del Lago Ness</h2>
										<div class="content">
											<p></p>
										</div>
									</a>
								</article>
								<article class="style2">
									<span class="image">
										<img src="images/tannin.jpg" alt="" />
									</span>
									<a href="{{('06generic')}}">
										<h2>Jörmundgander o la Serpiente de Midgard</h2>
										<div class="content">
											<p></p>
										</div>
									</a>
								</article>
								<article class="style2">
									<span class="image">
										<img src="images/makara.jpg" alt="" />
									</span>
									<a href="{{('07generic')}}">
										<h2>Makara</h2>
										<div class="content">
											<p></p>
										</div>
									</a>
								</article>
								<article class="style2">
									<span class="image">
										<img src="images/hipocampo.jpg" alt="" />
									</span>
									<a href="{{('08generic')}}">
										<h2>Hipocampo</h2>
										<div class="content">
											<p></p>
										</div>
									</a>
								</article>
								<article class="style2">
									<span class="image">
										<img src="images/Umi.jpg" alt="" />
									</span>
									<a href="{{('09generic')}}">
										<h2>Umibōzu</h2>
										<div class="content">
											<p></p>
										</div>
									</a>
								</article>
								<article class="style2">
									<span class="image">
										<img src="images/hidra.jpg" alt="" />
									</span>
									<a href="{{('10generic')}}">
										<h2>Hidra de Lerna</h2>
										<div class="content">
											<p></p>
										</div>
									</a>
								</article>
								<article class="style2">
									<span class="image">
										<img src="images/caribdis.jpg" alt="" />
									</span>
									<a href="{{('11generic')}}">
										<h2>Caribdis y Escila</h2>
										<div class="content">
											<p></p>
										</div>
									</a>
								</article>
								<article class="style2">
									<span class="image">
										<img src="images/cutulu.jpg" alt="" />
									</span>
									<a href="{{('12generic')}}">
										<h2>Cthulhu</h2>
										<div class="content">
											<p></p>
										</div>
									</a>
								</article>
								</section>
								<section>
										<hr />
										<div style='text-align:center'>
										<h1>API</h1>
										<hr />
									</section>
							</section>
							<section class="carousel">
					<div class="reel">
                        @foreach ($personajes as $personaje)
                            <article>
                                <a target="_blank" href="{{route('detalle.personaje',$personaje['id'])}}" class="image featured"><img src="{{$personaje['imagen']}}" alt="" /></a>
                                <header>
                                    <h3><a target="_blank" href="{{route('detalle.personaje',$personaje['id'])}}">{{$personaje['nombre']}}</a></h3>
                                </header>
                                <p>Especie: {{$personaje['especie']}}.</p>
                                <p>Genero: {{$personaje['genero']}}.</p>
                                <p>Estatus: {{$personaje['estatus']}}.</p>
                            </article>
                        @endforeach
					</div>
				</section>
						</div>
					</div>

				
			</div>

		<!-- Scripts -->
			<script src="/js/jquery.min.js"></script>
			<script src="/js/browser.min.js"></script>
			<script src="/js/breakpoints.min.js"></script>
			<script src="/js/util.js"></script>
			<script src="/js/main.js"></script>

	</body>
</html>