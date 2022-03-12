<!DOCTYPE HTML>
<!--
	Dopetrope by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Yu-Gi-Oh! API</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="homepage is-preload">
		<div id="page-wrapper">

			<!-- Header -->
				<section id="header">

						<!-- Logo -->
						<h1><a href="{{route('inicio')}}">Yu-Gi-Oh! API</a></h1>

					<!-- Nav -->
					<nav id="nav">
							<ul>
								<li><a href="{{route('inicio')}}">Inicio</a></li>
								<li>
									<a href="{{route('monster')}}">Monstruos Normales</a>
									<ul>
										<li><a href="{{route('monsterEF')}}">Monstruo de Efecto</a></li>
										<li><a href="{{route('monsterF')}}">Monstruo Fusión</a></li>
										<li><a href="{{route('monsterS')}}">Monstruo Synchro</a></li>
										<li><a href="{{route('monsterXYZ')}}">Monstruo XYZ</a></li>
										<li><a href="{{route('monsterPENDULUM')}}">Monstruo Péndulo</a></li>
										<li><a href="{{route('monsterLINK')}}">Monstruo Enlace</a></li>
									</ul>
								</li>

								<li class="current">
									<a href="{{route('spell')}}">Cartas Mágicas</a>
									<ul>
										<li><a href="{{route('spellNormal')}}">Mágica Normal</a></li>
										<li><a href="{{route('spellEquip')}}">Mágica de Equipo</a></li>
										<li><a href="{{route('spellRitual')}}">Mágica de Ritual</a></li>
										<li><a href="{{route('spellContinuous')}}">Mágica Continua</a></li>
										<li><a href="{{route('spellField')}}">Mágica de Campo</a></li>
										<li><a href="{{route('spellQuickPlay')}}">Mágica de Juego Rápido</a></li>
										<li>
									</ul>
								</li>

								<li>
									<a href="{{route('trap')}}">Cartas Trampa</a>
									<ul>
										<li><a href="{{route('trapNormal')}}">Trampa Normal</a></li>
										<li><a href="{{route('trapContinuous')}}">Trampa Continua</a></li>
										<li><a href="{{route('trapCounter')}}">Trampa Contraefecto</a></li>
										<li>
									</ul>
								</li>

								<li>
									<a href="{{route('bebidas')}}">API Compañera sobre Bebidas</a>
								</li>



							</ul>
						</nav>

					<!-- Banner -->
						<section id="banner">
							<header>
								<h2>Yu-Gi-Oh! API</h2>
								<p>Proyecto dedicado a la consulta de datos del Juego de Cartas Yu-Gi-Oh!</p>
							</header>
						</section>

					<!-- Intro -->
						<section id="intro" class="container">
					
						</section>

				</section>

			<!-- Main -->
				<section id="main">
					<div class="container">
						<div class="row">
							<div class="col-12">

								<!-- Portfolio -->
									<section>
										<header class="major">
											<h2>Cartas Mágicas ordenadas de la A a la Z</h2>
										</header>

									
										<div class="row">

										@foreach($spells as $spell)
										@if ($loop->index <= 101)
											<div class="col-4 col-6-medium col-12-large">
											<section class="box">
										
												
													
													<a href="#" class="image featured"><img src="{{$spell['imagen']}}" alt="" /></a>
													<header>
														<h3>{{$spell['nombre']}}</h3>
													</header>
													<p>{{$spell['categoria']}}</p>
													<p>{{$spell['descripcion']}}</p>
													<footer>
													</footer>
											
												</section>
												
											</div>
											@endif
										@endforeach


							

						

							</div>
						</div>
					</div>
				</section>

			<!-- Footer -->
			<section id="footer">
					<div class="container">
								</section>
							</div>
							<div class="col-12">

								<!-- Copyright -->
									<div id="copyright">
										<ul class="links">
										<li>&copy; Yu-Gi-Oh! API</li><li>Página Oficial de Yu-Gi-Oh! <a href="https://www.yugioh-card.com/lat-am/">¡Duelo!</a></li>
										</ul>
									</div>

							</div>
						</div>
					</div>
				</section>

		</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>