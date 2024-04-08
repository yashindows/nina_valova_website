@extends('layouts.index', ['title' => 'Главная'])
@section('content')
@foreach($assets as $assets)
<main class="main">
  <section class="banner">
    <div class="container" style="padding-inline: 0">
      <div class="banner-text">
        <p class="top-text">Студия перманентного макияжа</p>
        <h1 class="title">{{$assets->title}}</h1>
        <p class="bottom-text">
          дипломированный специалист в области перманентного макияжа
        </p>
        <button onclick="show()" class="btn banner-btn section-title-text">
          ОНЛАЙН-ЗАПИСЬ
        </button>
      </div>
      <div class="banner-img">
        <img src="{{asset('img/' . $assets->main_image)}}" alt="banner-image" />
      </div>
    </div>
  </section>
  <section class="quick-info">
    <div class="container">
      <img class="quick-info__image" src="{{asset('img/ivy-aralia-nizar-420dKcPcvAE-unsplash 1.png')}}" alt="" />
      <div class="info">
        <p class="info-title section-title-text">
          ПЕРМАНЕНТНЫЙ МАКИЯЖ ПРОЦЕДУРА, КОТОРАЯ ВЫПОЛНЯЕТСЯ В ДВА ЭТАПА:
        </p>
        <ol class="info-list">
          <li class="info__item section-item-text">Первичная процедура</li>
          <li class="info__item section-item-text">
            Процедура коррекции, которая обязательно должна быть проведена
            через 1-2 месяца после первичной процедуры.
          </li>
        </ol>
        <p class="info-warning section-item-text">
          БЕЗ КОРРЕКЦИИ ПРОЦЕДУРА СЧИТАЕТСЯ НЕЗАКОНЧЕННОЙ
        </p>
      </div>
    </div>
  </section>
</main>
@endforeach
@endsection