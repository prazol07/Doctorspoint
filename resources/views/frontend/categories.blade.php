@extends('frontend.master')
@section('content')
<div class="box">
@foreach($categories as $category)
<div class="cards">
<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="/assets/css/{{$category->image}}" alt="Card image cap" style="width:100px;height:100px">
  <div class="card-body">
  <h5 class="card-title">{{ $category->title}}</h5>
  <p class="card-text">{{ $category->description}}</p>
  <a href="{{ $category->title}}" class="btn btn-primary">search for related doctors</a>
  </div>
</div>
</div>
</tbody>
@endforeach
</div>
@endsection