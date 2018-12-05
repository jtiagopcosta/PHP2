<?php
/* Smarty version 3.1.33, created on 2018-11-30 16:36:06
  from '/usr/users2/2018/up201803231/public_html/trabalhosSiem/newpage/php2/templates/pages/destaque.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c0166f6f0f888_23191901',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b614ea6b7653b8fe370becb686abc707c803df49' => 
    array (
      0 => '/usr/users2/2018/up201803231/public_html/trabalhosSiem/newpage/php2/templates/pages/destaque.tpl',
      1 => 1543430871,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:common/header.tpl' => 1,
    'file:common/footer.tpl' => 1,
  ),
),false)) {
function content_5c0166f6f0f888_23191901 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="recent">
                    <img class="image_recent" src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/img/lock.jpg">
                    <img class="image_recent" src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/img/john.jpg">
                    <img class="image_recent" src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/img/fight.jpg">
                    <img class="image_recent" src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/img/baby.jpg">
                    <img class="image_recent" src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/img/pulp.jpg">
                    <img class="image_recent" src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/img/drive.jpg">
                    <img class="image_recent" src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/img/donnie.jpg">

</div>

                
<?php $_smarty_tpl->_subTemplateRender('file:common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
