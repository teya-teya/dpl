<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="images/icons8photo.png" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
      integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn"
      crossorigin="anonymous"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=El+Messiri:wght@400;700&family=Montserrat:wght@400;800&display=swap"
      rel="stylesheet"
    />
    <script
      src="https://kit.fontawesome.com/dc4f8560f3.js"
      crossorigin="anonymous"
    ></script>
  <link rel="stylesheet" href="css/index.css" />

  <title>Фотограф Асаева Вера</title>
</head>

<body>
  <!-- Main nav start -->
  <header>
    <nav class="navbar fixed-top navbar-expand-lg navbar-light main-nav nav-col">
      <a class="navbar-brand" href="/v_asaeva"><img src="images/5.png" alt="лого" /></a>
      <!-- бургерное меню -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Переключатель навигации">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse navbar-main" id="navbarSupportedContent">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="/v_asaeva">Фотограф Вера Асаева
              <span class="sr-only">(текущая)</span>
            </a>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="/gallery" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Галерея
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="/black&white">Black & White</a>
              <a class="dropdown-item" href="/colour">Colour</a>
            </div>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="public">Публикации</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="services">Услуги</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="reviews">Отзывы</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contacts">Контакты</a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Main nav end -->

  <!-- Content start -->
  <?php echo $content; ?>
  <!-- Content end -->


  <!-- Footer start -->
  <footer class="footer fixed-bottom py-2">
    <div class="container-fluid text-center">
      Copyright &copy;
      <script>
        document.write(new Date().getFullYear());
      </script>
      Design: teya-teya
    </div>
  </footer>
  <!-- Footer end -->

  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
</body>

</html>