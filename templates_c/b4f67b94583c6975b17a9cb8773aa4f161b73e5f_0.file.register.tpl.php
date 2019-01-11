<?php
/* Smarty version 3.1.33, created on 2018-12-19 16:50:49
  from '/usr/users2/2018/up201803231/public_html/trabalhosSiem/newpage/php2/templates/users/register.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c1a76e90ed4a5_38220599',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b4f67b94583c6975b17a9cb8773aa4f161b73e5f' => 
    array (
      0 => '/usr/users2/2018/up201803231/public_html/trabalhosSiem/newpage/php2/templates/users/register.tpl',
      1 => 1545237996,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:common/header.tpl' => 1,
    'file:common/footer.tpl' => 1,
  ),
),false)) {
function content_5c1a76e90ed4a5_38220599 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="recent">
<section id="register">
  <h2>Register</h2>

  <form action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/actions/users/register.php" method="post">
    <input type="text" name="realname" value="" placeholder="Realname" required></label>
      <input type="text" name="username"
         value="<?php if (isset($_smarty_tpl->tpl_vars['FORM_VALUES']->value)) {
echo $_smarty_tpl->tpl_vars['FORM_VALUES']->value['username'];
}?>"
         placeholder="Username">
    <input type="password" name="password" value="" placeholder="Password" required></label>
    <input type="submit" value="Register">
  </form>

</section>
</div>

<?php $_smarty_tpl->_subTemplateRender('file:common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
