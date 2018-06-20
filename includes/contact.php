<h1 class="contact__title">CONTATOS</h1>
<div class="contact">
    <section class="contact__item contact__email">
        <form name="formulario" method="post" class="contact__item contact__email--form">
            <input name="nome" class="text__green" type="text" placeholder="Nome:">
            <input name="email" class="text__green" type="text" placeholder="Email:">
            <input name="assunto" class="text__green" type="text" placeholder="Assunto:">
            <textarea name="mensagem"  class="text__green" placeholder="Escreva sua mensagem aqui." rows="20">   </textarea>
            <input class="button-white" type="submit" value="Enviar">
        </form>
    </section>


    <section class="contact__item contact__address">
        <div class="contact__item contact__address--data">
            <h3>Endereço</h3>
            <figure>
                <img src="" alt="">
                <figcaption>Av. São Paulo, 1431 - Centro (macaúbas) CEP 32400191 - IBIRITÈ/MG</figcaption>
            </figure>
            <figure>
                <img src="" alt="">
                <figcaption>contato@novacasadapiscina.com.br</figcaption>
            </figure>
            <figure>
                <img src="" alt="">
                <figcaption>(31)3599-3764</figcaption>
            </figure>
         </div>
    </section>

    <section class="contact__item contact__map">
        <div class="contact__item contact__map--elements">
            <iframe class="contact__map--image" width="400" height="250" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3748.7265572504834!2d-44.0717529850841!3d-20.019987986553396!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xa6bf32d14bd639%3A0xff543d3f94a513a9!2sAv.+S%C3%A3o+Paulo%2C+1431+-+Vila+dos+Pinheiros%2C+Ibirit%C3%A9+-+MG%2C+32400-000!5e0!3m2!1spt-PT!2sbr!4v1529158228892" frameborder="0" style="border:0" allowfullscreen></iframe>
            <buttom class="button-white" type="submit">Ver no Google</buttom>
         </div>
    </section>
</div>

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