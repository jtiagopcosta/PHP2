<?php
/* Smarty version 3.1.33, created on 2018-12-12 12:17:23
  from '/usr/users2/mieec2011/ee11287/public_html/trabalhosSiem/trabalhoPHP-2/templates/common/header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c10fc53f0dda9_42517816',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '63b24f7f1868167d2fd7954e029150daeffe9658' => 
    array (
      0 => '/usr/users2/mieec2011/ee11287/public_html/trabalhosSiem/trabalhoPHP-2/templates/common/header.tpl',
      1 => 1544616943,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c10fc53f0dda9_42517816 (Smarty_Internal_Template $_smarty_tpl) {
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
