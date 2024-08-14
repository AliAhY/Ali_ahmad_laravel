

@extends('site.layouts.layout')  
@section('main')  
<div class="container" style="padding-bottom: 40px;">  
  <div class="row">  
   <div class="col-md-12 text-center">  
    <img src="{{ url('/storage/media/products/' . $product[0]->image) }}" class="img-fluid mx-auto d-block" alt="products Image" style="width: 100%; height: auto;">  
   </div>  
  </div>  
  <div class="row mt-3">  
 <div class="col-md-4">  
    <div class="card">  
      <div class="card-body text-center">  
       <h5>{{ $product[0]->title }}</h5>  
      </div>  
    </div>  
   </div>   
 <div class="col-md-8">  
    <div class="card">  
      <div class="card-body">  
       <div class="mt-3">  
        <h5 class="card-title">Content:</h5>  
        {!! $product[0]->content!!}  
       </div>  
      </div>  
    </div>  
   </div>   -
  </div>  
</div>  
@endsection