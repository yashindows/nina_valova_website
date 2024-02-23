@extends('layouts.index')
@section('content')
<div style="position: relative; overflow: hidden; flex: 1 1 auto">
        <a
          href="https://yandex.ru/maps/213/moscow/?utm_medium=mapframe&utm_source=maps"
          style="color: #eee; font-size: 12px; position: absolute; top: 0px"
          >Москва</a
        ><a
          href="https://yandex.ru/maps/213/moscow/house/nakhimovskiy_prospekt_7k1/Z04YcAZhSEMAQFtvfXp3cnxmYQ==/?ll=37.611167%2C55.663055&utm_medium=mapframe&utm_source=maps&z=17.12"
          style="color: #eee; font-size: 12px; position: absolute; top: 14px"
          >Нахимовский проспект, 7к1 — Яндекс Карты</a
        ><iframe
          src="https://yandex.ru/map-widget/v1/?ll=37.611167%2C55.663055&mode=whatshere&whatshere%5Bpoint%5D=37.611695%2C55.662923&whatshere%5Bzoom%5D=17&z=17.12"
          width="100%"
          frameborder="1"
          allowfullscreen="true"
          style="position: absolute; height: 100%"
        ></iframe>
      </div>
      <article class="contacts-card">
        <div class="contacts-title">КОНТАКТЫ</div>
        <div class="contacts-info">
          <div class="info__address">
            <p class="info__title">АДРЕС:</p>
            <p>Москва, Нахимовский проспект 7 к1</p>
          </div>
          <div class="info__phone">
            <p class="info__title">ТЕЛЕФОН:</p>
            <a class="contact__link" href="tel:+79257317383"
              >+7 (925) 731-73-83</a
            >
          </div>
          <div class="info__email">
            <p class="info__title">E-MAIL:</p>
            <a class="contact__link" href="mailto:ninavalova2202@gmail.com"
              >ninavalova2202@gmail.com</a
            >
          </div>
        </div>
        <div class="contacts-media">
          <a href=""
            ><img src="{{asset('img/icons/whatsapp-icon.svg')}}" alt="media-icon"
          /></a>
          <a href=""
            ><img src="{{asset('img/icons/instagram-icon.svg')}}" alt="media-icon"
          /></a>
          <a href=""
            ><img src="{{asset('img/icons/telegram-icon.svg')}}" alt="media-icon"
          /></a>
        </div>
      </article>
@endsection