<div class="services__container">
    <fieldset class="services__menu fieldset__gray">
        <legend  class="services__menu--title legend__green">Serviços</legend>
        <ul>
        <li><a href="#services__acabamento">Acabamento</a></li>
        <li><a href="#services__Impermeabilizacao">Impermeabilização</a></li>
        <li><a href="#services__remove">Remoção de Vazamentos</a></li>
        <li><a href="#services__manutencao">Manutenção de Piscinas</a></li>
        <li><a href="#services__restauracao">Restauração de Piscinas</a></li>
        <li><a href="#services__pintura">Pintura de Piscinas</a></li>
        </ul>
    </fieldset>

    <section class="services">
        <h1 class="services__main--title">Serviços</h1>

        <div class="services__articles">
            <article class="services__article services__article--left" id="services__acabamento">
                <h2 class="services__title">Acabamento</h2>
                <figure class="services__figure">
                <img class="services__imagem" src="assets/img/servicos/acabamento.jpg" alt="">
                <figcaption class="services__description">Fazemos todo o acabamento necessário em sua piscina. Enre em contato com um de nossos colaboradores ou solicite um orçamento.
                    <br>
                    <input class="button-gray" type="submit" value="Solicitar um orçamento" onclick="openModal('Acabamento')">
                </figcaption>
                </figure>
            
            </article>

            <article class="services__article services__article--right" id="services__Impermeabilizacao">
                <h2 class="services__title">impermeabilização</h2>
                <figure class="services__figure">
                <img class="services__imagem" src="assets/img/servicos/impermeabilizacao-piscina.jpg" alt="">
                <figcaption class="services__description">Refazemos impermeabilização de sua piscina. Entre em contato com um de nossos consultores e faça sua impermeabilização com quem entende.
                    <br>
                    <input class="button-white" type="submit" value="Solicitar um orçamento" onclick="openModal('Impermeabilização')">
                </figcaption>
                </figure>
            
            </article>

            <article class="services__article services__article--left" id="services__remove">
                <h2 class="services__title">Remoção de Vazamentos</h2>
                <figure class="services__figure">
                    <img class="services__imagem" src="assets/img/servicos/vazamento-piscina.JPG" alt="">
                    <figcaption class="services__description">
                        Fazemos remoção de vazamentos de Piscinas e SPA's.
                        <br>
                        <input class="button-gray" type="submit" value="Solicitar um orçamento" onclick="openModal('Remoção de Vazamentos')">
                    </figcaption>
                </figure>
            
            </article>
            
            <article class="services__article services__article--right" id="services__manutencao">
                <h2 class="services__title">Manutenção de Piscinas</h2>
                <figure class="services__figure">
                <img class="services__imagem" src="assets/img/servicos/manutencao-de-piscinas.jpg" alt="">
                <figcaption class="services__description">Fazemos todo o acabamento necessário em sua piscina. Enre em contato com um de nossos colaboradores ou solicite um orçamento.
                    <br>
                    <input class="button-white" type="submit" value="Solicitar um orçamento" onclick="openModal('Manutenção de Piscinas')">
                </figcaption>
                </figure>
            
            </article>

            <article class="services__article services__article--left" id="services__restauracao">
                <h2 class="services__title">Restauração de Piscinas</h2>
                <figure class="services__figure">
                <img class="services__imagem" src="assets/img/servicos/restauracao-piscinas.png" alt="">
                <figcaption class="services__description"> Faça a restauração de sua piscina conosco. Trabalhamos com todos os tipos de piscinas encontrados no mercado.  
                        <br>
                        <input class="button-gray" type="submit" value="Solicitar um orçamento" onclick="openModal('Restauração de Piscinas')">
                    </figcaption>
                </figure>
                
            </article>

            <article class="services__article services__article--right" id="services__pintura">
                <h2 class="services__title">Pintura de Piscinas</h2>
                <figure class="services__figure">
                <img class="services__imagem" src="assets/img/servicos/pintura-piscina.jpg" alt="">
                <figcaption class="services__description">Pinte sua piscina com quem entende e a deixe com o aspecto de nova.
                    <br>
                    <input class="button-white" type="submit" value="Solicitar um orçamento" onclick="openModal('Pintura de Piscinas')">
                </figcaption>
                </figure>
            
            </article>
        </div>

    </section>
</div>
 
<span class="services__main--modal">
    <section class="services__main--container"> 
        <span id="services__main--close" onclick="closeModal()">X</span>
        <h1 class="services__title" id="services__title" >ORÇAMENTO IMEDIATO</h1>
        <form class="services__form" action="" method="post">
            <input class="services__name text__green" type="text" name="nome" placeholder="Nome:">

            <input class="services__subjective  text__green"  type="text" name="assunto" placeholder="Assunto:">

            <input class="services__email  text__green"  type="text" name="email" placeholder="E-mail:">

            <textarea class="services__message  textarea__green" name="mensagem" placeholder="Escreva sua mensagem aqui:">   </textarea>

            <input class="services__phone  text__green"  type="text" name="telefone" placeholder="Telefone:">

            <div class="services__char" >
                <span class="services__char--count" >0 de 250</span>
            </div>        

            <div class="services__bar">
                <input class="services__bar--submit button-green"  type="submit" value="enviar">
            </div>
        </form>
    </section>
</span>

<?php
	function zerar(){	
		unset($email_destino);
		unset($nome);
		unset($email_contato);
		unset($assunto);
		unset($mensagem);
        unset($telefone);
	}

	$email_destino="hackbras@outlook.com";
	$nome=$_POST['nome'];
	$email_contato=$_POST['email'];
	$assunto=$_POST['assunto'];
	$mensagem=$_POST['mensagem'];
	$telefone=$_POST['telefone'];

	if (isset($nome)&& isset($email_contato) && isset($mensagem)
		&& mail($email_destino,"Solicitação de orçamento" .$assunto, $mensagem." telefone".$telefone,"from:".$email_contato)){

	echo '<script>alert("'.$nome.'sua mensagem foi enviada com sucesso.");</script>';

	zerar();

	}
?>
<script>
    function closeModal() {
        document.querySelector('.services__main--modal').style.display='none';
    }
    function openModal(value) {
        document.querySelector('.services__main--modal').style.display='block';
        document.querySelector('.services__subjective ').value=value;
    }
</script>
