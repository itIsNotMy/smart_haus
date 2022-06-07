@extends('layout.master')
@section('title', 'Главная')
@section('content')
<h1 class="lead">Equipments</h1>
<ul class="list-group">
@forelse($equipments as $equipment)
  <li  v-show='toggle' class="list-group-item list-group-item-secondary"><a href="{{ route('equipment.show', $equipment) }}">{{ $equipment->type->name }}</a> {{ $equipment->sireal_number }}</li>
@empty
  <li class="list-group-item list-group-item-secondary">Нет заригистрированного оборудования</li>
@endforelse
</ul>
@if(is_a($equipments, 'Illuminate\Pagination\Paginator'))
  <p class="lead">{{ $equipments->links() }}</p>
@endif
@endsection