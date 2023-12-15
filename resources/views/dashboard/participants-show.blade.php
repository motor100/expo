@extends('dashboard.layout')

@section('title', 'Участники')

@section('dashboardcontent')

<div class="dashboard-content">

  <p>{{ $participant->title }}</p>
  <p>{{ $participant->desc_ru }}</p>
  <p>{{ $participant->desc_en }}</p>
  <p>{{ $participant->desc_tr }}</p>
  <div class="show-item__image">
    <img src="{{ Storage::url($participant->image) }}" alt="">
  </div>

</div>

<script>
  const menuItem = 1;
</script>

@endsection