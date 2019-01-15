<?php
/* Smarty version 3.1.33, created on 2019-01-15 02:44:55
  from '/usr/users2/2018/up201803231/public_html/trabalhosSiem/newpage/php2/templates/common/menu_logged_in.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c3d4927486434_64942411',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '391b4e579ee6fc689e5e0b587151a917c6be5d90' => 
    array (
      0 => '/usr/users2/2018/up201803231/public_html/trabalhosSiem/newpage/php2/templates/common/menu_logged_in.tpl',
      1 => 1547520255,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c3d4927486434_64942411 (Smarty_Internal_Template $_smarty_tpl) {
?>
<span class="username" href='#'><?php echo $_smarty_tpl->tpl_vars['USERNAME']->value;?>
 &there4;</span>
<div id="logout" class = "generos">
    <span class="logout" href='#'><a class = "aba"><img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/img/teste.png" height='20px' weight='20px'></a></span>

    <form method="post" >
        <p><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/pages/perfil.php" class = "abas">-Alterações</a> <br>
    
        <p><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/actions/users/logout.php" class = "abas">-Logout</a>
    </form>


<?php }
}
