@extends('layouts.app', ['title' => 'Новое время для записи'])
@section('content')
<section class="edit">
    <div class="container">
        <div class="section-title">Новое время для записи</div>
        <form action="{{ route('orders.create') }}" method="post" class="edit-form">
            @csrf
            <input class="admin-field" placeholder="Введите дату (ДД:ММ)" type="text" name="procedure_day">
            <input class="admin-field" placeholder="Введите время(ЧЧ:мм)" type="text" name="procedure_time">
            <input class="btn" type="submit" value="добавить">
        </form>
        <a href="/admin" class="btn">Назад в админ панель</a>
    </div>
</section>
@endsection