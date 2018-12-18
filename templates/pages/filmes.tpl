
{include file='common/header.tpl'}

<div class="filmes">
    <div class="list">
        {foreach $filmes as $filme}
            
            <div class="filme">
            {*<img class="pic" src="{$BASE_DIR}/img/{$filme.imagem}">*}
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
    Lorem ipsum dolor sit ametLit ametLorem ipsum doLit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit amet
    <p>1</p>
    <p>1</p>
    <p>1</p>
    <p>1</p>
    <p>1</p>
    <p>1</p>
    </div>

</div>
{include file='common/footer.tpl'}