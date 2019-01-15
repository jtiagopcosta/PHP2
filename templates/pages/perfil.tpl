{include file='common/header.tpl'}

<div class="recent">
<section id="register">

  <h1>Alterar dados</h1>
  <div><span class="nomeperfil" href='#'>-Nome</span></div>
  <div id="nome"> 
  <span class="fechanome" href='#'><a class = "abat"><img src="{$BASE_URL}/img/teste.png" height='20px' weight='20px'></a></span>
  <form method="post"  action="{$BASE_URL}/actions/users/alterar.php">
  <input type="text" placeholder="Novo Nome" name="username" value="{$USERNAME}">
  <input type="submit" value="Alterar nome">
  </div>
  </form>
  
  <div><span class="senhaperfil" href='#'>-Senha</span></div>
  <div id="senha">
  <span class="fechasenha" href='#'><a class = "abat"><img src="{$BASE_URL}/img/teste.png" height='20px' weight='20px'></a></span>
  <form method="post"  action="{$BASE_URL}/actions/users/password.php">
  <input type="text" placeholder="Nova Senha" name="password">
  <input type="submit" value="Alterar Senha">
  </div>
  </form>
  


</section>
</div>












{include file='common/footer.tpl'}