<?php


if (!function_exists("countSum")) {
  function countSum($num1, $num2, $num3 = 1, $num4 = 2) //аргументи як локальні змінні, не конфліктують з глобальними
  {
    // echo $num1 + $num2 + $num3 + $num4;
    // echo "<br>";

    return $num1 + $num2 + $num3 + $num4;
  };
};

if (!function_exists("countSubtraction")) {

  function countSubtraction($num1, $num2) //аргументи як локальні змінні, не конфліктують з глобальними
  {
    // echo $num1 - $num2;
    // echo "<br>";

    return $num1 - $num2;
  };
}
