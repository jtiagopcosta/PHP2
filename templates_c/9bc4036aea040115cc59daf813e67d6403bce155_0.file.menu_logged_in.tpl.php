<?php
/* Smarty version 3.1.33, created on 2019-01-14 04:06:47
  from '/usr/users2/mieec2011/ee11287/public_html/trabalhosSiem/trabalhoPHP-2/templates/common/menu_logged_in.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c3c0ad76d42c3_13687676',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9bc4036aea040115cc59daf813e67d6403bce155' => 
    array (
      0 => '/usr/users2/mieec2011/ee11287/public_html/trabalhosSiem/trabalhoPHP-2/templates/common/menu_logged_in.tpl',
      1 => 1547429956,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c3c0ad76d42c3_13687676 (Smarty_Internal_Template $_smarty_tpl) {
?>
<span class="username" href='#' onclick="mostrar('logout')"><?php echo $_smarty_tpl->tpl_vars['USERNAME']->value;?>
 &there4;</span>
<form method="post" id="logout"><p><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/pages/perfil.php">-Meu Perfil</a>
<p><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/actions/users/logout.php">-Logout</a></form>

<?php }
}
