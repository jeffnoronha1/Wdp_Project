<main class="main_content">
 <div class="container">
    <article class="main_product">
        <div class="main_product_gallery">
            <ul class="main_product_gallery_list">
                <?php
                    for ($img = 1; $img < 5; $img++){
                        $active = ($img == 1 ? "active" : "");
                ?>
                        <li class="radius transition <?= $active; ?> j_gallery_item">
                            <img src="<?= $configBase; ?>/Uploads/products/16-<?= $img; ?>.jpg" alt="" title=""/>
                        </li>
                <?php
                    }
                ?>
            </ul>

            <div class="main_product_cover">
                <img  class="radius j_gallery_home" src="<?= $configBase; ?>/Uploads/products/16-1.jpg" alt="" title=""/>
            </div>
        </div>

        <div class="main_product_checkout">

            <p class="main_product_checkout_star"><?= str_repeat("<span class='icon-star icon-notext'></span>", 5); ?></p>
            <h1 class="main_product_checkout_title">Top Gonew c/ Bojo Removível Mármore Tule Média Sustentação - Estampado</h1>
            <p class="main_product_checkout_headline">Exercite-se com estilo usando o Top Gonew Mármore Detalhe Tule! Trazendo um design moderno e uma estampa exclusiva... <b class="j_anchor" data-anchor=".main_product_description">ver mais</b></p>
            <p class="main_product_checkout_price">R$ 59,00 <span>R$ 79,00</span></p>
            <p class="main_product_checkout_economy">Economia de R$ 20,00 (25%)</p>
            <p class="main_product_checkout_parcels">Em até de 4x R$ 14,75</p>

            <form class="main_product_checkout_cart">

                <h2>Selecione o <b>tamanho:</b></h2>

                <span class="radius transition">P</span>
                <span class="radius transition">M</span>
                <span class="radius transition">G</span>
                <span class="radius transition">GG</span>

                <div class="main_product_checkout_cart_act">
                    <div class="radius">
                    <span class="icon-plus icon-notext"></span>
                    <input type="text" value="1">
                    <span class="icon-minus icon-notext"></span>
                    </div>

                    <button class="btn icon-cart radius transition">COMPRAR</button>
                </div>
            </form>

            <aside class="main_product_checkout_related">
                <h2>Outras <b>cores:</b></h2>

                <div>
                    <a class="radius transition active"><img src="<?= $configBase; ?>/Uploads/products/16-1.jpg" alt="" title=""></a>
                    <a class="radius transition"><img src="<?= $configBase; ?>/Uploads/products/17-1.jpg" alt="" title=""></a>
                </div>
            </aside>
        </div>
    </article>
</div>

    <div class="main_product_description">
        <div class="container">
            ANCHOR!
        </div>
    </div>
</main>