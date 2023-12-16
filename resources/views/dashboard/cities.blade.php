@extends('dashboard.layout')

@section('title', 'Города')

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
    @foreach($cities as $value)
      <tr>
      <td>{{ $loop->index + 1 }}</td>
      <td>{{ $value->title_ru }}</td>
      <td class="table-button">
        <a href="{{ route('admin.cities-show', $value->id) }}" class="btn btn-success">
          <i class="fas fa-eye"></i>
        </a>
        <a href="{{ route('admin.cities-edit', $value->id) }}" class="btn btn-primary">
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
  const menuItem = 0;
</script>

@endsection