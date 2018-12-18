{include file='common/header.tpl'}
<div class="pagfilme">
    {foreach $filmes as $filme}
    <img class="imagem_filme" src="{$BASE_URL}{$filme.imagem}">
    {/foreach}

    <div class="dados">
        {foreach $filmes as $filme}   
            <span> olá {$filme.nome}</span>
        {/foreach}
    </div>
</div>
 
{include file='common/footer.tpl'}