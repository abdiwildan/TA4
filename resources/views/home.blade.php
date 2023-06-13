@extends('layout.frontend')
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

      <div class="card-group text-center">

        @foreach ($category as $categories)
        <div class="card1">
          <a href="produk/{{ $categories->slug }}">
            <img src="assets/img/{{ $categories->img }}" alt="Avatar" style="width:100%">
            <div class="container1">
              <h5><b>{{ $categories->nama_kategori }}</b></h5> 
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
              <a href="" class="btn btn-primary rounded-pill px-5 ">Beli</a>
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
        <a href="/produk" style="display: contents"><p class="col-2" >Lihat Semua</p></a>
      </div>
      <div class="card-group text-center">
        <div class="card1">
          <img src="assets/img/kategori1.png" alt="Avatar" style="width:100%">
          <div class="container1">
            <h4><b>Sembako</b></h4> 
          </div>
        </div>
        <div class="card1">
          <img src="assets/img/kategori1.png" alt="Avatar" style="width:100%">
          <div class="container1">
            <h4><b>Sembako</b></h4> 
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Best Selling Produ ct-->
  <div class="cssCategory">
    <div class="cssCategory2">
      <div class="row border-bottom ">
      <h5 class="col"><b>Produk Terlaris</b></h5>
      <a href="/produk" style="display: contents"><p class="col-2" >Lihat Semua</p></a>
    </div>
      <div class="card-group text-center">
        <div class="card1">
          <img src="assets/img/kategori1.png" alt="Avatar" style="width:100%">
          <div class="container1 ">
            <h4 class=""><b>Sembako</b></h4> 
          </div>
        </div>
        <div class="card1">
          <img src="assets/img/kategori1.png" alt="Avatar" style="width:100%">
          <div class="container1">
            <h4><b>Sembako</b></h4> 
          </div>
        </div>
      </div>
    </div>
  </div>
  </main>
@endsection
