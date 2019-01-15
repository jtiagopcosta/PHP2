{include file='common/header.tpl'}
<div class="recent">
<section id="register">
  <h2>Registar</h2>

  <form action="{$BASE_URL}/actions/users/register.php" method="post">
    <input type="text" name="realname" value="" placeholder="Nome" required></label>
    <input type="text" name="username"
         value="{if isset($FORM_VALUES)}{$FORM_VALUES.username}{/if}"
         placeholder="Username">
    <input type="text" name="email" value="" placeholder="E-mail" required></label>
    <input type="password" name="password" value="" placeholder="Password" required></label>
    

    <h1>Escolha seu tipo de Usuário:</h1>
    <label class="containerCheck">Comum
      <input type="radio" checked="checked" name="nivel" value="0">
      <span class="checkmark"></span>
    </label>
    <label class="containerCheck">Administrador
      <input type="radio" name="nivel" value="1">
      <span class="checkmark"></span>
    </label>
    

    <input type="submit" value="Registar">
  </form>

</section>
</div>

{include file='common/footer.tpl'}