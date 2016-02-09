<?php
	$page = 3;
    $page_url = 'documentacion.php';
	require_once('languages.php');
    include_once('header.php');
?> 

	<div id="maincontentcontainer">
		<div class="standardcontainer" >
			<div class="maincontent">
				<div class="group banner full">
                	<h2 style=" float:left; margin-left: 30%;"><?php echo translator("ENLACES"); ?></h2>
                    <h2 style=" float:right; margin-right: 30%;"><?php echo translator("DOCUMENTOS"); ?></h2>
				</div>
                <div class="section group">
                
                    <div class="group banner mini">
                        <h2><?php echo translator("ENLACES"); ?></h2>
                    </div>
                	<div class="col span_1_of_2 enlaces">
                    	<img src="img/enlaces.svg" alt="Enlaces">
                    	<p><a href="http://www.oepm.es/" target="_blank"><?php echo translator("Oficina Española de Patentes y Marcas (OEPM)"); ?></a></p>		
                        <p><a href="http://www.epo.org/" target="_blank"><?php echo translator("Oficina Europea de Patentes (OEP)"); ?></a></p>	
                        <p><a href="http://www.ompi.org/" target="_blank"><?php echo translator("Organización Mundial de la Propiedad Intelectual (OMPI)"); ?></a></p>	
                        <p><a href="http://oami.europa.eu/ows/rw/pages/index.es.do" target="_blank"><?php echo translator("Oficina de Armonización del Mercado Interior (OAMI)"); ?></a></p>	
                    </div>
                    <div class="group banner mini">
                        <h2><?php echo translator("DOCUMENTOS"); ?></h2>
                    </div>
                	<div class="col span_1_of_2 documentos">
                    	<img src="img/documentos.svg" alt="Documentos">
                    	<p><a href="includes/<?php echo translator("DocumentoderepresentacionOEPM.pdf") ?>" target="_blank"><?php echo translator("Documento de representación OEPM"); ?></a></p>		
                        <p><a href="includes/<?php echo translator("DocumentoderepresentacionEPO.pdf") ?>" target="_blank"><?php echo translator("Documento de representación OEP"); ?></a></p>	
                        <p><a href="includes/<?php echo translator("DocumentoderepresentacionOAMI.pdf") ?>" target="_blank"><?php echo translator("Documento de representación OAMI"); ?></a></p>	
                        <p><a href="includes/<?php echo translator("DocumentoderepresentacionPCT.pdf") ?>" target="_blank"><?php echo translator("Documento de representación PCT"); ?></a></p>	
                    	<p><a href="includes/<?php echo translator("Acuerdodeconfidencialidad.pdf") ?>" target="_blank"><?php echo translator("Acuerdo de confidencialidad (CDA)"); ?></a></p>		
                        <p><a href="includes/<?php echo translator("Fichacliente.pdf") ?>" target="_blank"><?php echo translator("Ficha cliente"); ?></a></p>	
                        <p><a href="includes/<?php echo translator("Instruccionesparalaredacciondeunamemoriadepatente.pdf") ?>" target="_blank"><?php echo translator("Instrucciones para la redacción de una memoria de patente"); ?></a></p>	
                        <p><a href="includes/<?php echo translator("InstruccionesparaelaborarInformePatentabilidad.pdf") ?>" target="_blank"><?php echo translator("Información para elaborar informe patentabilidad"); ?></a></p>	
                    	<p><a href="includes/<?php echo translator("Informacionparaelaborarinformedeinfraccion-FTO.pdf") ?>" target="_blank"><?php echo translator("Información para elaborar informe de infracción-FTO"); ?></a></p>		
                    	<p><a href="includes/<?php echo translator("Instruccionesparalasolicituddisenoindustrial.pdf") ?>" target="_blank"><?php echo translator("Instrucciones para la solicitud de un diseño industrial"); ?></a></p>		
                    	<p><a href="includes/<?php echo translator("Instruccionesparasolicitarunamarca.pdf") ?>" target="_blank"><?php echo translator("Instrucciones para solicitar una marca"); ?></a></p>	
                    </div>
                </div>
		</div>
	</div>
    </div>
<?php
    include_once('footer.php');
?> 