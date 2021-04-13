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

        <section class="datos">

            <div id="datos">
                <?php
                if ($_POST) {
                    $nacimiento = $_POST['fecha'];
                    $fecha_actual = date("Y-m-d");
                    

                    if ($nacimiento >= $fecha_actual) {
                        echo "<p> Debe ingresar una fecha anterior a $fecha_actual </p>";
                    } else {
                        $resta = strtotime($nacimiento) - strtotime($fecha_actual);
                        $diferencia = intval($resta / 86400);
                        $cienAñosEnDias = (365*100);
                        $diasQueFaltanParaCienAños = $cienAñosEnDias + $diferencia ;
                        
                        if (isset($nacimiento)){
                            echo "Haz nacido el . $nacimiento .";
                        };
                        
                        echo "<p> Haz vivido un total de " . $diferencia . " días en tu vida</p>";
                        echo "Te faltan $diasQueFaltanParaCienAños días  para llegar a los 100 años";
                        
                    
                    }
                }
                ?>
            </div>

        </section>











        <?php include("footer.php"); ?>

    </div>
</body>

</html>