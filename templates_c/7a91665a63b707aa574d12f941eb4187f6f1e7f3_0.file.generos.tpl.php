<?php
/* Smarty version 3.1.33, created on 2019-01-14 03:23:57
  from '/usr/users2/mieec2011/ee11287/public_html/trabalhosSiem/trabalhoPHP-2/templates/pages/generos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c3c00cd5eac54_81635017',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7a91665a63b707aa574d12f941eb4187f6f1e7f3' => 
    array (
      0 => '/usr/users2/mieec2011/ee11287/public_html/trabalhosSiem/trabalhoPHP-2/templates/pages/generos.tpl',
      1 => 1547436203,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c3c00cd5eac54_81635017 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="generos">
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
    </div><?php }
}
