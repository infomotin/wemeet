@extends('components.layouts.index')

@section('title')
    Login
@endsection

@section('content')
    @include('components.form.login-content')
@endsection

@section('form')
    @include('components.form.login-form')
@endsection
