@extends('layouts.app', ['title' => 'Редактирование данных работы'])
@section('content')
<section class="edit">
    <div class="container">
        <div class="section-title">Редактирование данных портфолио</div>
        <form action="{{ route('portfolio.update', $item->id) }}" method="post" class="edit-form">
            @csrf
            @method('PUT')
            <input class="admin-field" placeholder="Новый заголовок" type="text" name="title" value="{{$item->title}}">
            <input class="btn" type="submit" value="применить">
        </form>
        <form class="edit-form" action="{{ route('portfolio.updateImage', $item->id) }}" enctype="multipart/form-data" method="post">
            @csrf
            @method('PUT')
            <label for="new_portfolio_img">
                <img src="/img/portfolio/{{$item->image}}" alt="">
                Новое изображение услуги
            </label>
            <input type="file" name="image" id="new_portfolio_img">
            <input class="btn" type="submit" value="обновить картинку">
        </form>
        <a href="/admin" class="btn">назад в админ панель</a>
    </div>
</section>
@endsection