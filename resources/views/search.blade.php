@extends('master')
@section('content')
<div class="custom-product">
    <div class="col-sm-4">
        <a href="#">Filter</a>
    </div>
    <div class="col-sm-6">
      <div class="trending-wrapper">
        <h4> Result for Products</h4>
        @foreach ($products as $item)
        <div class="seached-item">
          <a href="detail/{{$item['id']}}">
        <!--------- part image----- -->
          <div class="">
            <h3>{{$item['name']}}</h3>
            <p>{{$item['description']}}</p>
          </div>
          </a>
        </div>
        @endforeach    
      </div>
    </div>
    <a href="/">Back</a>
</div>
@endsection