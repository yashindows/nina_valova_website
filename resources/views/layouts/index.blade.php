<!DOCTYPE html>
<html lang="rus">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  @vite(['resources/css/app.css'])
  @vite(['resources/js/app.js'])
  <title>{{$title}}</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="shortcut icon" href="/logo-favicon.svg" type="image/x-icon" />
</head>

<body>
  <div class="wrapper">
    <header class="header">
      <div class="container">
        <div class="header-navigation">
          <a href="{{ route('main.index') }}" class="header-logo">
            <img src="/logo.svg" alt="logo" />
          </a>
          <nav class="header-menu">
            <ul class="menu__body">
              <li class="menu__item">
                <a href="{{ route('about') }}" class="menu__link">ОБО МНЕ</a>
              </li>
              <li class="menu__item">
                <a href="{{ route('services.index') }}" class="menu__link">УСЛУГИ</a>
              </li>
              <li class="menu__item">
                <a href="{{ route('portfolio.index') }}" class="menu__link">ПОРТФОЛИО</a>
              </li>
              <li class="menu__item">
                <a href="{{ route('guide') }}" class="menu__link">ВАЖНО ЗНАТЬ</a>
              </li>
              <li class="menu__item">
                <a href="{{ route('contacts') }}" class="menu__link">КОНТАКТЫ</a>
              </li>
            </ul>
          </nav>
        </div>
        <div class="header-info-wrapper">
          <div class="header-info">
            <div class="info-box">
              <img src="{{asset('img/icons/location.svg')}}" alt="icon" />
              <div class="box-text">
                <p>Москва,<br />Нахимовский проспект 7 к1</p>
              </div>
            </div>
            <div class="info-box">
              <img src="{{asset('img/icons/phone.svg')}}" alt="icon" />
              <div class="box-text">
                <a class="phone" href="tel:+79257317383">+7 (925) 731-73-83</a>
                <p class="phone-label">Обратный звонок</p>
              </div>
              <p></p>
            </div>
          </div>
          <div class="menu-icon">
            <span></span>
            <span></span>
            <span></span>
          </div>
        </div>
      </div>
    </header>
    @yield('content')
    </main>
    <footer class="footer">
      <div class="container">
        <img class="footer-logo" src="./public/logo.svg" alt="" />
        <span>© Все права защищены</span>
      </div>
    </footer>
    <dialog>
      <div class="dialog-title section-title-text">Заполните форму и ожидайте звонка</div>
      <button class="close-popup" onclick="closeModal()">
        <i class="fa-solid fa-xmark"></i>
      </button>
      <form action="">
        <input placeholder="Ваше имя" class="popup-input section-item-text" type="text" />
        <input placeholder="Ваш телефон" class="popup-input section-item-text" type="text" />
        <input class="btn popup-input" type="submit" />
      </form>
    </dialog>
  </div>
  <script>
    const popup = document.querySelector("dialog")

    function show() {
      popup.showModal()
    }

    function closeModal() {
      popup.close()
    }
  </script>
</body>

</html>