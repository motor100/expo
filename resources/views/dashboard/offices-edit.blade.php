@extends('dashboard.layout')

@section('title', 'Редактировать офис')

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

  <form class="form" action="{{ route('admin.offices-update', $office->id) }}" method="post">

    <div class="form-group mb-3">
      <label for="title_ru" class="form-check-label mb-1">Название RU</label>
      <input type="text" name="title_ru" id="title_ru" class="form-control" required value="{{ $office->title_ru }}">
    </div>
    <div class="form-group mb-3">
      <label for="title_en" class="form-check-label mb-1">Название EN</label>
      <input type="text" name="title_en" id="title_en" class="form-control" required value="{{ $office->title_en }}">
    </div>
    <div class="form-group mb-3">
      <label for="title_tr" class="form-check-label mb-1">Название TR</label>
      <input type="text" name="title_tr" id="title_tr" class="form-control" required value="{{ $office->title_tr }}">
    </div>
    <div class="form-group mb-3">
      <label for="address_ru" class="form-check-label mb-1">Адрес RU</label>
      <input type="text" name="address_ru" id="address_ru" class="form-control" required value="{{ $office->address_ru }}">
    </div>
    <div class="form-group mb-3">
      <label for="address_en" class="form-check-label mb-1">Адрес EN</label>
      <input type="text" name="address_en" id="address_en" class="form-control" required value="{{ $office->address_en }}">
    </div>
    <div class="form-group mb-3">
      <label for="address_tr" class="form-check-label mb-1">Адрес TR</label>
      <input type="text" name="address_tr" id="address_tr" class="form-control" required value="{{ $office->address_tr }}">
    </div>
    <div class="form-group mb-3">
      <label for="phone" class="form-check-label mb-1">Телефон</label>
      <input type="text" name="phone" id="phone" class="form-control" required value="{{ $office->phone }}">
    </div>
    <div class="form-group mb-3">
      <label for="email" class="form-check-label mb-1">E-mail</label>
      <input type="text" name="email" id="email" class="form-control" required value="{{ $office->email }}">
    </div>
    <div class="form-group mb-5">
      <label for="time" class="form-check-label mb-1">Время работы</label>
      <input type="text" name="time" id="time" class="form-control" required value="{{ $office->time }}">
    </div>

    @csrf
    <button type="submit" class="btn btn-primary">Обновить</button>

  </form>

</div>

<script>
  const menuItem = 3;
</script>

@endsection