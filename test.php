<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Test page</title>
</head>

<body>

  <?php

  echo "top bar";

  // include "template2/header.php"; //warning
  //require "template2/header.php"; //Fatal error якщо неправильний шлях template2

  // include "template/header.php";
  // include_once "template/header.php"; //щоб не дублювалось підключення компоненту або бібліотеки, перевірить якщо вже підключено, то проігнорує друге підкдлючення

  require "template/header.php";
  require_once "template/header.php"; //аналогічно include_once


  echo "content <br>";

  echo "color: " . $color //отримуємо доступ до всіх змінних з файлу header.php


  ?>

</body>

</html>