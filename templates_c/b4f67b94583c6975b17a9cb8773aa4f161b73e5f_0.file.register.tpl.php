<?php
/* Smarty version 3.1.33, created on 2018-12-12 11:40:52
  from '/usr/users2/2018/up201803231/public_html/trabalhosSiem/newpage/php2/templates/users/register.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c10f3c48e0e53_36415696',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b4f67b94583c6975b17a9cb8773aa4f161b73e5f' => 
    array (
      0 => '/usr/users2/2018/up201803231/public_html/trabalhosSiem/newpage/php2/templates/users/register.tpl',
      1 => 1544614838,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:common/header.tpl' => 1,
    'file:common/footer.tpl' => 1,
  ),
),false)) {
function content_5c10f3c48e0e53_36415696 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="recent">
<section id="register">
  <h2>Register</h2>

  <form action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/actions/users/register.php" method="post">
    <label>Realname: <input type="text" name="realname" value=""></label>
    <label>Username: <input type="text" name="username" value=""></label>
    <label>Password: <input type="password" name="password" value=""></label>
    <input type="submit" value="Register">
  </form>

</section>
</div>

<?php $_smarty_tpl->_subTemplateRender('file:common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}