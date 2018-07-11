<section class="home">
    <section class="home__carrossel"> 
        <!--<h1>Piscinas de Vinil, Fibra e Azulejo</h1>-->  
        <figure>
            <img id="home__carrossel--image" class="home__carrossel--default-image" src="assets/img/carrossel/piscina-carrossel1.jpg" alt="">
            <figcaption  id="home__carrossel--description">Piscinas de Vinil, Fibra e Azulejo</figcaption>
        </figure>
        
        <a id="home__carrossel--buttom" href="index.php?pagina=includes/product-information/product-pool.php" class="button-green home__carrossel--submit">Saiba mais...</a>
        <ul class="home__carrossel--items">
            <li id="home__carrossel--piscina" onclick="next_image('home__carrossel--default-image')"></li>
            <li id="home__carrossel--aquecedor-agua-solar" onclick="next_image('home__carrossel--second-image')"></li>
            <li id="home__carrossel--spa" onclick="next_image('home__carrossel--third-image')"></li>
            <li id="home__carrossel--aquecedor-solar" onclick="next_image('home__carrossel--fourth-image')"></li>
        </ul>
    </section>

    <section class="home__galery">  
            <figure class="image__one image1">  
                <a href="index.php?pagina=includes/product-information/product-pool.php">
                <img src="assets/img/produtos/pronto/produto-piscina.png" class="home__galery--image" alt="Imagem de uma piscina grande, com uma área verde em volta, um sombrero ou tolde e niveis diferentes de profundidade.">
                <figcaption class="label__black">Piscina</figcaption>      
                </a>  
            </figure>
            <figure class="image__one image2">    
                <a href="index.php?pagina=includes/product-information/product-spa.php">
                <img src="assets/img/produtos/pronto/produto-spa.png" class="home__galery--image" alt="Imagem de um SPA moderno com uma decoração exótica de bambus e algumas plantas.">
                <figcaption class="label__black">SPA</figcaption>      
                </a>  
            </figure>
            <figure class="image__two image3">    
                <a href="index.php?pagina=includes/product-information/product-others-aquecedor-gas.php">
                <img src="assets/img/produtos/pronto/produto-aquecimento-gas.png" class="home__galery--image" alt="Imagem de um equipamento moderno de aquecimento a Gás.">
                <figcaption class="label__black">Aquecimento a Gás</figcaption>      
                </a>  
            </figure>
            <figure class="image__two image4">    
                <a href="index.php?pagina=includes/product-information/product-others-aquecedor-solar.php">  
                <img src="assets/img/produtos/pronto/produto-aquecedor-solar.PNG" class="home__galery--image" alt="Imagem de painéis solares de um aquecedor solar convencional.">
                <figcaption class="label__black">Aquecedor Solar</figcaption>      
                </a>
            </figure>
            <figure class="image__two image5">    
                <a href="index.php?pagina=includes/product-information/product-sauna.php">
                <img src="assets/img/produtos/pronto/produto-sauna.png" class="home__galery--image" alt="Kit completo para Sauna, com todos os equipamentos e máquinário necessário.">
                <figcaption class="label__black">Aparelho para Sauna</figcaption>      
                </a>  
            </figure>
            <figure class="image__three image6">    
                <a href="index.php?pagina=includes/store/products/limpeza-kit-limpeza.php">
                <img src="assets/img/produtos/pronto/produto-kit-limpeza-piscina.png" class="home__galery--image" alt="Imagem de um kit de limpeza para piscinas.">
                <figcaption class="label__black">Kit de Limpeza</figcaption>      
                </a>  
            </figure>
            <figure class="image__three image7">        
                <a href="index.php?pagina=includes/store/products/espreguicadeira.php">
                <img src="assets/img/produtos/pronto/produto-cadeira-espreguicadeira.png" class="home__galery--image" alt="Imagem com cadeira espreguiçadeira moderna de cor laranja.">
                <figcaption class="label__black">Espreguiçadeira</figcaption>      
                </a>  
            </figure>
    </section>

    <div class="home__subscription">   
        <h1 class="home__subscription--title">Fique por dentro!</h1>
        <h2 class="home__subscription--subtitle">Inscreva-se para receber <b>descontos</b>, saber sobre <b>promossões</b> e saber sobre as nossas <b>novidades</b> em primeira mão</h2>
        <form class="form" action="">
            <input class="form-text text__green" type="text" placeholder="Nome:">

            <input class="form-text text__green"  type="text" placeholder="E-mail ou Telefone:">

            <input class="form-submit button-white" type="submit" value="enviar">
        </form>
    </div>  

    <section class="home__accessories">   
        <div class="home__accessories--title">
            <h1>Conheça nossos Acessórios</h1>
            <h3>Saiba mais sobre nossos acessórios para sua piscina, sauna ou spa.</h3>
        </div>

        <nav class="home__accessories--menu">   
            <a class="home__accessories--menu-bicos-hidromassagem" href="" onmouseover="show__element('home__accessories--container-bicos-hidromassagem','a')" >Bicos de Hidromassagem</a>
            <a class="home__accessories--menu-capa-piscina" href="" onmouseover="show__element('home__accessories--container-capa-piscina','a')" >Capa de piscina</a>
            <a class="home__accessories--menu-casa-maquinas" href="" onmouseover="show__element('home__accessories--container-casa-maquinas','a')" >Casa de Máquinas</a>
            <a class="home__accessories--menu-inox" href="" onmouseover="show__element('home__accessories--container-inox','a')" >Cascata Inox</a>
            <a class="home__accessories--menu-cascata-fibra" href="" onmouseover="show__element('home__accessories--container-cascata-fibra','a')" >Cascata de Fibra</a>
            <a class="home__accessories--menu-refletores-led" href="" onmouseover="show__element('home__accessories--container-refletores-led','a')" >Refletores de Led</a>
            <!--<a class="home__accessories--menu-bomba" href="" onmouseover="show__element('home__accessories--container-bomba','a')" >Bomba</a>-->
            <a class="home__accessories--menu-filtro" href="" onmouseover="show__element('home__accessories--container-filtro','a')" >Filtro e bomba</a>
        </nav>
        
        <div class="home__accessories--container">
            <article id="home__accessories--container-bicos-hidromassagem">
                <div id="home__accessories--content-bicos-hidromassagem" class="home__accessories--text">
                    <div class="home__accessories--image" >        
                        <img src="assets/img/acessorios/prontos/bicos-jato-de-hidromassagem.png" alt="" width="220px">
                    </div>

                    <p class="home__accessories--description">
                        Dispositivo de Hidromassagem para Piscinas, Banheiras e spa.    
                    </p>
                    <a href="index.php?pagina=includes/store/acessorios/bicos-hidromassagem.php" class="button-green home__accessories--submit">Saiba mais...</a>
                </div>
            </article>

             <article id="home__accessories--container-capa-piscina" >
                <div id="home__accessories--content-capa-piscina" class="home__accessories--text">
                <div class="home__accessories--image" >        
                    <img src="assets/img/acessorios/prontos/capa_pra-piscina.png" alt="" width="220px">
                </div>

                <p class="home__accessories--description">
                    Para proteger a água da piscina de toda sujeira exterior. Resistentes em caso de quedas acidentais, evita a proliferação de algas, evitando que a água da piscina fique verde, economizando produtos químicos em seu tratamento.
                </p>
                <a href="index.php?pagina=includes/store/acessorios/capa-piscina.php" class="button-green home__accessories--submit">Saiba mais...</a>
                </div>
            </article>

             <article id="home__accessories--container-casa-maquinas">
                <div id="home__accessories--content-casa-maquinas" class="home__accessories--text">
                <div class="home__accessories--image" >        
                    <img src="assets/img/acessorios/prontos/casa-de-maquinas.png" alt="" width="220px">
                </div>

                <p class="home__accessories--description">
                    Escolha entre uma casa de máquinas de alvenaria sob medida, ou uma casa de máquinas de Fibra com as medidas definidas de acordo com o modelo.
                </p>
                <a href="index.php?pagina=includes/store/acessorios/casa-maquinas.php" class="button-green home__accessories--submit">Saiba mais...</a>
                </div>
            </article>

             <article id="home__accessories--container-inox">
                <div id="home__accessories--content-Inox" class="home__accessories--text">
                <div class="home__accessories--image" >        
                    <img src="assets/img/acessorios/prontos/cascata-inox.png" alt="" width="220px">
                </div>

                <p class="home__accessories--description">

Diversão para toda a família, com design moderno e material inoxidável, valoriza, decora e embeleza sua área de lazer. Todos vão te elogiar pelo maravilhoso investimento.   
                </p>
                <a href="index.php?pagina=includes/store/acessorios/cascata-inox.php" class="button-green home__accessories--submit">Saiba mais...</a>
                </div>
            </article>

             <article id="home__accessories--container-cascata-fibra">
                <div id="home__accessories--content-cascata-fibra" class="home__accessories--text">
                <div class="home__accessories--image" >        
                    <img src="assets/img/acessorios/prontos/cascata-fibra-bico-de-pato.png" alt="" width="220px">
                </div>

                <p class="home__accessories--description">
                    As cascatas agem na oxigenação da água o que auxilia no tratamento.
Sinta a relaxante massagem provocada pela sua queda d'agua.  
                </p>
                <a href="index.php?pagina=includes/store/acessorios/cascata-fibra.php" class="button-green home__accessories--submit">Saiba mais...</a>
                </div>
            </article>

             <article id="home__accessories--container-refletores-led">
                <div id="home__accessories--content-refletores-led" class="home__accessories--text">
                <div class="home__accessories--image" >        
                    <img src="assets/img/acessorios/prontos/refletores-de-led-pra-piscina.png" alt="" width="220px">
                </div>

                <p class="home__accessories--description">
                    Sendo perfeita para quem busca por opções para deixar o seu ambiente de piscina ainda mais sofisticado, a Luz de Led para Piscina é ideal para gerar belos efeitos na água, 
                    tornando o ambiente mais agradável. Além de deixar o local muito mais elegante.   
                </p>
                <a href="index.php?pagina=includes/store/acessorios/refletores-led.php" class="button-green home__accessories--submit">Saiba mais...</a>
                </div>
            </article>

             <!--<article id="home__accessories--container-bomba">
                <div id="home__accessories--content-Bomba" class="home__accessories--text">
                <div class="home__accessories--image" >        
                    <img src="assets/img/acessorios/prontos/bomba.png" alt="" width="220px">
                </div>

                <p class="home__accessories--description">
                    Ter a água de sua piscina limpa e purificada faz toda a diferença na qualidade do lazer de sua família. E para isso, é de suma importância você contar com uma bomba de qualidade. A Bomba para Piscina 3cv BM-300 é um produto muito eficiente e prático, que purifica a água de sua piscina com muita qualidade e torna os momentos de lazer de sua família muito mais agradáveis.   
                </p>
                <a href="index.php?pagina=includes/store/acessorios/bombas.php" class="button-green home__accessories--submit">Saiba mais...</a>
                </div>
            </article>-->

             <article id="home__accessories--container-filtro">
                <div id="home__accessories--content-filtro" class="home__accessories--text">
                <div class="home__accessories--image" >        
                    <img src="assets/img/acessorios/prontos/filtro-pra-piscina1.png" alt="" width="220px">
                </div>

                <p class="home__accessories--description">
                    Ter a água de sua piscina limpa e purificada faz toda a diferença na qualidade do lazer de sua família. E para isso, é de suma importância você contar com uma bomba de qualidade. A Bomba para Piscina é um produto muito eficiente e prático, que purifica a água de sua piscina com muita qualidade e torna os momentos de lazer de sua família muito mais agradáveis.   
                </p>
                <a href="index.php?pagina=includes/store/acessorios/filtros.php" class="button-green home__accessories--submit">Saiba mais...</a>
                </div>
            </article>
        </div>
    </section> 

    <div class="home__subscription">   
        <h1 class="home__subscription--title">Inscreva-se</h1>
        <h2 class="home__subscription--subtitle">Inscreva-se para receber <b>descontos</b>, saber sobre <b>promossões</b> e saber sobre as nossas <b>novidades</b> em primeira mão</h2>
        <form class="form" action="">
            <input class="form-text text__green" type="text" placeholder="Nome:">

            <input class="form-text text__green"  type="text" placeholder="E-mail ou Telefone:">

            <input class="form-submit button-white" type="submit" value="enviar">
        </form>
    </div>  

    <section class="orcamento"> 
        <h1 class="orcamento__title" >ORÇAMENTO IMEDIATO</h1>
        <form class="orcamento__form"  action="">
            <input class="orcamento__name text__green" type="text" placeholder="Nome:">

            <input class="orcamento__subjective  text__green"  type="text" placeholder="Assunto:">


            <input class="orcamento__email  text__green"  type="text" placeholder="E-mail:">

            <textarea class="orcamento__message  textarea__green" placeholder="Escreva sua mensagem aqui:">   </textarea>

            <input class="orcamento__phone  text__green"  type="text" placeholder="Telefone:">

            <div class="orcamento__char" >
                <span class="orcamento__char--count" >0 de 250</span>
            </div>        

            <div class="orcamento__bar">
                <input class="orcamento__bar--submit button-green"  type="submit" value="enviar">
            </div>
        </form>
    </section>
</section>

<?php



	function zerar(){		

		unset($email_destino);

		unset($nome);

		unset($email_contato);

		unset($assunto);

		unset($mensagem);

	}



	$email_destino="contato@novacasadapiscina.com.br";

	$nome=$_POST['nome'];

	$email_contato=$_POST['email'];

	$assunto=$_POST['assunto'];

	$mensagem=$_POST['mensagem'];

	

	if (isset($nome)&& isset($email_contato) && isset($mensagem)

		&& mail($email_destino, $assunto, $mensagem,"from:contato@novacasadapiscina.com.br")){

	echo '<script>alert("'.$nome.'sua mensagem foi enviada com sucesso.");</script>';

	zerar();

	}



?>