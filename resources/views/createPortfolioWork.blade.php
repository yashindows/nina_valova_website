@extends('layouts.app', ['title' => 'Создание работы'])
@section('content')
<section class="edit">
    <div class="container">
        <div class="section-title">Создание работы</div>
        <form action="{{ route('portfolio.create') }}" enctype="multipart/form-data" method="post" class="edit-form">
            @csrf
            <input class="admin-field" placeholder="Заголовок" type="text" name="work_title">
            <label for="portfolio_img">
                Обложка работы
            </label>
            <input type="file" name="image" id="portfolio_img">
            <input class="btn" type="submit" value="добавить">
        </form>
        <a href="/admin" class="btn">Назад в админ панель</a>
    </div>
</section>
@endsection