<?php
require 'produtos.php';
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $produto = $produtos[$id];
    $ImgProd = "{$produto['modelo']}-{$produto['cores'][0]}";
}else{
    echo 'Produto não localizado';
}

//Variáveis
$tamanhos = $prosuto['tamanhos'];
$cores = $produto['cores'];
$preco = $produto['preco'];
$desconto = $produto['desconto'];
$precoFormatado = emReal(price($preco, $desconto));
$prestacoes = 10;
$valorParcela = emReal(parcelas(price($preco, $desconto), $prestacoes));
?>
<div class="product">
    <div class="product-img">
        <div class="large">
            <img src="assets/shoes/<?= $ImgProd; ?>-1.avif" alt="" id="large">
        </div>
        <div class="thumbs">
            <?= thumbnail($ImgProd); ?>
        </div>
    </div>
    <div class="product-desc">
        <h1><?= $produto['nome']; ?></h1>
        <h3><?= $produto['categoria']; ?></h3>
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
        <div class="price">
            <h2><?= $precoFormatado; ?></h2>
            <h4><?php
             echo "ou {$prestacoes}X de {$valorParcela}"; 
             ?></h4>
        </div>
        <div class="color-selector">
            <?php
            foreach($cores as $cor){
                ?>
                <div onmousedown="colorSelector('<?=$cor;?>')" id="<?=$cor;?>" class="choice">
                    <img src="assets/shoes/<?= "{$produto['modelo']}-{$cor}-1.avif"?>" alt="">
                </div>
                <?php
            }
            ?>
        </div>
        <div class="size">
            <h3>Tamanhos</h3>
            <?php
                for($i = 35; $i <= 44; $i++){
                    if(in_array($i, $produto['tamanhos'])){
                        ?>
                        <input type="radio" class="trigger" name="size" id="<?= $i; ?>">
                        <label for="<?= $i; ?>"><?= $i; ?></label>
                        <?php
                    }else{
                        ?>
                        <input type="radio" class="trigger" name="size" id="<?= $i; ?>" disabled>
                        <label for="<?= $i; ?>"><?= $i; ?></label>
                    <?php
                    }
                    ?>

                    <?php
                }
            ?>
        </div>
        <div class="buttons">
            <a href="#" class="cart">Adicionar ao carrinho</a>
            <a href="#" class="fav">Salvar nos favoritos<i class="fa-regular fa-heart"></i></a>
        </div>
        <div class="share">
            <a href="https://api.whatsapp.com/send/?text=Ol%C3%A1!%20Olha%20s%C3%B3%20esse%20site%20que%20eu%20criei%20na%20aula.%20https%3A%2F%2Ffhricardo.github.io%2Fnike-air-jordan%2F"
            target="_blank">
                <p>Compatilhar no <i class="fa-brands fa-whatsapp"></i> WhatsApp</p>
            </a>
        </div>
        <div class="about">
            <p>Inspirado no AJ1 original, essa edição cano médio mantém o visual icônico que você ama, enquanto
                        a escolha de cores e o couro conferem uma identidade distinta.</p>
        </div>
        <div class="benefits">
            <input type="checkbox" id="Benefits" class="trigger">
            <div class="benefits-text">
                <label for="Benefits">
                    <h3>Benefícios</h3>
                    <ul class="benefit-det">
                        <li>Cabedal em material genuíno, sintético e tecido para sensação de suporte.</li>
                        <li>Entressola de espuma e amortecimento Nike Air proporcionam conforto e leveza.</li>
                        <li>Solado de borracha com ponto de giro cria tração duradoura.</li>
                    </ul>
                </label>
            </div>
        </div>
    </div>
</div>