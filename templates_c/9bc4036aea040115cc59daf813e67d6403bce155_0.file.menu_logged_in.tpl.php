<?php
/* Smarty version 3.1.33, created on 2019-01-15 04:30:41
  from '/usr/users2/mieec2011/ee11287/public_html/trabalhosSiem/trabalhoPHP-2/templates/common/menu_logged_in.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c3d61f17ed986_29541180',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9bc4036aea040115cc59daf813e67d6403bce155' => 
    array (
      0 => '/usr/users2/mieec2011/ee11287/public_html/trabalhosSiem/trabalhoPHP-2/templates/common/menu_logged_in.tpl',
      1 => 1547526636,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c3d61f17ed986_29541180 (Smarty_Internal_Template $_smarty_tpl) {
?>
<span class="username" href='#'><?php echo $_smarty_tpl->tpl_vars['USERNAME']->value;?>
 &there4;</span>
<div id="logout" class = "generos">
    <span class="logout" href='#'><a class = "aba"><img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/img/teste.png" height='20px' weight='20px'></a></span>

    <form method="post" >
        <p><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/pages/perfil.php" class = "abas">Perfil</a> <br>
    
        <p><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/actions/users/logout.php" class = "abas">Logout</a>
    </form>


<?php }
}
