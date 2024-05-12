@extends('layouts.app', ['title' => 'Админ-панель'])
@section('content')
<div class="main">
  <section class="admin">
    <div class="container">
      <div class="section-title">Админ панель</div>
      <div class="admin-body">
        <div class="admin-dashboard">
          <button class="btn active">Главная</button>
          <button class="btn">Важно знать</button>
          <button class="btn">Записи</button>
          <button class="btn">Услуги</button>
          <button class="btn">Портфолио</button>
          <button class="btn">Контакты</button>
        </div>
        <div class="admin-content">
          <div class="content-form active" method="post">
            @csrf
            @foreach($assets as $asset)
            <form action="" method="post" class="edit-form">
              <input class="admin-field" type="text" value="{{ $asset->title }}" placeholder="Введите новый заголовок для главной">
              <button class="btn">Применить</button>
            </form>
            <form action="" class="edit-form" method="post">
              <label class="admin-field" for="admin-file">Загрузить логотип</label>
              <input id="admin-file" type="file">
              <button class="btn">Изменить логотип</button>
            </form>
            <form action="" method="post" class="edit-form">
              <label class="admin-field" for="admin-file">Загрузить фото на главной</label>
              <input id="admin-file" type="file">
              <button class="btn">Изменить фото на главной</button>
            </form>
            @endforeach
          </div>
          <form class="content-form" action="" method="post">
            @csrf
            <label class="admin-field" for="guide-file">Загрузить файл</label>
            <input id="guide-file" type="file">
            <button class="btn">Применить</button>
          </form>
          <div class="content-form">
            @foreach($orders as $order)
            <form class="order-item" method="POST" action="{{ route('orders.destroy', $order->id) }}">
              @csrf
              @method('DELETE')
              <div class="order-info">
                <div><span>Время</span> - <span>{{ $order->procedure_time }}</span></div>
                <div><span>Мастер</span> - <span>{{ $order->master_name }}</span></div>
              </div>
              <button>Снять запись</button>
            </form>
            @endforeach
          </div>
          <div class="content-form">
            @foreach($services as $service)
            <form method="POST" action="{{ route('services.destroy', $service->id) }}" class="order-item">
              @csrf
              @method('DELETE')
              <div class="work-info">
                <img src="/img/services/{{$service->work_img}}" alt="">
                {{ $service->work_title }}
              </div>

              <div class="btns">
                <a href="{{ route('edit_service.show', $service->id) }}">Редактировать</a>
                <button>Удалить</button>
              </div>

            </form>
            @endforeach
          </div>
          <div action="" class="content-form">
            @foreach($portfolio as $item)
            <form method="POST" action="{{ route('portfolio.destroy', $item->id) }}" class="order-item">
              @csrf
              @method('DELETE')
              <div class="work-info">
                <img src="/img/portfolio/{{$item->image}}" alt="">
                {{ $item->title }}
              </div>

              <div class="btns">
                <a href="{{ route('edit_portfolio.show', $item->id) }}">Редактировать</a>
                <button>Удалить</button>
              </div>

            </form>
            @endforeach
          </div>
          <form action="" class="content-form">
            @csrf
            @foreach($assets as $asset)
            <input name="main_city" class="admin-field" type="text" placeholder="Введите новый город" value="{{ $asset->city }}">
            <input name="main_address" class="admin-field" type="text" placeholder="Введите новый адрес" value="{{ $asset->address }}">
            <input name="main_phone" class="admin-field" type="text" placeholder="Введите новый телефон" value="+{{ $asset->phone }}">
            <input name="main_email" class="admin-field" type="text" placeholder="Введите новый Email" value="{{ $asset->email }}">
            <button class="btn">Применить</button>
            @endforeach
          </form>
        </div>
      </div>
    </div>
  </section>
</div>
@endsection