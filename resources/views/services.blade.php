@extends('layouts.index', ['title' => 'Услуги'])
@section('content')
<main class="main">
  <section class="service">
    <div class="container">
      <div class="service__title section-title-text"><b>Услуги</b></div>
      <div class="service-row">

        @foreach($works as $work)
        <div class="service-item" data-key="{{$work->id}}">
          <img src="{{asset('img/services/' . $work->work_img)}}" alt="" class="item__img">
          <div class="item__title section-title-text">{{$work->work_title}}</div>
          <div class="item-info">
            <p><b>Описание:</b> {{$work->description}}</p>
            <p><b>Цена:</b> от {{$work->price / 1000}} тыс. ₽</p>
            <p><b>Продолжительность:</b> до {{$work->duration / 60}} ч.</p>
          </div>
        </div>
        @endforeach
      </div>
      <button onclick="show()" class="btn service-btn section-title-text">
        Онлайн запись
      </button>
    </div>
  </section>
</main>
@endsection