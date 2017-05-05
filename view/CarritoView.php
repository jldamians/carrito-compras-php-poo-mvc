<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8" />
        <title>Personas</title>
        <style type="text/css">
            ol {
                padding: 0;
                margin: 0;
            }
        	li {
				padding: 2px;
				margin: 0;
        	}
			a:link {
			    text-decoration: none;
			}
        </style>
    </head>
    <body>
        <h2>Lista de Compras</h2>

        <ol>
            <?php foreach ($carrito as $producto) { ?>
            <li>
                <label>
                    <b><?php echo $producto->getNombre(); ?></b>
                    <?php echo "(S/.".$producto->getPrecio().")"; ?>
                </label>
                <ul>
                    <li>
                        <label>Cantidad: <?php echo $producto->getCantidad(); ?></label>
                    </li>
                    <li>
                        <label>Importe: <?php echo "S/." . $producto->getImporte(); ?></label>
                    </li>
                    <li>
                        <label>IGV (18%): <?php echo "S/." . $producto->getIgv(); ?></label>
                    </li>
                    <li>
                        <a href="./index.php?accion=eliminar&id=<?php echo $producto->getId(); ?>">Quitar</a>
                    </li>
                </ul>
            </li>
            <?php } ?>
        </ol>

        <span>
            <label>
                <b>Monto Total Neto: </b>
                <?php echo "S/. " . $mntNeto; ?>
            </label>
        </span><br>
        <span>
            <label>
                <b>Monto Total IGV (18%): </b>
                <?php echo "S/. " . $mntTotalIgv; ?>
            </label>
        </span><br>
        <span>
            <label>
                <b>Monto Total: </b>
                <?php echo "S/. " . $mntTotal; ?>
            </label>
        </span><br>

        <br>

        <a href="./index.php">Ir Catalogo</a>
    </body>
</html>