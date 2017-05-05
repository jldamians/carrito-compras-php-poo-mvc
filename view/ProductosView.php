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
        <h2>Lista de Productos</h2>
        <ul>
            <?php
                $html = "";
                $nombre = null;
                $precio = null;

                foreach ($productos as $producto) {
                    $id = $producto->getId();
                	$nombre = $producto->getNombre();
                	$precio = $producto->getPrecio();

                    $html.= "<li>";
                    $html.= 	"<a href=\"./index.php?accion=agregar&id=$id\">  Agregar  </a>";
                    $html.= 	"<span>".$nombre." (S/. ".$precio.")</span>";
                    $html.= "</li>";
                }

    			echo $html;
            ?>            
        </ul>

        <br>

        <a href="./index.php?accion=carrito">
            Ir Carrito (<?php echo $items; ?>)
        </a>
    </body>
</html>