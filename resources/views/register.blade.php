@extends('components.layouts.index')

@section('title')
    Register
@endsection

@section('content')
    @include('components.form.register-content')
@endsection

@section('form')
    @include('components.form.register-form')
@endsection
