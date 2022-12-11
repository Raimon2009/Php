<?php
while (true) {
    $sumTime = 0;
    $userName = readline("Как вас зовут?");
    $userTask = (int)readline("Сколько задач вы хотите сделать сегодня?");
    $text = "$userName, сегодня у вас запланировано $userTask приоритетных задачи на день:\n";
    for ($i = 1; $i <= $userTask; $i++) {
        $userTarget = readline("Какая задача стоит перед вами сегодня?");
        $userTime = (int)readline("Сколько примерно времени эта задача займет?");
        $text .= " - $userTarget ({$userTime} ч)\n";
        $sumTime += $userTime;
    }
    echo $text;
    echo "Примерное время выполнение задач ({$sumTime}ч)";
    break;
}
