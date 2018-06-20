@extends(_get_frontend_layout_path('frontend'))
@section('content')
    <header class="childhead" style="background-image:  url({{ asset('images/backgrounds/footer-v1.jpg') }}) ">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-12 my-auto text-center text-white">
                    <div class="weltext">
                        <h1 class="align-items-center">一路有我，安全出行</h1>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section class="page-section bg-light" id="services">
        <div class="container">
            <div class="wow fadeIn">
                <div class="row">
                    <div class="col-lg-12">
                        <h2>{{ $blog->title }}</h2>

                        @if($blog->feature_image)
                        <div class="item">
                            <img src="{{ asset($blog->feature_image) }}" alt="{{ $blog->title }}" />
                        </div>
                        @endif
                    </div>
                    <div class="col-lg-12 text-left">
                        {!! $blog->content !!}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection