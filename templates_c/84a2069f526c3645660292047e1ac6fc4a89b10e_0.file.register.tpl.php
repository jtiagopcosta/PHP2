<?php
/* Smarty version 3.1.33, created on 2019-01-15 04:25:57
  from '/usr/users2/mieec2011/ee11287/public_html/trabalhosSiem/trabalhoPHP-2/templates/users/register.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c3d60d53fbc41_89316361',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '84a2069f526c3645660292047e1ac6fc4a89b10e' => 
    array (
      0 => '/usr/users2/mieec2011/ee11287/public_html/trabalhosSiem/trabalhoPHP-2/templates/users/register.tpl',
      1 => 1547526331,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:common/header.tpl' => 1,
    'file:common/footer.tpl' => 1,
  ),
),false)) {
function content_5c3d60d53fbc41_89316361 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="recent">
<section id="register">
  <h2>Registar</h2>

  <form action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/actions/users/register.php" method="post">
    <input type="text" name="realname" value="" placeholder="Nome" required></label>
    <input type="text" name="username"
         value="<?php if (isset($_smarty_tpl->tpl_vars['FORM_VALUES']->value)) {
echo $_smarty_tpl->tpl_vars['FORM_VALUES']->value['username'];
}?>"
         placeholder="Username">
    <input type="text" name="email" value="" placeholder="E-mail" required></label>
    <input type="password" name="password" value="" placeholder="Password" required></label>
    

    <h1>Escolha seu tipo de Usuário:</h1>
    <label class="containerCheck">Comum
      <input type="radio" checked="checked" name="nivel" value="0">
      <span class="checkmark"></span>
    </label>
    <label class="containerCheck">Administrador
      <input type="radio" name="nivel" value="1">
      <span class="checkmark"></span>
    </label>
    

    <input type="submit" value="Registar">
  </form>

</section>
</div>

<?php $_smarty_tpl->_subTemplateRender('file:common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
