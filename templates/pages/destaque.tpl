{include file='common/header.tpl'}

<div class="recent">
 {foreach $filmes as $filme}
            
                        <img class="image_recent" src="{$BASE_URL}{$filme.imagem}">
                        
                    {/foreach}
                    

</div>

                
{include file='common/footer.tpl'}