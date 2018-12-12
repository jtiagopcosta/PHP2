<?php
/* Smarty version 3.1.33, created on 2018-12-05 13:09:49
  from '/usr/users2/2018/up201803231/public_html/trabalhosSiem/newpage/php2/templates/common/header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c07ce1dc90dd7_99228510',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b651c099660fa53880f91fcfb8817426a346b4fc' => 
    array (
      0 => '/usr/users2/2018/up201803231/public_html/trabalhosSiem/newpage/php2/templates/common/header.tpl',
      1 => 1544015385,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c07ce1dc90dd7_99228510 (Smarty_Internal_Template $_smarty_tpl) {
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
            <form action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/actions/users/login.php" method="post">
                <input type="text" placeholder="username" name="username">
                <input type="password" placeholder="password" name="password">
                <input type="submit" value="Login">
                <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/pages/users/register.php">Register</a>
            </form>
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

                        <!-- Autorizador -->
                                <?php if ($_smarty_tpl->tpl_vars['_SESSION']->value['tipo'] == 'admin') {?>
                                <li><a href="#">Inserir</a></li>
                                <?php }?>
                                
                            </ul>
                        </nav>
                        <div class="search">
                            Pesquisa
                        </div>
                    </div>
<?php }
}
