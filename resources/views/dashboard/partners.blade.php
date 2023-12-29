@extends('dashboard.layout')

@section('title', 'Партнеры')

@section('dashboardcontent')

<div class="dashboard-content">

  <a href="{{ route('admin.partners-create') }}" class="btn btn-success mb-3">Добавить</a>
  <table class="table table-striped">
    <thead>
    <tr>
      <th class="number-column">№</th>
      <th>Название</th>
      <th class="button-column"></th>
    </tr>
    </thead>
    <tbody>
    @foreach($partners as $value)
      <tr>
      <td>{{ $loop->index + 1 }}</td>
      <td>{{ $value->title_ru }} {{ $value->name_ru }}</td>
      <td class="table-button">
        <a href="{{ route('admin.partners-show', $value->id) }}" class="btn btn-success">
          <i class="fas fa-eye"></i>
        </a>
        <a href="{{ route('admin.partners-edit', $value->id) }}" class="btn btn-primary">
          <i class="fas fa-pen"></i>
        </a>
        <form class="form" action="{{ route('admin.partners-destroy', $value->id) }}" method="get">
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
  const menuItem = 5;
</script>

@endsection