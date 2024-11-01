<?php

function price($preco, $desconto){
    $newPrice = $preco - $preco / 100 * $desconto;
    return $newPrice;
}

function parcelas($valor, $parcelas){
    $precoParcela = $valor / $parcelas;
    return $precoParcela;
}

function thumbnail($prodImg){
    for($i = 1; $i <= 8; $i++){
    echo "<div class='thumbnail' onmouseover='changeImage('{$i}')'>";
    echo "<img src='assets/shoes/{$prodImg}-{$i}.avif' alt=' id='thumb1'>";
    echo "</div>";
    }
}

function emReal($value){
    $emReais = number_format($value, 2, ",", ".");
    return "R$ $emReais";
}
