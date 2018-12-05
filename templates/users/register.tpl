{include file='common/header.tpl'}
<div class="recent">
<section id="register">
  <h2>Register</h2>

  <form action="{$BASE_URL}/actions/users/register.php" method="post">
    <label>Realname: <input type="text" name="realname" value=""></label>
    <label>Username: <input type="text" name="username" value=""></label>
    <label>Password: <input type="password" name="password" value=""></label>
    <input type="submit" value="Register">
  </form>

</section>
</div>

{include file='common/footer.tpl'}