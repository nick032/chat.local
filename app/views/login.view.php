<h1>Авторизация</h1>
<?php
    if(!empty($errors)){
        foreach ($errors as $error){
            echo "<div class='error'>$error</div>";
        }
    }
?>
<form action="/login" method="post">
    <label>Login <input type="text" name="name"></label>
    <label>Password <input type="password" name="pass"></label>
    <input type="submit" name="login" value="Login">
</form>

