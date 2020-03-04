<?php
$arr_words = file('words.txt'); //file — Читает содержимое файла и помещает его в массив
// print_r($arr_words);
foreach ($arr_words as &$word) {
    $word = trim($word);
}
$words = implode('|', $arr_words);

if (preg_match("/$words/ui", $_POST['filter'])) {
    echo "False";
} else {
    echo "Succses";
}
