<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>WdpShoes | Home</title>
    <!-- Chamar oque as pessoas vão buscar ou encontrar na sua solução -->

    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700;800&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="Assets/Styles/Boot.css" />
    <link rel="stylesheet" href="Assets/Styles/Icons.css" />
    <link rel="stylesheet" href="Themes/WdpShoes/Style.css" />
    <link rel="shortcut icon" href="Themes/WdpShoes/Images/favicon.png" />
</head>

<body>
    <header class="main_header">
        <div class="container">
            <div class="main_header_nav">
                <div class="main_header_nav_logo">
                    <a href="" title="WdpShoes | Home">
                        <img src="Themes/WdpShoes/Images/wdpshoes_logo_white.png" alt="WdpShoes | Home"
                            title="WdpShoes | Home" />
                    </a>
                </div>
                <div class="main_header_nav_search">
                    <form action="" method="post" class="radius">
                        <input type="text" name="s" id="" placeholder="Pesquisar na WdpShoes:" />
                        <button class="icon-search icon-notext transition"></button>
                    </form>
                </div>
                <div class="main_header_nav_menu">
                    <a href="" class="icon-cart icon-notext trasintion main_header_nav_menu_cart"><span>3</span></a>
                    <div class="main_header_nav_menu_user">
                        <a href="#" title="" class="icon-user main_header_nav_menu_user_a radius transition">Minha
                            Conta</a>
                        <nav class="radius">
                            <a href="#" title="">Meus Pedidos</a>
                            <a href="#" title="">Meus dados</a>
                            <a href="#" title="">Meus endereços</a>
                            <a href="#" title="">Sair</a>
                        </nav>
                    </div>
                </div>
            </div>
            <ul class="main_header_departments">
                <?php 
                    for ($i = 1; $i < 6; $i++){
                        ?>
            <li class="main_header_departments_li">Departamento <?= $i; ?>
            <ul class="main_header_departments_li_ul">
                <?php 
                    for ($ii = 1; $ii < 6; $ii++){
                        ?>
                <li class="main_header_departments_li_ul_li"><a href="#">Categoria <?= "{$i}/{$ii}"; ?></a></li>
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

    <main class="main_content">
        <h1>Olá Mundo! #BoraProgramar...</h1>
    </main>
    <footer class="main_footer"></footer>
</body>

</html>
