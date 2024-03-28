@extends('layouts.index')
@section('content')
<main class="main">
  <section class="service">
    <div class="container">
      <div class="service__title section-title-text"><b>Заголовок</b></div>
      <div class="service-row">
        <div class="service-item">
          <img src="{{asset('img/beautiful-young-woman-going-through-microblading-treatment 2.png')}}" alt="" class="item__img">
          <div class="item__title section-title-text">название услуги</div>
          <div class="item-info section-item-text">
            <p><b>Описание:</b> Текст какой то, пара слов тут будет об услуге. Буквально 2-3 предложения: как делают, какие плюсы там и т. д.</p>
            <p><b>Цена:</b> 1000₽</p>
            <p><b>Продолжительность:</b> 35 мин.</p>
          </div>
        </div>
      </div>
      <button onclick="show()" class="btn service-btn section-title-text">
        Онлайн запись
      </button>
    </div>
  </section>
</main>
@endsection