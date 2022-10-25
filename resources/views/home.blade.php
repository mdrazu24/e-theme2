    @extends('layouts.main')

    @section('content')
        <div class="container-fluid">
            <!-- Slider main container -->
            <div class="swiper  mainSwiper">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">

                    <div class="swiper-slide overflow-hidden position-relative">
                        <img class="img-fluid w-100" style="object-fit: contain "
                            src="https://safeforts.com/uploads/dummy/21/12/61ae34edec7010612211638806765.jpeg"
                            alt="eventimage" />
                        <div class="content position-absolute wow fadeInLeft animate__animated animate__backInLeft" style="top: 50px; left : 100px">
                            <h1 class="fw-bolder">Order Healty Food!!</h1>
                            <h2 class="fw-bolder">New Arrivals!!!</h2>
                            <p>Lorem ipsum dolor sit amet consectetur
                            </p>
                            <button class="btn btn-success">#</button>

                        </div>

                    </div>


                    <div class="swiper-slide overflow-hidden position-relative">
                        <img class="img-fluid w-100" style="object-fit: contain "
                            src="https://safeforts.com/uploads/dummy/21/12/61ae34edec7010612211638806765.jpeg"
                            alt="eventimage" />
                        <div class="content position-absolute wow fadeInLeft animate__animated animate__backInLeft" style="top: 50px; left : 100px">
                            <h1 class="fw-bolder">Order Healty Food!!</h1>
                            <h2 class="fw-bolder">New Arrivals!!!</h2>
                            <p>Lorem ipsum dolor sit amet consectetur
                            </p>
                            <button class="btn btn-success">#</button>

                        </div>

                    </div>


                    <div class="swiper-slide overflow-hidden position-relative">
                        <img class="img-fluid w-100" style="object-fit: contain "
                            src="https://safeforts.com/uploads/dummy/21/12/61ae34edec7010612211638806765.jpeg"
                            alt="eventimage" />
                        <div class="content position-absolute wow fadeInLeft animate__animated animate__backInLeft" style="top: 50px; left : 100px">
                            <h1 class="fw-bolder">Order Healty Food!!</h1>
                            <h2 class="fw-bolder">New Arrivals!!!</h2>
                            <p>Lorem ipsum dolor sit amet consectetur
                            </p>
                            <button class="btn btn-success">#</button>

                        </div>

                    </div>




                </div>

                <!-- If we need navigation buttons -->
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>

            </div>
        </div>

        {{--  --}}


    @endsection

    <style>
        .mainSwiper {
            height: 400px !important;
        }
    </style>
