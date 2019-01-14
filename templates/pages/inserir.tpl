{include file='common/header.tpl'}
<div class="recent">
<section id="insert">
  <h2 id="h2">Inserir Filme</h2>

  <form action="{$BASE_URL}/actions/users/filmes.php" method="post" enctype="multipart/form-data">
  
        <input type="text"  name="nome" placeholder="Inserir Título" required>
		<input type="text" name="genero" placeholder="Inserir Categorias" required>
		<input type="text"  name="elenco" placeholder="Inserir Elenco" required>
		<input type="text"  name="autor" placeholder="Inserir Realizador" required>
		<input type="text" name="nacionalidade" placeholder="Inserir Nacionalidade">
	    <textarea name="mensagem" type ="textarea" value="descrição" required ></textarea>
        <input type="file" value="Imagem" name="fileToUpload" id="fileToUpload">	
        <input type="submit" value="Inserir">
    </form>

</section>
</div>


{include file='common/footer.tpl'}