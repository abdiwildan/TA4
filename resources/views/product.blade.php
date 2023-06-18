
@extends('layouts/frontend')
@section('content')
<main>
        <div class="cssCategory2">
          <h2 class="border-bottom text-center font-weight-bold" style="font-weight:bold">
            All Product
          </h2>
          @if ($products->count()) 
          <div class="card-group text-center text-reset">
            @foreach ($products as $pro)
            <div class="card1 text-center">
              <img src="storage/{{ $pro->image }}"  style="width:75%">
              <div class="container1 text-start">
                <p>{{ $pro->name_product }}<br>
                <b> Rp. {{ $pro->price }}</b></p>
                <div class="row align-items-center" style="font-size: 12px">
                  <div class="col border-end">
                    <i class="bi bi-star-fill" style="color: #F79327"></i>
                    4.4
                  </div>
                  <div class="col">
                    Terjual 220
                  </div>
                </div>
                <div class="text-center my-2" > 
                  <form action="/cart" method="post">
                    @csrf
                    <button class="btn btn-primary rounded-pill border-0"><i class="bi bi-cart"></i> Beli</button>
                  </form>
                </div>
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