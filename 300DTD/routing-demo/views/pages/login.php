<h2>Login</h2>

<form 
    hx-post="<?= SITE_BASE?>/login"
    hx-trigger="submit"
    >

<lable>Username</lable>
<input name="user" type="text" required>

<lable>Password</lable>
<input name="pass" type="password" required>

<input type="submit" value="login" required>

</form> 