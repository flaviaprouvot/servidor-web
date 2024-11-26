<?php

$frutas = array("Banana", "Abacaxi", "Goiaba", "Uva<br>", "Manga");
sort($frutas);

foreach ($frutas as $fruta) {
    echo $fruta . "<br>"; 
}

// Informações do produto
$nome = "Abacaxi";
$preco = "10";
$estoque = "35 <br>";

$produto = array("Nome" => $nome,"Preço" => $preco,"Estoque" => $estoque);
foreach ($produto as $produto1 => $valor) {
echo "$produto1: $valor <br>";
}

echo "Valor atualizado: <br> ";

// Atualização valor
$nome = "Abacaxi";
$preco = "15";
$estoque = "35 <br>";

$produto = array("Nome" => $nome,"Preço" => $preco,"Estoque" => $estoque);
foreach ($produto as $produto1 => $valor) {
echo "$produto1: $valor <br>";
}
$produto = array("Nome" => "Abacaxi", "Preço" => 15, "Estoque" => 35);
print_r($produto) . "<br>";

// Valor
$preco = 15; 
$quantidade = 5;  
echo "<br><br>Valor de 5 vendas com o valor atualizado: ";
echo ($quantidade * $preco) . "<br><br>";

// Juntando arrays
$produtos = array("Abacaxi", "Banana", "Manga");
$preços = array(15, 5, 7);

$produto = array("Abacaxi" => 15, "Banana" => 5, "Manga" => 7) ;
print_r($produto);
echo "<br><br>";

//Verificando arrays
$cores = array("vermelho", "azul", "verde", "amarelo", "preto");
$cor = array_search("verde", $cores);
if ($cor !== false) {
    echo "O valor 'verde' foi encontrado na posição " . $cor;
} else {
    echo "Valor não encontrado.";
}

//Soma e média de arrays
$numeros = array ("2", "4", "6", "8", "10");
echo "<br><br>Soma: ";
echo array_sum($numeros) . "<br>";
echo "Média:";
echo (array_sum($numeros)/5);
?>

