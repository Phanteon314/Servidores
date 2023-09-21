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

        $numero = $_GET["numero"];

        for ($i = 0; $i <= 10; $i++) {
            echo $numero."*".$i. " = " . $numero * $i;
            echo "<br/>";
        }
        echo "<br/>";
        echo "<br/>";
        $i = 0;
        while($i != 11){
            echo $numero."*".$i. " = " . $numero * $i;
            echo "<br/>";
            $i++;
        }
        echo "<br/>";
        echo "<br/>";
        $i = 0;
        do {
            echo $numero."*".$i. " = " . $numero * $i;
            echo "<br/>";
            $i++;
        } while($i != 11);

    ?>

    </div>

</body>