<?php 
    /* 
    append 
    save
    remove array

    1º pegar novo dado no formulário
    2º cadastrar no banco mysql novos dados    
    3º pegar histórico no mysql
    4º reescrever com php respectivo 
    arquivo json adicionando os novos dados (inserts)
    ou alterações(updates e delets)

     */
    // Array com dados
    /*
    $cliente1 = array(
        'codigo2'   => '001',
        'nome2'     => 'William',
        'telefone2' => '012 9999-6352'
    );
    
    $cliente2 = array(
        'codigo2'   => '002',
        'nome2'     => 'Adriano',
        'telefone2' => '012 8888-4452'
    );
    
    $cliente3 = array(
        'codigo2'   => '003',
        'nome2'     => 'Maria',
        'telefone2' => '013 3434-4444'
    );*/
    
    $cliente1 = array(
        'codigo'   => '004',
        'nome'     => 'William2',
        'telefone' => '012 9999-6352'
    );
     
    $cliente2 = array(
        'codigo'   => '005',
        'nome'     => 'Adriano',
        'telefone' => '012 8888-4452'
    );
     
    $cliente3 = array(
        'codigo'   => '005',
        'nome'     => 'Maria',
        'telefone' => '013 3434-4444'
    );
    
    /*
     * fopen
     r = reading
     r+ = reading/writing
     
     w = writing
     w+ =writing/reading, create file
     
     a = append
     a+ =
     
     x =
     x+ =
     */
     
    // Cria o arquivo cadastro.json
    // O parâmetro "a" indica que o arquivo será aberto para escrita   
    
    $file = "scripts/service.json";
    
    //abrir o arquivo
    $fp = fopen($file, "a");
    
    //$content = file_get_contents($file);
    
    
    $content= file($file);
    /*$message = file($file);
     echo "<script type='text/javascript'>alert('$message');</script>";
   
    
    //apagar arquivo json
    //excluirArquivo($file);
     
    /**/
     
    //remover caracter /n
    /*$fixed_content = str_replace("\n","",$content,$count);    
    $content = $fixed_content;
    
    //remover caracter /r
    $fixed_content = str_replace("\r","",$content,$count);
    $content = $fixed_content;
    
    //remover caracter /
    $fixed_content = str_replace('\"','"',$content,$count);
    $content = $fixed_content;
    
    //remover espa�os
    $fixed_content = trim($content);
    $content = $fixed_content;
    
    $fixed_content = trim($content);
    $content =$fixed_content;*/
    //$content = $fixed_content;
    
    /*function excluirArquivo($arquivo){
        if( file_exists( $arquivo ) )
            unlink( $arquivo );
            return $arquivo;
    } 
    
     
   
    
    // Tranforma o array $dados em JSON
    
    $dados_json = $fixed_content;*/
    
    //$dados_json = json_encode($content);
           
    // Escreve o conte�do JSON no arquivo
    //$escreve = fwrite($fp,  $dados_json);
    //file_put_contents($file, $dados_json);
    
   
    
    // Atribui os 3 arrays para apenas um array
    $dados = array($content,$cliente1,$cliente2,$cliente3);
    $novos_dados_json = json_encode($dados);
    
    //$dados_json.concat($novos_dados_json);
    //$join_json = $dados_json.$dados_json;
    
    //novos dados
    file_put_contents($file, $novos_dados_json);
    
    // Fecha o arquivo
    fclose($fp);
  
/*Código de teste e serve apenas para arquivos de log, 
 * pois atualizatodo o documento ao inves de adicionar um novo ou alterar o existente.
 * 
 * $mobiles = array('name'    => 'Mukesh Chapagain2',
    'address2'    => 'Kathmandu, Nepa2l',
    'website2'    => 'http://blog.chapagain.com.np2',
    'mobiles2'     => array('Samsung', 'Apple', 'Nokia', 'Sony', 'LG'),
    'furniture2' => array('Chair', 'Couch', 'Ottoman'),
    'camera2'    => array('Canon', 'Nikon')    
);
    $jsonMobiles = json_encode($mobiles);
    file_put_contents('scripts/service.json', $jsonMobiles);

    $fileName = 'mobiles.json';
    $data = file_get_contents($fileName);
    $phpMobiles = json_decode($data);
    print_r($phpMobiles);
*/
?>

<div class="administracao">    
    
    <nav class="administracao__menu">
        <a href="" alt="">Cadastro</a>
        <a href="" alt="">Compra</a>
        <a href="" alt="">Produto</a>
    </nav>

    <fieldset id="administracao__categoria"  class="administracao__categoria">
        <legend class="administracao__categoria--title legend__black">Categoria</legend>
        <article class="administracao__categoria--body" class="administracao__categoria--body">
            <div class="administracao__categoria--values">
                <select  class="text__green administracao__categoria--values-campos">
                    <option class="text__green" value="valor1">valor1</option>
                    <option class="text__green" value="valor2">valor2</option>
                </select>
            </div>

            <div class="administracao__categoria--cadastro">
                <input class="text__green" type="text" placeholder="Nome:">
            </div>
        </article>
        <div class="administracao__categoria--option">
            <input class="button-small-white" type="submit" value="Cadastra">
            
            <input class="button-small-white" type="submit" value="Atualizar">
            
            <input class="button-small-white" type="submit" value="Deletar">
        </div>
    </fieldset>

    <fieldset id="administracao__servico"  class="administracao__categoria">
        <legend class="administracao__categoria--title legend__black">Serviço</legend>
        <article class="administracao__categoria--body">
            <div class="administracao__categoria--values">
                <select  class="text__green administracao__categoria--values-campos">
                    <option class="text__green" value="valor1">valor1</option>
                    <option class="text__green" value="valor2">valor2</option>
                </select>
                <select  class="text__green administracao__categoria--values-campos">
                    <option class="text__green" value="valor1">valor1</option>
                    <option class="text__green" value="valor2">valor2</option>
                </select>
            </div>

            <div class="administracao__categoria--cadastro">
                <input class="text__green" type="text" placeholder="Nome:">
                <input class="text__green" type="text" placeholder="Descrição:">
            </div>
        </article>
        <div class="administracao__categoria--option">
            <input class="button-white" type="submit" value="Cadastra">
            
            <input class="button-white" type="submit" value="Atualizar">
            
            <input class="button-white" type="submit" value="Deletar">
        </div>
    </fieldset>

    <fieldset id="administracao__tipo"  class="administracao__categoria">
        <legend class="administracao__categoria--title legend__black">Tipo de Produto</legend>
        <article class="administracao__categoria--body">
            <div class="administracao__categoria--values">
                <select  class="text__green administracao__categoria--values-campos">
                    <option class="text__green" value="valor1">valor1</option>
                    <option class="text__green" value="valor2">valor2</option>
                </select>
                <select  class="text__green administracao__categoria--values-campos">
                    <option class="text__green" value="valor1">valor1</option>
                    <option class="text__green" value="valor2">valor2</option>
                </select>
                <select  class="text__green administracao__categoria--values-campos">
                    <option class="text__green" value="valor1">valor1</option>
                    <option class="text__green" value="valor2">valor2</option>
                </select>
            </div>

            <div class="administracao__categoria--cadastro">
                <input class="text__green" type="text" placeholder="Nome:">
                <input class="text__green" type="text" placeholder="Descrição:">
                <input class="text__green" type="text" placeholder="Nome Produto:">
            </div>
        </article>
        <div class="administracao__categoria--option">
            <input class="button-white" type="submit" value="Cadastra">
            
            <input class="button-white" type="submit" value="Atualizar">
            
            <input class="button-white" type="submit" value="Deletar">
        </div>
    </fieldset>

    <fieldset id="administracao__faq"  class="administracao__categoria">
        <legend class="administracao__categoria--title legend__black">Faq Perguntas</legend>
        <article class="administracao__categoria--body">
            <div class="administracao__categoria--values">
                <select  class="text__green administracao__categoria--values-campos">
                    <option class="text__green" value="valor1">valor1</option>
                    <option class="text__green" value="valor2">valor2</option>
                </select>
                <select  class="text__green administracao__categoria--values-campos">
                    <option class="text__green" value="valor1">valor1</option>
                    <option class="text__green" value="valor2">valor2</option>
                </select>
                <select  class="text__green administracao__categoria--values-campos">
                    <option class="text__green" value="valor1">valor1</option>
                    <option class="text__green" value="valor2">valor2</option>
                </select>
                <select  class="text__green administracao__categoria--values-campos">
                    <option class="text__green" value="valor1">valor1</option>
                    <option class="text__green" value="valor2">valor2</option>
                </select>
            </div>

            <div class="administracao__categoria--cadastro">
                <input class="text__green" type="text" placeholder="Pergunta:">
                <input class="text__green" type="text" placeholder="Resposta:">
                <input class="text__green" type="text" placeholder="Nome Produto:">
                <input class="text__green" type="text" placeholder="Nome Tipo Produto:">
            </div>
        </article>
        <div class="administracao__categoria--option">
            <input class="button-white" type="submit" value="Cadastra">
            
            <input class="button-white" type="submit" value="Atualizar">
            
            <input class="button-white" type="submit" value="Deletar">
        </div>
    </fieldset>

    <fieldset id="administracao__medida"  class="administracao__categoria">
        <legend class="administracao__categoria--title legend__black">Medida Produto</legend>
        <article class="administracao__categoria--body">
            <div class="administracao__categoria--values">
                <select  class="text__green administracao__categoria--values-campos">
                    <option class="text__green" value="valor1">valor1</option>
                    <option class="text__green" value="valor2">valor2</option>
                </select>
                <select  class="text__green administracao__categoria--values-campos">
                    <option class="text__green" value="valor1">valor1</option>
                    <option class="text__green" value="valor2">valor2</option>
                </select>
                <select  class="text__green administracao__categoria--values-campos">
                    <option class="text__green" value="valor1">valor1</option>
                    <option class="text__green" value="valor2">valor2</option>
                </select>
                <select  class="text__green administracao__categoria--values-campos">
                    <option class="text__green" value="valor1">valor1</option>
                    <option class="text__green" value="valor2">valor2</option>
                </select>
            </div>

            <div class="administracao__categoria--cadastro">
                <input class="text__green" type="text" placeholder="Modelo Produto:">
                <input class="text__green" type="text" placeholder="Diâmetro Exterior:">
                <input class="text__green" type="text" placeholder="Diâmetro Interior:">
                <input class="text__green" type="text" placeholder="Altura:">
            </div>
        </article>
        <div class="administracao__categoria--option">
            <input class="button-white" type="submit" value="Cadastra">
            
            <input class="button-white" type="submit" value="Atualizar">
            
            <input class="button-white" type="submit" value="Deletar">
        </div>
    </fieldset>

    <fieldset id="administracao__produto"  class="administracao__categoria">
        <legend class="administracao__categoria--title legend__black">Produto</legend>
        <article class="administracao__categoria--body">
            <div class="administracao__categoria--values">
                <select  class="text__green administracao__categoria--values-campos">
                    <option class="text__green" value="valor1">valor1</option>
                    <option class="text__green" value="valor2">valor2</option>
                </select>
                <select  class="text__green administracao__categoria--values-campos">
                    <option class="text__green" value="valor1">valor1</option>
                    <option class="text__green" value="valor2">valor2</option>
                </select>
                <select  class="text__green administracao__categoria--values-campos">
                    <option class="text__green" value="valor1">valor1</option>
                    <option class="text__green" value="valor2">valor2</option>
                </select>
                <select  class="text__green administracao__categoria--values-campos">
                    <option class="text__green" value="valor1">valor1</option>
                    <option class="text__green" value="valor2">valor2</option>
                </select>
                <select  class="text__green administracao__categoria--values-campos">
                    <option class="text__green" value="valor1">valor1</option>
                    <option class="text__green" value="valor2">valor2</option>
                </select>
            </div>

            <div class="administracao__categoria--cadastro">
                <input class="text__green" type="text" placeholder="Nome:">
                <input class="text__green" type="text" placeholder="Instalação:">
                <input class="text__green" type="text" placeholder="Descrição:">
                <input class="text__green" type="text" placeholder="Projeto:">
                <input class="text__green" type="text" placeholder="Nome Categoria:">
            </div>
        </article>
        <div class="administracao__categoria--option">
            <input class="button-white" type="submit" value="Cadastra">
            
            <input class="button-white" type="submit" value="Atualizar">
            
            <input class="button-white" type="submit" value="Deletar">
        </div>
    </fieldset>

    <fieldset id="administracao__modelo"  class="administracao__categoria">
        <legend class="administracao__categoria--title legend__black">Modelo Produto</legend>
        <article class="administracao__categoria--body">
            <div class="administracao__categoria--values">
                <select  class="text__green administracao__categoria--values-campos">
                    <option class="text__green" value="valor1">valor1</option>
                    <option class="text__green" value="valor2">valor2</option>
                </select>
                <select  class="text__green administracao__categoria--values-campos">
                    <option class="text__green" value="valor1">valor1</option>
                    <option class="text__green" value="valor2">valor2</option>
                </select>
                <select  class="text__green administracao__categoria--values-campos">
                    <option class="text__green" value="valor1">valor1</option>
                    <option class="text__green" value="valor2">valor2</option>
                </select>
                <select  class="text__green administracao__categoria--values-campos">
                    <option class="text__green" value="valor1">valor1</option>
                    <option class="text__green" value="valor2">valor2</option>
                </select>
                <select  class="text__green administracao__categoria--values-campos">
                    <option class="text__green" value="valor1">valor1</option>
                    <option class="text__green" value="valor2">valor2</option>
                </select>
                <select  class="text__green administracao__categoria--values-campos">
                    <option class="text__green" value="valor1">valor1</option>
                    <option class="text__green" value="valor2">valor2</option>
                </select>
                <select  class="text__green administracao__categoria--values-campos">
                    <option class="text__green" value="valor1">valor1</option>
                    <option class="text__green" value="valor2">valor2</option>
                </select>
                <select  class="text__green administracao__categoria--values-campos">
                    <option class="text__green" value="valor1">valor1</option>
                    <option class="text__green" value="valor2">valor2</option>
                </select>
            </div>

            <div class="administracao__categoria--cadastro">
                <input class="text__green" type="text" placeholder="Nome:">
                <input class="text__green" type="text" placeholder="Modelo:">
                <input class="text__green" type="text" placeholder="Valor:">
                <input class="text__green" type="text" placeholder="Parcelamento:">
                <input class="text__green" type="text" placeholder="Valor Parcelamento:">
                <input class="text__green" type="text" placeholder="Un Estoque:">
                <input class="text__green" type="text" placeholder="Observações:">
                <input class="text__green" type="text" placeholder="Nome Serviço:">
            </div>
        </article>
        <div class="administracao__categoria--option">
            <input class="button-white" type="submit" value="Cadastra">
            
            <input class="button-white" type="submit" value="Atualizar">
            
            <input class="button-white" type="submit" value="Deletar">
        </div>
    </fieldset>

    <fieldset id="administracao__informacoes"  class="administracao__categoria">
        <legend class="administracao__categoria--title legend__black">Informações Técnicas</legend>
        <article class="administracao__categoria--body">
            <div class="administracao__categoria--values">
                <select  class="text__green administracao__categoria--values-campos">
                    <option class="text__green" value="valor1">valor1</option>
                    <option class="text__green" value="valor2">valor2</option>
                </select>
                            <select  class="text__green administracao__categoria--values-campos">
                    <option class="text__green" value="valor1">valor1</option>
                    <option class="text__green" value="valor2">valor2</option>
                </select>
                            <select  class="text__green administracao__categoria--values-campos">
                    <option class="text__green" value="valor1">valor1</option>
                    <option class="text__green" value="valor2">valor2</option>
                </select>
                <select  class="text__green administracao__categoria--values-campos">
                    <option class="text__green" value="valor1">valor1</option>
                    <option class="text__green" value="valor2">valor2</option>
                </select>
                            <select  class="text__green administracao__categoria--values-campos">
                    <option class="text__green" value="valor1">valor1</option>
                    <option class="text__green" value="valor2">valor2</option>
                </select>
                            <select  class="text__green administracao__categoria--values-campos">
                    <option class="text__green" value="valor1">valor1</option>
                    <option class="text__green" value="valor2">valor2</option>
                </select>
                <select  class="text__green administracao__categoria--values-campos">
                    <option class="text__green" value="valor1">valor1</option>
                    <option class="text__green" value="valor2">valor2</option>
                </select>
                            <select  class="text__green administracao__categoria--values-campos">
                    <option class="text__green" value="valor1">valor1</option>
                    <option class="text__green" value="valor2">valor2</option>
                </select>
                            <select  class="text__green administracao__categoria--values-campos">
                    <option class="text__green" value="valor1">valor1</option>
                    <option class="text__green" value="valor2">valor2</option>
                </select>
                <select  class="text__green administracao__categoria--values-campos">
                    <option class="text__green" value="valor1">valor1</option>
                    <option class="text__green" value="valor2">valor2</option>
                </select>
                            <select  class="text__green administracao__categoria--values-campos">
                    <option class="text__green" value="valor1">valor1</option>
                    <option class="text__green" value="valor2">valor2</option>
                </select>
            </div>

            <div class="administracao__categoria--cadastro">
                <input class="text__green" type="text" placeholder="Modelo Produto:">
                <input class="text__green" type="text" placeholder="Tipo Produto:">
                <input class="text__green" type="text" placeholder="Produto:">
                <input class="text__green" type="text" placeholder="Capacidade de pessoas:">
                <input class="text__green" type="text" placeholder="Litros:">
                <input class="text__green" type="text" placeholder="Número de Jatos de ar:">
                <input class="text__green" type="text" placeholder="Voltagem:">
                <input class="text__green" type="text" placeholder="Potência Nominal:">
                <input class="text__green" type="text" placeholder="Aquecedor:">
                <input class="text__green" type="text" placeholder="Cumprimento do cabo:">
                <input class="text__green" type="text" placeholder="Revestimento Externo:">
            </div>
        </article>
        <div class="administracao__categoria--option">
            <input class="button-white" type="submit" value="Cadastra">
            
            <input class="button-white" type="submit" value="Atualizar">
            
            <input class="button-white" type="submit" value="Deletar">
        </div>
    </fieldset>
</div>