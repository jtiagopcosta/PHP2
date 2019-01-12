<?php
/* Smarty version 3.1.33, created on 2019-01-12 19:30:17
  from '/usr/users2/2018/up201803231/public_html/trabalhosSiem/newpage/php2/templates/pages/filmepage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c3a40490d5675_44911123',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5a628133f76ddb6bc654c7ce26ec733e0e26372f' => 
    array (
      0 => '/usr/users2/2018/up201803231/public_html/trabalhosSiem/newpage/php2/templates/pages/filmepage.tpl',
      1 => 1545235605,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:common/header.tpl' => 1,
    'file:common/footer.tpl' => 1,
  ),
),false)) {
function content_5c3a40490d5675_44911123 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<!--Retirado a função Foreach, por ja ter os dados vindo do Fetch por completo-->
<div class="pagfilme">
    <img class="imagem_filme" src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;
echo $_smarty_tpl->tpl_vars['filme']->value['imagem'];?>
">

    <div class="dados">
            <span> olá <?php echo $_smarty_tpl->tpl_vars['filme']->value['nome'];?>
</span>
    </div>
</div>
 
<?php $_smarty_tpl->_subTemplateRender('file:common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
