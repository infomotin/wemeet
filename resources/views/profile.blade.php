@extends('components.layouts.base')

@section('title')
    {{$profile->name}} -Profile - Calling
@endsection

@section('content')
    @include('components.profile')
@endsection
