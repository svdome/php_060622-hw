<?php
// 4. Удалите куку с именем test.

echo "Вот кука есть: " . $_COOKIE['test'];


if (isset($_COOKIE['test'])) {
    setcookie('test', ' ', time() - 60, '/', '', 0);
    unset($_COOKIE['test']);
}

var_dump($_COOKIE['test']); 