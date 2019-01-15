{include file='common/header.tpl'}

<div class="recent">
<section id="register">
  <h2>Perfil de {$USERNAME}</h2>

  <h1>Alterações</h1>
  <div><span class="username" href='#' onclick="Alterar('nome')">-Nome</span></div>
  <form method="post" id="nome" action="{$BASE_URL}/actions/users/alterar.php">
  <input type="text" placeholder="Novo Nome" name="username">
  <input type="submit" value="Alterar nome">
  </form>
  <div><span class="username" href='#' onclick="Alterar('senha')">-Senha</span></div>
  <form method="post" id="senha" action="{$BASE_URL}/actions/users/password.php">
  <input type="text" placeholder="Nova Senha" name="password">
  <input type="submit" value="Alterar Senha">
  </form>


</section>
</div>












{include file='common/footer.tpl'}