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
    <section class="ptb">
        <div class="container">
            <div class="wow fadeIn text-center">
                <h2>联系我</h2>
                <p class="mb-0">一路有我，安全出行！选择May, 选择终身的平安！</p>
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-12"></div>
                <div class="col-md-6 col-sm-12"></div>
            </div>
        </div>
    </section>
@endsection