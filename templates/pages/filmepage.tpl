{include file='common/header.tpl'}
<!--Retirado a função Foreach, por ja ter os dados vindo do Fetch por completo-->
<div class="pagfilme">
    <img class="imagem_filme" src="{$BASE_URL}{$filme.imagem}">

    <div class="dados">
            <span> olá {$filme.nome}</span>
    </div>
</div>
 
{include file='common/footer.tpl'}