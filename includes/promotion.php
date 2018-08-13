<div class="promotion">
    <section class="promotion__banner--outline">
        <div class="promotion__banner--base">
            <img class="promotion__banner--image-tree" src="assets/img/coqueiros.png" alt="">
            <div class="promotion__banner--title">
                <h1>Promoções</h1>
                <h2>Fique por dentro de nossas promoções e descontos</h2>
            </div>
            <img class="promotion__banner--image-sun" src="assets/img/gifs/sun2.gif" alt="">
        </div>
    </section>

    <h2 class="promotion__title">Promoções em Andamento</h2>

    <section class="promotion__one">        

        <h3 class="promotion__one--title">Setembro</h3>
        <h2 class="promotion__one--sutitle">Inverno</h2>
        <figure class="promotion__one--body">
            <img class="promotion__one--image" src="assets/img/inverno2.png" alt="">
            <div class="promotion__one--description">
                <figcaption> 
                  <p>A vantagem de se construir  no inverno está no custo  da obra,
                    alguns tipos  de piscinas, por exemplo, fica de 5% a 15% mais baratas. claro que o desconto pode alternar  de região para região. 
                    O valor pode ser parcelado. Ainda pode-se aproveitar e adquirir  tambem os acessórios da piscina, como o filtro, a bomba, o sistema de iluminação  e de limpeza.
                  </p>
                 <p>
                Neste época  de pouca chuva, finalizar  a obra sem os imprevistos  das águas que atrasam  o término da construção  é outra vantagem. 
                Sem chuva, uma piscina pode ficar  pronta em menos de um mês. Mas, se for um Projeto  mais sofisticado, a obra pode durar  mais tempo.
                </p>
                 <p>
                O momento inclusive  é oportuno para negociar  com calma e atenção. Inclusive, investir num projeto  de piscina com mais conforto  e maior 
                opção de lazer: pode ser um spa, hidromassagem, sauna e iluminação. Tudo isso é possível! Se  começar o investimento já no inverno, terá tempo de sobra  até o verão para planejar  e executar a obra sem deixar  nada 
                para ser feito  no calor. As mais bonitas  piscinas são construídas com antecedência  e planejamento. 
                E o retorno  financeiro é maior. Uma casa com uma piscina  bem projetada 
                pode se valorizar  em até 20%. Investir  na área de lazer  sem planejamento pode causar  uma decepção 
                ao término, seja ela financeira, por não ter posto  no papel os valores  da compra e o gasto  final sair diferente do que se imaginou  
                ou, até mesmo, pelo fato de a piscina  não ter ficado da forma  como se previa, tudo devido a pressa. 
                </p>
                 <p>
                Bem, a dica é não perder  tempo, aproveite a nossa  promossão de inverno, é sem dúvida, a melhor época para tornar  o sonho real e mais completo. Mas atenção: 
                é importante  consultar um de nossos  consultores para que saiba  mais de todos os processos. Quando o verão chegar, a área toda ficará  prontinha e bem feita  para receber a família  e os amigos. 
                 </p>
                </figcaption>        
                <input type="submit" value="PARTICIPE">
            </div>
        </figure>
    </section>

    <section class="promotion__subscription" action="" method="post">
        <h2 class="promotion__subscription--form-title">Fique por dentro!</h2>
        <h4 class="promotion__subscription--form-subtitle">Inscreva-se para receber <b>descontos</b>, saber sobre <b>promoções</b> e saber sobre as nossas <b>novidades</b> em primeira mão</h4>
        <form class="promotion__subscription--form" action="" method="post">
            <input type="text" name="nome" placeholder="Nome:">
            <input type="text" name="email" placeholder="E-mail:">
            <input class="button-green" type="submit" value="Enviar">
        </form>
    </section>

    <section class="promotion__two">
        <h3 class="promotion__two--title">10 de Agosto</h3>
        <h2 class="promotion__two--subtitle">Dia das Crianças</h2>
        <figure class="promotion__two--body">
            <div class="promotion__two--description">
                <figcaption>   
                <p>
                Sol, piscina, brincadeiras e muita  diversão marcam o dia das crianças, pois, o que elas mais desejam  é poder jogar, brincar  ao ar livre e se divertir  o dia todo com os amiguinhos. À partir dos três anos de idade  já é possível realizar  atividades de recreação.
                Para as crianças  na idade de seis anos é o ideal  para que iniciem essas  brincadeiras.
                Essa é a faixa  etária indicada, por causa  do raciocínio e pela devida  característica de saber divertir-se  de maneira competitiva.
                </p><p>
                Mas é indispensável  sempre ter por próximo  um adulto proporcionando toda segurança  e diversão
                necessária, para que cada criança  possa viver da melhor  maneira esse dia e
                precavendo  acidentes desagradáveis.
                </p><p>
                Além do entretimento  que proporciona a criançada, a piscina também pode ser, por meio de brincadeiras, 
                um espaço para aperfeiçoar  algumas aptidões. Nela podem  ser desenvolvidas habilidades como a manejo  de objetos, percepção corporal, coordenação, e o equilíbrio, além de habilidades  cognitivas, que fazem parte  da formação da criança, como a distinção de cores  e quantidades, 
                e a adaptação  aquática, como respiração, mergulho, flutuação, deslize, saltos e movimentos. 
                </p><p>
                O feriado ensolarado acaba  também se tornando um momento  nostalgico para os adultos, ao ver as crianças  aproveitarem
                a mesma diversão  que tiveram quando pequenos. 
                </p><p>
                Então não perca  tempo e aproveite nossa  promoção exclusiva para o dia das crianças.
                </p>
                </figcaption>        
                <input type="submit" value="PARTICIPE">
            </div>
            <img class="promotion__two--image" src="assets/img/children-pool-party4.png" alt="">   
        </figure>
    </section>

</div>

<span class="promotion__modal"></span>
<?php  

	$email_destino="contato@novacasadapiscina.com";
	$nome=$_POST['nome'];
	$email_contato=$_POST['email'];
	

	if (isset($nome)&& isset($email_contato)
		&& mail($email_destino, "notification", "Solicitação de notificação","from:".$email_contato)){

	echo '<script>alert("'.$nome.'sua mensagem foi enviada com sucesso.");</script>';

	}

?>