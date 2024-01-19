<?php

$mensagem = "Olá, ";

$funcaoAnonima = function($nome) use ($mensagem) {
    echo $mensagem.$nome;
};


//usando a função
$funcaoAnonima("Bruno");


///// exemplo 2

function criarContador(){
    $contador = 0;
    $funcaoContadora = function() use (&$contador){
        $contador++;
        echo "Contagem: ".$contador."<br>";
    };
    return $funcaoContadora;
}

//usando
$contadora = criarContador();
$contadora();
$contadora();

//exemplo 3
$numeros = [1,2,3,4,5,6,7,8,9,10];

$numerosPares = array_filter($numeros, function($numero){
    return $numero % 2 == 0;
});

$numerosDobrados = array_map(function($numero){
    return $numero * 2;
}, $numerosPares);

echo "<pre>";
print_r($numerosDobrados);
echo "</pre>";

//exemplo 4
$soma = function($a, $b){
    return $a + $b;
};

echo $soma(44,66);

//exercicio 1 faça um algoritmo para calcular média de notas de alunos cadastrados em um array, use closure para calcular as medias

echo "<br>";

$notaAlunos = [
    'joaozinho' => [5,7,4],
    'zezinho' => [8,7,10],
    'carlinho' => [7,6,9],
    'luizinho' => [2,8,5]
];

$calculoMedia = function($notas){
    return array_sum($notas) / count($notas);
};

foreach ($notaAlunos as $aluno => $notas){
    $media = $calculoMedia($notas);
    echo "Média de $aluno: $media <br>";
};

