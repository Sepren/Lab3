<?php
    require_once "help-function.php";
    require_once "render.php";

    $email = $_POST['email'];
    $title = $_POST['title'];
    $text = $_POST['text'];
    $category = $_POST['category'];
    $filePath = $category . '/' .  $title . ".txt";

    $result = renderTemplate('site.php');
    echo $result;

?>
