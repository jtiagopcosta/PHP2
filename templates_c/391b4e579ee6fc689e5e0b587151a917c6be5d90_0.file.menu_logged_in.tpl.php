<?php
/* Smarty version 3.1.33, created on 2019-01-13 19:10:37
  from '/usr/users2/2018/up201803231/public_html/trabalhosSiem/newpage/php2/templates/common/menu_logged_in.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c3b8d2d105397_18407723',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '391b4e579ee6fc689e5e0b587151a917c6be5d90' => 
    array (
      0 => '/usr/users2/2018/up201803231/public_html/trabalhosSiem/newpage/php2/templates/common/menu_logged_in.tpl',
      1 => 1547406621,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c3b8d2d105397_18407723 (Smarty_Internal_Template $_smarty_tpl) {
?>
<span class="username" href='#' onclick="mostrar('logout')"><?php echo $_smarty_tpl->tpl_vars['USERNAME']->value;?>
 &there4;</span>
<form method="post" id="logout"><p><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/pages/perfil.php">-Meu Perfil</a>
<p><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/actions/users/logout.php">-Logout</a></form>

<?php }
}
