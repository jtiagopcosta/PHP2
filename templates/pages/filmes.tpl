<!--VER CSS DO MENU LATERAL, FILMESPAGE, FILMES, GETFILMES, VERIFICAR SE HÁ MAIS DE UM USERNAME, COMO VER SE A LIGAÇÃO
COM A DB FOI FEITA CORRETAMENTE E AVISAR, SESSÃO DE ADMIN -->
{include file='common/header.tpl'}

<div class="filmes">
    <div class="list">
        {foreach $filmes as $filme}
            
            <div class="filme">
            <a href="{$BASE_URL}/pages/filmepage.php?id={$filme.id}">
            <img class="pic" src="{$filme.imagem}"></a>
            <span class="nome"> {$filme.nome}</span><br/>
            <span > {$filme.genero}</span><br/>
            <p><span class="p"> Realizador:</span> {$filme.autor}</p> 
            <p><span class="p"> Elenco:</span> {$filme.elenco}<p>
            {if (isset($ADMINISTRADOR))}
            <a class='delete' href='{$BASE_URL}/database/deletefilme.php?id={$filme.id}'>Eliminar Filme</a>
            {/if}
            </div>
        {/foreach}
    </div>
    <div class="generoscontainer">
    <div class="generos">

        <span class="titulo">Géneros</span>
        <form action="filmesfiltrados.php" method = "post"> 

            {foreach $input as $genero}
            <input type="checkbox" name="genero[]" id="genero" value={$genero}> {$genero} <br>
            {/foreach}

        <input class="submit" type="submit" value="OK" name="pesquisar_genero">
        </form>
    </div>
    </div>

</div>
{include file='common/footer.tpl'}