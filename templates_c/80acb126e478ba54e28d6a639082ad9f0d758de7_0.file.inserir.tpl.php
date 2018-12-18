<?php
/* Smarty version 3.1.33, created on 2018-12-18 12:42:47
  from '/usr/users2/2018/up201803231/public_html/trabalhosSiem/newpage/php2/templates/pages/inserir.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c18eb47d801c6_03118934',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '80acb126e478ba54e28d6a639082ad9f0d758de7' => 
    array (
      0 => '/usr/users2/2018/up201803231/public_html/trabalhosSiem/newpage/php2/templates/pages/inserir.tpl',
      1 => 1545136964,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:common/header.tpl' => 1,
    'file:common/footer.tpl' => 1,
  ),
),false)) {
function content_5c18eb47d801c6_03118934 (Smarty_Internal_Template $_smarty_tpl) {
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
