<?php
/* Smarty version 3.1.33, created on 2018-12-18 13:31:32
  from '/usr/users2/mieec2011/ee11287/public_html/trabalhosSiem/trabalhoPHP-2/templates/pages/inserir.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c18f6b47b2188_12256530',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '288c3e06ebf38b2cb04f45472b1e4ad901b437c3' => 
    array (
      0 => '/usr/users2/mieec2011/ee11287/public_html/trabalhosSiem/trabalhoPHP-2/templates/pages/inserir.tpl',
      1 => 1545138993,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:common/header.tpl' => 1,
    'file:common/footer.tpl' => 1,
  ),
),false)) {
function content_5c18f6b47b2188_12256530 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="recent">
<section id="insert">
  <h2 id="h2">Inserir Filme</h2>

  <form action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/actions/users/filmes.php" method="post">
  
        <input type="text"  name="nome" placeholder="Inserir Título" required>
		<input type="text" name="genero" placeholder="Inserir Categorias" required>
		<input type="text"  name="elenco" placeholder="Inserir Elenco" required>
		<input type="text"  name="autor" placeholder="Inserir Realizador" required>
		<input type="text" name="nacionalidade" placeholder="Inserir Nacionalidade">
	    <textarea name="mensagem" type ="textarea" value="descrição" required ></textarea>
        <input type="submit" value="Carregar Imagem" name="fileToUpload" id="fileToUpload">	
        <input type="submit" value="Inserir">
    </form>

</section>
</div>


<?php $_smarty_tpl->_subTemplateRender('file:common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
