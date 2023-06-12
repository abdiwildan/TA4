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
      {{-- @foreach ($collection as $item)
          
      @endforeach --}}
      <div class="card-group text-center">
        <div class="card1">
          <a href="produk">
            <img src="assets/img/kategori1.png" alt="Avatar" style="width:100%">
            <div class="container1">
              <h5><b>Sembako</b></h5> 
            </div>
          </a>

        </div>
        <div class="card1">
          <img src="assets/img/kategori2.png" alt="Avatar" style="width:100%">
          <div class="container1">
            <h5><b>Makanan / Minuman</b></h5> 
          </div>
        </div>
        <div class="card1">
          <img src="assets/img/kategori3.png" alt="Avatar" style="width:100%">
          <div class="container1">
            <h5><b>Perlengkapan bayi</b></h5> 
          </div>
        </div>
        <div class="card1">
          <img src="assets/img/kategori4.png" alt="Avatar" style="width:100%">
          <div class="container1">
            <h5><b>Fashion</b></h5> 
          </div>
        </div>
        <div class="card1">
          <img src="assets/img/kategori5.png" alt="Avatar" style="width:100%">
          <div class="container1">
            <h5><b>Perlengkapan Rumah tangga</b></h5> 
          </div>
        </div>
      </div>
  </Div>

  <!-- Diskon  -->
  <div class="cssCategory">
    <div class="cssCategory2 cssDiskon">
      <h2 class="border-bottom text-center font-weight-bold" style="font-weight:bold">
        Diskon Spesial Pa edi
      </h2>
      <div class="row">
        <div class="col container bg-danger ">
          <img src="assets/img/indomie goreng.png" class="img-fluid p-5" >
          
        </div>
        <div class="col">
          <h4>Indomie Mi goreng <br> Rasa Rendang</h4>
          <h2>Rp. 3.000 Rp. 2.500</h2>
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
