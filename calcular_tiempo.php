<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/css/styles.css">
</head>

<body>

    <div class="container">
        <?php include("header.php"); ?>
        <section>
        <h2>Calcula cuantos días haz vivido hasta hoy  <br> y cuantos te faltan para llegar a los 100 años de edad</h2>
            <h2>Introduce tu fecha de nacimiento</h2>
        </section>

        
            <div class="form">
                <form class="formulario" method="POST" action="calculo_fecha.php">
                    <input type="date" name="fecha">
                    <input type="submit" value="Calcular">
                </form>
            </div>

            <div class="detalle">
			<p>En este ejemplo se utiliza PHP date para el procesamiento de fechas y calculo de tiempo. <br> <a target="_blank" href="https://github.com/nahuelmd/PHP-Date">Ver código fuente en GitHub</a>  </p>
		    </div>
        



        
            <?php include("footer.php"); ?>

    </div>
</body>

</html>