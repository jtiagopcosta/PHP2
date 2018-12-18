{include file='common/header.tpl'}
<div class="recent">
<section id="register">
  <h2>Register</h2>

  <form action="{$BASE_URL}/actions/users/register.php" method="post">
    <input type="text" name="realname" value="" placeholder="Realname" required></label>
    <input type="text" name="username" value="" placeholder="Username" required></label>
    <input type="password" name="password" value="" placeholder="Password" required></label>
    <input type="submit" value="Register">
  </form>

</section>
</div>

{include file='common/footer.tpl'}