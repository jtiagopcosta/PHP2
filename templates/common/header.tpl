<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        
        <title>Page Title</title>
        <link rel="stylesheet" type="text/css"  href="{$BASE_URL}/css/style.css">
    </head>

    <body>
    <header>            
        <div class='top'>
        <section id="login">
        {if isset($USERNAME)}
        {include file='common/menu_logged_in.tpl'}
        {else}                  
        {include file='common/menu_logged_out.tpl'}
        {/if}
        
            <form action="{$BASE_URL}/actions/users/login.php" method="post">
                <input type="text" placeholder="username" name="username">
                <input type="password" placeholder="password" name="password">
                <input type="submit" value="Login">            
                <a href="{$BASE_URL}/pages/users/register.php">Register</a>
                </form>
            
        </section>
        </div>
        <section id="messages">
        {if isset($ERROR_MESSAGES)}
        {foreach $ERROR_MESSAGES as $error}
        <div class="error">{$error}</div>
        {/foreach}
         {/if}
        </section>
        <section id="messages">
        {if isset($SUCCESS_MESSAGES)}
        {foreach $SUCCESS_MESSAGES as $success}
        <div class="success">{$success}</div>
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
                                <li><a href="#">Em destaque</a></li>
                                <li><a href="#">Filmes</a></li>

                        <!-- Autorizador 
                                {if $_SESSION['tipo']=='admin'}
                                <li><a href="#">Inserir</a></li>
                                {/if}-->
                                
                            </ul>
                        </nav>
                        <div class="search">
                            Pesquisa
                        </div>
                    </div>
