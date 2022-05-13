<?php
require_once "../cabecera.php";
include('../db.php');
$nombre= $_GET['nombre'];
?>
<nav class="navbar navbar-toggleable-md navbar-light bg-white fixed-top mediumnavigation">
<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
<div class="container">
	<!-- Begin Logo -->
	<a class="navbar-brand" href="iniciousuariocuenta.php">Inicio
	</a>
	<!-- End Logo -->
	<div class="collapse navbar-collapse" id="navbarsExampleDefault">
		<!-- Begin Menu -->
		<ul class="navbar-nav ml-auto">
            <li class="nav-item active">
			<a class="nav-link" href="modificar.php?nombre=<?php echo $usuario?>">Modificar tus datos <span class="sr-only">(current)</span></a>
			</li>
			<li class="nav-item active">
			<a class="nav-link" href="../index.php">Cerrar Sesión <span class="sr-only">(current)</span></a>
			</li>

		</ul>
		<!-- End Menu -->
	</div>
</div>
<script type = "text/javascript">
	function ConfirmDelete()
	{
		var respuesta= confirm("¿Esta seguro de eliminar su cuenta?")
		if (respuesta==true)
		{
			return true;
		}
		else
		{
			return false;
		}
	}

	</script>
</nav>
<div class="container mt-5">
                    <div class="row"> 
                        
                        <div class="col-md-3">
                            <h1>Ingrese datos</h1>
                                <form action="modDB/modificar.php?nombre=<?php echo $nombre?>" method="POST"  enctype= "multipart/form-data">

                                    <input type="text" class="form-control mb-3" name="txtNombre" placeholder="Nombre" autofocus required>
                                    <input type="text" class="form-control mb-3" name="txApellido" placeholder="Apellido Paterno" autofocus required>
                                    <input type="text" class="form-control mb-3" name="txApellidoM" placeholder="Apellido Materno" autofocus required>
                                    <input type="text" class="form-control mb-3" name="Tel" placeholder="Teléfono" autofocus required>
                                    <input type="text" class="form-control mb-3" name="txtDir" placeholder="Dirección" autofocus required>
                                    <input type="text" class="form-control mb-3" name="txtCorreo" placeholder="Correo Electrónico" autofocus required>
                                    
                                    <input type="submit" class="btn btn-primary">	

                                </form>
                        </div>
<section class="col-md-9">
	<div class="section-title">
		<h2><span>Datos Actuales</span></h2>
	</div>
	<div class="card-columns listfeaturedtag">
    <?php 
		        $sql="SELECT * from usuarios where usuario = '$nombre' ";
		        $result=mysqli_query($conexion,$sql);
                $mostrar=mysqli_fetch_array($result)
                ?>
        <div class="card">
			<div class="row">
				<div class="col-md-5 wrapthumbnail">
						<div class="thumbnail" style="background-image:url('../media/datos.jpg')">
						</div>
				</div>
				<div class="col-md-7">
					<div class="card-block">
                        <h2 class="card-title"><?php echo $mostrar['nombre'] ?> <?php echo $mostrar['apellido_paterno'] ?> <?php echo $mostrar['apellido_materno']?></a></h2>
						<h4 class="card-text">
										Telefono: <?php echo $mostrar['telefono'] ?>. <br/>
                                        Direccion: <?php echo $mostrar['direccion'] ?><br/>
                                        Correo: <?php echo $mostrar['correo'] ?>. <br/> </h4>

                                        <a href="modDB/eliminado.php?nombre=<?php echo $nombre ?>"><button type="button" class="btn btn-danger" onclick = "return ConfirmDelete()">Eliminar tu cuenta</button></a>
						<div class="metafooter">
							<div class="wrapfooter">
								<span class="meta-footer-thumb">

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
</section>
	
   <?php


require_once "../pie.php";
?>