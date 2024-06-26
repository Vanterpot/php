<!doctype html>
<html lang="ru">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  <!-- Custom styles for this template -->
  <!-- <link href="starter-template.css" rel="stylesheet"> -->

  <title>PHP часть 1. Основы PHP</title>

  <style>
    .card-deck {
      margin-top: 20px
    }

    .card-body img {
      display: block;
      margin: 0 auto 15px;
    }

    .card-footer {
      background: transparent;
      border: 0;
    }
  </style>
</head>
<?php
include_once ("inc/config.php");

$firstName = "Иван";
$lastName = "Иванов";
$email = "iii@mail.ru.";
$address = "123456, г. Москва, ул. Ленина, д. 1";
$successOrder = "Благодарим за покупу, $firstName!";
$categories = array("Фантастика", "Роман", "Детская литература", "Научно-популярное");
$publisher = array("Мир книги", "АСТ", "Эксмо");

$book1 = array(
  "idbook" => 123,
  "title" => "Колобок",
  "author" => "Неизвестен",
  "price" => 99.99,
  "description" => "Это прекраная сказака которая не нуждается в описании."
);

$menu = array("Доставка", "Контакты", "Войти", "Корзина", "Dropdown", "Action", "Another action", "Something else here");

$page = "index";

?>

<body>






  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
      <a class="navbar-brand" href="/">Интернет-магазин Книжка</a>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="книгу.." aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Найти!</button>
      </form>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="delivery.php"><?php echo $menu[0] ?></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contacts.php"><?php echo $menu[1] ?></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="login.php"><?php echo $menu[2] ?></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="basket.php"><?php echo $menu[3] ?></a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
              <?php echo $menu[4] ?>
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#"><?php echo $menu[5] ?></a>
              <a class="dropdown-item" href="#"><?php echo $menu[6] ?></a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#"><?php echo $menu[7] ?></a>
            </div>
          </li>
        </ul>

      </div>
    </div>
  </nav>

  <div class="container">

    <div class="row">
      <div class="col-md-3 col-sm-3 ">

        <h4>Категория</h4>

        <div class="row">
          <a class="dropdown-item" href="#"><?php echo $categories[0] ?></a>
          <a class="dropdown-item" href="#"><?php echo $categories[1] ?></a>
          <a class="dropdown-item" href="#"><?php echo $categories[2] ?></a>
          <a class="dropdown-item" href="#"><?php echo $categories[3] ?></a>
          <a class="dropdown-item" href="#"><?php echo $categories[0] ?></a>
          <a class="dropdown-item" href="#"><?php echo $categories[1] ?></a>
          <a class="dropdown-item" href="#"><?php echo $categories[2] ?></a>
          <a class="dropdown-item" href="#"><?php echo $categories[3] ?></a>
          <a class="dropdown-item" href="#"><?php echo $categories[0] ?></a>
        </div>
        <hr>

        <h4>Цена</h4>

        <div class="row">
          <div class="input-group mb-1">
            <div class="input-group-prepend">
              <span class="input-group-text" id="inputGroup-sizing-default">от</span>
            </div>
            <input type="text" class="form-control" aria-label="Sizing example input"
              aria-describedby="inputGroup-sizing-default"> &nbsp;
            <div class="input-group-prepend">
              <span class="input-group-text" id="inputGroup-sizing-sm">до</span>
            </div>
            <input type="text" class="form-control" aria-label="Sizing example input"
              aria-describedby="inputGroup-sizing-default">&nbsp;

            <button type="button" class="btn btn-success">Найти</button>
          </div>
        </div>
        <hr>
        <h4>Издательство</h4>

        <div class="row">
          <ul class="list-group col-md-12 col-sm-12">
            <li class="list-group-item">
              <input type="checkbox" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1"><?php echo $publisher[0] ?></label>
            </li>
            <li class="list-group-item">
              <input type="checkbox" id="exampleCheck2">
              <label class="form-check-label" for="exampleCheck2"><?php echo $publisher[1] ?></label>
            </li>
            <li class="list-group-item">
              <input type="checkbox" id="exampleCheck3">
              <label class="form-check-label" for="exampleCheck3"><?php echo $publisher[2] ?></label>
            </li>
            <li class="list-group-item">
              <button type="button" class="btn btn-success">Найти</button>
            </li>
          </ul>

        </div>

        <hr>


      </div>

      <div class="col-md-9 col-sm-9 ">
        <h1>Каталог</h1>

        <div class="card-deck">
          <div class="card">
            <div class="card-body">
              <img src="http://placehold.it/150x220" alt="...">
              <h3 class="card-title">1200руб</h3>
              <p class="card-text"><small class="text-muted">Автор: dfgdfg</small></p>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
                content. Издательство: <a href="#">Полезное</a></p>
            </div>
            <div class="card-footer">
              <button type="button" class="btn btn-primary">В корзину</button>
            </div>
          </div>

          <div class="card">
            <div class="card-body">
              <img src="http://placehold.it/150x220" alt="...">
              <h3 class="card-title">800руб</h3>
              <p class="card-text"><small class="text-muted">Автор: sdgfgfg</small></p>
              <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
            </div>
            <div class="card-footer">
              <button type="button" class="btn btn-primary">В корзину</button>
            </div>
          </div>

          <div class="card">
            <div class="card-body">
              <img src="http://placehold.it/150x220" alt="...">
              <h3 class="card-title">2100руб</h3>
              <p class="card-text"><small class="text-muted">Автор: dfgd</small></p>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
                content.</p>
            </div>
            <div class="card-footer">
              <button type="button" class="btn btn-primary">В корзину</button>
            </div>
          </div>

        </div>


        <div class="card-deck">

          <div class="card">
            <div class="card-body">
              <img src="http://placehold.it/150x220" alt="...">
              <h3 class="card-title">1200руб</h3>
              <p class="card-text"><small class="text-muted">Автор: dfgdfg</small></p>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
                content. Издательство: <a href="#">Полезное</a></p>
            </div>
            <div class="card-footer">
              <button type="button" class="btn btn-primary">В корзину</button>
            </div>
          </div>

          <div class="card">
            <div class="card-body">
              <img src="http://placehold.it/150x220" alt="...">
              <h3 class="card-title">800руб</h3>
              <p class="card-text"><small class="text-muted">Автор: sdgfgfg</small></p>
              <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
            </div>
            <div class="card-footer">
              <button type="button" class="btn btn-primary">В корзину</button>
            </div>
          </div>

          <div class="card">
            <div class="card-body">
              <img src="http://placehold.it/150x220" alt="...">
              <h3 class="card-title">2100руб</h3>
              <p class="card-text"><small class="text-muted">Автор: dfgd</small></p>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
                content.</p>
            </div>
            <div class="card-footer">
              <button type="button" class="btn btn-primary">В корзину</button>
            </div>
          </div>

        </div>


      </div>


    </div>


  </div>

  <div class="container">


  </div><!-- /.container -->

  <?php include 'inc/footer.inc.php';
  ?>


  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
    crossorigin="anonymous"></script>
</body>

</html>