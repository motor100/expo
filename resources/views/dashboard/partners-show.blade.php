@extends('dashboard.layout')

@section('title', 'Партнеры')

@section('dashboardcontent')

<div class="dashboard-content">

  <p>{{ $partner->title_ru }}</p>
  <p>{{ $partner->title_en }}</p>
  <p>{{ $partner->title_tr }}</p>
  <p>{{ $partner->name_ru }}</p>
  <p>{{ $partner->name_en }}</p>
  <p>{{ $partner->name_tr }}</p>
  <div class="show-item__image">
    <img src="{{ Storage::url($partner->image) }}" alt="">
  </div>

</div>

<script>
  const menuItem = 5;
</script>

@endsection