<?php
/* Smarty version 3.1.33, created on 2019-01-14 23:08:04
  from '/usr/users2/2018/up201803231/public_html/trabalhosSiem/newpage/php2/templates/pages/perfil.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c3d165421bb94_30369843',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd8194eba53844d56f1abc43422fa02e9faa3f5f2' => 
    array (
      0 => '/usr/users2/2018/up201803231/public_html/trabalhosSiem/newpage/php2/templates/pages/perfil.tpl',
      1 => 1547507171,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:common/header.tpl' => 1,
    'file:common/footer.tpl' => 1,
  ),
),false)) {
function content_5c3d165421bb94_30369843 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="recent">
<section id="register">
  <h2>Perfil de <?php echo $_smarty_tpl->tpl_vars['USERNAME']->value;?>
</h2>

  <h1>Alterações</h1>
  <div><span class="username" href='#' onclick="Alterar('nome')">-Nome</span></div>
  <form method="post" id="nome" action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/actions/users/alterar.php">
  <input type="text" placeholder="Novo Nome" name="username">
  <input type="submit" value="Alterar nome">
  </form>
  <div><span class="username" href='#' onclick="Alterar('senha')">-Senha</span></div>
  <form method="post" id="senha" action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/actions/users/password.php">
  <input type="text" placeholder="Nova Senha" name="password">
  <input type="submit" value="Alterar Senha">
  </form>


</section>
</div>












<?php $_smarty_tpl->_subTemplateRender('file:common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
