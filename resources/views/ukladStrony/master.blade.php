@include('ukladStrony.header')
<div class="container">
    <div class="row" align="center">
        <div class="col-lg-3">
            @include('ukladStrony.zaloguj')
                @include('ukladStrony.shoppingCart')
            <h1 class="my-4">Kategorie</h1>
            {{ menu('categories', 'main.kategorie') }}
            <br>
        </div>
        <div class="col-lg-9">
            <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
                @yield('slider')
            </div>

            <div class="row">
                @yield('products')
            </div>
            <br>
        </div>

    </div>
</div>
@include('ukladStrony.footer')