@extends('frontend.master')
@section('content')
<h1>doctors available</h1>
<div class="box">
@foreach($general as $generaldoctor)
<div class="flip-box">
  <div class="flip-box-inner">
    <div class="flip-box-front">
      <img src=" " alt="no image">
    </div>
    <div class="flip-box-back">
      <p>{{$generaldoctor->fullname}}</p>
      <p>{{$generaldoctor->qualification}}</p>
      <p>{{$generaldoctor->field}}</p>
      <p>{{$generaldoctor->experience}}</p>
    </div>
  </div>
</div>
@endforeach
</div>
@endsection