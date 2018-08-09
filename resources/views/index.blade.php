@extends('ukladStrony.master')

@section('slider')
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
            <img class="d-block img-fluid" src="http://www.jccc.edu/academics/communications/speech/_files/xrussian-12-900x350.jpg.pagespeed.ic.nv2Q_rsh2b.jpg" alt="First slide">
        </div>
        <div class="carousel-item">
            <img class="d-block img-fluid" src="http://itpc.net.pl/wp-content/uploads/2017/02/Asus-Strix-Tactic-Pro-baner-900x350.png" alt="Second slide">
        </div>
        <div class="carousel-item">
            <img class="d-block img-fluid" src="http://itpc.net.pl/wp-content/uploads/2016/07/ASUS-ROG-G752VY-glowne-900x350.jpg" alt="Third slide">
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
@endsection

@section('products')
    @foreach ($products['new'] as $product)
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
                <a href="{{ strtolower($product->category->name) }}/{{ strtolower(str_replace(" ", "-", "$product->name")) }}"><img class="card-img-top" src="{{ $product->image }}" alt=""></a>
                <div class="card-body">
                    <h4 class="card-title">
                        <a href="{{ strtolower($product->category->name) }}/{{ strtolower(str_replace(" ", "-", "$product->name")) }}">{{ $product->name  }}</a>
                    </h4>
                    <h5>{{ $product->price }}zł</h5>
                    <p class="card-text">{{ $product->body }}</p>
                </div>
                <div class="card-footer">
                    <small class="text-muted">{{ $product->category->name }}</small>
                </div>
            </div>
        </div>
    @endforeach
@endsection
<?php if(!empty($_SESSION['errors'])){
    echo '<script> alert("Nieprawidłowy login lub hasło"); </script>';
    $_SESSION['errors']=null;
}  ?>