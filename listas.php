<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php

  $compras = ["banana", "mamão"];
  echo $compras[0];
  $moedas = [];  // Cria um array vazio
$moedas[0] = 0; // Define o valor para o índice 0
$moedas[1] = 1; // Define o valor para o índice 1

echo $moedas[1]; // Isso irá imprimir 1, que é o valor associado ao índice
#Na versão 8 e posteriores do PHP, você também pode usar a sintaxe de inicialização de array para criar um array associativo:
$moedas2 = [0 => 0, 1 => 1];
echo $moedas2[1]; // Isso também imprimirá 1

  ?>
</body>
</html>
