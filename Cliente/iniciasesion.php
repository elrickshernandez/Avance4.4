<?php
	require_once "../cabecera.php";
	include('../db.php')
?>
<a href="../index.php"class="menu">Inicio</a>
 <div class="centro">
            <main>
                <section>
                     <header>
						<h3>Inicia sesi&oacute;n</h3>
					</header>
					Para visualizar los precios y poder realizar alg&uacute;n pedido es necesario que se registre
                    as&iacute; mismo que inicie sesi&oacute;n.
                    <br/>
					Si todav&iacute;a no es cliente nuestro, consulte nuestro cat&aacute;logo de productos para 
					que se convenza.
					<br/><br/><br/>
					<form action="modDB/validar.php" method= "post" >
						<label for="txtIdCve">Usuario:</label>
						<input type="text" id="txtIdCve" name="usuario" autofocus required/>
						<br/>
						<label for="txtIdPwd">Contrase&ntilde;a:</label>
						<input type="password" id="txtIdPwd" name="password" required/>
						<br/>
						<input type="submit" value="Enviar" id="idBtnEnviar"/>
                </section>
            </main>
        </div>
<?php 
	
	require_once "../pie.php";
?>