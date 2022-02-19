@extends('frontend.master')
@section('content')
<h1>Doctors available</h1>
<div class="box">
@foreach($ent as $entdoctor)
<div class="flip-box">
  <div class="flip-box-inner">
    <div class="flip-box-front">
      <img src=" " alt="no image">
    </div>
    <div class="flip-box-back">
      <p>{{$entdoctor->fullname}}</p>
      <p>{{$entdoctor->qualification}}</p>
      <p>{{$entdoctor->field}}</p>
      <p>{{$entdoctor->experience}}</p>
    </div>
  </div>
</div>
@endforeach
</div>
@endsection