@extends('layouts.app', ['title' => 'Админ-панель'])
@section('content')
<div class="main">
  <section class="admin">
    <div class="container">
      <div class="section-title">Админ панель</div>

      <div class="admin-dashboard">
        <button class="btn active">Обо мне</button><button class="btn">Важно знать</button><button class="btn">Заявки</button>
      </div>
      <div class="admin-content">
        <form class="content-form active" action="/change_assets" method="post">
          @csrf
          <label class="admin-field" for="admin-file">Загрузить логотип</label>
          <input id="admin-file" type="file">
          <label class="admin-field" for="admin-file">Загрузить фото на главной</label>
          <input id="admin-file" type="file">
          <input class="admin-field" type="text" placeholder="Введите новый заголовок для главной">
          <button class="btn">Применить</button>
        </form>
        <form class="content-form" action="" method="post">
          <label class="admin-field" for="guide-file">Загрузить файл</label>
          <input id="guide-file" type="file">
          <button class="btn">Применить</button>
        </form>
        <form class="content-form" action="/delete" method="post">
          @foreach($orders as $order)
          <div class="order-item">
            <div class="order-row"><span>Время</span> - <span>{{ $order->procedure_time }}</span></div>
            <div class="order-row"><span>Мастер</span> - <span>{{ $order->master_name }}</span></div>
            <button>Снять запись</button>
          </div>
          @endforeach
        </form>
      </div>
    </div>
  </section>
</div>
@endsection