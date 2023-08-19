<?php
    // формируем запись в таблицу google (изменить)
    $url = "https://docs.google.com/forms/d/1DA9da4e_CUlEgYTGRkkp5_BvqHmixuUtRd9h05QVJx8/formResponse";
    // массив данных (изменить entry, draft и fbzx)
    $post_data = array (
        "entry.1756475279" => $_POST['user_tel'],
        "entry.42620187" => $_POST['step_1'],
        "entry.549824396" => $_POST['step_2'],
        "entry.1894573399" => $_POST['step_3'],
        "entry.665673133" => $_POST['step_4'],
        "entry.1423957838" => $_POST['step_5'],
        "entry.593256620" => $_POST['UTM'],

        "partialResponse" => "[null,null,&quot;8868137953439023220&quot;]",
        "pageHistory" => "0",
        "fbzx" => "8868137953439023220"
    );

    // Далее не трогать
    // с помощью CURL заносим данные в таблицу google
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    // указываем, что у нас POST запрос
    curl_setopt($ch, CURLOPT_POST, 1);
    // добавляем переменные
    curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data);
    //заполняем таблицу google
    $output = curl_exec($ch);
    curl_close($ch);

?>