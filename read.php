<!-- Получение данных из БД -->

<?php
    require_once("connect.php");

    $query = "SELECT * FROM msg";
    $result = mysqli_query($link, $query) or die( mysqli_error($link) );

    for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);

    $max = count($data)-1;
    $min = $max - 3;

    //Если в БД менее 4х сообщений, то просто их выводим
    if($max < 4){
        for($i = $max; $i > -1; $i--){
            echo "<span id='left'><b>".$data[$i]["name"]."</b></span>";
            echo "<span id='right'>".$data[$i]["msgtime"]."</span>";
            echo "<p>".$data[$i]["text"]."</p>";
        }
    }
    // Выводим последние 3 сообщения
    else{
        for($i = $max; $i > $min; $i--){
            echo "<span id='left'><b>".$data[$i]["name"]."</b></span>";
            echo "<span id='right'>".$data[$i]["msgtime"]."</span>";
            echo "<p>".$data[$i]["text"]."</p>";
        }
    }


    // Выгрузка в таблицу. Неудачно. Сообщения в одну линию с именем и датой
    // if($max < 4){
    //     for($i = $max; $i > -1; $i--){
    //         echo "<tr>";
    //         echo "<td>".$data[$i]["name"]."</td>";
    //         echo "<td id='msg_time'>".$data[$i]["msgtime"]."</td>";
    //         echo "<td>".$data[$i]["text"]."</td>";
    //         echo "</tr>";
    //     }
    // }
    // else{
    //     for($i = $max; $i > $min; $i--){
    //         echo "<tr>";
    //         echo "<td>".$data[$i]["name"]."</td>";
    //         echo "<td id='msg_time'>".$data[$i]["msgtime"]."</td>";
    //         echo "<td>".$data[$i]["text"]."</td>";
    //         echo "</tr>";
    //     }
    // }
