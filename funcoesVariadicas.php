<?php
//Permitem que você defina 

function soma(...$numeros){
    $resultado = 0;
    foreach($numeros as $numero){
        $resultado += $numero;
    }
}

function exemplo2($arg1, $arg2, ...$resto){
    echo $arg1."<br>";
    echo $arg2."<br>";
    foreach($resto as $r){
        echo $r."<br>";
    }
}
 exemplo2("Bruno", "Zabela", "Bulma", "Zelda", "Bolinha");

 //exemplo3 parametros nomeados

function nomeados(...$params){
    foreach($params as $chave => $valor){
        echo "{$chave}: {$valor}<br>";
    }
}

//usando
nomeados(Bruno: 30, Zabela:27, Bulma:1, Zelda: 0.2, Bolinha: 0.6);

//exemplo 4 - media de notas

function calculaMedia($aluno, ...$notas){
    echo "Aluno: {$aluno}";
    echo "Média: ".array_sum($notas) / count($notas);
}

calculaMedia("Bruno", 9,8,10);

//CRIE UMA FUNÇÃO QUE MOSTRE O MENOR E MAIOR NUMERO CONTIDO NO PARAMETRO VARIADICO

function minMax(...$numeros){
    echo "Minimo: ".min($numeros)."<br> Maximo: ".max($numeros);
}

minMax(60,4,45,645);