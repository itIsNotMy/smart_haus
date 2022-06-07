@extends('layout.master')
@section('title', 'Регистрировать')
@section('content')
@include('layout.form', ['title'=>'Create', 'action'=>route('equipment.store'), 'button'=>'add', 'method'=>'POST'])
@endsection