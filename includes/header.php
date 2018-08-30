<?php @$_GET['pagina'];
    @$pagina = explode('/', $_GET['pagina']);
    $pgatual= strtolower(end($pagina));
?>

<header id="head" class="header">
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

    <a class="footer__top" href="#head" onclick="window.scrollTo(0,0)"></a>
    <div class="whatsappme whatsappme--left whatsappme--show whatsappme--dialog" data-settings="{&quot;show&quot;:true,&quot;telephone&quot;:&quot;5531984376997&quot;,&quot;message_text&quot;:&quot;Ol\u00e1, para agilizar seu atendimento clique na logo do WhatsApp e fale com um de nossos consultores!&quot;,&quot;message_delay&quot;:10,&quot;message_send&quot;:&quot;&quot;,&quot;mobile_only&quot;:false,&quot;position&quot;:&quot;left&quot;}">
		<div class="whatsappme__button" onmouseover="openWhatsapp()" onclick="openWin()">
			<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z" fill="currentColor"></path></svg>
		</div>
		<div class="whatsappme__box"  onmouseover="openWhatsapp()"  onmouseout="closeWhatsapp()">
			<header class="whatsappme__header">
				<svg xmlns="http://www.w3.org/2000/svg" width="120" height="28" viewBox="0 0 120 28"><path d="M117.2 17c0 .4-.2.7-.4 1-.1.3-.4.5-.7.7l-1 .2c-.5 0-.9 0-1.2-.2l-.7-.7a3 3 0 0 1-.4-1 5.4 5.4 0 0 1 0-2.3c0-.4.2-.7.4-1l.7-.7a2 2 0 0 1 1.1-.3 2 2 0 0 1 1.8 1l.4 1a5.3 5.3 0 0 1 0 2.3zm2.5-3c-.1-.7-.4-1.3-.8-1.7a4 4 0 0 0-1.3-1.2c-.6-.3-1.3-.4-2-.4-.6 0-1.2.1-1.7.4a3 3 0 0 0-1.2 1.1V11H110v13h2.7v-4.5c.4.4.8.8 1.3 1 .5.3 1 .4 1.6.4a4 4 0 0 0 3.2-1.5c.4-.5.7-1 .8-1.6.2-.6.3-1.2.3-1.9s0-1.3-.3-2zm-13.1 3c0 .4-.2.7-.4 1l-.7.7-1.1.2c-.4 0-.8 0-1-.2-.4-.2-.6-.4-.8-.7a3 3 0 0 1-.4-1 5.4 5.4 0 0 1 0-2.3c0-.4.2-.7.4-1 .1-.3.4-.5.7-.7a2 2 0 0 1 1-.3 2 2 0 0 1 1.9 1l.4 1a5.4 5.4 0 0 1 0 2.3zm1.7-4.7a4 4 0 0 0-3.3-1.6c-.6 0-1.2.1-1.7.4a3 3 0 0 0-1.2 1.1V11h-2.6v13h2.7v-4.5c.3.4.7.8 1.2 1 .6.3 1.1.4 1.7.4a4 4 0 0 0 3.2-1.5c.4-.5.6-1 .8-1.6.2-.6.3-1.2.3-1.9s-.1-1.3-.3-2c-.2-.6-.4-1.2-.8-1.6zm-17.5 3.2l1.7-5 1.7 5h-3.4zm.2-8.2l-5 13.4h3l1-3h5l1 3h3L94 7.3h-3zm-5.3 9.1l-.6-.8-1-.5a11.6 11.6 0 0 0-2.3-.5l-1-.3a2 2 0 0 1-.6-.3.7.7 0 0 1-.3-.6c0-.2 0-.4.2-.5l.3-.3h.5l.5-.1c.5 0 .9 0 1.2.3.4.1.6.5.6 1h2.5c0-.6-.2-1.1-.4-1.5a3 3 0 0 0-1-1 4 4 0 0 0-1.3-.5 7.7 7.7 0 0 0-3 0c-.6.1-1 .3-1.4.5l-1 1a3 3 0 0 0-.4 1.5 2 2 0 0 0 1 1.8l1 .5 1.1.3 2.2.6c.6.2.8.5.8 1l-.1.5-.4.4a2 2 0 0 1-.6.2 2.8 2.8 0 0 1-1.4 0 2 2 0 0 1-.6-.3l-.5-.5-.2-.8H77c0 .7.2 1.2.5 1.6.2.5.6.8 1 1 .4.3.9.5 1.4.6a8 8 0 0 0 3.3 0c.5 0 1-.2 1.4-.5a3 3 0 0 0 1-1c.3-.5.4-1 .4-1.6 0-.5 0-.9-.3-1.2zM74.7 8h-2.6v3h-1.7v1.7h1.7v5.8c0 .5 0 .9.2 1.2l.7.7 1 .3a7.8 7.8 0 0 0 2 0h.7v-2.1a3.4 3.4 0 0 1-.8 0l-1-.1-.2-1v-4.8h2V11h-2V8zm-7.6 9v.5l-.3.8-.7.6c-.2.2-.7.2-1.2.2h-.6l-.5-.2a1 1 0 0 1-.4-.4l-.1-.6.1-.6.4-.4.5-.3a4.8 4.8 0 0 1 1.2-.2 8.3 8.3 0 0 0 1.2-.2l.4-.3v1zm2.6 1.5v-5c0-.6 0-1.1-.3-1.5l-1-.8-1.4-.4a10.9 10.9 0 0 0-3.1 0l-1.5.6c-.4.2-.7.6-1 1a3 3 0 0 0-.5 1.5h2.7c0-.5.2-.9.5-1a2 2 0 0 1 1.3-.4h.6l.6.2.3.4.2.7c0 .3 0 .5-.3.6-.1.2-.4.3-.7.4l-1 .1a21.9 21.9 0 0 0-2.4.4l-1 .5c-.3.2-.6.5-.8.9-.2.3-.3.8-.3 1.3s.1 1 .3 1.3c.1.4.4.7.7 1l1 .4c.4.2.9.2 1.3.2a6 6 0 0 0 1.8-.2c.6-.2 1-.5 1.5-1a4 4 0 0 0 .2 1H70l-.3-1v-1.2zm-11-6.7c-.2-.4-.6-.6-1-.8-.5-.2-1-.3-1.8-.3-.5 0-1 .1-1.5.4a3 3 0 0 0-1.3 1.2v-5h-2.7v13.4H53v-5.1c0-1 .2-1.7.5-2.2.3-.4.9-.6 1.6-.6.6 0 1 .2 1.3.6.3.4.4 1 .4 1.8v5.5h2.7v-6c0-.6 0-1.2-.2-1.6 0-.5-.3-1-.5-1.3zm-14 4.7l-2.3-9.2h-2.8l-2.3 9-2.2-9h-3l3.6 13.4h3l2.2-9.2 2.3 9.2h3l3.6-13.4h-3l-2.1 9.2zm-24.5.2L18 15.6c-.3-.1-.6-.2-.8.2A20 20 0 0 1 16 17c-.2.2-.4.3-.7.1-.4-.2-1.5-.5-2.8-1.7-1-1-1.7-2-2-2.4-.1-.4 0-.5.2-.7l.5-.6.4-.6v-.6L10.4 8c-.3-.6-.6-.5-.8-.6H9c-.2 0-.6.1-.9.5C7.8 8.2 7 9 7 10.7c0 1.7 1.3 3.4 1.4 3.6.2.3 2.5 3.7 6 5.2l1.9.8c.8.2 1.6.2 2.2.1.6-.1 2-.8 2.3-1.6.3-.9.3-1.5.2-1.7l-.7-.4zM14 25.3c-2 0-4-.5-5.8-1.6l-.4-.2-4.4 1.1 1.2-4.2-.3-.5A11.5 11.5 0 0 1 22.1 5.7 11.5 11.5 0 0 1 14 25.3zM14 0A13.8 13.8 0 0 0 2 20.7L0 28l7.3-2A13.8 13.8 0 1 0 14 0z" fill="currentColor" fill-rule="evenodd"></path></svg>
				<div class="whatsappme__close">×</div>
			</header>
			<div class="whatsappme__message"  onmouseover="openWhatsapp()" >Olá, para agilizar seu atendimento clique na logo do WhatsApp e fale com um de nossos consultores!</div>
		</div>
	</div>
</header>

<script>
    function openWhatsapp(){
	  document.querySelector(".whatsappme__box").style.display="block";
	}
	function closeWhatsapp(){
		document.querySelector(".whatsappme__box").style.display="none";
	}
	function openWin() {
	    window.open("https://api.whatsapp.com/send?phone=5531999511854");
	}
	    window.addEventListener("scroll", function(event) {
        var scroll = this.scrollY;
        if(window.pageYOffset >= 100){
            document.querySelector(".header").style.height="50px";
            document.querySelector(".menu__contacts").style.display="none";
            document.querySelector(".menu__office-hour").style.display="none";
            document.querySelector(".header__logo").style.zoom="70%"
            document.querySelector(".header__logo").style.paddingTop="0%"
            document.querySelector(".menu").style.paddingTop="0%"
            document.querySelector(".menu__contacts--slim").style.display="block";
            document.querySelector(".footer__top").style.display="block";
        }else{
             document.querySelector(".header").style.height="120px";
            document.querySelector(".menu__contacts").style.display="block";
            document.querySelector(".menu__office-hour").style.display="block";
            document.querySelector(".header__logo").style.zoom="100%"
            document.querySelector(".header__logo").style.paddingTop="2%"
            document.querySelector(".menu").style.paddingTop="1%"
            document.querySelector(".menu__contacts--slim").style.display="none";
            document.querySelector(".footer__top").style.display="none";
        }
    });


</script>