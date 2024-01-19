<?php

// $agora = new DateTime('now', new DateTimeZone('America/Sao_Paulo'));
// echo $agora->format('d/m/Y h:i:s');


// $ontem = new DateTime('next month');
// echo $ontem->format('d/m/Y');

// echo "<pre>";
// var_dump($agora);
// echo "</pre>";

// % indica um placeholder - da pra usar todos os comuns

// ou modificadores específicos.
// %a: Número total de dias, independentemente de outros componentes no intervalo.
// %R: Exibe o sinal do intervalo (+ ou -).
// %y: Número de anos (ignorando meses e dias).
// %M: Número de meses (ignorando anos e dias).
// %D: Número de dias (ignorando anos e meses).

$hoje = new DateTime();
$formato = new IntlDateFormatter('pt_BR', IntlDateFormatter::FULL, IntlDateFormatter::NONE);
echo $formato->format($hoje);

//gerador de parcelas
$parcela = new DateTime();
for($parc = 1; $parc <=36; $parc++){
    $parcela->add(new DateInterval('P30D'));
    echo "Parcela: {$parc} Vencimento: {$parcela->format('d/m/Y')}<br>";
}