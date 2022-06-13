<?php
// 5. Спросите дату рождения пользователя. При следующем заходе на сайт 
// напишите сколько дней осталось до его дня рождения. 
// Если сегодня день рождения пользователя - поздравьте его!

// Формирование текущей даты
echo date("Сегодня: d.m.Y") . '<br>';

// Формирование формы запроса дня рождения
?>
<h4>Введите день своего рождения</h4>
<form action="" method="post">
    <input type="date" name="my_date" placeholder="date"><br><br>
    <input type="submit" name="submit_3"><br><br>
</form>
<?php


if (!empty($_POST['my_date'])) {
    $date = $_POST['my_date'];
    setcookie('date', $date, time() + 60);
    $_COOKIE['date'] = $_POST['my_date'];
    if (!empty($_COOKIE['date'])) {
        // Формирование дня рождения в новом формате
        $my_dr = $_COOKIE['date'];
        $my_dr = str_split($my_dr, 1);
        $my_day = $my_dr[8] . $my_dr[9];
        $my_month = $my_dr[5] . $my_dr[6];
        $my_year = $my_dr[0] . $my_dr[1] .  $my_dr[2] . $my_dr[3];
        $my_dr = $my_day . '.' . $my_month . '.' . $my_year;
        // Вывод на экран моего дня рождения в новом формате
        echo "Вы родились: {$my_dr} <br><br>";
        // Расчет остатка дней до дня рождения
        $arr = explode('.', $my_dr);
        $tm = mktime(0, 0, 0, $arr[1], $arr[0], date('Y'));
        if ($tm < time()) $tm = mktime(0, 0, 0, $arr[1], $arr[0], date('Y') + 1);
        $rem_days = intval(($tm - time()) / 86400) + 1;
        // Вывод на экран поздравления с днем рождения или остатка дней до дня рождения
        $day = date('d');
        $month = date('m');
        if ($day == $my_day && $month == $my_month) {
            echo "Мы Вас поздравляем! У Вас сегодня День рождения. Желаем всего наилучшего!" . '<br>';
        } else {
            echo "До Вашего дня рождения осталось: " . $rem_days . " день (дня, дней)";
        }
    }
}
