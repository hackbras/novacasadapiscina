<div class="product__container">
    <aside class="product__menu">
        
        <div class="product__menu--acabamento">
            <h3>Veja também</h3>
            <ul>
                <li><a href="index.php?pagina=includes/product-information/product-pool.php">Piscinas</a></li>
                <li><a href="index.php?pagina=includes/product-information/product-sauna.php">Sauna</a></li>
                <li><a href="index.php?pagina=includes/product-information/product-others-aquecedor-gas.php">Aquecedor à Gás</a></li>     
                <li><a href="index.php?pagina=includes/product-information/product-others-aquecedor-solar.php">Aquecedor Solar Elétrico</a></li>     
                <li><a href="index.php?pagina=includes/product-information/product-others.php">Outros</a></li>             
            </ul>
        </div>

        <div class="product__menu--acessorios">
            <h2>Loja</h2>
            <h3>Acessórios</h3>
            <ul>
                <!--<li><a href="index.php?pagina=includes/store/acessorios/refletores-led.php">Refletor Led</a></li>
                <li><a href="index.php?pagina=includes/store/acessorios/bicos-hidromassagem.php">Bicos de Hidromassagem</a></li>
                <li><a href="index.php?pagina=includes/store/acessorios/capa-piscina.php">Capa de Piscina</a></li>
                <li><a href="index.php?pagina=includes/store/acessorios/casa-maquinas.php">Casa de Máquinas</a></li>-->
                <li><a href="index.php?pagina=includes/store/acessorios/cascata-inox.php">Cascata Inox</a></li>
                <li><a href="index.php?pagina=includes/store/acessorios/cascata-fibra.php">Cascata de Fibra</a></li>
                <li><a href="index.php?pagina=includes/store/acessorios/bombas.php">Bomba de Água</a></li>
                <li><a href="index.php?pagina=includes/store/acessorios/filtros.php">Filtro</a></li>
                <li><a href="index.php?pagina=includes/store/acessorios/acessorios-outros.php">Outros acessórios</a></li>
            </ul>
            <h3>Química</h3>
            <ul>
                <li><a href="index.php?pagina=includes/store/quimica/limpeza-produtos.php">Produtos de Limpeza</a></li>
                <li><a href="index.php?pagina=includes/store/quimica/limpeza-kit-limpeza.php">Kit de limpeza</a></li>
                <li><a href="index.php?pagina=includes/store/quimica/quimica-outros.php">Outros produtos químicos</a></li>
            </ul>            
            <a class="label__black" href="index.php?pagina=includes/store/products/produtos-outros.php">Outros Proutos</a>
        </div>
    </aside>
    <section class="product__default">
            <h1 class="product__default--title">SPA</h1> 
        <div class="product__default--description">  
            <figure class="product__default--figure">
                <!--<img src="assets/img/produtos/spa/spa.png">-->
                <div class="product__default--image-spa"></div>
                <figcaption>                
                 <b>Hidroterapia:</b>
                Uma terapia muito usada em hospitais, profissionais da área, fisioterapeutas  e em SPAS totalmente  no mudo todo, é designada  de hidroterapia, que faz o uso da água para resguardar  e auxiliar no medicação  de doenças.

                <b>Descansa o corpo:</b> Um banho de banheira garante  vários benefícios bem como de aliviar  o corpo, o submersão  na água reduz o peso corpóreo  até 85%, os esguichos  possuem uma ação massageadora, que suaviza a pressão  nos nervos e nas juntas, contribuindo também para o alívio  dos músculos.

                <b>Relaxa a mente:</b> Não existe um lugar melhor  para fechar os olhos, libertar a mente, afinar  os sentidos e relaxar  do que um bom banho  de banheira. Esse lavagem  relaxa a mente e o físico, estando relaxado você liberta  os seus pensamentos, dá espaço  e tempo para que apareçam  boas e novas ideias. <b>Melhora o sono:</b>
                A imersão na água ao escurecer  ou no inicio da noite  é um horário certo  para o banho de banheira. Possuindo o efeito relaxante  que aclama as tensões, ao deitar você aproveitará  um sono mais profundo  e restaurador e ao despertar  notará que dormiu com mais facilidade. <b>Beneficia o relacionamento:</b>
                Atualmente sabemos e vemos  o quanto está difícil  ter tempo de qualidade  para dividir com o (a) companheiro  (a) as ocorrências do nosso  dia a dia. Uma banheira  cria uma perfeita oportunidade  para dialogar e sentir-se  mais próximo do (a) companheiro  (a).


                <b>Muito mais benefícios:</b>
                Ajuda a diminuir  o stress, minimiza as dores  musculares e das articulações, ameniza as dores da artrite, ajuda a controlar a diabete, ajuda no tratamento de transtornos  cardiovasculares e muitos outros  benefícios.</figcaption>
            </figure>
        </div>
	<!---->
        <div  class="product__default--catalogo">
        
		<h2 class="catalogo">Catálogo</h2>
		<button class="collapsible">Linha Spa</button>
		<div class="content" style="max-Height:465px">
		  <img src="assets/img/produtos/spa/catalogo/spa.png" alt="Linha Spa">
		</div>
		<button class="collapsible contraste">Linha Cobertura</button>
		<div class="content" style="max-Height:465px">
		  <img src="assets/img/produtos/spa/catalogo/cobertura.png" alt="Linha Cobertura">
		</div>		
	</div>
        <!---->

        </div>
        
        
    </section>
</div>


<script>
  var coll = document.getElementsByClassName("collapsible");
  var i;

  for (i = 0; i < coll.length; i++) {
    coll[i].addEventListener("click", function() {
      this.classList.toggle("active");
      var content = this.nextElementSibling;
      if (content.style.maxHeight){
        content.style.maxHeight = null;
      } else {
        content.style.maxHeight = content.scrollHeight + "px";
      } 
    });
  }
</script>