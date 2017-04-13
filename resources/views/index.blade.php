@extends('layouts.app')

@section('content')
  @include('partials.page-header')

@include('partials.slides')

@include('partials.slider')

  {!! get_the_posts_navigation() !!}
@endsection
