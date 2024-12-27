    <!-- ***** Menu Area Starts ***** -->
    <section class="section" id="menu">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="section-heading">
                        <h6>Our Menu</h6>
                        <h2>Our Coffee</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="menu-item-carousel">
            <div class="col-lg-12">
                <div class="owl-menu-item owl-carousel">


                    @foreach($data as $data)

                    <form action="{{url('/addcart',$data->id)}}" method="post">

                    @csrf


                    <div class="item">
                        <div style="background-image: url('/foodimage/{{$data->image}}');" class='card'>
                            <div class="price"><h6>{{ $data->price }}</h6></div>
                            <div class='info'>
                              <h1 class='title'>{{ $data->title }}</h1>
                              <p class='description'>{{ $data->description }}</p>
                              <div class="main-text-button">
                                  <div class="scroll-to-section"><a href="#reservation">Make Reservation <i class="fa fa-angle-down"></i></a></div>
                              </div>
                            </div>
                        </div>

                        <div class="d-flex mt-3 justify-content-center">
                            <input type="number" name="quantity" min="1" value="1" style="width: 80px;">
                            <input class="py-2 px-2 w-50 bg-danger text-white ml-2" type="submit" value="add cart">
                        </div>

                    </div>

                    </form>


                    @endforeach




                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Menu Area Ends ***** -->
