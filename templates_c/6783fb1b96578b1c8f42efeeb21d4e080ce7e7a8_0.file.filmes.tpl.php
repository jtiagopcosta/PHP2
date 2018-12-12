<?php
/* Smarty version 3.1.33, created on 2018-12-12 12:37:03
  from '/usr/users2/mieec2011/ee11287/public_html/trabalhosSiem/trabalhoPHP-2/templates/pages/filmes.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c1100efceb654_04717500',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6783fb1b96578b1c8f42efeeb21d4e080ce7e7a8' => 
    array (
      0 => '/usr/users2/mieec2011/ee11287/public_html/trabalhosSiem/trabalhoPHP-2/templates/pages/filmes.tpl',
      1 => 1544618207,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:common/header.tpl' => 1,
    'file:common/footer.tpl' => 1,
  ),
),false)) {
function content_5c1100efceb654_04717500 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="filmes">
    <div class="list">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['filmes']->value, 'filme');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['filme']->value) {
?>
    <div class="filme">
    <h1><?php echo $_smarty_tpl->tpl_vars['filme']->value['nome'];?>
<h1>
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam et velit arcu. Sed lacinia nulla et risus finibus lacinia nec nec orci. Morbi sed mauris quis felis tincidunt maximus. Vestibulum mollis aliquam quam, eu consectetur lectus porta id. Donec quis eros sed magna vestibulum ornare vel quis est. Nulla venenatis diam quis dolor pulvinar porta. In viverra purus non lectus dapibus mattis. Duis sodales nisl nec massa laoreet, eu lacinia justo tincidunt. Vivamus in ultricies lectus. Etiam orci risus, posuere sit amet leo eget, vulputate dapibus elit. Proin a lectus enim. Mauris vitae ipsum odio. Suspendisse tincidunt sem nec magna porttitor lacinia. Duis non fringilla purus. 
    </div>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        
    </div>
    <div class="generos">
    Lorem ipsum dolor sit amet
    </div>
</div>
<?php $_smarty_tpl->_subTemplateRender('file:common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
