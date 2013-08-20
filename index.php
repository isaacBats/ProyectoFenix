<!DOCTYPE html>
<html lang="es">
	<head>
		<link rel="shortcut icon"  href="/images/icono/farico.ico">
		<title>Farmacias "El Fenix del Centro" S.A. de C.V.</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width = device-width, initial-scale=1, maximum-scale=1"/>
		<link href="/css/styleIndex.css" rel="stylesheet" />
	</head>
	<body>
		<section id="main">
			<header>
				<div id="dato">
					<h1>Farmacias El F&eacute;nix</h1>
					<h2>Cuidamos de ti y tu dinero</h2>
				</div>
				<div id="logo">
					<a href="/" title="Farmacias El F&eacute;nix">
						<img id="logoFenix" src="/images/logos/Fenix448x207.png" alt="El Fenix del Centro" height="124" width="269"/>
					</a>
				</div>
			</header>
			<section id="entorno">
				<div id="menuPrimario">
					<nav id="menu-wrap"><!--<div id="menu-trigger">Menu</div>-->
						<ul id="menu" style="display: block;">
							<li><a href="/">Inicio</a></li>
							<li><a href="">Empresa</a>
								<ul>
									<li><a href="mision-vision.html">Misi&oacute;n y Visi&oacute;n</a></li>
								</ul>
							</li>
							<li><a href="">Sucursales</a>
								<ul>
									<li><a href="Znorte">Zona Norte</a></li>
									<li><a href="Zoriente">Zona Oriente</a></li>
									<li><a href="Zponiente">Zona Poniente</a></li>
									<li><a href="Zsur">Zona Sur</a></li>
									<li><a href="Zcentro">Zona Centro</a></li>
								</ul>
							</li>
							<li><a href="">Ayuda</a>
								<ul>
									<li><a href="Contacto">Contacto</a></li>
									<li><a href="AvisoPriv">Aviso de Privacidad</a></li>
								</ul>
							</li>
							<li id="entrada"><a href="IniSesion">Iniciar Sesion</a></li>
						</ul>
					</nav>
			<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript">
    $(function() {
		if ($.browser.msie && $.browser.version.substr(0,1)<7)
		{
		$('li').has('ul').mouseover(function(){
			$(this).children('ul').css('visibility','visible');
			}).mouseout(function(){
			$(this).children('ul').css('visibility','hidden');
			})
		}

		/* Mobile */
		$('#menu-wrap').prepend('<div id="menu-trigger">Menu</div>');		
		$("#menu-trigger").on("click", function(){
			$("#menu").slideToggle();
		});

		// iPad
		var isiPad = navigator.userAgent.match(/iPad/i) != null;
		if (isiPad) $('#menu ul').addClass('no-transition');      
    });          
</script>
				</div>
				<div id="slider-imag">
					<img class="img-slider 1" src="images/bodys/portada.jpg" alt="Farmacias El Fénix del Centro" height="380" width="100%"/>
					<img class="img-slider 2" src="images/bodys/muestra01.jpg" alt="Descuento El Fénix del Centro" height="380" width="100%"/>
					<img class="img-slider 3" src="images/bodys/muestra02.jpg" alt="Descuento El Fénix del Centro" height="380" width="100%"/>
					<img class="img-slider 4" src="images/bodys/muestra03.jpg" alt="Descuento El Fénix del Centro" height="380" width="100%"/>
					<img class="img-slider 5" src="images/bodys/muestra04.jpg" alt="Descuento El Fénix del Centro" height="380" width="100%"/>            
        			<!--<img class="img-slider" src="images/bodys/portada.jpg" alt="Farmacias El Fénix del Centro" height="380" width="600"/>-->
				</div>
				<script src="/js/sliderIndex.js" type="text/javascript"></script>   
					<script>
						var i = 0;
						$(document).on("ready", main);

						function main(){
						var control = setInterval(cambiarSlider, 5000);
						}

						function cambiarSlider(){
							i++;
							if(i == $("#slider-imag img").size()){
							i = 0;
						}
						$("#slider-imag img").hide();
						$("#slider-imag img").eq(i).fadeIn("medium");
						}
					</script>
			</section>
			<footer id="pie">
			</footer>
		</section>
	</body>
</html>
