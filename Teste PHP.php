<!DOCTYPE html>
<html>
<body>

<?php
$nomes = ['Francisco Souza', 'Guilherme Rosa', 'Arthur Golveia', 'Marcelo Planalto'];
$cliente1 = new stdClass();
$cliente1->nome = $nomes[0];
$cliente2 = new stdClass();
$cliente2->nome = $nomes[1];
$cliente3 = new stdClass();
$cliente3->nome = $nomes[2];
$cliente4 = new stdClass();
$cliente4->nome = $nomes[3];
$arrayDeClientes = [$cliente1, $cliente2, $cliente3, $cliente4]; // Modifiquei a estrutura da questão 1 para a resolução da questão 2

$arrayDeNascimento = [
'Francisco Souza' => '10-12-1996',
'Arthur Golveia' => '14-01-2000',
'Guilherme Rosa' => '26-05-1985',
'Marcelo Planalto' => '26-05-1985' // Foi adicionado o registro do Marcelo para a questão 2
];

$clientes = [];
foreach ($nomes as $nome) {
    $cliente = new stdClass();
    $cliente->nome = $nome;
    $cliente->dataNascimento = $arrayDeNascimento[$nome];
    $clientes[] = $cliente;
}

foreach ($clientes as $cliente) {
    echo $cliente->nome . ' nascido em ' . $cliente->dataNascimento . '<br>';     
}
echo '<br>';

// Função pra comparar o texto no formato de data usando o strotime.
function compararPorDataNascimento($a, $b) {
    return strtotime($a->dataNascimento) - strtotime($b->dataNascimento);
}
// ordenando o array de clientes utilizando usort e a função compararPorDataNascimento
usort($clientes, 'compararPorDataNascimento');

// Percorrendo os clientes ordenados e imprimindo.
foreach ($clientes as $cliente) {
    echo $cliente->nome . ' nascido em ' . $cliente->dataNascimento . '<br>';
}
?>

</body>
</html>
