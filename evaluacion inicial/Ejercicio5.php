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

        $numero = rand(0,500);

        echo "El numero es ". $numero. " y esta entre ";

        if($numero <= 100){
            echo "0 y 100";
        }

        if($numero > 100 && $numero <=200){
            echo "100 y 200";
        }

        if($numero > 200 && $numero <=300){
            echo "200 y 300";
        }

        if($numero > 300 && $numero <=400){
            echo "300 y 400";
        }

        if($numero > 400 && $numero <=500){
            echo "400 y 500";
        }


    ?>

    </div>

</body>


</html>