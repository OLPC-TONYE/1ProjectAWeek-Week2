@extends('layout')
@section('page_title', 'Home Page')

@section('page_content')
    {{auth()->user()->name}}
@endsection