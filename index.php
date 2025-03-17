<?php
$cidade = "Bauru";
$dia = 3;  
$mes = "março";
$ano = 2025; 
while ($dia <= 31){
    echo "<b>$cidade</b>, $dia de $mes de $ano<br>"; #o programa pega as variáveis para cidade, dia, mês e ano, e exibe elas em uma frase formatada no script.
    $dia += 7;
}
?>
