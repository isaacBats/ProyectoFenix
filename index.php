<!DOCTYPE html>
<html lang="es">
	<head>
		<link rel="shortcut icon"  href="/images/icono/farico.ico">
		<title>Farmacias "El Fenix del Centro" S.A. de C.V.</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width = device-width, initial-scale=1, maximum-scale=1"/>
		<link href="/css/styleIndex.css" rel="stylesheet" />
		<script type="text/javascript" src="http://code.jquery.com/jquery-1.6.min.js"></script>
		<script src="/js/jquery.min.1.2.js" type="text/javascript"></script>
		<script src="/js/reveal.js" type="text/javascript"></script>
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
					<nav id="menu-wrap">
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
							<!--<li><a href="">Ayuda</a>
								<ul>
									<li><a href="Contacto">Contacto</a></li>
									<li><a href="AvisoPriv">Aviso de Privacidad</a></li>
								</ul>
							</li>-->
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
	
				<!--<div id="avisos" class="reveal-modal-bg" style="display:block;">-->
					<!--<div id="myModal" class:"reveal-modal" style="display:block; opacity:1; visibility:visible; top:300px;">-->
					<div id="myModal" class:"reveal-modal">
						<p>
							<h2>Aviso de Privacidad</h2>
							FARMACIAS EL FENIX DEL CENTRO, S.A. DE C.V. O FARMACIAS EL FENIX, con domicilio en Lago Trasimeno 36, colonia Anáhuac, Delegación Miguel Hidalgo, 
							México, D.F., C.P. 11360, es responsable de recabar sus datos personales, del uso que se le dé a los mismos y de su protección. 
							Su información personal y de la empresa serán utilizada para proveer los servicios y productos que ha solicitado, informarle sobre cambios 
							en los mismos y evaluar la calidad del servicio que le brindamos. Para las finalidades antes mencionadas, requerimos obtener los siguientes 
							datos personales: Nombre, Domicilio, Teléfono, Correo electrónico. 
							Usted tiene derecho de acceder, rectificar y cancelar sus datos personales, así como de oponerse al tratamiento de los mismos o revocar 
							el consentimiento que para tal fin nos haya otorgado, a través de los procedimientos que hemos implementado. 
							Para conocer dichos procedimientos, los requisitos y plazos, se puede poner en contacto con nuestro departamento de datos personales en la dirección
							ya mencionada ó ponerse en contacto al conmutador: 91400700 exts. 106, 198, datospersonales@farfenix.com.mx. 
							Asimismo, le informamos que sus datos personales pueden ser transferidos y tratados dentro y fuera del país, por personas distintas a esta empresa. 
							En ese sentido, su información puede ser compartida con [señalar el tipo de destinatarios de estas transferencias], para [describir finalidades]. 
							Si usted no manifiesta su oposición para que sus datos personales sean transferidos, se entenderá que ha otorgado su consentimiento para ello. 
							No consiento que mis datos personales sean transferidos en los términos que señala el presente aviso de privacidad. 
							Si usted desea dejar de recibir mensajes promocionales de nuestra parte puede solicitarlo a través de [teléfono, dirección, correo electrónico]. 
							Cualquier modificación a este aviso de privacidad podrá consultarla en nuestra página web www.farfenix.com.mx Fecha última actualización 06/06/2011.
						</p>
						<a class="close-reveal-modal">&#215;</a>
					</div>
					<!--<div id="myModal" class:"reveal-modal" style="display:block; opacity:1; visibility:visible; top:300px;">-->
					<div id="myModal" class:"reveal-modal">
						<p>
							<h2>Condiciones de utilización para el usuario</h2>
							Los usuarios pueden tener acceso y ver el contenido de este sitio web gratuitamente, conforme a estos términos y a cualquier 
							término específico descrito en cada contenido, producto o servicio. Para recibir ciertos servicios, el acceso a ciertas áreas del sitio web puede 
							requerir completar un formulario específico de datos - los campos marcados con un asterisco indican que es obligatorio cumplimentar los datos. 
							Si esos datos no se proporcionan, la empresa se reserva el derecho de no proporcionar el servicio. El usuario garantiza que cualquier dato que 
							proporcione es completo y exacto, y será responsable de cualesquiera datos falsos o inexactos. Los datos personales serán procesados de acuerdo 
							con nuestra Política de privacidad. El usuario se compromete a hacer un uso adecuado, correcto y lícito de los contenidos y servicios del sitio web. 
							Quedan estrictamente prohibidas las actividades ilegales, ilícitas o contrarias a la buena fe y al orden público; y en general, toda conducta que atente, 
							induzca o pueda atentar contra el respeto a la dignidad humana y al principio de no discriminación por motivos de raza, sexo, religión, opinión, 
							nacionalidad o cualquier otra circunstancia personal o social; contra la protección de la salud pública y de los consumidores y usuarios; o la protección 
							de la juventud y de la infancia. Asimismo queda prohibida toda actividad dirigida a suplantar a cualquier persona o entidad, o a interferir, violar, 
							alterar o desconectar el sistema, servidores, redes o contenidos, así como, incumplir cualquier requisito de conexión. La Empresa se reserva el 
							derecho a excluir al usuario del servicio sin previo aviso, y a adoptar cuantas medidas considere oportunas en cada momento, a fin de evitar las 
							conductas y actividades indicadas.
						</p>
						<a class="close-reveal-modal">&#215;</a>
					</div>
					<!--<div id="myModal" class:"reveal-modal" style="display:block; opacity:1; visibility:visible; top:1039px;">-->
					<div id="myModal" class:"reveal-modal">
						<p>
							<h2>Estamos a sus ordenes por los siguientes medios</h2>
							
							Conmutador 91 400 700
							Lada sin costo 01 800 83 62 132
							Correo electónico backoffice@farfenix.com.mx
							Web: www.farfenix.com.mx
						</p>
						<a class="close-reveal-modal">&#215;</a>
					</div> 
				<!--</div>-->
			</section>
			<footer id="pie">
				<section class="primerfo">
					<div id="logo_pie">
						<a href="/">
							<img src="/images/logos/logo2.png" alt="Fénix Farmacias" height="60" max-width="150"/>
						</a>
					</div>
					<div id="logocont">
						<img src="/images/logos/telefono.png" alt="Contacto Fénix" height="30" width="30"/>
						<p>Conmutador: +(52) 91 400 700
						<br>Lada si costo: 01 800 83 62 132</p>
					</div>
					<div id="face">
						<a href="https://es-la.facebook.com/fenix.farmacias" target="_blank">
							<img src="/images/logos/faceroto.png" alt="Fénix Facebook" height="60" width="60"/>
						</a>
					</div>
					<div id="tewtt">
						<a href="https://twitter.com/farmaselfenix" target="_blank">
							<img src="/images/logos/twitter.png" alt="Fénix Twitter" height="60" width="60"/>
						</a>
					</div>
				</section>
				<section class="legalfo">
					<a href="#" data-reveal-id="myModal" data-animation="fadeAndPop">Aviso de Privacidad</a>
					 | 
					<a href="#" data-reveal-id="myModal" data-animation="fadeAndPop">Condiciones para el usuario</a>
					 | 
					<a href="#" data-reveal-id="myModal" data-animation="fadeAndPop">Contacto</a>
					<br>&copy;2013 TODOS LOS DERECHOS RESERVADOS FARMACIAS EL FENIX DEL CENTRO S.A. DE C.V. 
					<br>Dirección:Calle Lago Trasimeno #36, Col. Anahuac México D.F. 11320 RFC: FFC6611235C0
				</section>
			</footer>
		</section>
	</body>
</html>
