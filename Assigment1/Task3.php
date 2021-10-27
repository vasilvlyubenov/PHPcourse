<?php

//Напишете php програмка, която извежда факториела на  5, 8 и 10. 
//(Факториел на число е произведението на всички цели числа от 1 до него, включително. 
//Пример: факториел 5 е равен на 1 * 2 * 3 * 4 * 5.)


// Използвам същия метод, който използвах и за задачата за събиране на итерациите

$resultFact1 = 1; // Създавам променлива, която ще изпозваме за да намираме произведение за всяка итерация
$resultFact2 = 1;
$resultFact3 = 1;


for($i = 1; $i <= 5; $i++){  // Създаваме цикъл за да изведем числата, за намиране на "5!"
    $resultFact1 = $resultFact1 * $i;  // умножаваме итерациите една със друга.
}
echo 'Factorial of 5 is: ' . $resultFact1 . '<br/>';  // Извеждаме резултата на екрана

for($i = 1; $i <= 8; $i++){  // Създаваме цикъл за да изведем числата, за намиране на "8!"
    $resultFact2 = $resultFact2 * $i;  // умножаваме итерациите една със друга.
}
echo 'Factorial of 8 is: ' . $resultFact2 . '<br/>';  // Извеждаме резултата на екрана

for($i = 1; $i <= 10; $i++){  // Създаваме цикъл за да изведем числата, за намиране на "10!"
    $resultFact3 = $resultFact3 * $i;  // умножаваме итерациите една със друга.
}
echo 'Factorial of 10 is: ' . $resultFact3 . '<br/>';  // Извеждаме резултата на екрана

