@extends('layouts.app', ['title' => 'Редактирование данных услуги'])
@section('content')
<section class="edit">
    <div class="container">
        <div class="section-title">Редактирование услуги: {{ $service->work_title }}</div>
        <form action="{{ route('services.update', $service->id) }}" method="post" class="edit-form">
            @csrf
            @method('PUT')
            <input class="admin-field" placeholder="Новый заголовок" type="text" name="work_title" value="{{$service->work_title}}">
            <textarea class="admin-field" placeholder="Новое описание" type="text" name="description">{{$service->description}}</textarea>
            <input class="admin-field" placeholder="Новая цена(₽)" type="text" name="price" value="{{$service->price}}">
            <input class="admin-field" placeholder="Изменить длительность процедуры (мин.)" type="text" name="duration" value="{{$service->duration}}">
            <input class="btn" type="submit" value="применить">
        </form>
        <form class="edit-form" action="{{ route('services.updateImage', $service->id) }}" enctype="multipart/form-data" method="post">
            @csrf
            @method('PUT')
            <label for="new_service_img">
                <img src="/img/services/{{$service->work_img}}" alt="">
                Новое изображение услуги
            </label>
            <input type="file" name="work_img" id="new_service_img">
            <input class="btn" type="submit" value="обновить картинку">
        </form>
        <a href="/admin" class="btn">назад в админ панель</a>
    </div>
</section>
@endsection