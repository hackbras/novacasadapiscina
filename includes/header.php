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
        <nav class="menu__contacts">   
            <a href="">contato@novacasadapiscina.com.br</a>
            <a href="">(31)3599-3764</a>
            <a href="">(31)9 9951-1854</a>
            <a href="">(31)9 9290-2814</a>
        </nav>
        <nav class="menu__main">   
            <a href="index.php?pagina=includes/product/product-pool.php">Piscina</a>
            <a href="index.php?pagina=includes/product/product-sauna.php">Sauna</a>
            <a href="index.php?pagina=includes/product/product-spa.php">Spa</a>
            <a href="index.php?pagina=includes/contact.php">Contatos</a>
            <a href="index.php?pagina=includes/about.php">Sobre</a>
            <a href="index.php?pagina=includes/faq.php">Dúvidas Frequêntes</a>
            <a href="index.php?pagina=includes/store/product-store.php">LOJA VIRTUAL</a>
            <a href="index.php?pagina=includes/promotion.php">PROMOÇÕES</a>
        </nav>
    </div>
</header>