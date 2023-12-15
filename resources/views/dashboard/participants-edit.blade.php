@extends('dashboard.layout')

@section('title', 'Редактировать участника')

@section('dashboardcontent')

<div class="dashboard-content">

  @if($errors->any())
    <div class="alert alert-danger cart-errors">
      <ul>
        @foreach($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
  @endif

  <form class="form" action="{{ route('admin.participants-update', $participant->id) }}" enctype="multipart/form-data" method="post">

    <div class="form-group mb-3">
      <label for="title" class="form-check-label mb-1">Название</label>
      <input type="text" name="title" id="title" class="form-control" required value="{{ $participant->title }}">
    </div>
    <div class="form-group mb-3">
      <label for="desc-ru" class="form-check-label mb-1">Описание RU</label>
      <input type="text" name="desc-ru" id="desc-ru" class="form-control" required value="{{ $participant->desc_ru }}">
    </div>
    <div class="form-group mb-3">
      <label for="desc-en" class="form-check-label mb-1">Описание EN</label>
      <input type="text" name="desc-en" id="desc-en" class="form-control" required value="{{ $participant->desc_en }}">
    </div>
    <div class="form-group mb-3">
      <label for="desc-tr" class="form-check-label mb-1">Описание TR</label>
      <input type="text" name="desc-tr" id="desc-tr" class="form-control" required value="{{ $participant->desc_tr }}">
    </div>
    <div class="form-group">
      <div class="image-preview">
        <img src="{{ Storage::url($participant->image) }}" alt="">
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
  const menuItem = 1;
</script>

@endsection