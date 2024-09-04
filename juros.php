<?php

$capit = $_GET["capit"];
$tax = $_GET["tax"];
$temp = $_GET["temp"];

function simples($capital, $taxa, $tempo){
    $juros = $taxa / 100;
    $totaljuros = $capital * $juros * $tempo;
    return $totaljuros;
}

echo "Simples: " . simples($capit,$tax,$temp) . "<br>";

function composto($capital, $taxa, $tempo){
    $juros = $taxa/100;
    $montante = $capital * ((1+$juros) ** $tempo);
    $totaljuros = $montante - $capital;
    return $totaljuros;
}

echo "Composto: " . composto($capit,$tax,$temp);

?>