<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula07-05</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1> Array: Definição Direta </h1>
    <pre>

        <?php
            $alunos = array("Pedro Castro", "Maria Prado", "Guilherme", "Gabriel", "Jandilson", "Ivan", "Leo", "Savio");
            for($a=0; $a<8; $a++){
                echo "<br>No indice $a o nome do aluno é $alunos[$a] ";
            }
            echo "<br><br>[foreach]: ";
            foreach ($alunos as $dado){
                echo "$dado; ";
            }

            echo "<br><br> Numero de elementos: " . count($alunos);
        ?>

    </pre>

    <h1> Array: Definição Implicita </h1>
    <pre>

        <?php
            $var = array(1, 2, 3, 4);
            echo "[for]: ";
            for($a=0; $a<4; $a++){
                echo "$var[$a] ";
            }
 
            echo "<br>[foreach]: ";
            foreach ($var as $dado){
                echo "$dado ";
            }
            echo "<br><br> Numero de elementos: " . count($var);

            $var1 = array(10, 20, 30);
            echo "<br>";
            for($a=0; $a<(count($var1)); $a++){
                echo "<br>$var1[$a] ";
            }
            echo "<br><br> Numero de elementos: " . count($var1);
        ?>

    </pre>

    <h1> Array: Definição Explicita </h1>
    <pre>

        <?php
            $var2 = ["Jandilson" => 7, "Vitin" => 10, "Gabriel" => 6, "Eduardo" => 10];
            echo "<br>[foreach]: ";
            foreach ($var2 as $chave => $valor){
                if ($valor >= 10){
                    echo  "<br><br><h2>ALUNOS APROVADOS</h2>"; 
                    echo "<br>Na posição: $chave";
                    echo "<br>Obteve a nota: $valor<br>";
                } else{
                    echo "<br><br>ALUNOS REPROVADOS";
                    echo "<br>Na posição: $chave";
                    echo "<br>Obteve a nota: $valor<br>";
                }
               
            }
            echo "<br><br> Numero de elementos: " . count($var);
        ?>

    </pre>
</body>
</html>

