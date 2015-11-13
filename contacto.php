<?php
	$page = 4;
	require_once('languages.php');
    include_once('header.php');
?> 
	<div id="overlay" style="width: 100%; height: 100%; background: rgba(0, 0, 0, 0.65); left:0; top:0; position: absolute; z-index: 9990;"></div>
 	<div id="cv-popup" class="white-popup mfp-hide ">
        <div class="cv">
            	<h3><?php echo translator("En este momento no tenemos vacantes en la plantilla de MIAPatents, pero si nos autorizas a guardar tu curiculum vitae, lo estudiaremos y de surgir alguna te llamaremos para una entrevista.") ?></h3>
                
                <h3><?php echo translator("¿Cuál es el perfil de nuestros trabajadores?") ?></h3>
            
                <p><?php echo translator("<span class=\"underline\">Técnicos</span>: En MIAPatents buscamos titulados superiores o titulados medios en carreras técnicas (Ingenierías, Química, Farmacia, Biotecnología, Física, Informática,…), con buenos conocimientos de idiomas (imprescindible alto nivel de Inglés hablado y escrito). No es necesario tener experiencia con patentes. Sin embargo se valorará haber trabajado en el sector, haber recibido cursos y, sobre todo, tener aprobado el European Qualifying Examination (EQE) o alguno de sus papers.") ?></p>
                
                <p><?php echo translator("<span class=\"underline\">Abogados</span>: En MIAPatents buscamos licenciados en Derecho con buenos conocimientos de idiomas (imprescindible alto nivel de Inglés hablado y escrito). Se valorará haber trabajado en el sector y haber recibido cursos sobre la materia. En particular, buscamos abogados capaces de tramitar marcas Españolas, Comunitarias e Internacionales; capaces de oponerse a los registros de terceros, de interponer recursos, incluyendo Recursos Contencioso Administrativos. También valoramos que sean capaces de redactar acuerdos de licencias, tanto de patentes como de marcas, de transferencia de tecnología y que sean capaces de intervenir en las negociaciones de dichos acuerdos. Por último valoraremos que tengan experiencia en procesal, especialmente en materia de propiedad intelectual.") ?></p>
                
                <p><?php echo translator("<span class=\"underline\">Administrativos</span>: En MIAPatents buscamos paralegals con buenos conocimientos de idiomas (imprescindible alto nivel de Inglés hablado y escrito). Se valorará haber trabajado en el sector y haber recibido cursos sobre la materia. Buscamos administrativos que sepan de tramitación de patentes y de marcas, ante las diferentes oficinas. Que se desenvuelvan bien en informática. Valoramos también que tengan conocimientos contables, de nóminas, en temas fiscales y laborales.") ?></p>

				<p><?php echo translator("Si crees reunir alguno de estos perfiles, mándanos tu curiculum vitae con foto y con tus pretensiones económicas (no se tendrán en cuenta candidaturas sin este dato) a la dirección de correo-e que figura en nuestra página web. El mero hecho de enviarnos tu curiculum vitae, tu foto y tus pretensiones económicas  implica que autorizas a MIAPatents a guardar esta información en nuestro servidor, de forma confidencial y a utilizarla solo a efectos de una posible selección para un puesto de trabajo en nuestra firma.") ?></p>

                <p><?php echo translator("Estamos dispuestos a estudiar candidaturas a tiempo parcial que ayuden a conciliar la vida familiar.") ?></p>
        </div>
    </div>
	<div id="maincontentcontainer">
		<div class="standardcontainer">
			<div class="maincontent">
				<div class="group banner full">
                	<h2 style=" float:left; margin-left: 33%;"><?php echo translator("MADRID"); ?></h2>
                    <h2 style=" float:right; margin-right: 33%;"><?php echo translator("BILBAO"); ?></h2>
				</div>


                <div class="section group">
                	<div class="group banner mini">
                        <h2><?php echo translator("Correo electrónico de contacto"); ?></h2>
                    </div>
                    <div class="section group emailContact">
                        <h2><?php echo translator("Correo electrónico de contacto") ?></h2>
                        <p><a href="mailto:mail@miapatents.com"><?php echo translator("mail@miapatents.com") ?></a></p>
                    </div>                
                    <div class="group banner mini">
                        <h2><?php echo translator("MADRID"); ?></h2>
                    </div>
                	<div class="col span_1_of_2 madrid">
                    	<p><?php echo translator("Príncipe de Vergara, 197, oficina 1º A"); ?></p>		
                        <p><?php echo translator("28002 Madrid"); ?></p>	
                        <p><?php echo translator("Tel.: (+34) 917011605"); ?></p>	
                        <p><?php echo translator("Fax: (+34) 915764583"); ?></p>	
                        <img src="img/madrid.png" alt="Madrid">
                        <iframe width="600" height="450" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=principe%20de%20vergara%2C%20197&key=AIzaSyAlnKDtzJoIfHbA99KRyXgrxZc134M53wk"></iframe>
                    </div>
                    <div class="group banner mini">
                        <h2><?php echo translator("BILBAO"); ?></h2>
                    </div>
                	<div class="col span_1_of_2 bilbao">
                    	<p><?php echo translator("Paulino Mendívil,1, bajo derecha"); ?></p>		
                        <p><?php echo translator("48930 Las Arenas (Vizcaya)"); ?></p>	
                        <p><?php echo translator("Tel.: (+34) 944314083"); ?></p>	
                        <p><?php echo translator("Fax: (+34) 944631837"); ?></p>	
                        <img src="img/bilbao.png" alt="Bilbao">
                        <iframe width="600" height="450" style="border:0"
src="https://www.google.com/maps/embed/v1/place?q=paulino%20mendibil%2C%201%20las%20arenas%20vizcaya%2048930&key=AIzaSyAlnKDtzJoIfHbA99KRyXgrxZc134M53wk"></iframe>
                    </div>
                </div>
		</div>
	</div>
    </div>
<?php
    include_once('footer.php');
?> 