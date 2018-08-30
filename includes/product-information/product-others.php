<div class="product__container">
    <aside class="product__menu">
        
        <div class="product__menu--acabamento">
            <h3>Veja também</h3>
            <ul>
                <li><a href="index.php?pagina=includes/product-information/product-pool.php">Piscinas</a></li>
                <li><a href="index.php?pagina=includes/product-information/product-sauna.php">Sauna</a></li>
                <li><a href="index.php?pagina=includes/product-information/product-others-aquecedor-gas.php">Aquecedor à Gás</a></li>     
                <li><a href="index.php?pagina=includes/product-information/product-others-aquecedor-solar.php">Aquecedor Solar Elétrico</a></li>          
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
            <h1 class="product__default--title">OUTROS</h1> 
        <!---->
        <div  class="product__default--catalogo">
        
		<h2 class="catalogo">Catálogo</h2>
		<button class="collapsible">Casa de Máquinas</button>
		<div class="content" style="max-Height:100%">
		  <img src="assets/img/produtos/outros/catalogo/casaDeMaquinas.png" alt="Linha Spa">
		</div>
		<button class="collapsible contraste">Linha infantil / Escorregador</button>
		<div class="content" style="max-Height:100%">
		  <img src="assets/img/produtos/outros/catalogo/escorregador.png" alt="Linha Cobertura">
		</div>		
		<button class="collapsible">Kit Hidráulico</button>
		<div class="content" style="max-Height:100%">
		  <img src="assets/img/produtos/outros/catalogo/kitHidraulico.png" alt="Linha Spa">
		</div>
		<button class="collapsible contraste">Toboágua</button>
		<div class="content" style="max-Height:100%">
		  <img src="assets/img/produtos/outros/catalogo/toboagua.png" alt="Linha Cobertura">
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