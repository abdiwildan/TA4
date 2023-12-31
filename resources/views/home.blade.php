@extends('layouts\frontend')
@section('content')
<main >
  <!-- Carousel / Slider -->

  <div class="relative banner ">
    <div id="slider" class="divHomeSlider">
        <div class="banner2">
          <figure>
            <img src="assets/img/img1.jpg">
            <img src="assets/img/img3.jpg">
            <img src="assets/img/img4.jpg">
            <img src="assets/img/img1.jpg">
            <img src="assets/img/img3.jpg">
          </figure>
        </div>
    </div>
  </div>

  <!-- Kategory -->
  <Div class="cssCategory">
    <div class="cssCategory2">
      <h2 class="border-bottom text-center font-weight-bold" style="font-weight:bold">
        Kategori
      </h2>

      <div class="card-group text-center text-reset">

        @foreach ($category as $categories)
        <div class="card1 text-reset ">
          <a href="categories/{{ $categories->slug }}" class="text-reset text-decoration-none">
            <img src="assets/img/{{ $categories->img }}" alt="Avatar" style="width:100%">
            <div class="container1">
              <h5><b>{{ $categories->name_category }}</b></h5> 
            </div>
          </a>
        </div>
        @endforeach
      </div>
  </Div>

  <!-- Diskon  -->
  <div class="container-fluid py-5 mx-auto">
    <div class="container">
      <div class="text-center mb-5 border-bottom border-3 border-dark  display-4" >
        <h2>
        <b> Diskon Spesial Pa Edi </b>
      </h2>
      </div>
      <div class="owl-carousel diskon-carousel position-relative" style="padding: 0 45px 45px 45px;">
        <div class="row">
        <div class="col container">
          <img src="assets/img/indomie goreng.png" class="img-fluid p-5" >
        </div>
        <div class="col">
          
          <h4> <b>Indomie Mi goreng <br> Rasa Rendang</b></h4>
          <h2 class="display-4  mb-0">
            <small class="align-top fw-normal"
                style="font-size: 18px; line-height: 40px;">Rp.</small> <span
                style="text-decoration: line-through red;"> 130.000</span><small
                class="align-bottom fw-normal" style="font-size: 16px; line-height: 40px;">/
                Dus</small><br>
            <small class="align-top fw-normal"
                style="font-size: 18px; line-height: 40px;">Rp.</small>99.000<small
                class="align-bottom fw-normal" style="font-size: 16px; line-height: 40px;">/
                Dus</small>
          </h2>
          <div class="text-center py-5"> 
              <a href="/cart" class="btn btn-primary rounded-pill px-5 ">Beli</a>
          </div>
        </div>
      </div>
      </div>
    </div>
  </div>
      

  <!-- New Product -->
  <div class="cssCategory">
    <div class="cssCategory2">
      <div class="row border-bottom ">
        <h5 class="col"><b>New Produk</b></h5>
        <a href="/product" style="display: contents"><p class="col-2" >Lihat Semua</p></a>
      </div>
      <div class="card-group text-center justify-content-center">
        @foreach ($products as $item)
        <div class="card1 text-center">
          <img src="storage/{{ $item->image }}"  style="width:75%">
          <div class="container1 text-start">
            <p>{{ $item->name_product }}<br>
            <b> Rp. {{ $item->price }}</b></p>
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
    </div>
  </div>

  <!-- Best Selling Produ ct-->
  <div class="cssCategory">
    <div class="cssCategory2">
      <div class="row border-bottom ">
      <h5 class="col"><b>Produk Terlaris</b></h5>
      <a href="/product" style="display: contents"><p class="col-2" >Lihat Semua</p></a>
    </div>
      <div class="card-group">
        @foreach ($products as $item)
        <div class="card1 text-center">
          <img src="storage/{{ $item->image }}"  style="width:75%">
          <div class="container1 text-start">
            <p>{{ $item->name_product }}<br>
            <b> Rp. {{ $item->price }}</b></p>
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
              <form action="/cart/{{ $item->slug }}" method="post">
                @csrf
                <button class="btn btn-primary rounded-pill border-0"><i class="bi bi-cart"></i> Beli</button>
              </form>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </div>
  </main>
@endsection
