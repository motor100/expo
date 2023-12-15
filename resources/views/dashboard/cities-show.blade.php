@extends('dashboard.layout')

@section('title', 'Город')

@section('dashboardcontent')

<div class="dashboard-content">

  <p>{{ $city->title_ru }}</p>
  <p>{{ $city->title_en }}</p>
  <p>{{ $city->title_tr }}</p>
  <p>{{ $city->date->format("d.m.Y") }}</p>
  <p>{{ $city->day_ru }}</p>
  <p>{{ $city->day_en }}</p>
  <p>{{ $city->day_tr }}</p>
  <p>{{ $city->place }}</p>
  <div class="show-item__image">
    <img src="{{ Storage::url($city->image) }}" alt="">
  </div>

</div>

<script>
  const menuItem = 0;
</script>

@endsection