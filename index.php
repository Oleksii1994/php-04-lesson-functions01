   <?php require_once "engine/math.php"; ?>

   <!DOCTYPE html>
   <html lang="en">

   <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Lesson PHP</title>
   </head>

   <body>
     <?php
      require_once 'template/header.php';


      // function countSum($num1, $num2, $num3 = 1, $num4 = 2) //аргументи як локальні змінні, не конфліктують з глобальними
      // {
      //   echo $num1 + $num2 + $num3 + $num4;
      //   echo "<br>";
      // };

      if (function_exists("countSum")) {
        echo "exist <br>";

        echo countSum(6, 7) . "<br>"; // спроба різного синтаксису виводу


        $num1 = 10; //глобальні змінні
        $num2 = 11; //

        $sum = countSum($num1, $num2, 5, 0);
        echo $sum . "<br>";         // спроба різного синтаксису виводу, аналог коду вище але через присвоєння змінній

      } else {
        echo "doesn't exist <br>";
      }


      if (!function_exists("subtract")) { ///відштовхуємось від зворотнього, якщо функції не існує, то створюємо її
        function subtract($num1, $num2)
        {
          return $num1 - $num2;
        }
      }


      echo subtract(5, 7) . "<br>";

      echo countSubtraction($num1, $num2);


      require_once 'template/footer.php';

      ?>

   </body>

   </html>