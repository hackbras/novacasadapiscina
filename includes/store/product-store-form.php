<div class="form-store">
    <h1 class="form-store__title">Cadastro</h1>

    <section class="form-store__subscription">
        <form class="form-store__form">        
            <h2 class="form-store__subtitle">Para finalizar a compra, informe os dados abaixo.</h2>
            <fieldset class="form-store__cliente">
                <legend>Cliente:</legend>
                <div class="form-store__cliente--data">
                    <input id="client__name" type="text" placeholder="Nome:" >
                    <input id="client__email" type="email" placeholder="E-mail:" >
                    <input id="client__phone" type="phone" placeholder="Phone:" >
                </div>
            </fieldset>

            <fieldset class="form-store__address">
                <legend>Endereço:</legend>
                <div class="form-store__address--data">
                    <input id="address__street" type="text" placeholder="Rua:">
                    <input id="address__number" type="number" placeholder="Nº:">
                    <input id="address__neighborhood" type="text" placeholder="Bairro:">
                    <input id="address__city" type="text" placeholder="Cidade:">
                    <input id="address__uf" type="text" placeholder="UF:">
                </div>
            </fieldset>
            <div class="form-store__form--button">
                <button type="submit" class="button-white">Continuar</button>
            </div>
           
        </form>    

        <article class="form-store__notify">
            <h1 class="form-store__notify--title">Usamos seu e-mail para:</h1>
            <ul>
                <li>Notificar sobre o andamento do seu pedido</li>
                <li>Acelerar o preenchimento de suas informações</li>
            </ul>
        </article>
    </section>

    <section class="form-store__resume">
        <h2 class="form-store__title">Resumo da Compra</h2>
        <table class="form-store__resume--table">
            <thead class="form-store__resume--thead">
                <tr>
                    <th>Produto
                    </th>
                    <th>Valor
                    </th>
                </tr>
            </thead>
            <tbody class="form-store__resume--tbody">
                <tr>
                    <td>
                    <figure>
                        <img src="assets/img/produtos/tipos_de_piscinas/angra.png" alt="">
                        <figcaption >Nome do produto</figcaption>
                    </figure> 
                    </td>
                    <td>
                    R$ XXXX,00
                    </td>
                </tr>
                <tr>
                     <td>
                    <figure>
                        <img src="assets/img/produtos/tipos_de_piscinas/angra.png" alt="">
                        <figcaption>Nome do produto</figcaption>
                    </figure> 
                    </td>
                    <td>
                    R$ XXXX,00
                    </td>
                </tr>
                <tr>
                    <td>
                    <figure>
                        <img src="assets/img/produtos/tipos_de_piscinas/angra.png" alt="">
                        <figcaption>Nome do produto</figcaption>
                    </figure> 
                    </td>
                    <td>
                    R$ XXXX,00
                    </td>
                </tr>
            </tbody>
        </table>
        <article class="form-store__resume--total">
            <div class="form-store__resume--total-container">
                <label class="label__black">Total:</label>
                <span id="form-store__resume--total-value">R$ XXXXX,00</span>
            </div>
        </article>
    </section>
</div>
