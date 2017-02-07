<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo PUBLIC_DIR ?>style.css">
    <title>Чат</title>
</head>
<body>
    <div class="container">
        <div class="chat">
            <div class="chat-head">
                <h1>Чат</h1>
            </div>
            <div class="chat-content clearfix">
                <div class="chat-sidebar">
                    <div class="nickname">nick</div>
                    <div class="nickname">mahot</div>
                    <div class="nickname">sasha</div>
                </div>
                <div class="chat-messages">
                    <div class="message">Сообщение 1</div>
                    <div class="message">Сообщение 2</div>
                    <div class="message">Сообщение 3</div>
                    <div class="my-message">Мое сообщение 1</div>
                    <div class="message">Сообщение 4</div>
                    <div class="my-message">Мое сообщение 2</div>
                </div>
            </div>
           <div class="chat-panel">
               <div class="panel-form">
                   <input type="text" name="txt-msg">
                   <input type="submit" name="send" value="enter">
                   <button>Smile</button>
               </div>
           </div>
        </div>
    </div>
</body>
</html>
