@extends('dashboard.layout')

@section('title', 'Слайдер')

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

  <form class="form" action="{{ route('admin.main-slider-update', $slide->id) }}" enctype="multipart/form-data" method="post">

    <div class="form-group">
      <div class="image-preview">
        <img src="{{ Storage::url($slide->image) }}" alt="">
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
  const menuItem = 2;
</script>

@endsection