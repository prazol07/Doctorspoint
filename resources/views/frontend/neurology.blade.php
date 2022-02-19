@extends('frontend.master')
@section('content')
<h1>doctors available</h1>
<div class="box">
@foreach($neurology as $neurologydoctor)
<div class="flip-box">
  <div class="flip-box-inner">
    <div class="flip-box-front">
      <img src=" " alt="no image">
    </div>
    <div class="flip-box-back">
      <p>{{$neurologydoctor->fullname}}</p>
      <p>{{$neurologydoctor->qualification}}</p>
      <p>{{$neurologydoctor->field}}</p>
      <p>{{$neurologydoctor->experience}}</p>
    </div>
  </div>
</div>
@endforeach
</div>
@endsection