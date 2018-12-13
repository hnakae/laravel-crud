@extends('layouts.main')

@section('title', 'All Posts')

@section('sidebar')
  This is the side menu
@endsection

@section('content')
  @if ($age > 21)
    Welcome back, {{$user_name}}! Your age is {{$age}}.
  @else
    you're <= 21 years old.
  @endif
@endsection
