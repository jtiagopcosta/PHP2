<?php
/* Smarty version 3.1.33, created on 2018-12-14 17:21:23
  from '/usr/users2/2018/up201803231/public_html/trabalhosSiem/newpage/php2/templates/common/header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c13e6936dc1e0_79950236',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b651c099660fa53880f91fcfb8817426a346b4fc' => 
    array (
      0 => '/usr/users2/2018/up201803231/public_html/trabalhosSiem/newpage/php2/templates/common/header.tpl',
      1 => 1544808046,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:common/menu_logged_in.tpl' => 1,
    'file:common/menu_logged_out.tpl' => 1,
  ),
),false)) {
function content_5c13e6936dc1e0_79950236 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        
        <title>Page Title</title>
        <link rel="stylesheet" type="text/css"  href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/css/style.css">
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
        
        <div class= 'messages'>
        <section id="messages">
            <?php if (isset($_smarty_tpl->tpl_vars['ERROR_MESSAGES']->value)) {?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ERROR_MESSAGES']->value, 'error');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['error']->value) {
?>
                    <div class="error"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</div>
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
                    <div class="success"><img src="../../img/correct.png" height='30px' weight='30px'> <?php echo $_smarty_tpl->tpl_vars['success']->value;?>
</div>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php }?>
        </section>
        </div>
        
        
            <div class="main_container">
                <div class="container">
                    
                    <div class="header">
                        Cinéfilos
                    </div>
                    <div class="menu">
                        <nav>
                            <ul>
                                <li><a href="#">Em destaque</a></li>
                                <li><a href="#">Filmes</a></li>

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
