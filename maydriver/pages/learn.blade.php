@extends(_get_frontend_layout_path('frontend'))

@section('content')
    <header class="childhead" style="background-image:  url({{ asset('images/backgrounds/footer-v2.jpg') }}) ">
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
    <section  class="page-section">
        <div class="container wow fadeIn">
            <div class="row">
                <div class="col-lg-6">
                    <img class="img-fluid rounded my-5" src="{{ asset('images/learn1.jpg') }}" alt="Info Image">
                </div>
                <div class="col-lg-6 my-auto">
                    <h2 class="text-center">路考知识</h2>
                    <hr class="colored">
                    <p>内容更新中</p>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container wow fadeIn">
            <div class="row">
                <div class="col-lg-6 my-auto">
                    <h2 class="text-center">路考知识</h2>
                    <hr class="colored">
                    <p>内容更新中</p>
                </div>
                <div class="col-lg-6">
                    <img class="img-fluid rounded my-5" src="{{ asset('images/learn1.jpg') }}" alt="Info Image">
                </div>
                <div class="col-lg-12 my-auto">
                    <h2 class="text-center">L牌和风险认知测试模拟题</h2>
                    <p><a href="http://mylicence.sa.gov.au/hazard-perception-test">风险认知模拟测试</a></p>
                </div>
            </div>
        </div>
    </section>


    <section class="call-to-action" style="background-image: url({{ asset('images/backgrounds/footer-v1.jpg') }});">
        <div class="container wow fadeIn">
            <div class="row">
                <div class="col-md-10 offset-md-1">
                    <span class="quote">立刻联系我</span>
                    <hr class="colored">
                    <a class="btn btn-primary js-scroll-trigger" href="{{ url('/contact-us') }}">Enquiry Now</a>
                </div>
            </div>
        </div>
    </section>

@endsection