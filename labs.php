<?php
// Практическая №2.2: Циклические конструкции
// 1. При помощи циклов выведите содержимое массивов ​ $categories​и ​ $publisher​.

$categories = array("Фантастика", "Роман", "Детская литература", "Научно-популярное");
$publisher = array("Мир книги", "АСТ", "Эксмо");
foreach ($categories as $category)
    echo $category . "<br>";
foreach ($publisher as $pub)
    echo $pub . "<br>";
echo "<br>";

//Либо
$categories = array("Фантастика", "Роман", "Детская литература", "Научно-популярное");
$publisher = array("Мир книги", "АСТ", "Эксмо");

echo "Categories:";
for ($i = 0; $i < count($categories); $i++)
    echo "- " . $categories[$i] . " ";


echo "Publishers:";
for ($i = 0; $i < count($publisher); $i++)
    echo "- " . $publisher[$i] . " ";

echo "<br>";
echo "<br>";

//Либо
$categories = array("Фантастика", "Роман", "Детская литература", "Научно-популярное");
$publisher = array("Мир книги", "АСТ", "Эксмо");

echo "Categories:<br>";
$i = 0;
while ($i < count($categories)) {
    echo "- " . $categories[$i] . "<br>";
    $i++;
}

echo "Publishers:<br>";
$j = 0;
while ($j < count($publisher)) {
    echo "- " . $publisher[$j] . "<br>";
    $j++;
}

echo "<br>";
echo "<br>";

// 2. Если создавали ранее, выведите при помощи цикла ассоциативный массив $menu.
$menu = array(
    "Доставка" => "delivery.php",
    "Контакты" => "contacts.php",
    "Войти" => "login.php",
    "Корзина" => "basket.php",
    "Dropdown" => "Dropdown",
    "Action" => "#",
    "Another action" => "#",
    "Something else here" => "#"
);

foreach ($menu as $key => $value)
    echo $key . ': ' . $value . '<br>';


echo "<br>";
echo "<br>";

//Либо

$menu = array(
    "Доставка" => "delivery.php",
    "Контакты" => "contacts.php",
    "Войти" => "login.php",
    "Корзина" => "basket.php",
    "Dropdown" => "Dropdown",
    "Action" => "#",
    "Another action" => "#",
    "Something else here" => "#"
);

$keys = array_keys($menu);
$values = array_values($menu);

for ($i = 0; $i < count($keys); $i++)
    echo $keys[$i] . ': ' . $values[$i] . '<br>';


// 3. Создайте массив ​ $books​ , каждый элемент которого будет ассоциативным массивом типа $book (должен содержать ключи idbook, title,author, price, description), выведите книги на главной странице так, чтобы ссылка "В корзину" содержала путь типа "?add=idbook", где idbook - номер книги.
$books = array(
    array(
        'idbook' => 1,
        'title' => 'Книга 1',
        'author' => 'Автор 1',
        'price' => 1000,
        'description' => 'Описание книги 1'
    ),
    array(
        'idbook' => 2,
        'title' => 'Книга 2',
        'author' => 'Автор 2',
        'price' => 1500,
        'description' => 'Описание книги 2'
    ),
    array(
        'idbook' => 3,
        'title' => 'Книга 3',
        'author' => 'Автор 3',
        'price' => 2000,
        'description' => 'Описание книги 3'
    ),
    array(
        'idbook' => 4,
        'title' => 'Книга 4',
        'author' => 'Автор 4',
        'price' => 2500,
        'description' => 'Описание книги 4'
    ),
    array(
        'idbook' => 5,
        'title' => 'Книга 5',
        'author' => 'Автор 5',
        'price' => 3000,
        'description' => 'Описание книги 5'
    ),
    array(
        'idbook' => 6,
        'title' => 'Книга 6',
        'author' => 'Автор 6',
        'price' => 3500,
        'description' => 'Описание книги 6'
    ),
);
/* На индексовой странице скорректировал ссылки следующим образом.
<div class="card-footer">
  <a href="basket.php?add=1"><button type="button" class="btn btn-primary">В корзину</button></a>
</div>
<div class="card-footer">
  <a href="basket.php?add=2"><button type="button" class="btn btn-primary">В корзину</button></a>
</div>
<div class="card-footer">
  <a href="basket.php?add=3"><button type="button" class="btn btn-primary">В корзину</button></a>
</div>... и т.д.
*/
//4. На странице ​ basket.php ​выведите произвольное количество книг в разделе "Корзина"
# На странице basket.php разместил следующий код.
/*<div class="py-5 text-center">
      <h2>Оформление заказа</h2>
      <? $n = 221;

      if (($n % 100) >= 11 && ($n % 100) <= 14) 
        $product = "товаров";
       else 
        if (($n % 10) == 1) 
          $product = "товар";
         else 
          if (($n % 10) >= 2 && ($n % 10) <= 4) 
            $product = "товара";
           else 
            $product = "товров";

      echo "<h3>В корзине: $n $product </h3>";
      ?>
      <p class="lead">Внимательно заполните поля формы, проверьте корректность введённых данных и позиции товаров и их
        количество.</p>
    </div>
    */
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// Практическая №2.1: Управляющие конструкции if и switch
// 1. Напишите проверку количества элементов в массивах ​ $categories​и $publisher​ , если они пусты - выведите "элементов нет".

$categories = array("Фантастика", "Роман", "Детская литература", "Научно-популярное");
$publisher = array("Мир книги", "АСТ", "Эксмо");

if (empty($categories) && empty($publisher))
    echo "элементов нет";
elseif (empty($categories))
    echo "элементов нет в категориях книг";
elseif (empty($publisher))
    echo "элементов нет в издателях книг";


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

if (($n % 100) >= 11 && ($n % 100) <= 14)
    $product = "товаров";
else {
    if (($n % 10) == 1)
        $product = "товар";
    else {
        if (($n % 10) >= 2 && ($n % 10) <= 4)
            $product = "товара";
        else
            $product = "товров";

    }
}

echo "В корзине: $n $product";

?>
