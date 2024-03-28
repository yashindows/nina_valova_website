@extends('layouts.index')
@section('content')
<main class="main">
  <section class="service">
    <div class="container">
      <div class="service__title section-title-text">Заголовок</div>
      <div class="service-row">
        <div class="service-item">
          <div class="item__title">ПУДРОВОЕ НАПЫЛЕНИЕ БРОВЕЙ</div>
        </div>
        <div class="service-item">
          <div class="item__title">АППАРАТНЫЕ ВОЛОСКИ</div>
        </div>
        <div class="service-item">
          <div class="item__title">МИКРОБЛЭЙДИНГ</div>
        </div>
        <div class="service-item">
          <div class="item__title">
            ПЕРМАНЕНТ МЕЖРЕСНИЧНОГО ПРОСТРАНСТВА
          </div>
        </div>
        <div class="service-item">
          <div class="item__title">ПУДРОВОЕ НАПЫЛЕНИЕ ГУБ</div>
        </div>
        <div class="service-item">
          <div class="item__title">ПЕРЕКРЫТИЕ</div>
        </div>
      </div>
      <button onclick="show()" class="btn service-btn section-title-text">
        Онлайн запись
      </button>
    </div>
  </section>
</main>
@endsection