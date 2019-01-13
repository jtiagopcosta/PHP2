<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        
        <title>Cinéfilos</title>
        <link rel="stylesheet" type="text/css"  href="{$BASE_URL}/css/style.css">
        <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
        <script src="{$BASE_URL}/javascript/main.js" Defer></script>
    </head>

    <body>
    <header>            
        <div class='top'>
        <section id="login">
        {if isset($USERNAME)}
        {include file='common/menu_logged_in.tpl'}
        {else}                  
        {include file='common/menu_logged_out.tpl'}
                <form action="{$BASE_URL}/actions/users/login.php" method="post">
                <input type="text" placeholder="username" name="username">
                <input type="password" placeholder="password" name="password">
                <input type="submit" value="Login">            
                <a href="{$BASE_URL}/pages/users/register.php">Register</a>
                </form>
        {/if}
        </section>
        </div>
        
        <section id="messages">
        {if isset($ERROR_MESSAGES)}
        {foreach $ERROR_MESSAGES as $error}
        <div class="error"><a class='erro'>{$error}<a class="close" href="#"><img src="{$BASE_URL}/img/erro.png" height='30px' weight='30px'></a></div>
        {/foreach}
        {/if}
        {if isset($SUCCESS_MESSAGES)}
        {foreach $SUCCESS_MESSAGES as $success}
        <div class="success">{$success} <a class="close" href="#"><img src="{$BASE_URL}/img/correct.png" height='30px' weight='30px'></a></div>
        {/foreach}
        {/if}
        </section>
        
        
            <div class="main_container">
                <div class="container">
                    
                    <div class="header">
                        Cinéfilos
                    </div>
                    <div class="menu">
                        <nav>
                            <ul>
                                <li><a href="{$BASE_URL}">Em destaque</a></li>
                                <li><a href="{$BASE_URL}/pages/filmes.php">Filmes</a></li>

                         
                                {if (isset($ADMINISTRADOR))}
                                <li><a href="{$BASE_URL}/pages/inserir.php">Inserir Filme</a></li>
                                {/if}
                                
                            </ul>
                        </nav>
                        <div class="search">
                            <form method="POST" action="filmespesquisados.php">
                            <input type="text" placeholder="Pesquisar" name="pesquisa">
                        </div>
                    </div>
