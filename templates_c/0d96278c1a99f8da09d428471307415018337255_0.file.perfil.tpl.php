<?php
/* Smarty version 3.1.33, created on 2019-01-14 04:44:54
  from '/usr/users2/mieec2011/ee11287/public_html/trabalhosSiem/trabalhoPHP-2/templates/pages/perfil.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c3c13c67510d7_78830787',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0d96278c1a99f8da09d428471307415018337255' => 
    array (
      0 => '/usr/users2/mieec2011/ee11287/public_html/trabalhosSiem/trabalhoPHP-2/templates/pages/perfil.tpl',
      1 => 1547429957,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:common/header.tpl' => 1,
    'file:common/footer.tpl' => 1,
  ),
),false)) {
function content_5c3c13c67510d7_78830787 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="recent">
<section id="register">
  <h2>Perfil de <?php echo $_smarty_tpl->tpl_vars['USERNAME']->value;?>
</h2>

  <span class="username" href='#' onclick="Alterar('nome')">->Alterações</span>
  <form method="post" id="nome" action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/actions/users/alterar.php"><input type="text" placeholder="Novo Nome" name="username">
  <input type="text" placeholder="Nova Senha" name="password">
  <input type="submit" value="Mudar"></form>


</section>
</div>












<?php $_smarty_tpl->_subTemplateRender('file:common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
