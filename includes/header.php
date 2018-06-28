<?php @$_GET['pagina'];
    @$pagina = explode('/', $_GET['pagina']);
    $pgatual= strtolower(end($pagina));
?>

<header class="header">
    <div class="header__logo">
    <a href="index.php?pagina=includes/home.php">        
        <img class="logo" src="assets/img/logo3-1.png" alt="" >
    </a>
    </div>
    <div class="menu">
    <!--Colocar horário e dias de atendimento e endereço-->
        <nav class="menu__office-hour">   
            <a id="menu__office-hour--middle-week" href="">Segunda à sexta de 8h às 18h</a>
            <a id="menu__office-hour--weekend" href="">Sábado de 8h às 12h</a>
        </nav>
        <nav class="menu__contacts">   
            <a id="menu__contacts--email" href="">contato@novacasadapiscina.com.br</a>
            <a id="menu__contacts--fixo" href="">(31)3599-3764</a>
            <a id="menu__contacts--celular1" href="">(31)9 9951-1854</a>
            <a id="menu__contacts--celular2" href="">(31)9 9290-2814</a>
        </nav>
        <nav class="menu__main">   
            <a href="index.php?pagina=includes/product-information/product-pool.php">Piscina</a>
            <a href="index.php?pagina=includes/product-information/product-sauna.php">Sauna</a>
            <a href="index.php?pagina=includes/product-information/product-spa.php">Spa</a>
            <a href="index.php?pagina=includes/contact.php">Contatos</a>
            <a href="index.php?pagina=includes/about.php">Sobre</a>
            <a href="index.php?pagina=includes/faq.php">Dúvidas Frequêntes</a>
            <a id="menu__main--store" class="menu__main--store menu__main--tag" href="index.php?pagina=includes/store/product-store.php" onmouseover="document.getElementById('menu__store--view').style.visibility = 'visible';" >LOJA VIRTUAL</a>
            <a class="menu__main--tag " href="index.php?pagina=includes/promotion.php">PROMOÇÕES</a>           
        </nav>

        <article id="menu__store--view" onmouseleave="document.getElementById('menu__store--view').style.visibility = 'hidden';">
            <div class="menu__store">
                <nav class="menu__store--nav">
                    <a class="menu__store--nav-produto">Produtos</a>
                    <a class="menu__store--nav-acessorios">Acessórios</a>
                    <a class="menu__store--nav-servicos">Serviços</a>
                </nav>
                <div class="menu__store--options">
                    <ul class="menu__store--produto">
                        <li onmouseover="document.getElementsByClassName('menu__store--image')[0].src='http://localhost/novacasadapiscina/assets/img/gifs/sauna.gif';">Saunas</li>
                        <li>SPAS</li>
                        <li>Piscina</li>                        
                        <li>Aquecedor Solar Elétrico e Gás</li>                        
                        <li>Produtos Químicos</li>
                    </ul>
                    <ul class="menu__store--acessorios">
                        <li>Filtros</li>
                        <li>Bombas</li>
                        <li>Iluminação Led</li>
                        <li>Cascata</li>
                    </ul>
                    <ul class="menu__store--servico">
                        <li>Acabamento</li>
                        <li>Impermeabilização</li>
                    </ul>
                </div>
                <img class="menu__store--image" src="assets/img/gifs/sauna.gif">
            </div>
        </article>
    </div>
</header>