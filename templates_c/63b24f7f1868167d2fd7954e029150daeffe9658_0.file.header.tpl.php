<?php
/* Smarty version 3.1.33, created on 2018-12-05 12:23:45
  from '/usr/users2/mieec2011/ee11287/public_html/trabalhosSiem/trabalhoPHP-2/templates/common/header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c07c351b9a236_13596024',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '63b24f7f1868167d2fd7954e029150daeffe9658' => 
    array (
      0 => '/usr/users2/mieec2011/ee11287/public_html/trabalhosSiem/trabalhoPHP-2/templates/common/header.tpl',
      1 => 1544012564,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c07c351b9a236_13596024 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        
        <title>Page Title</title>
        <link rel="stylesheet" type="text/css"  href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/css/style.css">
    </head>

    <body>
        <div class="top">
            <section id="login">
            <form action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/users/login.php" method="post">
                <input type="text" placeholder="username" name="username">
                <input type="password" placeholder="password" name="password">
                <input type="submit" value="Login">
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
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/pages/filmes.php">Filmes</a></li>
                            <li><a href="#">Inserir</a></li>
                        </ul>
                    </nav>
                    <div class="search">
                        Pesquisa
                    </div>
                </div>
<?php }
}
