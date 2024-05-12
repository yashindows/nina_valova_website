@extends('layouts.app', ['title' => 'Новое время для записи'])
@section('content')
<section class="edit">
    <div class="container">
        <div class="section-title">Новое время для записи</div>
        <form action="{{ route('orders.create') }}" enctype="multipart/form-data" method="post" class="edit-form">
            @csrf
            <input class="admin-field" placeholder="Введите время и дату (день месяц время)" type="text" name="procedure_date">
            <input class="btn" type="submit" value="добавить">
        </form>
        <a href="/admin" class="btn">Назад в админ панель</a>
    </div>
</section>
@endsection