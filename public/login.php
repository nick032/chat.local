<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Авторизация</title>
</head>
<body>
    <div class="wrapper">
        <div class="login-form">
            <form action="/auth" method="post">
                <input type="text" name="userName">
                <input type="submit" name="login">
            </form>
        </div>
    </div>
</body>
</html>