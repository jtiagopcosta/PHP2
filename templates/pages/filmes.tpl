<!--VER CSS DO MENU LATERAL, FILMESPAGE, FILMES, GETFILMES, VERIFICAR SE HÁ MAIS DE UM USERNAME, COMO VER SE A LIGAÇÃO
COM A DB FOI FEITA CORRETAMENTE E AVISAR, SESSÃO DE ADMIN -->
{include file='common/header.tpl'}

<div class="filmes">
    <div class="list">
        {foreach $filmes as $filme}
            
            <div class="filme">
            <img class="pic" src="{$BASE_URL}{$filme.imagem}">
            <span class="nome"> {$filme.nome}</span><br/>
            <span > {$filme.genero}</span><br/>
            <p><span class="p"> Realizador:</span> {$filme.autor}</p> 
            <p><span class="p"> Elenco:</span> {$filme.elenco}<p>
           {*<p><span class="p"> Descrição:</span> <span class="texto">{$filme.descricao}</span></p>*}
            </div>
        {/foreach}
    </div>
    <div class="generos">
    Lorem ipsum dolor sit ametefefefefefffffffefefefefefefefefefefeefefefefefefefefefefefefwef
    gwEGRWGERHRJERHTEURHTJEHTJESBDGXJRTYSZNJRYUERJFYKDRTXNLit ametLorem ipsum do
    Lit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit amet
    <p>1</p>
    <p>1</p>
    <p>1</p>
    <p>1</p>
    <p>1</p>
    <p>1</p>
    <p>1</p>
    <p>1</p>
    <p>1</p>
    <p>1</p>
    <p>1</p>
    <p>2</p>
    <input class="submit" type="submit" value="OK" name="pesquisar_genero">
    </div>

</div>
{include file='common/footer.tpl'}