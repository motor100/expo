@extends('dashboard.layout')

@section('title', 'Участники')

@section('dashboardcontent')

<div class="dashboard-content">

  <a href="{{ route('admin.participants-create') }}" class="btn btn-success mb-3">Добавить</a>
  <table class="table table-striped">
    <thead>
    <tr>
      <th class="number-column">№</th>
      <th>Название</th>
      <th class="button-column"></th>
    </tr>
    </thead>
    <tbody>
    @foreach($participants as $value)
      <tr>
      <td>{{ $loop->index + 1 }}</td>
      <td>{{ $value->title }}</td>
      <td class="table-button">
        <a href="{{ route('admin.participants-show', $value->id) }}" class="btn btn-success">
          <i class="fas fa-eye"></i>
        </a>
        <a href="{{ route('admin.participants-edit', $value->id) }}" class="btn btn-primary">
          <i class="fas fa-pen"></i>
        </a>
        <form class="form" action="{{ route('admin.participants-destroy', $value->id) }}" method="get">
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
  const menuItem = 1;
</script>

@endsection