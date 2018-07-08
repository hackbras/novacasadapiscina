/*Carrossel */

function next_image(image) {
    switch (image) {
        case "piscina":
            document.querySelector(".home__carrossel").style.backgroundImage = "url('../assets/img/carrossel/piscina-carrossel1.jpg')";
        case "spa":
            document.querySelector(".home__carrossel").style.backgroundImage = "url('../assets/img/carrossel/spa.png')";
        case "aquecedor":
            document.querySelector(".home__carrossel").style.backgroundImage = "url('../assets/img/carrossel/aquecedor-solar-up-1196x600.png')";
            break;
        default:
            document.querySelector(".home__carrossel").style.backgroundImage = "url('../assets/img/carrossel/piscina-carrossel1.jpg')";
    }
}

/*Abas Acessórios*/
/*Exibir e ocultar acessórios*/

function show__element(id_element, option) {
    /*a=accessories and m=menu */
    document.getElementById(id_element).style.display = "block"

    if (option == 'a') {
        hide__accessories(id_element);
    }

}

function hide__accessories(id_element) {
    let hidro = "home__accessories--container-bicos-hidromassagem";
    let capa = "home__accessories--container-capa-piscina";
    let casamaquina = "home__accessories--container-casa-maquinas";
    let cascatainox = "home__accessories--container-inox";
    let cascatafibra = "home__accessories--container-cascata-fibra";
    let refletorled = "home__accessories--container-refletores-led";
    let bomba = "home__accessories--container-bomba";
    let filtro = "home__accessories--container-filtro";

    switch (id_element) {
        case "home__accessories--container-bicos-hidromassagem":
            hide__element(capa);
            hide__element(casamaquina);
            hide__element(cascatainox);
            hide__element(cascatafibra);
            hide__element(refletorled);
            //hide__element(bomba);
            hide__element(filtro);
            break;
        case "home__accessories--container-capa-piscina":
            hide__element(hidro);
            hide__element(casamaquina);
            hide__element(cascatainox);
            hide__element(cascatafibra);
            hide__element(refletorled);
            // hide__element(bomba);
            hide__element(filtro);
            break;
        case "home__accessories--container-casa-maquinas":
            hide__element(capa);
            hide__element(hidro);
            hide__element(cascatainox);
            hide__element(cascatafibra);
            hide__element(refletorled);
            //hide__element(bomba);
            hide__element(filtro);
            break;
        case "home__accessories--container-inox":
            hide__element(capa);
            hide__element(casamaquina);
            hide__element(hidro);
            hide__element(cascatafibra);
            hide__element(refletorled);
            //hide__element(bomba);            
            hide__element(filtro);
            break;
        case "home__accessories--container-cascata-fibra":
            hide__element(capa);
            hide__element(casamaquina);
            hide__element(cascatainox);
            hide__element(hidro);
            hide__element(refletorled);
            //hide__element(bomba);
            hide__element(filtro);
            break;
        case "home__accessories--container-refletores-led":
            hide__element(capa);
            hide__element(casamaquina);
            hide__element(cascatainox);
            hide__element(cascatafibra);
            hide__element(hidro);
            //hide__element(bomba);
            hide__element(filtro);
            break;
            /*case "home__accessories--container-bomba":
                hide__element(capa);
                hide__element(casamaquina);
                hide__element(cascatainox);
                hide__element(cascatafibra);
                hide__element(refletorled);
                hide__element(hidro);
                hide__element(filtro);
                break;*/
        case "home__accessories--container-filtro":
            hide__element(capa);
            hide__element(casamaquina);
            hide__element(cascatainox);
            hide__element(cascatafibra);
            hide__element(refletorled);
            //hide__element(bomba);
            hide__element(hidro);
            break;
        default:
            hide__element(capa);
            hide__element(casamaquina);
            hide__element(cascatainox);
            hide__element(cascatafibra);
            hide__element(refletorled);
            //hide__element(bomba);
            hide__element(filtro);
    }
}

function hide__element(id_element) {
    document.getElementById(id_element).style.display = "none";
}

function toggle__image(id_default, id_atual) {
    //onmouseover="toggle__image('product__default--caso-image_default',this.id)"
    let src_default = document.getElementById(id_default).src;
    let src_atual = document.getElementById(id_atual).src;

    document.getElementById(id_default).src = src_atual;
    document.getElementById(id_atual).src = src_default;
}

//Criar carrossel

//criar efeito sanfona menu da loja

//criar envio de e-mail para orcamentos, e de solicitação de notificações

//Criar modal página promoções


/*var url = "http://localhost:8080/api/v1/users";

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
xhr.send(json);*/

//atualiza json

//deleta json

/*criar itens frete, desconto, status, preço, ou orcamento do produto 
de acordo com os valores json dos produtos */