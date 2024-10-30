<?php
require 'produtos.php';
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $produto = $produtos[$id];
    $ImgProd = "{$produto['modelo']}-{$produto['cores'][0]}";
}else{
    echo 'Produto não localizado';
}
?>
<div class="product">
    <div class="product-img">
        <div class="large">
            <img src="assets/shoes/<?= $ImgProd; ?>-1.avif" alt="" id="large">
        </div>
        <div class="thumbs">
            <?php
            for($i = 1; $i <= 8; $i++){
                ?>
                <div class="thumbnail" onmouseover="changeImage('1')">
                <img src="assets/shoes/<?= "{$ImgProd}-{$i}.avif"; ?>" alt="" id="thumb1">
            </div>
            <?php
            }
            ?>
        </div>
    </div>
    <div class="product-desc">
        <h1><?= $produto['nome']; ?></h1>
        <h3><?= $produto['categoria']; ?></h3>
    </div>
    <div class="classification">
        <div class="stars">
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star-half-stroke"></i>
        </div>
        <p><span>4.5</span>20 avaliações</p>
    </div>
</div>