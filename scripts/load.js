//listar json
function onload() {

    /*Teste 1*/

    /*objeto XMLHttpRequest */
    /*Properties                                    methods */
    //.withCredentials  //.ontimeout                //.open*
    //.upload           //.onreadystatechange*      //.send*
    //.UNSENT           //.onprogress               //.removeEventListener
    //.timeout          //.onloadstart              //.overrideMimeType
    //.statusText       //.onloadend                //.setRequestHeader
    //.status*          //.onload                   //.msCachingEnabled
    //.responseXML      //.onerror                  //.getResponseHeader
    //.responseURL      //.onabort                  //.getAllResponseHeaders
    //.responseType     //.msCaching                //.dispatchEvent
    //.responseText*    //.LOADING                  //.addEventListener
    //.response         //.HEADERS_RECEIVED         //.abort
    //.readyState*      //.DONE
    //.OPENED             

    /*
    var xmlhttp = new XMLHttpRequest();
    var url = "produtos.txt";
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
    }*/
    /*Teste2*/

    //const path = "https://hackbras.github.io/novacasadapiscina/scripts/produtos.txt";
    var namePage = getNamePage();
    const path = setJson(namePage);
    const xhttp = new XMLHttpRequest();
    xhttp.open("GET", path, true);

    xhttp.onreadystatechange = function() {
        if (this.status === 200) {
            if (this.readyState == 0) {
                console.log('NÃ£o iniciado');
            } else if (this.readyState == 1) {
                console.log('carregando');
            } else if (this.readyState == 2) {
                console.log('carregado');
            } else if (this.readyState == 3) {
                console.log('interativo');
            } else if (this.readyState == 4) {
                console.log('completo');
            }
        } else if (this.status === 404) {
            console.error('Page not found:' + path);
        } else {
            console.error('Error undefined');
        }

    }

    /* Create elements dynamically with ajax and json*/
    xhttp.onload = function() {

            const ourData = JSON.parse(xhttp.responseText);

            for (i = 0; i < ourData.length; i++) {

                //produto
                var namePage = getNamePage();
                var catalogo = setPage(namePage)
                var produto = CElement("article");
                //var catalogo =     

                AddChild(catalogo, produto);

                //produto 1
                var frete = CElement("span");
                if (ourData[i].frete == 0 || ourData[i].frete == "") {
                    addAttr(frete, 'class', 'store__product--no-freight');
                } else {
                    addAttr(frete, 'class', 'store__product--freight');
                }
                CText(frete, ourData[i].frete);
                AddChild(produto, frete);
                if (value, ourData[i].valor == "Solicitar Orçamento")
                    frete.style.visibility = "hidden";

                //produto 2           
                var desconto = CElement("span");
                if (desconto, ourData[i].desconto == 0 || desconto, ourData[i].desconto == "") {
                    addAttr(desconto, 'class', 'store__product--no-discount');
                } else {
                    addAttr(desconto, 'class', 'store__product--discount');
                }
                CText(desconto, ourData[i].desconto);
                AddChild(produto, desconto);
                if (value, ourData[i].valor == "Solicitar Orçamento")
                    desconto.style.visibility = "hidden";

                //produto 3
                var figure = CElement("figure");
                addAttr(figure, 'class', 'store__product--description');
                AddChild(produto, figure);

                //produto 3-1      
                var imagem = CElement("img");
                addAttr(imagem, 'src', ourData[i].imagem);
                addAttr(imagem, 'alt', ourData[i].imagem_alt);
                AddChild(figure, imagem);

                //produto 3-2
                var nome_produto = CElement("figcaption");
                CText(nome_produto, ourData[i].modelo);
                AddChild(figure, nome_produto);

                //produto 4
                var value = CElement("span");
                addAttr(value, "class", "store__product--values-or-status");
                CText(value, ourData[i].valor);
                AddChild(produto, value);

                //produto 5  
                var botton_detalhe = CElement("a");
                addAttr(botton_detalhe, "class", "store__product--details");
                addAttr(botton_detalhe, "href", "index.php?pagina=includes/store/product-description.php");
                AddChild(produto, botton_detalhe);

                //produto 5-1
                var input_detalhe = CElement("input");
                addAttr(input_detalhe, "type", "submit");
                addAttr(input_detalhe, "value", "DETALHES");
                AddChild(botton_detalhe, input_detalhe);
                if (value, ourData[i].valor == "Solicitar Orçamento")
                    input_detalhe.style.visibility = "hidden";

                //produto 6
                var botton_comprar = CElement("a");
                addAttr(botton_comprar, "class", "store__product--to-buy");
                addAttr(botton_comprar, "href", "index.php?pagina=includes/store/product-store-car.php");
                AddChild(produto, botton_comprar);

                //produto 6-1
                var input_comprar = CElement("input");
                addAttr(input_comprar, "type", "submit");
                addAttr(input_comprar, "value", "COMPRAR");
                AddChild(botton_comprar, input_comprar);
                if (value, ourData[i].valor == "Solicitar Orçamento")
                    input_comprar.style.visibility = "hidden";
                console.log("Foi criado o produto: " + ourData[i].modelo);
            }

            /*CElement(element)
            CText(text)
        
            AddChild(element,child)
            addAttr(element,attribute,value)
                                               
            document.getElementById("myDIV").appendChild(para);       */

            // Create a <p> element
            function CElement(element) {
                return document.createElement(element);
            }
            // Create a text node
            function CText(element, text) {
                var t = document.createTextNode(text);
                element.appendChild(t);
            }
            // Append  child
            function AddChild(element, child) {
                element.appendChild(child);
            }
            //create attibute
            function addAttr(element, attribute, value) {
                var att = document.createAttribute(attribute);
                att.value = value
                element.setAttributeNode(att);
            }

            /*
            <div class="store__products--articles">
            <article>
                <span class="store__product--freight">FRETE GRÁTIS</span>
                <span class="store__product--discount">-20</span>
                <figure class="store__product--description">
                    <img src="assets/img/produtos/tipos_de_piscinas/angra.png" alt="">
                    <figcaption>Nome do produto</figcaption>
                </figure>
                <span class="store__product--values-or-status">por: R$ xx.xxx,00 ou atÃ© 5x de R$ xx,00</span>
                <a class="store__product--details" href="index.php?pagina=includes/store/product-description.php">
                    <input type="submit" value="DETALHES">
                </a>
                <a class="store__product--to-buy" href="index.php?pagina=includes/store/product-store-car.php">                    
                    <input type="submit" value="COMPRAR">
                    </a>
            </article>*/

        }
        /*console.log("teste1");
        console.log("responseText teste2:"+xhttp.responseText);
        console.log("statusText teste3:"+xhttp.statusText);
        console.log("onerror teste4:"+xhttp.onerror);
        console.log("onabort teste5:"+xhttp.onabort);
        console.log("readyState teste6:"+xhttp.readyState);
        console.log("OPENED teste7:"+xhttp.OPENED);
        console.log("onreadystatechange teste8:"+xhttp.onreadystatechange);
        console.log("onloadstart teste9:"+xhttp.onloadstart);
        console.log("onloadend teste10:"+xhttp.onloadend);
        console.log("onload teste11:"+xhttp.onload);
        console.log("LOADING teste12:"+xhttp.LOADING);
        console.log("HEADERS_RECEIVED teste13:"+xhttp.HEADERS_RECEIVED);
        console.log("DONE teste14:"+xhttp.DONE);*/
    xhttp.send();

    function getNamePage() {
        //current page 
        var url = window.location.href;
        var start_char = url.lastIndexOf("/");
        var end_char = url.lastIndexOf(".");
        var set_path = url.substring(start_char + 1, end_char);
        return set_path;
    }

    function setPage(name_page) {
        switch (name_page) {
            //produtos
            case "product-store": //
                return document.getElementById('store__product--home');
                break;

            case "piscina-azulejo": //
                return document.getElementById('store__product--piscina-azulejo');
                break;

            case "piscina-vinil":
                return document.getElementById('store__product--piscina-vinil');
                break;

            case "piscina-fibra":
                return document.getElementById('store__product--piscina-fibra');
                break;

            case "sauna":
                return document.getElementById('store__product--sauna');
                break;

            case "spa":
                return document.getElementById('store__product--spa');
                break;

            case "aquecedor-eletrico":
                return document.getElementById('store__product--aquecedor-eletrico');
                break;

            case "aquecedor-gas":
                return document.getElementById('store__product--aquecedor-gas');
                break;

            case "produtos-outros":
                return document.getElementById('store__product--outros');
                break;

                //acessorios
            case "cascata-inox":
                return document.getElementById('store__acessorios--cascata-inox');
                break;

            case "cascata-fibra":
                return document.getElementById('store__acessorios--cascata-fibra');
                break;

            case "bombas":
                return document.getElementById('store__acessorios--bomba');
                break;

            case "filtros":
                return document.getElementById('store__acessorios--filtro');
                break;

            case "acessorios-outros": //
                return document.getElementById('store__acessorios--outros');
                break;

                //quimica
            case "limpeza-produtos": //
                return document.getElementById('store__quimica--limpeza-produtos');
                break;

            case "limpeza-kit-limpeza":
                return document.getElementById('store__quimica--limpeza-kit');
                break;

            case "quimica-outros":
                return document.getElementById('store__quimica--outros');
                break;

            default:
                break;
        }
        //produtos
    }

    function setJson(name_page) {
        switch (name_page) {
            //produtos
            case "product-store": //
                return "scripts/produtos.json";
                break;

            case "spa":
                return "scripts/produtos.json";
                break;

            case "sauna":
                return "scripts/produtos.json";
                break;

            case "produtos-outros":
                return "scripts/produtos.json";
                break;

            case "piscina-vinil":
                return "scripts/produtos.json";
                break;

            case "piscina-fibra":
                return "scripts/produtos.json";
                break;

            case "piscina-azulejo":
                return "scripts/produtos.json";
                break;

            case "aquecedor-gas":
                return "scripts/produtos.json";
                break;

            case "aquecedor-eletrico":
                return "scripts/produtos.json";
                break;

                //acessorios
            case "acessorios-outros":
                return "scripts/acessorios.json";
                break;

            case "cascata-inox":
                return "scripts/acessorios.json";
                break;

            case "cascata-fibra":
                return "scripts/acessorios.json";
                break;

            case "bombas":
                return "scripts/acessorios.json";
                break;

            case "filtros":
                return "scripts/acessorios.json";
                break;

                //quimica
            case "limpeza-kit-limpeza":
                return "scripts/quimica.json";
                break;

            case "limpeza-produtos":
                return "scripts/quimica.json";
                break;

            case "quimica-outros":
                return "scripts/quimica.json";
                break;

            default:
                break;
        }
        //produtos
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

/*Criar paginaÃ§Ã£o de produtos de acordo com a quantidade de produtos por pÃ¡gina*/