@extends('template.main')

@section('content')
    @include('partials.store1')
    @include('partials.store2')
@endsection

@section('CustomScript')
    @include('partials.customJS')
@endsection