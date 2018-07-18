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
            <a href="index.php?pagina=includes/faq.php">Dúvidas</a>
            <a href="index.php?pagina=includes/services.php">Serviços</a>
            <a id="menu__main--store" class="menu__main--store menu__main--tag" href="index.php?pagina=includes/store/products/produtos-outros.php" onmouseover="document.getElementById('menu__store--view').style.visibility = 'visible';" >LOJA VIRTUAL</a>
            <a class="menu__main--tag " href="index.php?pagina=includes/promotion.php">PROMOÇÕES</a>    
                <nav class="menu__contacts--slim">               
                    <a id="menu__office-hour--middle-week" href="">Segunda à sexta de 8h às 18h</a><br>
                    <a id="menu__office-hour--weekend" href="">Sábado de 8h às 12h</a><br>
                    <a id="menu__contacts--fixo" href="">(31)3599-3764</a>
                </nav>       
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

<script>

window.addEventListener("scroll", function(event) {
        var scroll = this.scrollY;
        //alert(scroll);
        if(window.pageYOffset >= 100){
            //alert('teste');
            document.querySelector(".header").style.height="50px";
            document.querySelector(".menu__contacts").style.display="none";
            document.querySelector(".menu__office-hour").style.display="none";
            document.querySelector(".header__logo").style.zoom="70%"
            document.querySelector(".header__logo").style.paddingTop="0%"
            document.querySelector(".menu").style.paddingTop="0%"
            document.querySelector(".menu__contacts--slim").style.display="block";
        }else{
             document.querySelector(".header").style.height="120px";
            document.querySelector(".menu__contacts").style.display="block";
            document.querySelector(".menu__office-hour").style.display="block";
            document.querySelector(".header__logo").style.zoom="100%"
            document.querySelector(".header__logo").style.paddingTop="2%"
            document.querySelector(".menu").style.paddingTop="1%"
            document.querySelector(".menu__contacts--slim").style.display="none";
        }
    });


</script>