@extends('dashboard.layout')

@section('title', 'Редактировать партнера')

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

  <form class="form" action="{{ route('admin.partners-update', $partner->id) }}" enctype="multipart/form-data" method="post">

    <div class="form-group mb-3">
      <label for="title_ru" class="form-check-label mb-1">Заголовок RU</label>
      <input type="text" name="title_ru" id="title_ru" class="form-control" required value="{{ $partner->title_ru }}">
    </div>
    <div class="form-group mb-3">
      <label for="title_en" class="form-check-label mb-1">Заголовок EN</label>
      <input type="text" name="title_en" id="title_en" class="form-control" required value="{{ $partner->title_en }}">
    </div>
    <div class="form-group mb-3">
      <label for="title_tr" class="form-check-label mb-1">Заголовок TR</label>
      <input type="text" name="title_tr" id="title_tr" class="form-control" required value="{{ $partner->title_tr }}">
    </div>
    <div class="form-group mb-3">
      <label for="name_ru" class="form-check-label mb-1">Название RU</label>
      <input type="text" name="name_ru" id="name_ru" class="form-control" required value="{{ $partner->name_ru }}">
    </div>
    <div class="form-group mb-3">
      <label for="name_en" class="form-check-label mb-1">Название EN</label>
      <input type="text" name="name_en" id="name_en" class="form-control" required value="{{ $partner->name_en }}">
    </div>
    <div class="form-group mb-3">
      <label for="name_tr" class="form-check-label mb-1">Название TR</label>
      <input type="text" name="name_tr" id="name_tr" class="form-control" required value="{{ $partner->name_tr }}">
    </div>
    <div class="form-group">
      <div class="image-preview">
        <img src="{{ Storage::url($partner->image) }}" alt="">
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
  const menuItem = 5;
</script>

@endsection