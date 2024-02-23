@extends('layouts.index')
@section('content')
        <main class="main">
          <section class="banner">
            <div class="container">
              <div class="banner-text">
                <p class="top-text">Студия перманентного макияжа</p>
                <h1 class="title">NINA VALOVA</h1>
                <p class="bottom-text">
                  дипломированный специалист в области перманентного макияжа
                </p>
                <button onclick="show()" class="btn banner-btn">
                  ОНЛАЙН-ЗАПИСЬ
                </button>
              </div>
              <div class="banner-img">
                <img src="{{asset('img/banner-img.png')}}" alt="banner-image" />
              </div>
            </div>
          </section>
          <section class="quick-info">
            <div class="container">
              <img
                class="quick-info__image"
                src="{{asset('img/ivy-aralia-nizar-420dKcPcvAE-unsplash 1.png')}}"
                alt=""
              />
              <div class="info">
                <p class="info-title">
                  ПЕРМАНЕНТНЫЙ МАКИЯЖ ПРОЦЕДУРА, КОТОРАЯ ВЫПОЛНЯЕТСЯ В ДВА ЭТАПА:
                </p>
                <ol class="info-list">
                  <li class="info__item">Первичная процедура</li>
                  <li class="info__item">
                    Процедура коррекции, которая обязательно должна быть проведена
                    через 1-2 месяца после первичной процедуры.
                  </li>
                </ol>
                <p class="info-warning">
                  БЕЗ КОРРЕКЦИИ ПРОЦЕДУРА СЧИТАЕТСЯ НЕЗАКОНЧЕННОЙ
                </p>
              </div>
            </div>
          </section>
        </main>
@endsection