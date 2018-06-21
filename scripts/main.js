/*Carrossel */
//.home__carrossel
//background-image: url("../assets/img/carrossel/piscina-carrossel1.jpg");
//aquecedor-solar-up-1196x600.png
//aquecedor-solar.jpg

//document.body.style.backgroundImage = "url('img_tree.png')";

/*<nav class="home__carrossel--items">
<a id="home__carrossel--piscina"></a>
<a id="home__carrossel--spa"></a>
<a id="home__carrossel--aquecedor-solar"></a>*/

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