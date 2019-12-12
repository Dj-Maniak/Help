<?php
$login = $_POST['login'];
$password = $_POST['password'];


$text = fopen("test.txt", "r"); // Открытие файла
$array = null;

if ($text) {
//    var_dump($text);
    while (($buffer = fgets($text)) !== false) { // Чтение файла
        $array[] = explode(' ', $buffer);
    }
    fclose($text); //Закрытие файла
}

//var_dump($array);die;


foreach ($array as $value) {
    $LoginComparison = $value[0];
    $PasswordComparison = $value[1];

    if (trim($login) === trim($LoginComparison) and trim($password) === trim($PasswordComparison)) {
        echo "Ваш логин: $LoginComparison";
        var_dump($LoginComparison);die;
    } else {
        Header('Location: /lessons/index.php'); die;
    };

};


/*
 * $fp = fopen($login . ".txt", "w"); // Создает новый файл в режиме записи
        $mytext = "Для наглядности"; // Исходная строка
        fputs($fp, $mytext); // Запись в файл
        fclose($fp); //Закрытие файлає
 */


?>