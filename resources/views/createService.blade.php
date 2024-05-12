@extends('layouts.app', ['title' => 'Создание услуги'])
@section('content')
<section class="edit">
    <div class="container">
        <div class="section-title">Создание услуги</div>
        <form action="{{ route('services.create') }}" enctype="multipart/form-data" method="post" class="edit-form">
            @csrf
            <input class="admin-field" placeholder="Заголовок" type="text" name="work_title">
            <textarea class="admin-field" placeholder="Описание" type="text" name="description"></textarea>
            <input class="admin-field" placeholder="Цена(₽)" type="number" name="price">
            <input class="admin-field" placeholder="Длительность процедуры (мин.)" type="number" name="duration">
            <label for="service_img">
                Обложка услуги
            </label>
            <input type="file" name="work_img" id="service_img">
            <input class="btn" type="submit" value="добавить">
        </form>
        <a href="/admin" class="btn">Назад в админ панель</a>
    </div>
</section>
@endsection