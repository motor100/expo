@extends('dashboard.layout')

@section('title', 'Город')

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

  <form class="form" action="{{ route('admin.cities-update', $city->id) }}" enctype="multipart/form-data" method="post">

    <div class="form-group mb-3">
      <label for="title_ru" class="form-check-label mb-1">Название RU</label>
      <input type="text" name="title_ru" id="title_ru" class="form-control" required readonly value="{{ $city->title_ru }}">
    </div>
    <div class="form-group mb-3">
      <label for="title_en" class="form-check-label mb-1">Название EN</label>
      <input type="text" name="title_en" id="title_en" class="form-control" required readonly value="{{ $city->title_en }}">
    </div>
    <div class="form-group mb-3">
      <label for="title_tr" class="form-check-label mb-1">Название TR</label>
      <input type="text" name="title_tr" id="title_tr" class="form-control" required readonly value="{{ $city->title_tr }}">
    </div>
    <div class="form-group mb-3">
      <label for="date" class="form-check-label mb-1">Дата</label>
      <input type="text" name="date" id="date" class="form-control datepicker" required value="{{ $city->date->format('d.m.Y') }}">
    </div>
    <div class="form-group mb-3">
      <label for="day_ru" class="form-check-label mb-1">День RU</label>
      <input type="text" name="day_ru" id="day_ru" class="form-control" required value="{{ $city->day_ru }}">
    </div>
    <div class="form-group mb-3">
      <label for="day_en" class="form-check-label mb-1">День EN</label>
      <input type="text" name="day_en" id="day_en" class="form-control" required value="{{ $city->day_en }}">
    </div>
    <div class="form-group mb-3">
      <label for="day_tr" class="form-check-label mb-1">День TR</label>
      <input type="text" name="day_tr" id="day_tr" class="form-control" required value="{{ $city->day_tr }}">
    </div>
    <div class="form-group mb-3">
      <label for="place" class="form-check-label mb-1">Место</label>
      <input type="text" name="place" id="place" class="form-control" required value="{{ $city->place }}">
    </div>
    <div class="form-group">
      <div class="image-preview">
        <img src="{{ Storage::url($city->image) }}" alt="">
      </div>
    </div>
    <div class="form-group mb-5">
      <div class="label-text mb-1">Изображение</div>
      <input type="file" name="input-main-file" id="input-main-file" class="inputfile" accept="image/jpeg,image/png">
      <label for="input-main-file" class="custom-inputfile-label">Выберите файл</label>
      <span class="namefile main-file-text">Файл не выбран</span>
    </div>


    @csrf
    <button type="submit" class="btn btn-primary">Обновить</button>

  </form>

</div>

<script>
  const menuItem = 0;
</script>

@endsection

@section('script')
  <script src="{{ asset('/adminpanel/js/air-datepicker.js') }}"></script>
@endsection