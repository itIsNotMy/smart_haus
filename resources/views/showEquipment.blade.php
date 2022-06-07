@extends('layout.master')
@section('title', 'Детальная страница')
@section('content')
<p class="blog-post-meta">name: {{ $equipment->type->name }}</p>
<p class="blog-post-meta">sireal number: {{ $equipment->sireal_number }}</p>
<a href="{{ route('equipment.edit', $equipment) }}">Редактировать</a>
@endsection