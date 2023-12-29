@extends('dashboard.layout')

@section('title', 'Редактировать билет')

@section('style')
  <link rel="stylesheet" href="{{ asset('/adminpanel/css/air-datepicker.css') }}">
@endsection

@section('dashboardcontent')

<div class="dashboard-content">

  @if($errors->any())
    <div class="alert alert-danger">
      <ul>
        @foreach($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
  @endif

  <form class="form" action="{{ route('admin.ticket-update') }}" method="post">

    <div class="form-group mb-3">
      <label for="date" class="form-check-label mb-1">Дата</label>
      <input type="text" name="date" id="date" class="form-control datepicker" required value="{{ $ticket->date->format('d.m.Y') }}">
    </div>

    @csrf
    <button type="submit" class="btn btn-primary">Обновить</button>

  </form>

</div>

<script>
  const menuItem = 6;
</script>

@endsection

@section('script')
  <script src="{{ asset('/adminpanel/js/air-datepicker.js') }}"></script>
@endsection