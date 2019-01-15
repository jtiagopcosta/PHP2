<?php
/* Smarty version 3.1.33, created on 2019-01-15 02:45:02
  from '/usr/users2/2018/up201803231/public_html/trabalhosSiem/newpage/php2/templates/pages/perfil.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c3d492eef10d5_83633641',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd8194eba53844d56f1abc43422fa02e9faa3f5f2' => 
    array (
      0 => '/usr/users2/2018/up201803231/public_html/trabalhosSiem/newpage/php2/templates/pages/perfil.tpl',
      1 => 1547520246,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:common/header.tpl' => 1,
    'file:common/footer.tpl' => 1,
  ),
),false)) {
function content_5c3d492eef10d5_83633641 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="recent">
<section id="register">

  <h1>Alterações</h1>
  <div><span class="nomeperfil" href='#'>-Nome</span></div>
  <div id="nome"> 
  <span class="fechanome" href='#'><a class = "abat"><img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/img/teste.png" height='20px' weight='20px'></a></span>
  <form method="post"  action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/actions/users/alterar.php">
  <input type="text" placeholder="Novo Nome" name="username" value="<?php echo $_smarty_tpl->tpl_vars['USERNAME']->value;?>
">
  <input type="submit" value="Alterar nome">
  </div>
  </form>
  
  <div><span class="senhaperfil" href='#'>-Senha</span></div>
  <div id="senha">
  <span class="fechasenha" href='#'><a class = "abat"><img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/img/teste.png" height='20px' weight='20px'></a></span>
  <form method="post"  action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/actions/users/password.php">
  <input type="text" placeholder="Nova Senha" name="password">
  <input type="submit" value="Alterar Senha">
  </div>
  </form>
  


</section>
</div>












<?php $_smarty_tpl->_subTemplateRender('file:common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
