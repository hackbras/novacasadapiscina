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

    //const path = "https://hackbras.github.io/novacasadapiscina/scripts/produtos.txt";
    var namePage = getNamePage();
    const path = setJson(namePage);
    const xhttp = new XMLHttpRequest();
    xhttp.open("GET", path, true);

    xhttp.onreadystatechange = function() {
        if (this.status === 200) {
            if (this.readyState == 0) {
                console.log('Não iniciado');
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

            //se for da pagina y  
            //if (ourData[i].pagina == namePage) {
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
                //insert_json();
            //}
        }

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

    }

    xhttp.send();

    function getNamePage() {
        //current page 
        var url = window.location.href;
        var start_char = url.lastIndexOf("/");
        var end_char = url.lastIndexOf(".");
        var set_path = url.substring(start_char + 1, end_char);
        return set_path;
    }

    //criar cadastro de perguntas dinâmicamente pelo json com ajax

    //codigo pagseguro

    //cadastro json
    // Post data json


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
                return "scripts/data/produtos.json";
                break;

            case "spa":
                return "scripts/data/produtos__spa.json";
                break;

            case "sauna":
                return "scripts/data/produtos__sauna.json";
                break;

            case "produtos-outros":
                return "scripts/data/produtos__outros.json";
                break;

            case "piscina-vinil":
                return "scripts/data/produtos__piscina--vinil.json";
                break;

            case "piscina-fibra":
                return "scripts/data/produtos__piscina--fibra.json";
                break;

            case "piscina-azulejo":
                return "scripts/data/produtos__piscina--azulejo.json";
                break;

            case "aquecedor-gas":
                return "scripts/data/produtos__aquecedor--gas.json";
                break;

            case "aquecedor-eletrico":
                return "scripts/data/produtos__aquecedor--solar.json";
                break;

                //acessorios
            case "acessorios-outros":
                return "scripts/data/acessorios__outros.json";
                break;

            case "cascata-inox":
                return "scripts/data/acessorios__cascata--inox.json";
                break;

            case "cascata-fibra":
                return "scripts/data/acessorios__cascata--fibra.json";
                break;

            case "bombas":
                return "scripts/data/acessorios__bombas.json";
                break;

            case "filtros":
                return "scripts/data/acessorios__filtro.json";
                break;

                //quimica
            case "limpeza-kit-limpeza":
                return "scripts/data/quimica__limpeza--kit-limpeza.json";
                break;

            case "limpeza-produtos":
                return "scripts/data/quimica__limpeza--produtos-quimicos.json";
                break;

            case "quimica-outros":
                return "scripts/data/quimica__outros.json";
                break;

            default:
                break;
        }
        //produtos
    }
}

/*unction insert_json() {
    // Post a user
    var url = "scripts/data/produtos.json";

    var data = {};
    data.firstname = "John";
    data.lastname  = "Snow";
    var json = JSON.stringify(data);

    var xhr = new XMLHttpRequest();
    xhr.open("POST", url, true);
    xhr.setRequestHeader('Content-type','application/json; charset=utf-8');
    xhr.onload = function () {
        var users = JSON.parse(xhr.responseText);
        if (xhr.readyState == 4 && xhr.status == "201") {
            console.table(users);
        } else {
            console.error(users);
        }
        
    }
    xhr.send(json);
    var url = "scripts/produtos.json";

    var data = {};
    data.secao = "acessorios";
    data.pagina = "filtro";
    data.modelo_produto = "";
    data.modelo = "Filtro Dancor piscina DRF 12";
    data.valor = "Solicitar Orçamento";
    data.parcelamento = "";
    data.valor_parcelamento = "";
    data.frete = "";
    data.desconto = "";
    data.imagem = "assets/img/produtos/piscinas/formatos_de_piscinas/angra3.png";
    data.imagem_alt = "";
    data.un_estoque = "";
    data.observacao = "";
    data.nome_servico = "";
    data.descricao_servico = "";
    data.categoria = "";
    data.especificacoes = "";
    data.tipo_produto = "";
    data.produto = "filtro";
    data.capacidade_pessoas = "";
    data.litros = "";
    data.un_jatos_ar = "";
    data.voltagem = "";
    data.potencia_nominal = "";
    data.aquecedor = "";
    data.cumprimento_cabo = "";
    data.revestimento_externo = "";
    data.instalacao = "";
    data.descricao = "";
    data.projeto = "";
    data.nome_categoria = "";
    data.medida_produto = "";
    data.diametro_exterior = "";
    data.diametro_interior = "";
    data.altura = "";

    var json = JSON.stringify(data);

    var xhr = new XMLHttpRequest();
    xhr.open("POST", url, true);
    xhr.setRequestHeader('Content-type', 'application/json; charset=utf-8');

    xhr.onreadystatechange = function() {
        if (this.status === 200) {
            if (this.readyState == 0) {
                console.log('Não iniciado');
            } else if (this.readyState == 1) {
                console.log('carregando');
            } else if (this.readyState == 2) {
                //console.log(client.getResponseHeader("Content-Type"));
                console.log('carregado');
            } else if (this.readyState == 3) {
                console.log('interativo');
            } else if (this.readyState == 4) {
                console.log('completo');
            }
        } else if (this.status === 404) {
            console.error('Page not found:' + path);
        } else if (this.status === 201) {
            if (this.readyState == 0) {
                console.log('Não iniciado');
            } else if (this.readyState == 1) {
                console.log('carregando');
            } else if (this.readyState == 2) {
                console.log('carregado');
            } else if (this.readyState == 3) {
                console.log('interativo');
            } else if (this.readyState == 4) {
                console.log('completo');
            }
            console.error('Criado');
        }

    }

    xhr.onload = function() {
        var produtos = JSON.parse(xhr.responseText);
        if (xhr.readyState == 4 && xhr.status == "201") {
            console.log("Produto cadastrado");
            console.table(produtos);
        } else {
            console.error(produtos);
        }
    }
    xhr.onprogress = function(pe) {
        if (pe.lengthComputable) {
            console.log("value:" + pe.loaded + "de:" + pe.total);
        }
    }
    xhr.send(json);
    console.log("Read state:" + xhr.readyState + " status: " + xhr.status);
}*/
/*
Event name	          Interface	Dispatched when…
readystatechange	      Event	The readyState attribute changes value, except when it changes to UNSENT.
loadstart	      ProgressEvent	The request starts.
progress	      ProgressEvent	Transmitting data.
abort	          ProgressEvent	The request has been aborted. For instance, by invoking the abort() method.
error	          ProgressEvent	The request has failed.
load	          ProgressEvent	The request has successfully completed.
timeout	          ProgressEvent	The author specified timeout has passed before the request completed.
loadend	          ProgressEvent	The request has completed (either in success or failure).
*/
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