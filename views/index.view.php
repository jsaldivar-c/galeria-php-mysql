<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link href='https://fonts.googleapis.com/css?family=Slabo+27px' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/estilos.css">
	<title>Galeria en PHP y MySQL</title>
</head>
<body>
	<header>
		<div class="contenedor">
			<h1 class="titulo">Galeria en PHP y MySQL</h1>
		</div>
	</header>

	<div class="fotos">
		<div class="contenedor">
			<!-- Ejecutamos un ciclo con la informacion de la BD  -->
			<?php foreach($fotos as $foto): ?>
			<div class="thumb">
				<a href="foto.php?id=<?php echo $foto['id']; ?>">
					<img src="fotos/<?php echo $foto['imagen']; ?>" alt="">
				</a>
			</div>
			<?php endforeach; ?>
			<div class="paginacion">
				<!-- Si el usuario no esta en la pagina principal entonces no mostramos el enlace a una pagina anterior -->
				<!-- Al inicio del programa iniciara en 1 por lo cual la siguiente linea no se ejecuta -->
				<?php if ($pagina_actual != 1): ?>
					<!-- Al restar -1 el enlace nos enviara a una pagina anterior -->
					<a href="index.php?p=<?php echo $pagina_actual -1; ?>" class="izquierda"><i class="fa fa-long-arrow-left"></i> Pagina Anterior</a>
				<?php endif ?>

				<!-- Si el usuario esta en la pagina principal entonces no mostramos el enlace a una pagina siguiente -->
				<?php if ($total_paginas != $pagina_actual): ?>
					<!-- Al sumar +1 el enlace nos enviara a una pagina siguiente -->
					<a href="index.php?p=<?php echo $pagina_actual +1; ?>" class="derecha">Pagina Siguiente <i class="fa fa-long-arrow-right"></i></a>
				<?php endif ?>
		    </div>
		</div>
	</div>

	<!--<section class="fotos">
		<div class="contenedor">
			<div class="thumb">
				<a href="#">
					<img src="imagenes/1.jpg" alt="">
				</a>
			</div>
			<div class="thumb">
				<a href="#">
					<img src="imagenes/2.jpg" alt="">
				</a>
			</div>
			<div class="thumb">
				<a href="#">
					<img src="imagenes/3.jpg" alt="">
				</a>
			</div>
			<div class="thumb">
				<a href="#">
					<img src="imagenes/4.jpg" alt="">
				</a>
			</div>
			<div class="thumb">
				<a href="#">
					<img src="imagenes/5.jpg" alt="">
				</a>
			</div>
			<div class="thumb">
				<a href="#">
					<img src="imagenes/6.jpg" alt="">
				</a>
			</div>
			<div class="thumb">
				<a href="#">
					<img src="imagenes/7.jpg" alt="">
				</a>
			</div>
			<div class="thumb">
				<a href="#">
					<img src="imagenes/8.jpg" alt="">
				</a>
			</div>

			<div class="paginacion">
				<a href="#" class="izquierda"><i class="fa fa-long-arrow-left"></i>Pagina anterior</a>
				<a href="#" class="derecha">Pagina siguiente <i class="fa fa-long-arrow-right"></i></a>
			</div>
		</div>
	</section>-->

	<footer>
		<p class="copyright"> Curso FM Carlos Arturo Esparza | José Saldivar Castañeda</p>
	</footer>
</body>
</html>