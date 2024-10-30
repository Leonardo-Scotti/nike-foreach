<?php

function price($preco, $desconto){
    $NovoPreco = $preco - (($preco / 100) * $desconto);
};