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

        if($numero%2==0){
          $condicion = 1;
        } else {
          $condicion = 0;
        }

        if ($condicion==1){
          echo "El numero " . $numero . " es par";
        } else {
          echo "El numero " . $numero . " es impar";
        }


    ?>

    </div>

</body>


</html>

