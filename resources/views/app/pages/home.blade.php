@extends('app.index')

@section('content')
    <section class="my-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="img/slid1.jpg" alt="First slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="img/slid2.jpg" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="img/slide3.jpg" alt="Third slide">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>

                </div>
                <div class="col-md-6 text-center ">
                    <h1>
                        @lang('app.site_name')
                    </h1>
                    <h3>
                        @lang('app.site_description')
                    </h3>
                </div>
            </div>
        </div>
    </section>



    <section>
        <div class="container">
            <div class="row">
                @foreach($posts as $post)
                    <div class="card mx-2 px-0" style="width: 18rem;">
                        <img class="card-img-top" src="{{url($post->image)}}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">{{$post->title}}</h5>
{{--                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>--}}
                            <a href="{{route('app.post.show',$post->slug)}}" class="btn btn-primary" style="width: 100%">مشاهده محصول</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>


    <script>
        $('.carousel').carousel({
            interval: 2000
        })
    </script>
@endsection
