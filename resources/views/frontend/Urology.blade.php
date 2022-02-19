@extends('frontend.master')
@section('content')
<h1>doctors available</h1>
<div class="box">
@foreach($urology as $urologydoctor)
<div class="flip-box">
  <div class="flip-box-inner">
    <div class="flip-box-front">
      <img src=" " alt="no image">
    </div>
    <div class="flip-box-back">
      <p>{{$urologydoctor->fullname}}</p>
      <p>{{$urologydoctor->qualification}}</p>
      <p>{{$urologydoctor->field}}</p>
      <p>{{$urologydoctor->experience}}</p>
    </div>
  </div>
</div>
@endforeach
</div>
@endsection