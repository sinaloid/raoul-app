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
                    <img src="{{ asset('carousel/air_freight.jpg') }}" alt="air freight" width="1100" height="500">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('carousel/ground_shipping.png') }}" alt="ground shipping" width="1100"
                        height="500">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('carousel/roro.jpg') }}" alt="roro" width="1100" height="500">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('carousel/sea_freight.jpg') }}" alt="sea freight" width="1100" height="500">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('carousel/warehouse.png') }}" alt="warehouse" width="1100" height="500">
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
