@extends('layouts.index', ['title' => 'Админ-панель'])
@section('content')
<!-- <main class="main">
  <section class="admin">
    <div class="container">
      <div class="section-title-text">Панель Администратора</div>
      <form class="admin-form" action="">
        <div>
          <label class="admin-label" for="login">Логин</label>
          <input class="admin-field" id="login" type="text">
        </div>
        <div>
          <label class="admin-label" for="pass">Пароль</label>
          <input class="admin-field" id="pass" type="password">
        </div>
        <input class="btn" type="submit" value="ВХОД">
      </form>
    </div>
  </section>
</main> -->
<div class="main">
  <section class="admin">
    <div class="container">
      <div class="admin-dashboard">
        <button class="btn active">Обо мне</button><button class="btn">Важно знать</button><button class="btn">Заявки</button>
      </div>
      <div class="admin-content">
        <form class="content-form active" action="" method="post">
          <input class="admin-field" type="text">
          <input class="admin-field" type="text">
        </form>
        <form class="content-form" action="" method="post">форма 2</form>
        <form class="content-form" action="" method="post">форма 3</form>
      </div>
    </div>
  </section>
</div>
@endsection