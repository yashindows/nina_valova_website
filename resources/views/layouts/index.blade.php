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
      @if(isset($asset))
      <div class="container">
        <div class="header-navigation">
          <a href="{{ route('main.index') }}" class="header-logo">
            <img src='/{{$asset->logo}}' alt="logo" />
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
                <p>{{$asset->city}},<br />{{ $asset->address }}</p>
              </div>
            </div>
            <div class="info-box">
              <img src="{{asset('img/icons/phone.svg')}}" alt="icon" />
              <div class="box-text">
                <a class="phone formatted" href="tel:+{{$asset->phone}}">{{ $asset->phone }}</a>
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
      @else
      @foreach($assets as $asset)
      <div class="container">
        <div class="header-navigation">
          <a href="{{ route('main.index') }}" class="header-logo">
            <img src='/{{$asset->logo}}' alt="logo" />
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
                <p>{{$asset->city}},<br />{{ $asset->address }}</p>
              </div>
            </div>
            <div class="info-box">
              <img src="{{asset('img/icons/phone.svg')}}" alt="icon" />
              <div class="box-text">
                <a class="phone formatted" href="tel:+{{$asset->phone}}">{{ $asset->phone }}</a>
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
      @endforeach
      @endif
    </header>
    @yield('content')
    <footer class="footer">
      <div class="container">
        <img class="footer-logo" src="./public/logo.svg" alt="" />
        <span>© Все права защищены</span>
      </div>
    </footer>
    @if(isset($procedures))
    <dialog>
      <div class="dialog-title section-title-text">Онлайн запись</div>
      <button class="close-popup" onclick="closeModal()">
        <i class="fa-solid fa-xmark"></i>
      </button>
      <form id="regForm" method="post" action="/send">
        @csrf
        <!-- Одна "вкладка" для каждого этапа -->
        <div class="tab">
          <p><input name="name" class="popup-input section-item-text" style="text-transform: capitalize;" placeholder="Как к Вам обращаться" oninput="this.className = 'popup-input section-item-text'"></p>
          <p><input name="phone" value="+7" type="text" class="popup-input section-item-text tel" id="phone" placeholder="Телефон" oninput="this.className = 'popup-input section-item-text'"></p>
        </div>

        <div class="tab">
          <div class="time-section">
            <div class="section-title-text">Выберите день</div>
            <div class="time-item">
              @foreach($procedures as $procedure)
              <input type="radio" id="day{{ $procedure->id }}" name="day" value="{{$procedure->procedure_day}}" />
              <label for="day{{ $procedure->id }}">{{$procedure->procedure_day}}</label>
              @endforeach
            </div>
          </div>
        </div>
        <div class="tab">
          <div class="time-section">
            <div class="section-title-text">Выберите время</div>
            <div class="time-item">
              @foreach($procedures as $procedure)
              <input type="radio" id="time{{ $procedure->id }}" name="time" value="{{$procedure->procedure_time}}" />
              <label for="time{{ $procedure->id }}">{{$procedure->procedure_time}}</label>
              @endforeach
            </div>
          </div>
        </div>
        <div class="tab">
          <div class="time-section">
            <div class="section-title-text">Выберите услугу</div>
            <div class="time-item">
              @foreach($services as $service)
              <input type="radio" id="service{{ $service->id }}" name="service" value="{{$service->work_title}}" />
              <label for="service{{ $service->id }}">{{$service->work_title}}</label>
              @endforeach
            </div>
          </div>
        </div>
        <div class="tab">
          <div class="time-section">
            <div class="section-title-text">Выберите мастера</div>
            <div class="time-item">
              @foreach($masters as $master)
              <input type="radio" id="master_{{ $master->id }}" name="master" value="{{$master->name}}" />
              <label for="master_{{ $master->id }}">{{$master->name}}</label>
              @endforeach
            </div>
          </div>
        </div>
        <div style="overflow:auto;">
          <div style="float:right;">
            <button type="button" class="btn" id="prevBtn" onclick="nextPrev(-1)">Назад</button>
            <button type="button" class="btn" id="nextBtn" onclick="nextPrev(1)">Далее</button>
          </div>
        </div>

        <!-- Кружки, показывающие этапы формы -->
        <div style="text-align:center;margin-top:40px;">
          <span class="step"></span>
          <span class="step"></span>
          <span class="step"></span>
          <span class="step"></span>
          <span class="step"></span>
        </div>
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

    var currentTab = 0; // Устанавливаем первую (0) вкладку как текущую
    showTab(currentTab); // Отображаем текущую вкладку

    function showTab(n) {
      // Эта функция отображает заданную вкладку формы ...
      var x = document.getElementsByClassName("tab");
      x[n].style.display = "flex";
      // ... и фиксирует кнопки Назад/Дальше:
      if (n == 0) {
        document.getElementById("prevBtn").style.display = "none";
      } else {
        document.getElementById("prevBtn").style.display = "inline-block";
      }
      if (n == x.length - 1) {
        document.getElementById("nextBtn").innerHTML = "Записаться";
      } else {
        document.getElementById("nextBtn").innerHTML = "Далее";
      }
      // ... и запускает функцию, отображающую корректный индикатор этапа:
      fixStepIndicator(n);
    }

    function nextPrev(n) {
      // Это функция определяет какую вкладку отображать
      var x = document.getElementsByClassName("tab");
      // Выйти из функции, если какое-нибудь поле текущей вкладки заполнено неверно:
      if (n == 1 && !validateForm()) return false;
      // Скрыть текущую вкладку:
      x[currentTab].style.display = "none";
      // Увеличить или уменьшить номер текущей вкладки на 1:
      currentTab = currentTab + n;
      // если вы достигли конца формы... :
      if (currentTab >= x.length) {
        //...то данные формы отправляются на сервер:
        document.getElementById("regForm").submit();
        return false;
      }
      // Иначе, отображаем нужную вкладку:
      showTab(currentTab);
    }

    function validateForm() {
      // Это функция проверяет заполнение полей формы
      var x,
        y,
        i,
        valid = true;
      x = document.getElementsByClassName("tab");
      y = x[currentTab].getElementsByTagName("input");
      // Цикл, который проверяет каждое поле ввода текущей вкладки:
      for (i = 0; i < y.length; i++) {
        // Если поле пустое...
        if (y[i].value == "") {
          // добавляем ему класс "invalid":
          y[i].className += " invalid";
          // и устанавливаем текущий статус валидности в false:
          valid = false;
        }
      }
      // Если статус валидности true, помечаем этот шаг как завершенный и валидный:
      if (valid) {
        document.getElementsByClassName("step")[currentTab].className +=
          " finish";
      }
      return valid; // возвращаем статус валидности
    }

    function fixStepIndicator(n) {
      // Эта функция удаляет класс "active" у всех этапов...
      var i,
        x = document.getElementsByClassName("step");
      for (i = 0; i < x.length; i++) {
        x[i].className = x[i].className.replace(" active", "");
      }
      //... и добавляет класс "active" текущему этапу:
      x[n].className += " active";
    }

    window.addEventListener("DOMContentLoaded", function() {
      [].forEach.call(document.querySelectorAll('.tel'), function(input) {
        var keyCode;

        function mask(event) {
          event.keyCode && (keyCode = event.keyCode);
          var pos = this.selectionStart;
          if (pos < 3) event.preventDefault();
          var matrix = "+7 (___) ___ ____",
            i = 0,
            def = matrix.replace(/\D/g, ""),
            val = this.value.replace(/\D/g, ""),
            new_value = matrix.replace(/[_\d]/g, function(a) {
              return i < val.length ? val.charAt(i++) : a
            });
          i = new_value.indexOf("_");
          if (i != -1) {
            i < 5 && (i = 3);
            new_value = new_value.slice(0, i)
          }
          var reg = matrix.substr(0, this.value.length).replace(/_+/g,
            function(a) {
              return "\\d{1," + a.length + "}"
            }).replace(/[+()]/g, "\\$&");
          reg = new RegExp("^" + reg + "$");
          if (!reg.test(this.value) || this.value.length < 5 || keyCode > 47 && keyCode < 58) {
            this.value = new_value;
          }
          if (event.type == "blur" && this.value.length < 5) {
            this.value = "";
          }
        }

        input.addEventListener("input", mask, false);
        input.addEventListener("focus", mask, false);
        input.addEventListener("blur", mask, false);
        input.addEventListener("keydown", mask, false);

      });

    });
  </script>
  @endif
  <script>
    function formatPhoneNumber(phoneNumber) {
      const cleaned = ('' + phoneNumber).replace(/\D/g, '');
      const match = cleaned.match(/^(\d{1})(\d{3})(\d{3})(\d{2})(\d{2})$/);
      if (match) {
        return `+${match[1]} (${match[2]}) ${match[3]}-${match[4]}-${match[5]}`;
      }
      return null;
    }

    const phoneNumbers = document.querySelectorAll('.formatted');
    phoneNumbers.forEach(el => {
      const formattedPhoneNumber = formatPhoneNumber(el.innerText)
      el.innerText = formattedPhoneNumber
    })
  </script>
</body>

</html>