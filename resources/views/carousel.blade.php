<div class="row bannier1">
    <div class="col-12 col-md-10 col-lg-8 mx-auto text-center">
        <div id="demo" class="carousel slide" data-ride="carousel">

            <!-- Indicators -->
            <ul class="carousel-indicators">
                <li data-target="#demo" data-slide-to="0" class="active"></li>
                <li data-target="#demo" data-slide-to="1"></li>
                <li data-target="#demo" data-slide-to="2"></li>
                <li data-target="#demo" data-slide-to="3"></li>
                <li data-target="#demo" data-slide-to="4"></li>
            </ul>

            <!-- The slideshow -->
            <div class="carousel-inner banier1">
                <div class="carousel-item active">
                    <img class="img-fluid d-none d-md-block" src="{{ asset('carousel/air_freight.jpg') }}" alt="air freight">
                    <img class="img-fluid d-md-none" src="{{ asset('carousel/air_freight_mobile.jpg') }}" alt="air freight">
                </div>
                <div class="carousel-item">
                    <img class="img-fluid d-none d-md-block" src="{{ asset('carousel/ground_shipping.png') }}" alt="ground shipping">
                    <img class="img-fluid d-md-none" src="{{ asset('carousel/ground_shipping_mobile.png') }}" alt="ground shipping">
                </div>
                <div class="carousel-item">
                    <img class="img-fluid d-none d-md-block" src="{{ asset('carousel/roro.jpg') }}" alt="roro">
                    <img class="img-fluid d-md-none" src="{{ asset('carousel/roro_mobile.jpg') }}" alt="roro">
                </div>
                <div class="carousel-item">
                    <img class="img-fluid d-none d-md-block" src="{{ asset('carousel/sea_freight.jpg') }}" alt="sea freight">
                    <img class="img-fluid d-md-none" src="{{ asset('carousel/sea_freight_mobile.jpg') }}" alt="sea freight">
                </div>
                <div class="carousel-item">
                    <img class="img-fluid d-none d-md-block" src="{{ asset('carousel/warehouse.png') }}" alt="warehouse">
                    <img class="img-fluid d-md-none" src="{{ asset('carousel/warehouse_mobile.png') }}" alt="warehouse">
                </div>
            </div>

            <!-- Left and right controls -->
            <a class="carousel-control-prev" href="#demo" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>
    </div>
</div>
