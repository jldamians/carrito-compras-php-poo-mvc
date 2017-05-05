<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8" />
        <title>Personas</title>
        <style type="text/css">
        	ul {
        		list-style:none;
        		padding: 0;
        		margin: 0;
        	}

        	li {
				padding: 5px;
				margin: 0;
        	}
			a:link {
			    text-decoration: none;
			}
        </style>
    </head>
    <body>
        <ul>
			<form action="./index.php" method="post">
				<input type="hidden" name="accion" value="registrar"/>
				<input type="hidden" name="id" value="<?php echo $producto->getId() ?>"/>
				<input type="hidden" name="nombre" value="<?php echo $producto->getNombre() ?>"/>
				<input type="hidden" name="precio" value="<?php echo $producto->getPrecio() ?>"/>
				<p>
				 	<label>Nombre: </label>
				 	<label><?php echo $producto->getNombre() ?></label>
				</p>
				<p>
					<label>Precio (S/.): </label>
					<label><?php echo $producto->getPrecio() ?></label>
				</p>
				<p>
				 	<label>Cantidad: </label>
				 	<input type="text" name="cantidad" placeholder="Ingrese un número" />
				</p>
				<p>
				 	<input type="submit" />
				</p>
			</form>        
        </ul>
        <a href="./index.php">Ir Catalogo</a>
    </body>
</html>