@extends('layouts.main-layout')
@section('content')





<?php foreach ($posts as $post): ?>
<div class="box">
  <p>Title: {{$post-> title}}</p>
  <p>Author: {{$post-> author}}</p>
  <p>Content: {!!$post-> content!!}</p>

  <a href="{{route('pressShowPost', $post -> id)}}">SHOW POST</a>


</div>
<?php endforeach; ?>
@endsection
