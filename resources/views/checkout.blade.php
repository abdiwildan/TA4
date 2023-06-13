@extends('layout.frontend')
@section('content')
<main>
    <div class="cart-wrap">
        <div class="cartcss">
            <div class="cartheading py-3">
                <h3>Pembayaran</h3>
            </div>
            <div class="container bg-white mb-2 ">
                <div class="row ">
                    <div class="col">
                        <div class="border-bottom p-auto">
                            <h4>Alamat Pengiriman</h4>
                        </div>
                        <div class="border-bottom">
                            <p>Nama Supplier</p>
                            <p>08000001233</p>
                            <p>Jl. Nama Jalan Nama blokkk</p>
                        </div>
                        <div class="row">
                            <div class="col">
                                pilih Alamat
                            </div>
                        </div>
                    </div>
                    <div class="col">

                    </div>
                </div>
            </div>
            <div class="cartcontent">
                <div class="cartleft">
                    <div class="card px-2">
                        <div class="border-bottom px-3 pt-2">
                            <h3>Pesanan</h3>
                        </div>
                        <div class="row">
                            <div class="col-3">
                                <img src="assets/img/kategori1.png" alt="" style="width: 10rem;">
                            </div>
                            <div class="col p-2">
                                <h4><b>Minyak Murah</b></h4>
                                <br>
                                <h5><b> Rp. 9090</b></h5>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col text-center">
                                <p>tulis catatan</p>
                            </div>
                            <div class="col text-end">
                                <i class="fa-solid fa-trash"></i>
                            </div>
                            <div class="col text-center">
                                <i class="fa-solid fa-minus"></i>
                                <span class="border-bottom">___1___</span> 
                                <i class="fa-solid fa-plus"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cartright">
                    <div class="cartright1 rounded shadow-sm">
                        <div>
                            <section class="cssbuy">
                                    <div class="border-bottom text-center">
                                        <h5> 
                                        <b>Ringkasan Belanja</b>
                                        </h5>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col">
                                            <p>Total Barang</p>
                                            <p>Total Harga</p>
                                        </div>
                                        <div class="col text-end">
                                            <p>3</p>
                                            <p>Rp.23.000</p>
                                        </div>
                                    </div>
                                    <div class="text-center"> 
                                        <a href="" class="btn btn-primary rounded-pill mx-4">Bayar</a>
                                    </div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</main>
    
@endsection