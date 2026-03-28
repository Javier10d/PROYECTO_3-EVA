<h1>Login</h1>

<?php if (isset($error)) echo $error; ?>

<form method="POST">
    <input name="email" placeholder="Email">
    <input type="password" name="password" placeholder="Password">
    <button type="submit">Login</button>
</form>

<a href="index.php?accion=registro">Registrarse</a>