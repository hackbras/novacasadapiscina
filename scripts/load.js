//listar json
function onload() {

    var xmlhttp = new XMLHttpRequest();
    var url = "https://hackbras.github.io/novacasadapiscina/scripts/produtos.txt";

    xmlhttp.
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            var myArr = JSON.parse(this.responseText);
            myFunction(myArr);
        }
    };
    xmlhttp.open("GET", url, true);
    xmlhttp.send();

    function myFunction(arr) {
        var out = "";
        var i;
        for (i = 0; i < arr.length; i++) {
            out += '<a href="' + arr[i].url + '">' +
                arr[i].display + '</a><br>';
        }
        document.getElementById("id01").innerHTML = out;
    }
}

//Menu options
//preencher options da:
//categoria

//servico

//tipo produto

//medida produto

//produto

//modelo produto

//informacoes tecnicas


/*Criar paginação de produtos de acordo com a quantidade de produtos por página*/

/* Criar elementos de produto dinamicamente pelo ajax com os dados em json

array.forEach(function(element) {
    
}, this);
<div class="store__products--articles">
<article>
    <span class="store__product--freight">FRETE GRÁTIS</span>
    <span class="store__product--discount">-20</span>
    <figure class="store__product--description">
        <img src="assets/img/produtos/tipos_de_piscinas/angra.png" alt="">
        <figcaption>Nome do produto</figcaption>
    </figure>
    <span class="store__product--values-or-status">por: R$ xx.xxx,00 ou até 5x de R$ xx,00</span>
    <a class="store__product--details" href="index.php?pagina=includes/store/product-description.php">
        <input type="submit" value="DETALHES">
    </a>
    <a class="store__product--to-buy" href="index.php?pagina=includes/store/product-store-car.php">                    
        <input type="submit" value="COMPRAR">
        </a>
</article>*/