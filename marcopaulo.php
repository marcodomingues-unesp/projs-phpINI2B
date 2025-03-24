<?$proprietario = "Marco";
$locador = "Paulo";
$valor = 2457.50;
$porcent_reajuste = 35.5;
$novo_valor = $valor * ($porcent_reajuste / 100 + 1);

echo "<h1>Proprietário:</h1>";
echo "<mark>$proprietario</mark>";

echo "<h1>Locador:</h1>";
echo "<mark>$locador</mark>";

echo "<p><b><u><mark>Valor Reajustado</mark></p></b></u>";
echo "<mark>=  R$$novo_valor</mark>";

echo "<p><b><u><mark>Valor</mark></p></b></u>";
echo "<mark>=  $porcent_reajuste%</mark>";
?>