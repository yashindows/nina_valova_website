@extends('layouts.index', ['title' => 'Портфолио'])
@section('content')
<main class="main">
  <section class="service">
    <div class="container">
      <div class="service__title section-title-text"><b>Портфолио</b></div>
      <div class="service-row">

        @foreach($works as $work)
        <div class="service-item scalable" data-key="{{$work->work_id}}">
          <img src="{{asset('img/portfolio/' . $work->image)}}" alt="" class="item__img">
        </div>
        @endforeach
      </div>
      <button onclick="show()" class="btn service-btn section-title-text">
        Онлайн запись
      </button>
    </div>
  </section>
</main>
@endsection