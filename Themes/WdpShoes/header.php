<header class="main_header">
        <div class="container">
            <div class="main_header_nav">
                <div class="main_header_nav_logo">
                    <a href="<?= $configBase; ?>" title="WdpShoes | Home">
                        <img src="<?= $configThemeLink; ?>/Images/wdpshoes_logo_white.png" alt="WdpShoes | Home" title="WdpShoes | Home" />
                    </a>
                </div>
                <div class="main_header_nav_search">
                    <form action="" method="post" class="radius">
                        <input type="text" name="s" id="" placeholder="Pesquisar na WdpShoes:" />
                        <button class="icon-search icon-notext transition"></button>
                    </form>
                </div>
                <div class="main_header_nav_menu">
                    <a href="<?= "{$configBase}/checkout";?>" class="icon-cart icon-notext trasintion main_header_nav_menu_cart"><span>3</span></a>
                    <div class="main_header_nav_menu_user">
                        <a href="#" title="" class="icon-user main_header_nav_menu_user_a radius transition jtheme_login">Login</a>
                        <nav class="radius">
                            <a href="<?= "{$configBase}/conta";?>" title="">Meus Pedidos</a>
                            <a href="<?= "{$configBase}/conta/cadastro";?>" title="">Meus dados</a>
                            <a href="<?= "{$configBase}/conta/enderecos";?>" title="">Meus endereços</a>
                            <a href="<?= "{$configBase}";?>" title="">Sair</a>
                        </nav>
                    </div>
                </div>
            </div>
            <ul class="main_header_departments">
                <?php
                for ($i = 1; $i < 6; $i++) {
                ?>
                    <li class="main_header_departments_li">Departamento <?= $i; ?>
                        <ul class="main_header_departments_li_ul">
                            <?php
                            for ($ii = 1; $ii < 6; $ii++) {
                            ?>
                                <li class="main_header_departments_li_ul_li"><a href="<?= $configBase; ?>/categoria">Categoria <?= "{$i}/{$ii}"; ?></a></li>
                            <?php

                            }
                            ?>
                        </ul>
                    </li>
                <?php
                }
                ?>
            </ul>
        </div>
    </header>