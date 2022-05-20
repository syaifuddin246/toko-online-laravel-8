@extends('user.app')
@section('content')
{{-- slider --}}
{{-- end slider --}}
{{-- <div class="site-blocks-cover" style="background-image: url({{ asset('shopper') }}/images/hero_1.jpg);" data-aos="fade">
    <div class="container">
    <div class="row align-items-start align-items-md-center justify-content-end">
        <div class="col-md-5 text-center text-md-left pt-5 pt-md-0">
        <h1 class="mb-2">Cari Kebutuhan Olahraga Kamu Di Sini</h1>
        <div class="intro-text text-center text-md-left">
            <p class="mb-4">Alat olahraga disini terjamin kualitasnya dan tentunya barangnya juga original bukan kw. </p>
            <p>
            <a href="{{ route('user.produk') }}" class="btn btn-sm btn-primary">Belanja Sekarang</a>
            </p>
        </div>
        </div>
    </div>
    </div>
</div> --}}
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="padding-top: 110px;">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="{{ asset('shopper') }}/images/hero_1.jpg" alt="First slide">
            <div class="carousel-caption d-none d-md-block" style="padding-bottom: 140px;">
                <h2><strong>Toko Online </strong></h2>
                <p>snfjsnfjnfjs jnjsnjsn jndjsndjsnd jndjsndjsnd jndjsndjnds jndsjndjsn</p>
                <p><a href="" class="btn btn-outline-info">Yuk Belanja</a></p>
            </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="{{ asset('shopper') }}/images/hero_1.jpg" alt="Second slide">
            <div class="carousel-caption d-none d-md-block" style="padding-bottom: 140px;">
                <h2><strong>Toko Online </strong></h2>
                <p>snfjsnfjnfjs jnjsnjsn jndjsndjsnd jndjsndjsnd jndjsndjnds jndsjndjsn</p>
                <p><a href="" class="btn btn-outline-info">Yuk Belanja</a></p>
            </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="{{ asset('shopper') }}/images/hero_1.jpg" alt="Third slide">
            <div class="carousel-caption d-none d-md-block" style="padding-bottom: 140px;">
                <h2><strong>Toko Online </strong></h2>
                <p>snfjsnfjnfjs jnjsnjsn jndjsndjsnd jndjsndjsnd jndjsndjnds jndsjndjsn</p>
                <p><a href="" class="btn btn-outline-info">Yuk Belanja</a></p>
            </div>
      </div>
    </div>
    
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

<div class="site-section site-section-sm site-blocks-1">
    <div class="container">
    <div class="row">
        <div class="col-md-6 col-lg-4 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up" data-aos-delay="200">
            <div class="icon mr-4 align-self-start">
                <span class="icon-security"></span>
            </div>
            <div class="text">
                <h2 class="text-uppercase">Keamanan</h2>
                <p>jaminan keamanan dalam pengiriman barang sampai ke lokasi tujuan</p>
            </div>
        </div>
        <div class="col-md-6 col-lg-4 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up" data-aos-delay="">
            <div class="icon mr-4 align-self-start">
                <span class="icon-truck"></span>
            </div>
            <div class="text">
                <h2 class="text-uppercase">Pengiriman</h2>
                <p>Pengiriman bisa ke seluruh wilayah indonesia dengan kurir JNE</p>
            </div>
        </div>
        <div class="col-md-6 col-lg-4 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up" data-aos-delay="100">
            <div class="icon mr-4 align-self-start">
                <span class="icon-star"></span>
            </div>
            <div class="text">
                <h2 class="text-uppercase">Kualitas Top</h2>
                <p>Kualitas barang terjamin original bukan barang kw.</p>
            </div>
        </div>
        
    </div>
    </div>
</div>
<div class="site-section block-3 site-blocks-2 bg-light"  data-aos="fade-up">
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-7 site-section-heading text-center pt-4">
        <h2>New Produk</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
        <div class="nonloop-block-3 owl-carousel" >
            @foreach($produks as $produk)
            <div class="item">
            <div class="block-4 text-center">
                <a href="{{ route('user.produk.detail',['id' =>  $produk->id]) }}">
                <figure class="block-4-image">
                <img src="{{ asset('storage/'.$produk->image) }}" alt="Image placeholder" class="img-fluid" width="100%" style="height:250px">
                </figure>
                </a>
                <div class="block-4-text p-4">
                <h2><a href="{{ route('user.produk.detail',['id' =>  $produk->id]) }}">{{ $produk->name }}</a></h2>
                <p class="mb-0"><h4>Rp. {{ $produk->price }},-</h4></p>
                <a href="{{ route('user.produk.detail',['id' =>  $produk->id]) }}" class="btn btn-outline-primary btn-sm mt-2">Detail Produk</a>
                </div>
            </div>
            </div>
            @endforeach
        </div>
        </div>
    </div>
    </div>
</div>
    @endsection