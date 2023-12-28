@extends('dashboard.layout')

@section('title', 'Редактировать контакты')

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

  <form class="form" action="{{ route('admin.contacts-update') }}" method="post">

    <div class="form-group mb-3">
      <label for="title" class="form-check-label mb-1">Название</label>
      <input type="text" name="title" id="title" class="form-control" required value="{{ $contacts->title }}">
    </div>
    <div class="form-group mb-3">
      <label for="title_short" class="form-check-label mb-1">Короткое название</label>
      <input type="text" name="title_short"  id="title_short"  class="form-control" required value="{{ $contacts->title_short }}">
    </div>
    <div class="form-group mb-3">
      <label for="address_ru" class="form-check-label mb-1">Адрес RU</label>
      <input type="text" name="address_ru" id="address_ru" class="form-control" required value="{{ $contacts->address_ru }}">
    </div>
    <div class="form-group mb-3">
      <label for="address_en" class="form-check-label mb-1">Адрес EN</label>
      <input type="text" name="address_en" id="address_en" class="form-control" required value="{{ $contacts->address_en }}">
    </div>
    <div class="form-group mb-3">
      <label for="address_tr" class="form-check-label mb-1">Адрес TR</label>
      <input type="text" name="address_tr" id="address_tr" class="form-control" required value="{{ $contacts->address_tr }}">
    </div>
    <div class="form-group mb-3">
      <label for="phone" class="form-check-label mb-1">Телефон</label>
      <input type="text" name="phone" id="phone" class="form-control" required value="{{ $contacts->phone }}">
    </div>
    <div class="form-group mb-3">
      <label for="email" class="form-check-label mb-1">E-mail</label>
      <input type="text" name="email" id="email" class="form-control" required value="{{ $contacts->email }}">
    </div>
    <div class="form-group mb-5">
      <label for="time" class="form-check-label mb-1">Время работы</label>
      <input type="text" name="time" id="time" class="form-control" required value="{{ $contacts->time }}">
    </div>

    @csrf
    <button type="submit" class="btn btn-primary">Обновить</button>

  </form>

</div>

<script>
  const menuItem = 4;
</script>

@endsection