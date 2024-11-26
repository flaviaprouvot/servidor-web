<?php

include_once('arrays.php');

/*Exemplo de uso do is_array */

$variaveltexto='arthur';

if (is_array($estado)){
    echo "É uma array<br><br>";
}
else{
    echo "Não é uma array<br><br>";
}

/*Exemplo de uso do array_unshift() e array_push() */

array_unshift($estado, "Rio Grande do Sul");  // Adiciona no início
array_push($estado, "Paraná"); // Adiciona no fim

foreach($estado as $estadoLinha){
    echo 'Estado:'. $estadoLinha. '<br>';
}

echo '<br><br><br>';

/*Exemplo de uso do array_shift() e array_pop() */

$removido = array_shift($estado); // Remove do início
echo $removido. '<br>';

$removido = array_pop($estado); // Remove do final
echo $removido;

/*Exemplo de uso do in_array */
if(in_array("São Paulo", $estado)){
    echo "Estado encontrado";
}


/*Exemplo de uso do array_key_exists() */
if(array_key_exists('SP', $estado)){
    echo "Chave encontrada";
}

?>