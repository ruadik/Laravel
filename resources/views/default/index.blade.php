@extends('default.layouts.layout')

@section('navbar')
    @parent
    @endsection

@section('header')
    @parent
    @endsection

@section('sidebar')
    @parent
    @endsection

@section('content')
    @include('default.content')
    @endsection