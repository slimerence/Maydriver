@extends(_get_frontend_layout_path('frontend'))

@include(_get_frontend_layout_path('frontend._header'))

@section('content')

    <!-- About Section -->
    <section class="page-section" id="about">
        <div class="container wow fadeIn">
            <div class="row">
                <div class="col-lg-6">
                    <img class="img-fluid rounded my-5" src="{{ asset('images/intro.jpg') }}" alt="Info Image">
                </div>
                <div class="col-lg-6 my-auto">
                    <h2 class="text-center">墨尔本驾校</h2>
                    <hr class="colored">
                    <p>好教练可以而不可求。碰上爆脾气，经验不足，路考通过率低，全程只陪不练的教练，导致学员各种迷茫,各种崩溃，外加练车过程中的恐慌，五味杂陈。作为墨尔本为数不多的女教练May为您解决您的所有困扰和顾虑。</p>
                    <p>维州DIA官方认证的持牌女教练May, 亲自主理自创的墨尔本首发驾校（SOFAR Driving School），路考通过率高达90%以上。细致，专业，好脾气是May对每个学员的教学承诺，让学员们轻松学车，高效拿证，扎实学到开车技能和维州交规。May语言组织能力强，表达清晰，擅长循序渐进式的引导教学，经验丰富，口碑好，合理根据学员个体情况量身定制驾驶教程。</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->

    <section class="page-section bg-light" id="services">
        <div class="container">
            <div class="wow fadeIn text-center">
                <h2>May教练提供的教程范围如下</h2>
                <p class="mb-0">一路有我，安全出行！选择May, 选择终身的平安！</p>
            </div>
            <hr class="colored">
            <div class="row text-center">
                <div class="col-lg-3 col-md-6">
                    <div class="wow fadeIn px-4 " data-wow-delay=".8s">
                        <i class="fa fa-heart fa-2x"></i>
                        <p class="mb-0">零基础学员手脚协调专业训练及结合《Vicroads独立驾驶之路》图文详解及教授交规</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="wow fadeIn px-4 pb-4 pb-lg-0 " data-wow-delay=".2s">
                        <i class="fa fa-code fa-2x"></i>
                        <p class="mb-0">标准普通话/英语双语教学<br>双刹车双油门自动挡专业教练车，车身轻巧，操控简易</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="wow fadeIn px-4 pb-4 pb-lg-0" data-wow-delay=".4s">
                        <i class="fa fa-edit fa-2x"></i>
                        <p class="mb-0">海外驾照陪练及结合《Vicroads独立驾驶之路》图文详解及教授交规</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="wow fadeIn px-4 pb-4 pb-lg-0 " data-wow-delay=".6s">
                        <i class="fa fa-tablet fa-2x"></i>
                        <p class="mb-0">路考集训：熟悉和操练路局路考路线，模拟路考模式，图片实景解析难点路口及注意事项</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="call-to-action" style="background-image: url({{ asset('images/backgrounds/footer-v1.jpg') }});">
        <div class="container wow fadeIn">
            <div class="row">
                <div class="col-md-10 offset-md-1">
                    <span class="quote">获得课程报价</span>
                    <hr class="colored">
                    <a class="btn btn-primary js-scroll-trigger" href="{{ url('/page/courses') }}">View More</a>
                </div>
            </div>
        </div>
    </section>


@endsection