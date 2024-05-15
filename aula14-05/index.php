<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AULA 14-05</title>
    <link rel="stylesheet" href="../aula07-05/style.css">
</head>
<body>
    
<h1> Arrays - Laços </h1>

<h2> Array: Definição Explícita (sem chave)</h2>
<pre>
<?php   
        $var = array(2, 5, 7, 9, 11);
        echo "impressão 1 por 1 ";
        echo "<br>[for]: ";
        echo "$var[0] ";
        echo "$var[1] ";
        echo "$var[2] ";
        echo "$var[3] ";
        echo "$var[4] ";
    ?>
</pre>

<h2> Array: Impressão com [For]</h2>
<pre>
<?php
    echo "[for]: ";
    for($a=0; $a<(count($var)); $a++){
        echo " $var[$a]";
    }
    ?>
</pre>

<h2> Array: Impressão com [Foreach]</h2>
<pre>
<?php
     echo "[for]: ";
    foreach($var as $dados){
        echo " $dados";
    }
    ?>
</pre>

<h2>  Array: Definição explcita </h2>
<pre>
<?php

    $alunos = array( "Maria" => 20,
                     "João" => 44,
                    "José" => 12,
                    "Neusa" => 73
                );
    foreach($alunos as $dados){
        echo "$dados <br>";
    }
    ?>
</pre>

<h2> Foreach com chave valor</h2>
<pre>
<?php
    
    foreach($alunos as $chave => $valor){
        echo "$chave: tem $valor anos <br>";
        }
    ?>
</pre>

<h2> print_r -> Mostra o que tem armazenado no array</h2>
<pre>
<?php
    print_r($alunos);
    ?>
</pre>

<h2>Array Multidimensional: Definição Explícita</h2>
<pre>
<?php
    echo "---------// Array Multidimensional: Definição Explícita<br>";
    $alunos1 = array("Maria" =>
                                array("endereco" => "Rua Chile 1046",
                                "endereço" => "Rua Chile 1046"),
                    "João" => 
                                array("endereco" => "Rua Iapó 234",
                                "endereço" => "Prado Velho"),
                    "Zeca" => 
                                array("endereco" => "Rua Iapó 234",
                                "endereço" => "Prado Velho")            
    
    );

    print_r ($alunos1["Maria"]);

    echo $alunos["Maria"] ["endereco"];
    ?>
</pre>

</body>
</html>