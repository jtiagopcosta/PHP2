<?php
/* Smarty version 3.1.33, created on 2019-01-15 00:46:29
  from '/usr/users2/mieec2011/ee11287/public_html/trabalhosSiem/trabalhoPHP-2/templates/pages/filmes.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c3d2d65781384_08260115',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6783fb1b96578b1c8f42efeeb21d4e080ce7e7a8' => 
    array (
      0 => '/usr/users2/mieec2011/ee11287/public_html/trabalhosSiem/trabalhoPHP-2/templates/pages/filmes.tpl',
      1 => 1547513187,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:common/header.tpl' => 1,
    'file:common/footer.tpl' => 1,
  ),
),false)) {
function content_5c3d2d65781384_08260115 (Smarty_Internal_Template $_smarty_tpl) {
?><!--VER CSS DO MENU LATERAL, FILMESPAGE, FILMES, GETFILMES, VERIFICAR SE HÁ MAIS DE UM USERNAME, COMO VER SE A LIGAÇÃO
COM A DB FOI FEITA CORRETAMENTE E AVISAR, SESSÃO DE ADMIN -->
<?php $_smarty_tpl->_subTemplateRender('file:common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="filmes">
    <div class="list">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['filmes']->value, 'filme');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['filme']->value) {
?>
            
            <div class="filme">
            <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/pages/filmepage.php?id=<?php echo $_smarty_tpl->tpl_vars['filme']->value['id'];?>
">
            <img class="pic" src="<?php echo $_smarty_tpl->tpl_vars['filme']->value['imagem'];?>
"></a>
            <span class="nome"> <?php echo $_smarty_tpl->tpl_vars['filme']->value['nome'];?>
</span><br/>
            <span > <?php echo $_smarty_tpl->tpl_vars['filme']->value['genero'];?>
</span><br/>
            <p><span class="p"> Realizador:</span> <?php echo $_smarty_tpl->tpl_vars['filme']->value['autor'];?>
</p> 
            <p><span class="p"> Elenco:</span> <?php echo $_smarty_tpl->tpl_vars['filme']->value['elenco'];?>
<p>
                       </div>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
    <div class="generoscontainer">
    <div class="generos">

        <span class="titulo">Géneros</span>
        <form action="filmesfiltrados.php" method = "post"> 

            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['input']->value, 'genero');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['genero']->value) {
?>
            <input type="checkbox" name="genero[]" id="genero" value=<?php echo $_smarty_tpl->tpl_vars['genero']->value;?>
/> <?php echo $_smarty_tpl->tpl_vars['genero']->value;?>
 <br>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

        <input class="submit" type="submit" value="OK" name="pesquisar_genero">
        </form>
    </div>
    </div>

</div>
<?php $_smarty_tpl->_subTemplateRender('file:common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
