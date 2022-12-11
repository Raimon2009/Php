<?php
while (true) {
    $userAnswer = (int)readline("«В каком году произошло крещение Руси?». Варианты: 810, 990 или 740 год\n");
    if ($userAnswer == 990) {
        echo 'Молодец!';
        break;
    } elseif ($userAnswer == 810 || $userAnswer == 740) {
        echo 'Неверно, вы проиграли';
        break;
    } else {
        echo "Выберите один из предложенных вариантов!\n";
    }
}
