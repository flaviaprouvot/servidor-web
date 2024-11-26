
<?php
$produtos = array(
'Comidas' => array(
    array('Nome' => 'Pizza', 'Preço' => 55, 'Estoque' => 35), 
    array('Nome' => 'Hamburguer', 'Preço' => 35, 'Estoque' => 28),    
),
'Bebidas' => array(
    array('Nome' => 'Suco', 'Preço' => 15, 'Estoque' => 20), 
    array('Nome' => 'Refrigerante', 'Preço' => 10, 'Estoque' => 42),   
)
);

foreach ($produtos as $produto => $valor) {
echo "$produto: <br>"; 
foreach ($valor as $item) {
    echo "Nome: {$item['Nome']} <br>"; 
    echo "Preço: {$item['Preço']} <br>";
    echo "Estoque: {$item['Estoque']} <br><br>";
}
echo "<br>";
}

$total = $item['Preço'] * $item['Estoque'];
echo "Valor total dos produtos em estoque: R$ " . ($total);

echo "<br><br><br>";
echo "Tabela de Alunos e Notas:";
echo "<br><br>";

$alunos = array(
    array('Nome' => 'Angela', 'Matematica' => 9, 'Portugues' => 10),
    array('Nome' => 'Pamela', 'Matematica' => 5, 'Portugues' => 9),
    array('Nome' => 'Phyllys', 'Matematica' => 7, 'Portugues' => 8)
);

foreach ($alunos as $aluno) {
    echo "Nome: {$aluno['Nome']} <br>"; 
    echo "Nota Matemática: {$aluno['Matematica']} <br>";
    echo "Nota Português: {$aluno['Portugues']} <br><br>";
}

echo "Média das notas dos alunos:";
echo "<br><br>";

foreach ($alunos as $aluno) {
    $media = ($aluno['Matematica'] + $aluno['Portugues']) / 2;
    echo "Nome: {$aluno['Nome']} <br>"; 
    echo "Média: {$media} <br><br>";
}  
?>


