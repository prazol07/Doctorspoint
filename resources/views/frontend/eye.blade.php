@extends('frontend.master')
@section('content')
<h1>doctors available</h1>
<div class="box">
@foreach($eye as $eyedoctor)
<div class="flip-box">
  <div class="flip-box-inner">
    <div class="flip-box-front">
      <img src=" " alt="no image">
    </div>
    <div class="flip-box-back">
      <p>{{$eyedoctor->fullname}}</p>
      <p>{{$eyedoctor->qualification}}</p>
      <p>{{$eyedoctor->field}}</p>
      <p>{{$eyedoctor->experience}}</p>
    </div>
  </div>
</div>
@endforeach
</div>
@endsection