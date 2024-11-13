@extends('components.layouts.index')

@section('title')
    Account
@endsection

@section('content')
    @include('components.form.account-content')
@endsection

@section('form')
    @include('components.form.account-form')
@endsection
