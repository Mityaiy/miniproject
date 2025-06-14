<?php

$file = "book.txt";
$date = date("d.m.Y H:i");
$name = $_POST['name'];
$text = strip_tags(trim($_POST['txt']));
$text = str_replace("/n", "", $text);

if (!empty($name) && !empty($text)) {
    $f = fopen($file, "a");
    fputs($f, '<div class="note"><p><span class="date">'.$date.'</span><span class="name">'.$name.'</span></p><p>'.$txt.'</p>');

    $random = time();
    Header("Location: http://{SERVER['SERVER_NAME']}{SERVER['SCRIPT_NAME']}?$random#form");
    exit;
}

$arr = @file($file);

if (!is_array($arr)) $arr = [];

?>