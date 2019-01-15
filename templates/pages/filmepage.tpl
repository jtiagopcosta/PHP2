{include file='common/header.tpl'}
<!--Retirado a função Foreach, por ja ter os dados vindo do Fetch por completo-->
<div class="pagfilme">
    <img class="imagem_filme" src="{$filme.imagem}">

    <div class="dados">
            <span class="nome"> {$filme.nome}</span><br/>
            <span > {$filme.genero}</span><br/>
            <p><span class="p"> Realizador:</span> {$filme.autor}</p> 
            <p><span class="p"> Elenco:</span> {$filme.elenco}<p>
           <p><span class="p"> Descrição:</span> <span class="texto">{$filme.descricao}</span></p>
    </div>
    <div class="analises">
        <div class="analiseshead">
        <span class="nome"> Análises</span>
        </div>
        <div class="analisesbody">
            <div class="introduzir">
				<form class="form" action="database/upanalise.php" method="post" enctype="multipart/form-data">
				<input type="hidden"  name="id" value="$_GET['id']">
				<input type="hidden"  name="id2" value="<$_SESSION['id']">
				<textarea name="mensagem" class="analisetext" placeholder="Escreva aqui a sua análise" value="descrição" required></textarea><br>
				<input type="submit" value="Adicionar Análise" name="submit"><br><br><br>
				</form>	
            </div>

            {foreach $analises as $analise}
                <img class="userpic" src="{$BASE_URL}/img/john">
                <div class="analise">
                
                <span > {$analise.analise}</span><br/>
                
                </div>
                
            {/foreach}
        </div>
    </div>
</div>
 
{include file='common/footer.tpl'}