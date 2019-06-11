<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Подключение jQuery и Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">
    <title>Task</title>
</head>
<body>
        <!-- Хидер -->
        <div class="header">
            <div>
                <p><b>Телефон (999) 999 99 99</b></p>
                <p><b>Email: mail@mail.mail</b></p>
                <h1>Комментарии</h1>
            </div>
            <!-- Я пытался сделать логотип справа. Не вышло -->
            <!-- <div id="header">
                <img src="https://media.licdn.com/dms/image/C560BAQEajOhY9wxvXw/company-logo_200_200/0?e=2159024400&v=beta&t=Y6FfGn2DcRMfAJ0aT7zFTrKm-xV1bZjKivGDsYKeUpU" alt="">
            </div> -->
        </div>

        <!-- Тело -->
        <div class="body">

        <!-- Попытка выводить данные из БД в таблице.
        Пытался выровнять Имя и дату, как в шаблоне. Средствами CSS не
        удалось, поэтому попробовал таблицу. Но тогда сообщения тоже в одну строку.
        Попытка провалилась, но решил оставить, т.к. тестовое задание.
        Просто закомментировал -->

        <!-- <table id="msg_table"></table> -->
        <p id="msg_table"></p>
        <hr>

        <!-- Форма -->
            <div class="msg_form">
                <h2>Оставить комментарий</h2>

                <form id="msg_form">
                    <div class="form-group">
                        <label for="name">Ваше имя</label>
                        <input type="text" name="name" id="name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="comment">Ваш комментарий</label>
                        <textarea name="msg" rows="8" cols="80" class="form-control" id="comment"></textarea>
                    </div>
                    <input type="submit" value="Отправить" id="btn">
                </form>

            </div>
        </div>

        <!-- Футер -->
        <div class="footer">
            <div>
                <img id="img1" src="https://media.licdn.com/dms/image/C560BAQEajOhY9wxvXw/company-logo_200_200/0?e=2159024400&v=beta&t=Y6FfGn2DcRMfAJ0aT7zFTrKm-xV1bZjKivGDsYKeUpU" alt="">
            </div>
            <div class="right_footer">
                <p><b>Телефон (999) 999 99 99</b></p>
                <div>
                    <span>Email:</span>
                    <a href="" style="color: black;"><b><u>mail@mail.mail</u></b></a>
                </div>
                <div>
                    <span>Adress:</span>
                    <a href="" style="color: black;"><b><u>Город Н Улица М Дом М Строение С</u></b></a>
                </div>
                <p>&copy 2010-2014</p>
            </div>
        </div>
    </div>

    <!-- Скрипт. Отправляет в БД данные из формы и получает из обработчика. -->
    <script type="text/javascript">
        $("#msg_form").submit(function(){
            let str = $(this).serialize();

            $.ajax({
                type: "POST",
                url: "write.php",
                data: str,
                success: function(){
                    $("#msg_form")[0].reset();
                }
            });
            show();

            return false;
        });

        function show(){
            $.ajax({
                url: "read.php",
                success: function(html){
                    $("#msg_table").html(html);
                }
            })
        };

        //Вызов функции в первый раз, чтобы загрузить первые сообщения при загрузке страницы.
        show();
    </script>
</body>
</html>
