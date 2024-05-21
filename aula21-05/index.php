<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AULA 21-05</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1>Array Multidimensional: Definição Explícita</h1>

    <h1>Arrays</h1>

<h2>1 - array como lista ordenada</h2>

<?php

    $listaordenada= array (
        'fabio','Antonio', 'joao'
    );
?>

<pre>
<?php echo print_r($listaordenada) ?>;
</pre>

<?php 
    echo  '<h2> 1.1 - adicionar dados a array </h2>';
    $listaordenada[] = 'pedro';
    $listaordenada[] = 'Hubert';

?>

<pre>
<?php echo print_r($listaordenada) ?>;
</pre>

<?php 

    echo  '<h2> 2 - array associativa </h2>';
    $var = [
        'nome'=> 'Hubert',
        'endereco'=>'rua cruzeiro',
        'idade'=> 15,
    ];
?>

<pre>
<?php echo print_r($var) ?>;
</pre>

<?php 
    echo  '<h2> 2.1 - adicionar dados ao array associativa </h2>';

    $var['cidade'] = 'guirapa';
    $var['estado'] = 'parana';
?>
<pre>
<?php echo print_r($var) ?>;
</pre>

<?php
    echo  '<h2> 2.2 - substitui os dados ao array associativa </h2>';

    $var['cidade'] = 'pindai';
?>
<pre>
<?php echo print_r($var) ?>
</pre>

<?php
    echo "<h2>3 - Array Multidimensional</h2> <br>";
    $var = [
        'alunos' => [
            [
            'id' => 1,
            'nome' => 'Fabio',
            'endereco' => 'Rua Brasiliense',
            'idade' => 20,
            'cidade' => 'Guanambi'
            ],
            [
            'id' => 2,
            'endereco' => 'Rua Humberto',
            'nome' => 'Jao',
            'idade' => 32,
            'cidade' => 'Licinio'
            ],
            [
            'id' => 3,
            'endereco' => 'Rua São Geraldo',
            'nome' => 'Dudu',
            'idade' => 18,
            'cidade' => 'Caculé'
            ],
        ]
    ];
?>

<pre>
<table style="width:100%">
  <tr>
    <th>ID</th>
    <th>Nome</th>
    <th>Endereço</th> 
    <th>Idade</th>
    <th>Cidade</th>
  </tr>

<?php
    for($a=0; $a<(count($var ['alunos'])); $a++){
?>

  <tr>
    <td> <?php echo $var ['alunos'] [$a] ['id'] ?> </td>
    <td> <?php echo $var ['alunos'] [$a] ['nome'] ?> </td>
    <td> <?php echo $var ['alunos'] [$a] ['endereco'] ?> </td>
    <td> <?php echo $var ['alunos'] [$a] ['idade'] ?> </td>
    <td> <?php echo $var ['alunos'] [$a] ['cidade'] ?> </td>
  </tr>

  <?php } ?>

</table>
</pre>

</body>
</html>