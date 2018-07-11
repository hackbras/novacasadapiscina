function change__image(image) {
    var zoom__image = document.getElementById('product__default--estampas-zoom-imagem');
    var image__legend = document.getElementById('product__default--estampas-zoom-title');

    var img1 = "assets/img/produtos/piscinas/estampas/estampa1.png";
    var img2 = "assets/img/produtos/piscinas/estampas/estampa2.png";
    var img3 = "assets/img/produtos/piscinas/estampas/estampa3.png";
    var img4 = "assets/img/produtos/piscinas/estampas/estampa4.png";
    var img5 = "assets/img/produtos/piscinas/estampas/estampa5.png";
    var img6 = "assets/img/produtos/piscinas/estampas/estampa7.png";

    var img7 = "assets/img/produtos/piscinas/estampas/estampa8.png";;
    var img8 = "assets/img/produtos/piscinas/estampas/estampa9.png";
    var img9 = "assets/img/produtos/piscinas/estampas/estampa10.png";
    var img10 = "assets/img/produtos/piscinas/estampas/estampa11.png";
    var img11 = "assets/img/produtos/piscinas/estampas/estampa12.png";

    var img12 = "assets/img/produtos/piscinas/estampas/estampa13.png";
    var img13 = "assets/img/produtos/piscinas/estampas/estampa14.png";
    var img14 = "assets/img/produtos/piscinas/estampas/estampa15.png";
    var img15 = "assets/img/produtos/piscinas/estampas/estampa16.png";
    var img16 = "assets/img/produtos/piscinas/estampas/estampa17.png";
    var img17 = "assets/img/produtos/piscinas/estampas/estampa19.png";
    var img18 = "assets/img/produtos/piscinas/estampas/estampa18.png";
    var img19 = "assets/img/produtos/piscinas/estampas/estampa6.png";

    switch (image) {
        case "1":
            zoom__image.src = img1;
            image__legend.innerHTML = "Nº1";
            break;

        case "2":
            zoom__image.src = img2;
            image__legend.innerHTML = "Nº2";
            break;

        case "3":
            zoom__image.src = img3;
            image__legend.innerHTML = "Nº3";
            break;

        case "4":
            zoom__image.src = img4;
            image__legend.innerHTML = "Nº4";
            break;

        case "5":
            zoom__image.src = img5;
            image__legend.innerHTML = "Nº5";
            break;

        case "6":
            zoom__image.src = img6;
            image__legend.innerHTML = "Nº6";
            break;

        case "7":
            zoom__image.src = img7;
            image__legend.innerHTML = "Nº7";
            break;

        case "8":
            zoom__image.src = img8;
            image__legend.innerHTML = "Nº8";
            break;

        case "9":
            zoom__image.src = img9;
            image__legend.innerHTML = "Nº9";
            break;

        case "10":
            zoom__image.src = img10;
            image__legend.innerHTML = "Nº10";
            break;

        case "11":
            zoom__image.src = img11;
            image__legend.innerHTML = "Nº11";
            break;

        case "12":
            zoom__image.src = img12;
            image__legend.innerHTML = "Nº12";
            break;

        case "13":
            zoom__image.src = img13;
            image__legend.innerHTML = "Nº13";
            break;

        case "14":
            zoom__image.src = img14;
            image__legend.innerHTML = "Nº14";
            break;

        case "15":
            zoom__image.src = img15;
            image__legend.innerHTML = "Nº15";
            break;

        case "16":
            zoom__image.src = img16;
            image__legend.innerHTML = "Nº16";
            break;

        case "17":
            zoom__image.src = img17;
            image__legend.innerHTML = "Nº17";
            break;

        case "18":
            zoom__image.src = img18;
            image__legend.innerHTML = "Nº18";
            break;
        
        case "19":
            zoom__image.src = img19;
            image__legend.innerHTML = "Nº19";
            break;

        default:
            zoom__image.src = img1;
            image__legend.innerHTML = "Nº1";
            break;
    }
}

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