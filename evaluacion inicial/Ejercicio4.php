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

        $numero1 = $_GET['numero1'];
        $numero2 = $_GET['numero2'];
        $numero3 = $_GET['numero3'];

        $numeros = array($numero1, $numero2, $numero3);
        sort($numeros);

        echo $numeros[0].",".$numeros[1].",".$numeros[2];


    ?>

    </div>

</body>


</html>