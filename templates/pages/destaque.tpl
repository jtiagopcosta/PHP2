{include file='common/header.tpl'}

<div class="recent">
    {foreach $filmes as $filme}
        <a href="{$BASE_URL}/pages/filmepage.php?id={$filme.id}">
        <img class="image_recent" src="{$filme.imagem}">
        </a>
                            
    {/foreach}                

</div>

                
{include file='common/footer.tpl'}