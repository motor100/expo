@extends('dashboard.layout')

@section('title', 'Слайдер')

@section('dashboardcontent')

<div class="dashboard-content">

  <table class="table table-striped">
    <thead>
    <tr>
      <th class="number-column">№</th>
      <th>Название</th>
      <th class="button-column"></th>
    </tr>
    </thead>
    <tbody>
    @foreach($sliders as $value)
      <tr>
      <td>{{ $loop->index + 1 }}</td>
      <td>{{ $value->title }}</td>
      <td class="table-button">
        <a href="{{ route('admin.main-slider-show', $value->id) }}" class="btn btn-success">
          <i class="fas fa-eye"></i>
        </a>
        <a href="{{ route('admin.main-slider-edit', $value->id) }}" class="btn btn-primary">
          <i class="fas fa-pen"></i>
        </a>
        <form class="form" action="" method="get">
          @csrf
          <button type="submit" class="btn btn-danger">
            <i class="fas fa-trash"></i>
          </button>
        </form>
      </td>
      </tr>
    @endforeach
    </tbody>
  </table>

</div>

<script>
  const menuItem = 2;
</script>

@endsection