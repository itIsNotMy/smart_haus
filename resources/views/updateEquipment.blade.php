@extends('layout.master')
@section('title', 'Редактировать')
@section('content')
@include('layout.form', ['title'=>'Update', 'action'=>route('equipment.update', $equipment),  'button'=>'update', 'method'=>'PATCH'])
<form method="POST" action="{{ route('equipment.destroy', $equipment) }}">
@csrf
@method('DELETE')
<div class="d-grid gap-2 d-md-flex justify-content-md-end">
<button type="submit" class="btn btn-danger">delete</button>
</div>
</form>
@endsection