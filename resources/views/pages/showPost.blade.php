@extends('layout.post-layout')
@section('content')
<a href="{{route('pressIndex')}}">BACK</a>

<div class="box">
  <p>Title: {{$post-> title}}</p>
  <p>Author: {{$post-> author}}</p>
  <p>Content: {!!$post-> content!!}</p>
  
</div>

@endsection
