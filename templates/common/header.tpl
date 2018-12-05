<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        
        <title>Page Title</title>
        <link rel="stylesheet" type="text/css"  href="{$BASE_URL}/css/style.css">
    </head>

    <body>
    <header>
        <div class="top">
            <section id="login">
            <form action="{$BASE_URL}actions/users/login.php" method="post">
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
                            <li><a href="{$BASE_URL}/pages/filmes.php">Filmes</a></li>
                            <li><a href="#">Inserir</a></li>
                        </ul>
                    </nav>
                    <div class="search">
                        Pesquisa
                    </div>
        <section id="login">
        <form action="{$BASE_URL}/actions/users/login.php" method="post">
            <input type="text" placeholder="username" name="username">
            <input type="password" placeholder="password" name="password">
            <input type="submit" value="Login">
            <a href="{$BASE_URL}/pages/users/register.php">Register</a>
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
                                    <li><a href="#">Inserir</a></li>
                                </ul>
                            </nav>
                            <div class="search">
                                Pesquisa
                            </div>
                        </div>
