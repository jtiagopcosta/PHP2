
{include file='common/header.tpl'}
<div class="filmes">
    <div class="list">
    {foreach $filmes as $filme}
    <div class="filme">
    <h1>{$filme.nome}<h1>
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam et velit arcu. Sed lacinia nulla et risus finibus lacinia nec nec orci. Morbi sed mauris quis felis tincidunt maximus. Vestibulum mollis aliquam quam, eu consectetur lectus porta id. Donec quis eros sed magna vestibulum ornare vel quis est. Nulla venenatis diam quis dolor pulvinar porta. In viverra purus non lectus dapibus mattis. Duis sodales nisl nec massa laoreet, eu lacinia justo tincidunt. Vivamus in ultricies lectus. Etiam orci risus, posuere sit amet leo eget, vulputate dapibus elit. Proin a lectus enim. Mauris vitae ipsum odio. Suspendisse tincidunt sem nec magna porttitor lacinia. Duis non fringilla purus. 
    </div>
    {/foreach}
        
    </div>
    <div class="generos">
    Lorem ipsum dolor sit amet
    </div>
</div>
{include file='common/footer.tpl'}