
@extends('layouts/frontend')
@section('content')
<main>
        <div class="cssCategory2">
          <h2 class="border-bottom text-center font-weight-bold" style="font-weight:bold">
            All Product
          </h2>
          @if ($product->count()) 
          <div class="card-group text-center text-reset">
            @foreach ($product as $pro)
            <div class="card1 text-reset">
              {{-- <img src="{{ assets('storage/' . $product->image) }}" style="width:100%"> --}}
              <div class="container1">
                <h5><b>{{ $pro->name_product }}</b></h5> 
                <p>{{ $pro->price }}</p>
              </div>
            </div>
            @endforeach
          </div>
          @else
              <p class="text-center fs-4"> No Product found</p>
          @endif
        </div>
</main>

@endsection 