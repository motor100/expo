@extends('dashboard.layout')

@section('title', 'Слайдер')

@section('dashboardcontent')

<div class="dashboard-content">

  <p>{{ $slide->title }}</p>
  <div class="show-item__image">
    <img src="{{ Storage::url($slide->image) }}" alt="">
  </div>

</div>

<script>
  const menuItem = 2;
</script>

@endsection