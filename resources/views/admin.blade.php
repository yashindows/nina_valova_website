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
            <form action="{{ route('main.updateTitle', $asset->id) }}" method="post" class="edit-form">
              @csrf
              @method('PUT')
              <input class="admin-field" type="text" value="{{ $asset->title }}" name="title" placeholder="Введите новый заголовок для главной">
              <button class="btn">Применить</button>
            </form>
            <form action="{{ route('main.updateLogo', $asset->id) }}" enctype="multipart/form-data" class="edit-form" method="post">
              @csrf
              @method('PUT')
              <label class="admin-field" for="logo-file">
                <img src="/{{ $asset->logo }}" alt="">
                Загрузить логотип
              </label>
              <input id="logo-file" type="file" name="logo">
              <button class="btn">Изменить логотип</button>
            </form>
            <form action="{{ route('main.updateMainImg', $asset->id) }}" enctype="multipart/form-data" class="edit-form" method="post">
              @csrf
              @method('PUT')
              <label class="admin-field" for="main-file">
                <img src="/img/{{ $asset->main_image }}" alt="">
                Загрузить фото на главной</label>
              <input id="main-file" name="main_image" type="file">
              <button class="btn">Изменить фото на главной</button>
            </form>
            @endforeach
          </div>
          <form class="content-form" action="/uploadPDF" enctype="multipart/form-data" method="post">
            @csrf
            <label class="admin-field" for="guide-file">Загрузить файл</label>
            <input id="guide-file" type="file" name="pdf_file">
            <button class="btn">Применить</button>
          </form>
          <div class="content-form">
            <a href="/create_orderTime" class="btn">Новое время для записи</a>
            <div class="section-title">
              Занятые записи
            </div>
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
            <div class="section-title">
              Доступные записи
            </div>
            @foreach($procedures as $procedure)
            <form class="order-item" method="POST" action="{{ route('procedures.destroy', $procedure->id) }}">
              @csrf
              @method('DELETE')
              <div class="order-info">
                <div>
                  <span>Дата</span> - <span>{{ $procedure->procedure_date }}</span>
                </div>
              </div>
              <button>Удалить</button>
            </form>
            @endforeach
          </div>
          <div class="content-form">
            <a href="/create_service" class="btn">Добавить услугу</a>
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
          <div class="content-form">
            <a href="create_portfolioWork" class="btn">Добавить работу</a>
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
          <div class="content-form">
            @foreach($assets as $asset)
            <form action="{{ route('main.updateContacts', $asset->id) }}" class="edit-form" method="post">
              @csrf
              @method('PUT')
              <input name="city" class="admin-field" type="text" placeholder="Введите новый город" value="{{ $asset->city }}">
              <input name="address" class="admin-field" type="text" placeholder="Введите новый адрес" value="{{ $asset->address }}">
              <input name="phone" class="admin-field" type="number" placeholder="Введите новый телефон" value="{{ $asset->phone }}">
              <input name="email" class="admin-field" type="text" placeholder="Введите новый Email" value="{{ $asset->email }}">
              <button class="btn">Применить</button>
            </form>
          </div>
          @endforeach
        </div>
      </div>
    </div>
  </section>
</div>
@endsection