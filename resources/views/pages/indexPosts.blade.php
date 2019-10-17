@extends('layouts.main-layout')
@section('content')



<div id="app1">
  <h1>@{{ hello }}</h1>
</div>

<?php foreach ($posts as $post): ?>
<div class="box">
  <p>Title: {{$post-> title}}</p>
  <p>Author: {{$post-> author}}</p>
  <p>Content: {!!$post-> content!!}</p>

  <a href="{{route('pressShowPost', $post -> id)}}">SHOW POST</a>


</div>
<?php endforeach; ?>
@endsection
