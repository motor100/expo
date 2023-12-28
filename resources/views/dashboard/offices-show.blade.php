@extends('dashboard.layout')

@section('title', 'Офисы')

@section('dashboardcontent')

<div class="dashboard-content">

  <p>{{ $office->title_ru }}</p>
  <p>{{ $office->title_en }}</p>
  <p>{{ $office->title_tr }}</p>
  <p>{{ $office->address_ru }}</p>
  <p>{{ $office->address_en }}</p>
  <p>{{ $office->address_tr }}</p>
  <p>{{ $office->phone }}</p>
  <p>{{ $office->email }}</p>
  <p>{{ $office->time }}</p>

</div>

<script>
  const menuItem = 3;
</script>

@endsection