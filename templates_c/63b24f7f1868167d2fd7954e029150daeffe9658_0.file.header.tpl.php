<?php
/* Smarty version 3.1.33, created on 2018-12-18 11:06:25
  from '/usr/users2/mieec2011/ee11287/public_html/trabalhosSiem/trabalhoPHP-2/templates/common/header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c18d4b1546899_37866802',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '63b24f7f1868167d2fd7954e029150daeffe9658' => 
    array (
      0 => '/usr/users2/mieec2011/ee11287/public_html/trabalhosSiem/trabalhoPHP-2/templates/common/header.tpl',
      1 => 1545131179,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:common/menu_logged_in.tpl' => 1,
    'file:common/menu_logged_out.tpl' => 1,
  ),
),false)) {
function content_5c18d4b1546899_37866802 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        
        <title>Cinéfilos</title>
        <link rel="stylesheet" type="text/css"  href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/css/style.css">
        <?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-2.2.4.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/javascript/main.js" Defer><?php echo '</script'; ?>
>
    </head>

    <body>
    <header>            
        <div class='top'>
        <section id="login">
        <?php if (isset($_smarty_tpl->tpl_vars['USERNAME']->value)) {?>
        <?php $_smarty_tpl->_subTemplateRender('file:common/menu_logged_in.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php } else { ?>                  
        <?php $_smarty_tpl->_subTemplateRender('file:common/menu_logged_out.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                <form action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/actions/users/login.php" method="post">
                <input type="text" placeholder="username" name="username">
                <input type="password" placeholder="password" name="password">
                <input type="submit" value="Login">            
                <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/pages/users/register.php">Register</a>
                </form>
        <?php }?>
        </section>
        </div>
        
        <section id="messages">
        <?php if (isset($_smarty_tpl->tpl_vars['ERROR_MESSAGES']->value)) {?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ERROR_MESSAGES']->value, 'error');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['error']->value) {
?>
        <div class="error"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
<a class="close" href="#"><img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/img/erro.png" height='30px' weight='30px'></a></div>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <?php }?>
        <?php if (isset($_smarty_tpl->tpl_vars['SUCCESS_MESSAGES']->value)) {?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['SUCCESS_MESSAGES']->value, 'success');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['success']->value) {
?>
        <div class="success"><?php echo $_smarty_tpl->tpl_vars['success']->value;?>
 <a class="close" href="#"><img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/img/correct.png" height='30px' weight='30px'></a></div>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <?php }?>
        </section>
        
        
            <div class="main_container">
                <div class="container">
                    
                    <div class="header">
                        Cinéfilos
                    </div>
                    <div class="menu">
                        <nav>
                            <ul>
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
">Em destaque</a></li>
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/pages/filmes.php">Filmes</a></li>

                        <!-- Autorizador 
                                <?php if ($_smarty_tpl->tpl_vars['_SESSION']->value['tipo'] == 'admin') {?>
                                <li><a href="#">Inserir</a></li>
                                <?php }?>-->
                                
                            </ul>
                        </nav>
                        <div class="search">
                            Pesquisa
                        </div>
                    </div>
<?php }
}
