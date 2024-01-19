<?php
date_default_timezone_set('America/Brasilia');
echo date_default_timezone_get()."<br>";

$hoje = date('d/m/y');
// echo $hoje;

// //calculando datas
// $dataAtual = date('d/m/Y');
// $dataFutura =date('d/m/Y', strtotime('+ 7 month'));

// $parcela = '';
// $diaAtual = date('d/m/Y');

// for($parc = 0; $parc <36; $parc++){
//     $parcela .= "Parcela {$parc} Venc: ".date('d/m/Y', strtotime('+10 day'))."<br>";
// }

// $dataInicial = strtotime(date('Y-m-d'));
// $dateFinal = strtotime(date('28/01/2024'));
// $quantosDias = ($dataFinal - $dataInicial) / (60 * 60 * 24);

// echo "Faltam {$quantosDias} dias para o aniversário do professor";

$parcela = date('Y-m-d');

for($parc = 1; $parc <=36; $parc++){
    $parcela = date('Y-m-d', strtotime($parcela."+1month"));
    echo "Parcela:{$parc} Vencimento:".date('d/m/Y', strtotime($parcela))."<br>";
}
echo strtotime($parcela);