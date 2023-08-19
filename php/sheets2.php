<?php
    // формируем запись в таблицу google (изменить)
    $url = "https://docs.google.com/forms/u/0/d/e/1FAIpQLSfHMfmTgKIJB1GBgYkSoww87i4MhRxkc2HdaQX5GpGPMzyg2w/formResponse";
    // массив данных (изменить entry, draft и fbzx)
    $post_data = array (
        "entry.840897666" => $_POST['user_geo'],
        "entry.1507696762" => $_POST['user_tel'],
        "entry.2104004045" => $_POST['UTM'],

        "partialResponse" => "[null,null,&quot;7807694506673619319&quot;]",
        "pageHistory" => "0",
        "fbzx" => "7807694506673619319"
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