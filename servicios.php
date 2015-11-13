<?php
	$page = 2;
    $page_url = 'services.php';
	require_once('languages.php');
    include_once('header.php');
?> 
	<div id="overlay" style="width: 100%; height: 100%; background: rgba(0, 0, 0, 0.65); left:0; top:0; position: absolute; z-index: 9990;"></div>
    <div id="patentes-popup" class="white-popup mfp-hide bio">
        <h4><?php echo translator("Patentes y modelos de utilidad") ?></h4>

        <div class="section group serveDesc"> 
            <p><?php echo translator("En MIAPatents ofrecemos un servicio integral en materia de patentes, a nivel nacional en España, Europeo ante la EPO e internacional, país por país o vía centralizada PCT.") ?></p>   
        	<h5><?php echo translator("Redacción y tramitación de solicitudes de patentes y modelos de utilidad") ?></h5>
            <p><?php echo translator("Redactamos la memoria de una patente o de un modelo de utilidad basándonos en la información que proporciona el cliente, con quien establecemos una estrecha colaboración vía telefónica, por videoconferencia, correo electrónico o en reuniones personales. La información técnica acerca de la invención que se va a patentar se complementa eventualmente con búsquedas a medida, realizadas por nuestro personal o por nuestros colaboradores externos.") ?></p>      
            <p><?php echo translator("MIAPatents gestiona directamente la tramitación de solicitudes de patentes europeas, españolas e internacionales (PCT), así como de cualquier otro país en el que se quiera obtener la protección, donde contamos con una red de asociados extranjeros de confianza, lo que nos permite ofrecer unos servicios de tramitación de alta calidad en todo el mundo.") ?></p>
            <h5><?php echo translator("Informes de patentabilidad") ?></h5>
            <p><?php echo translator("Elaboramos informes a medida sobre patentabilidad valorando, frente al estado de la técnica aportado por el cliente u obtenido por nuestros medios, si una invención cumple con los requisitos de patentabilidad y cuál es el alcance de la protección que puede obtenerse.") ?></p>   
            <h5><?php echo translator("Informes de libertad de operación (Freedom To Operate, FTO)") ?></h5>   
            <p><?php echo translator("MIAPatents cuenta con una dilatada y demostrada experiencia en evaluar el riesgo de infracción de los derechos de terceros por parte de un determinado producto o actividad. Estos informes resultan cruciales antes de cada nuevo lanzamiento al mercado.") ?></p>
            <h5><?php echo translator("Vigilancia tecnológica") ?></h5>   
            <p><?php echo translator("Además de los servicios tradicionales de tramitación de patentes ofrecemos sistemas de alerta globales que permiten obtener información actualizada de nuevas solicitudes de patentes, modelos y diseños en determinados sectores tecnológicos, definidos según perfiles creados para cliente.") ?></p>
        </div>  
    </div>
    <div id="marcas-popup" class="white-popup mfp-hide bio">
        <h4><?php echo translator("Marcas y diseños") ?></h4>
        <div class="section group serveDesc">        
				<p><?php echo translator("En MIAPatents asesoramos en la protección de nuevas marcas y diseños, minimizando los riegos de infracción de derechos de terceros.") ?></p>
                <p><?php echo translator("Presentamos y tramitamos registros de marcas y diseños Españoles en la Oficina Española de Patentes y Marcas (OEPM); de marcas y diseños Comunitarios en la Oficina de Armonización del Mercado Interior (OAMI); y de marcas y diseños internacionales en la Organización Mundial de la Propiedad Intelectual (OMPI). Ofrecemos además búsquedas de antecedentes y estudios de infracción y nulidad.") ?></p>
        </div>       
    </div>
    <div id="propiedad-popup" class="white-popup mfp-hide bio">
        <h4><?php echo translator("Derechos de Autor") ?></h4>
        <div class="section group serveDesc">       
                <p><?php echo translator("En MIAPatents protegemos los derechos de artistas y creadores, en especial los desarrollos de software, a través de estrategias de protección ad hoc que pueden incluir registros de propiedad intelectual.") ?></p>
        </div>
    </div>
    <div id="legal-popup" class="white-popup mfp-hide bio">
        <h4><?php echo translator("Asesoriamiento legal") ?></h4>
        <div class="section group serveDesc">        
                <p><?php echo translator("Nuestra firma cuenta con una amplia experiencia en asuntos legales relacionados con la defensa de derechos de Propiedad Intelectual en tribunales, elaboración de dictámenes y segundas opiniones jurídicas, informes periciales, contratos y licencias.") ?></p>

				<p><?php echo translator("Por la experiencia de su equipo MIAPatents ofrece asistencia en procedimientos de anulación e infracción de patentes, marcas y diseños. Habitualmente su personal participa en litigios en materia de patentes, marcas y diseños como peritos y colaborando con despachos externos especializados en este tipo de procesos.") ?></p>
                <p><?php echo translator("Además, MIAPatents ofrece asesoría en asuntos legales, tales como la negociación de licencias de patentes, marcas y diseños, redacción de contratos de transferencia de tecnología, contratos de confidencialidad y cláusulas de protección de las invenciones en contratos laborales.") ?></p>
        </div>
    </div>
	<div id="maincontentcontainer">
		<div class="standardcontainer" >
			<div class="maincontent">
				<div class="group banner">
                	<h2><?php echo translator("SERVICIOS"); ?></h2>
				</div>
                <div class="section group serve">
                	<div class="col span_1_of_2">
                    	<h3><a href="#" data-mfp-src="#patentes-popup" class="open-popup-link"><?php echo translator("Patentes y modelos de utilidad"); ?></a></h3>
                    	<img src="img/patentes.png" alt="Patentes y modelos de utilidad" >
                    	
                    </div>
                	<div class="col span_1_of_2">
                    	<h3><a href="#" data-mfp-src="#marcas-popup" class="open-popup-link"><?php echo translator("Marcas y diseños"); ?></a></h3>
                    	<img src="img/marcas.png" alt="Marcas y diseños">
                    	
                    </div>
                	<div class="col span_1_of_2">
                    	<h3><a href="#" data-mfp-src="#propiedad-popup" class="open-popup-link"><?php echo translator("Derechos de Autor"); ?></a></h3>
                    	<img src="img/propiedad.png" alt="Derechos de Autor">
                    	
                    </div>
                    <div class="col span_1_of_2">
                    	<h3><a href="#" data-mfp-src="#legal-popup" class="open-popup-link"><?php echo translator("Asesoriamiento legal"); ?></a></h3>
                    	<img src="img/legal.png" alt="Asesoría legal">
                    	
                    </div>
                </div>
		</div>
	</div>
    </div>
<?php
    include_once('footer.php');
?> 