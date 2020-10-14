<form method="POST" action="<?php $_SERVER['PHP_SELF'];?>">
    <label for="first_name">First Name</label>
    <input type="text" name="firstName">
    <br>
    <label for="last_name">Last Name</label>
    <input type="text" name="lastName">
    <br>
    <label for="email">Email</label>
    <input type="email" name="email">
    <br>
    <label for="username">username</label>
    <input type="text" name="username">
    <br>
    <label for="password">password</label>
    <input type="password" name="password">
    <br>
    <br>
    <input type="submit" value="submit" name="submit">
    <input type="reset">
</form>