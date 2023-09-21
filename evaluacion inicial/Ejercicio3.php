<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="prueba" content="width=device=width, initial-scale=1.0">
  <title>Evaluacion Inicial</title>
</head>

<body>

    <div style="padding:50px; border-style: dashed; border-radius: 2px; margin-top: 70px; margin-left: 70px;display: inline-block;">

    <?php

        $numero = $_GET['numero'];

        switch ($numero) {
            case 1:
                echo "Es lunes";
                break;
            case 2:
                echo "Es martes";
                break;
            case 3:
                echo "Es miercoles";
                break;
            case 4:
                echo "Es jueves";
                break;
            case 5:
                echo "Es viernes";
                break;
            case 6:
                echo "Es sabado (festivo)";
                break;
            case 7:
                echo "Es domingo (festivo)";
                break;
        }


    ?>

    </div>

</body>


</html>