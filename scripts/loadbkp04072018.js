//listar json
//

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

/*Teste2*/

//const path = "https://hackbras.github.io/novacasadapiscina/scripts/produtos.txt";
//const path = "scripts/produtos.json";


const path_serv = "scripts/servicos.json";

function switchJson(id_page) {
    switch (id_page) {
        case "store__menu--product-piscina-azulejo":
            onload("scripts/produtos.json", "store__product--piscina-azulejo");
            break;
        case "store__menu--product-piscina-vinil":
            onload("scripts/produtos.json", "store__product--piscina-vinil");
            break;
        case "store__menu--product-piscina-fibra":
            onload("scripts/produtos.json", "store__product--piscina-fibra");
            break;
        case "store__menu--product-sauna":
            onload("scripts/produtos.json", "store__product--sauna");
            break;
        case "store__menu--product-spa":
            onload("scripts/produtos.json", "store__product--spa");
            break;
        case "store__menu--product-aquecedor-eletrico":
            onload("scripts/produtos.json", "store__product--aquecedor-eletrico");
            break;
        case "store__menu--product-aquecedor-gas":
            onload("scripts/produtos.json", "store__product--aquecedor-gas");
            break;
        case "store__menu--product-outros":
            onload("scripts/produtos.json", "store__product--outros");
            break;


            //Acessorios    
        case "store__menu--acessorios-cascata-inox":
            onload("scripts/acessorios.json", "store__acessorios--cascata-inox");
            break;
        case "store__menu--acessorios-cascata-fibra":
            onload("scripts/acessorios.json", "store__acessorios--cascata-fibra");
            break;
        case "store__menu--acessorios-bomba":
            onload("scripts/acessorios.json", "store__acessorios--bomba");
            break;
        case "store__menu--acessorios-filtro":
            onload("scripts/acessorios.json", "store__acessorios--filtro");
            break;
        case "store__menu--acessorios-outros":
            onload("scripts/acessorios.json", "store__acessorios--outros");
            break;

            //Quimica
        case "store__menu--quimica-limpeza-produtos":
            onload("scripts/quimica.json", "store__quimica--limpeza-produtos");
            break;
        case "store__menu--quimica-limpeza-kit":
            onload("scripts/quimica.json", "store__quimica--limpeza-kit");
            break;
        case "store__menu--quimica-outros":
            onload("scripts/quimica.json", "store__quimica--outros");
            break;
        default:
            alert("Página em Construção");
            break;
    }
}


function onload(path, id_catalogo) {

    //function getPath(path) { return path; }

    //function getElementCatalogo(id_catalogo) {
    //return document.getElementById(id_catalogo);    }

    var catalogo = document.getElementById(id_catalogo);

    const xhttp = new XMLHttpRequest();
    xhttp.open("GET", path, true);

    xhttp.send();

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
            alert('Page not found:' + path);
        } else {
            alert('Error undefined');
        }

    }

    /* Create elements dynamically with ajax and json*/
    xhttp.onload = function() {
        const ourData = JSON.parse(xhttp.responseText);

        for (i = 0; i < ourData.length; i++) {

            //produto
            var produto = CElement("article");
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
            console.log("figure criado: " + ourData[i].modelo);

            //produto 3-1      
            var imagem = CElement("img");
            addAttr(imagem, 'src', ourData[i].imagem);
            addAttr(imagem, 'alt', ourData[i].imagem_alt);
            AddChild(figure, imagem);
            console.log("img criado: " + ourData[i].modelo);

            //produto 3-2
            var nome_produto = CElement("figcaption");
            CText(nome_produto, ourData[i].modelo);
            AddChild(figure, nome_produto);
            console.log("nome produto criado do: " + ourData[i].modelo);

            //produto 4
            var value = CElement("span");
            addAttr(value, "class", "store__product--values-or-status");
            CText(value, ourData[i].valor);
            AddChild(produto, value);
            console.log("valor criado do: " + ourData[i].modelo);

            //produto 5  
            var botton_detalhe = CElement("a");
            addAttr(botton_detalhe, "class", "store__product--details");
            addAttr(botton_detalhe, "href", "index.php?pagina=includes/store/product-description.php");
            AddChild(produto, botton_detalhe);
            console.log("link detalhes criado do: " + ourData[i].modelo);

            //produto 5-1
            var input_detalhe = CElement("input");
            addAttr(input_detalhe, "type", "submit");
            addAttr(input_detalhe, "value", "DETALHES");
            AddChild(botton_detalhe, input_detalhe);
            if (value, ourData[i].valor == "Solicitar Orçamento")
                input_detalhe.style.visibility = "hidden";
            console.log("botão detalhes criado do: " + ourData[i].modelo);

            //produto 6
            var botton_comprar = CElement("a");
            addAttr(botton_comprar, "class", "store__product--to-buy");
            addAttr(botton_comprar, "href", "index.php?pagina=includes/store/product-store-car.php");
            AddChild(produto, botton_comprar);
            console.log("link comprar criado do: " + ourData[i].modelo);

            //produto 6-1
            var input_comprar = CElement("input");
            addAttr(input_comprar, "type", "submit");
            addAttr(input_comprar, "value", "COMPRAR");
            AddChild(botton_comprar, input_comprar);
            if (value, ourData[i].valor == "Solicitar Orçamento")
                input_comprar.style.visibility = "hidden";
            console.log("botão comprar criado do: " + ourData[i].modelo);
            alert("Produto "+i+"criado");

        }
        alert("etapa1");
    }

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