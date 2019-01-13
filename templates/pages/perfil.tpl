{include file='common/header.tpl'}

<div class="recent">
<section id="register">
  <h2>Perfil de {$USERNAME}</h2>

  <span class="username" href='#' onclick="Alterar('nome')">->Alterações</span>
  <form method="post" id="nome" action="{$BASE_URL}/actions/users/alterar.php"><input type="text" placeholder="Novo Nome" name="username">
  <input type="text" placeholder="Nova Senha" name="password">
  <input type="submit" value="Mudar"></form>


</section>
</div>












{include file='common/footer.tpl'}