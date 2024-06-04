<?php
// Практическая №2.1: Управляющие конструкции if и switch
// 1. Напишите проверку количества элементов в массивах ​ $categories​и $publisher​ , если они пусты - выведите "элементов нет".

$categories = array("Фантастика", "Роман", "Детская литература", "Научно-популярное");
$publisher = array("Мир книги", "АСТ", "Эксмо");

if (empty($categories) && empty($publisher)) {
    echo "элементов нет";
} elseif (empty($categories)) {
    echo "элементов нет в категориях книг";
} elseif (empty($publisher)) {
    echo "элементов нет в издателях книг";
}

// 2. При помощи switch, в центральной части index.php, сопоставьте и выведите слова (для index - Главная, basket - Корзина, contacts - Контакты, delivery - Доставка, login - Вход) заголовках h1.

$page = 'index';


$pageTitles = [
    'index' => 'Главная',
    'basket' => 'Корзина',
    'contacts' => 'Контакты',
    'delivery' => 'Доставка',
    'login' => 'Вход'
];

switch ($page) {
    case 'index':
        $title = $pageTitles['index'];
        break;
    case 'basket':
        $title = $pageTitles['basket'];
        break;
    case 'contacts':
        $title = $pageTitles['contacts'];
        break;
    case 'delivery':
        $title = $pageTitles['delivery'];
        break;
    case 'login':
        $title = $pageTitles['login'];
        break;
    default:
        $title = 'Страница сайта';
}

echo "<h1>{$title}</h1>";


// 3. Если останется время, при помощи if сформируйте корректно фразу "N товаров", для любого целого положительного N

$n = 221;

$nn = $n % 100;

if ($nn >= 11 && $nn <= 14)
    $product = "товаров";
else {
    $nnn = $n % 10;
    if ($nnn == 1)
        $product = "товар";
    elseif ($nnn >= 2 && $nnn <= 4)
        $product = "товара";
    else
        $product = "товров";
}

echo "В корзине: $n $product";

// другая вариация кода

$n = 221;

if (($n % 100) >= 11 && ($n % 100) <= 14) {
    $product = "товаров";
} else {
    if (($n % 10) == 1) {
        $product = "товар";
    } else {
        if (($n % 10) >= 2 && ($n % 10) <= 4) {
            $product = "товара";
        } else {
            $product = "товров";
        }
    }
}

echo "В корзине: $n $product";

?>