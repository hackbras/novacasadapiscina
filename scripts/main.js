function set_image() {

    var image = document.getElementById("home__carrossel--image");

    switch (image.class) {
        case "home__carrossel--default-image":
            next_image("home__carrossel--second-image");
            break;

        case "home__carrossel--second-image":
            next_image("home__carrossel--third-image");
            break;

        case "home__carrossel--third-image":
            next_image("home__carrossel--fourth-image");
            break;

        case "home__carrossel--fourth-image":
            next_image("home__carrossel--default-image");
            break;
    }
    var t = setTimeout(function() {
        set_image()
    }, 5000);

}
/*
function myFunction() {
	alert('teste');
    setTimeout(function(){ myFunction() ; }, 3000);
}
*/
function setStyleItemCarrossel(id_element) {
    var element = document.getElementById(id_element);

    switch (id_element) {
        case "home__carrossel--piscina":
            element.style.backgroundColor = "#757575";
            document.getElementById("home__carrossel--aquecedor-agua-solar").style.backgroundColor = "#fff";
            document.getElementById("home__carrossel--aquecedor-solar").style.backgroundColor = "#fff";
            document.getElementById("home__carrossel--spa").style.backgroundColor = "#fff";
            /*document.getElementById("home__carrossel--aquecedor-sauna").style.backgroundColor = "#fff";
            document.getElementById("home__carrossel--aquecedor-gas").style.backgroundColor = "#fff";*/

            break;

        case "home__carrossel--aquecedor-agua-solar":
            element.style.backgroundColor = "#757575";
            document.getElementById("home__carrossel--aquecedor-solar").style.backgroundColor = "#fff";
            document.getElementById("home__carrossel--piscina").style.backgroundColor = "#fff";
            document.getElementById("home__carrossel--spa").style.backgroundColor = "#fff";
            /*document.getElementById("home__carrossel--aquecedor-sauna").style.backgroundColor = "#fff";
            document.getElementById("home__carrossel--aquecedor-gas").style.backgroundColor = "#fff";*/

            break;

        case "home__carrossel--spa":
            element.style.backgroundColor = "#757575";
            document.getElementById("home__carrossel--piscina").style.backgroundColor = "#fff";
            document.getElementById("home__carrossel--aquecedor-solar").style.backgroundColor = "#fff";
            document.getElementById("home__carrossel--aquecedor-agua-solar").style.backgroundColor = "#fff";
            /*document.getElementById("home__carrossel--aquecedor-sauna").style.backgroundColor = "#fff";
            document.getElementById("home__carrossel--aquecedor-gas").style.backgroundColor = "#fff";*/

            break;

        case "home__carrossel--aquecedor-solar":
            element.style.backgroundColor = "#757575";
            document.getElementById("home__carrossel--piscina").style.backgroundColor = "#fff";
            document.getElementById("home__carrossel--aquecedor-agua-solar").style.backgroundColor = "#fff";
            document.getElementById("home__carrossel--spa").style.backgroundColor = "#fff";
            /*document.getElementById("home__carrossel--aquecedor-sauna").style.backgroundColor = "#fff";
            document.getElementById("home__carrossel--aquecedor-gas").style.backgroundColor = "#fff";*/

            break;
    }
}

function next_image(class_image) {
    //verificar o atual id
    var image = document.getElementById("home__carrossel--image");
    var descricao = document.getElementById("home__carrossel--description");
    var buttom = document.getElementById("home__carrossel--buttom");


    //pegar o id do parametro e colocar a imagem no id atual de acordo com o parametro
    switch (class_image) {
        case "home__carrossel--default-image":
            image.src = "assets/img/carrossel/piscina-carrossel1.jpg";
            image.class = "home__carrossel--default-image";
            descricao.innerHTML = "Piscinas de Vinil, Fibra e Azulejo";
            buttom.href = "index.php?pagina=includes/product-information/product-pool.php";
            setStyleItemCarrossel("home__carrossel--piscina");
            break;

            //aquecedor de água solar
        case "home__carrossel--second-image":
            image.src = "assets/img/carrossel/aquecedor-solar-up-1196x600.png";
            image.class = "home__carrossel--second-image";
            descricao.innerHTML = "Aquecedor de água solar";
            buttom.href = "index.php?pagina=includes/product-information/product-others-aquecedor-solar.php";
            setStyleItemCarrossel("home__carrossel--aquecedor-agua-solar");
            break;

        case "home__carrossel--third-image":
            image.src = "assets/img/carrossel/spa.png";
            image.class = "home__carrossel--third-image";
            descricao.innerHTML = "SPA e banheira de Hidromassagem";
            buttom.href = "index.php?pagina=includes/product-information/product-spa.php";
            setStyleItemCarrossel("home__carrossel--spa");
            break;

            //Painel de energia solar
        case "home__carrossel--fourth-image":
            image.src = "assets/img/carrossel/aquecedor-solar.jpg";
            image.class = "home__carrossel--fourth-image";
            descricao.innerHTML = "Painel de energia solar";
            buttom.href = "index.php?pagina=includes/product-information/product-others-aquecedor-solar.php";
            setStyleItemCarrossel("home__carrossel--aquecedor-solar");

            /*case "home__carrossel--fifth-image":
                image.src = "assets/img/carrossel/sauna.png";
                image.class = "home__carrossel--fifth-image";
                descricao.innerHTML = "Sauna";
                buttom.href="index.php?pagina=includes/product-information/product-sauna.php";
                setStyleItemCarrossel("home__carrossel--aquecedor-sauna");
                break;*/

            /*case "home__carrossel--sixth-image":
              image.src = "assets/img/carrossel/aquecedor-gas.png";
              image.class = "home__carrossel--sixth-image";
              descricao.innerHTML = "Aquecedor de água à Gás";
              buttom.href="index.php?pagina=includes/product-information/product-others-aquecedor-gas.php";
              setStyleItemCarrossel("home__carrossel--aquecedor-gas");
              break;*/
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