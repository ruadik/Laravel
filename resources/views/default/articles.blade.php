@extends('default.layouts.layout')

@section('navbar')
    @parent
@endsection

@section('header')
    @parent
@endsection

@section('sidebar')
@endsection

@section('content')
    @include('default.articlesContent')
@endsection