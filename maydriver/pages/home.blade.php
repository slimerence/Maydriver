@extends(_get_frontend_layout_path('frontend'))

@section('content')
    @include(_get_frontend_layout_path('frontend._header'))

    <!-- About Section -->
    <section class="page-section" id="about">
        <div class="container wow fadeIn">
            <div class="row">
                <div class="col-lg-6 text-center">
                    <img class="img-fluid rounded" src="{{ asset('images/may.jpg') }}" style="max-height: 400px;width: auto;" alt="Info Image">
                    <h3 style="font-size: 16px;font-weight: bold" class="mt-1">维州DIA持牌女教练MAY</h3>
                    <p style="font-size: 24px;"><i class="fa fa-phone" style="color:red;" aria-hidden="true"></i>0421279588</p>
                </div>
                <div class="col-lg-6 my-auto">
                    <h1 class="text-center" style="font-size: 30px;">墨尔本驾校</h1>
                    <h3 style="font-size: 16px;" class="text-center">资深女教练May</h3>
                    <h2 class="text-center" style="font-size: 24px;">墨尔本驾校 | 澳洲驾照考试</h2>
                    <hr class="colored">
                    <p>好教练可遇而不可求。碰上爆脾气，经验不足，路考通过率低，全程只陪不练的教练，导致学员各种迷茫,各种崩溃，外加练车过程中的恐慌，五味杂陈。作为墨尔本为数不多的女教练May为您解决您的所有困扰和顾虑。</p>
                    <p>维州DIA官方认证的持牌女教练May, 亲自主理自创的墨尔本首发驾校（SOFAR Driving School），路考通过率高达90%以上。细致，专业，好脾气是May对每个学员的教学承诺，让学员们轻松学车，高效拿证，扎实学到开车技能和维州交规。May语言组织能力强，表达清晰，擅长循序渐进式的引导教学，经验丰富，口碑好，合理根据学员个体情况量身定制驾驶教程。帮助很多学生顺利通过澳洲驾照考试。</p>
                    <p><strong>授课范围：</strong>Burwood east, Heatherton, Dandenone路局及周边地区</p>
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
                <div class="col">
                    <div class="wow fadeIn px-4 pb-4 pb-lg-0 " data-wow-delay=".2s">
                        <i class="fa fa-language fa-2x"></i>
                        <p class="mb-0">标准普通话/英语双语教学</p>
                    </div>
                </div>
                <div class="col">
                    <div class="wow fadeIn px-4 pb-4 pb-lg-0 " data-wow-delay=".2s">
                        <i class="fa fa-taxi fa-2x"></i>
                        <p class="mb-0">双刹车双油门自动挡专业教练车，车身轻巧，操控简易</p>
                    </div>
                </div>
                <div class="col">
                    <div class="wow fadeIn px-4 " data-wow-delay=".8s">
                        <i class="fa fa-book fa-2x"></i>
                        <p class="mb-0">零基础学员手脚协调专业训练及结合《Vicroads独立驾驶之路》图文详解及教授交规</p>
                    </div>
                </div>
                <div class="col">
                    <div class="wow fadeIn px-4 pb-4 pb-lg-0" data-wow-delay=".4s">
                        <i class="fa fa-globe fa-2x"></i>
                        <p class="mb-0">海外驾照陪练及结合《Vicroads独立驾驶之路》图文详解及教授交规</p>
                    </div>
                </div>
                <div class="col">
                    <div class="wow fadeIn px-4 pb-4 pb-lg-0 " data-wow-delay=".6s">
                        <i class="fa fa-car fa-2x"></i>
                        <p class="mb-0">路考集训：熟悉和操练路局路考路线，模拟路考模式，图片实景解析难点路口及注意事项</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="page-section" id="services">
        <div class="container">
            <div class="wow fadeIn text-center">
                <h2>用心教学，实力选May</h2>
                <p class="mb-0">注：1次课=90分钟</p>
            </div>
            <hr class="colored">
            <div class="row">
                <div class="col" style="background-color:#C3DDB0; margin:15px;">
                    <div class="wow fadeIn px-4 pb-4 pt-4" data-wow-delay=".2s">
                        <h2 class="text-center" style="font-size: 28px;">易学易上手</h2>
                        <h3 style="font-size: 16px;" class="text-center pb-3">（适用：零基础的学员）</h3>
                        <p class="mb-1">*** 零基础3次课可上路，基本可以控车；<br> 全程8-10次课即可获取驾照，通过率90%</p>
                        <p class="mb-1">*** 课程透明，无收费黑洞</p>
                        <p class="mb-1">*** 控车技巧+交规学习+安全意识+路考细节+路考路线，五合一教学</p>
                        <p class="mb-1">*** 双油门，双刹车专业教练车，安全有保障</p>
                    </div>
                </div>
                <div class="col" style="background-color:#6DBF42; margin:15px;">
                    <div class="wow fadeIn px-4 pb-4 pt-4" data-wow-delay=".2s">
                        <h2 class="text-center" style="font-size: 28px;">无盲区路考集训</h2>
                        <h3 style="font-size: 16px;" class="text-center pb-3">（适用：海外驾照换维州驾照的学员）</h3>
                        <p class="mb-1">*** 2次课，路考技巧讲解+路考重点难点路口历练+路考路线</p>
                        <p class="mb-1">*** 路考知识讲解全面，无盲区无死角，避免路考中踩坑。通过率95%</p>
                        <p class="mb-1">*** 两次课课程透明，无收费黑洞。未有维州驾车经验的学员需3-4次课</p>
                    </div>
                </div>
                <div class="col" style="background-color:#C3DDB0; margin:15px;">
                    <div class="wow fadeIn px-4 pb-4 pt-4" data-wow-delay=".2s">
                        <h2 class="text-center" style="font-size: 28px;">精准纠错，快速拿证</h2>
                        <h3 style="font-size: 16px;" class="text-center pb-3">（适用：有路考失败经历的学员）</h3>
                        <p class="mb-1">*** 精准找出学员短板，强化整改，力排短板与不足</p>
                        <p class="mb-1">*** 路考技巧+路考路线+重点难点路口，量身定制路考方案。<br>避免路考中踩坑。通过率95%</p>
                        <p class="mb-1">*** 2-3次课，课程透明，无收费黑洞</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col" style="background-color:#6DBF42; margin:15px;">
                    <div class="wow fadeIn px-4 pb-4 pt-4" data-wow-delay=".2s">
                        <h2 class="text-center pb-3" style="font-size: 28px;">轻松学交规</h2>
                        <p class="mb-1">*** 实地驾车结合图文讲解，学得快，记得牢</p>
                        <p class="mb-1">*** 复杂路口，重大路口练习</p>
                        <p class="mb-1">*** 交规知识讲解全面，详析如何避免罚单及安全驾驶</p>
                    </div>
                </div>
                <div class="col" style="background-color:#C3DDB0; margin:15px;">
                    <div class="wow fadeIn px-4 pb-4 pt-4" data-wow-delay=".2s">
                        <h2 class="text-center pb-3" style="font-size: 28px;">实力教学</h2>
                        <p class="mb-1">*** 最少课，最省钱，快速拿证</p>
                        <p class="mb-1">*** 好脾气，有耐心，一对一教学</p>
                        <p class="mb-1">*** 因人制定教车方案</p>
                        <p class="mb-1">*** 解说简易清晰，无口音，中英文教学</p>
                        <p class="mb-1">*** 根据学员情况，推荐最适合学员的考场</p>
                        <p class="mb-1">*** 灵活排课。主要以学员有效时间为依据排课</p>
                    </div>
                </div>
                <div class="col" style="background-color:#6DBF42; margin:15px;">
                    <div class="wow fadeIn px-4 pb-4 pt-4" data-wow-delay=".2s">
                        <h2 class="text-center pb-3" style="font-size: 28px;">“教”练  非“陪”练</h2>
                        <p class="mb-1">授课范围：自动拨车辆。Burwood east, Ringwood 考区及考区周边地区</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="page-section bg-light" id="services">
        <div class="container">
            <div class="wow fadeIn text-center">
                <h2>避免踩坑</h2>
            </div>
            <hr class="colored">
            <div class="row mr-lg-5 mx-lg-5 pr-lg-5 px-lg-5" style="padding: 2em; margin: 2em 0;border: 1px solid;">
                <div class="col mr-lg-5 mx-lg-5 pr-lg-5 px-lg-5">
                    <div class="wow fadeIn px-4 pb-4 mr-lg-5 mx-lg-5 pr-lg-5 px-lg-5" data-wow-delay=".2s">
                        <i class="fa fa-times fa-2x"></i>
                        <span style="font-weight:500; font-size:24px;">收费黑洞 </span>
                        <span>教练无教程计划，不断要求加课，感觉像个无底洞</span>
                    </div>
                    <div class="wow fadeIn px-4 pb-4 mr-lg-5 mx-lg-5 pr-lg-5 px-lg-5" data-wow-delay=".2s">
                        <i class="fa fa-times fa-2x"></i>
                        <span style="font-weight:500; font-size:24px;">不教控车技巧</span>
                        <span>学员越练越没信心，老get不到关键点，学了多次课没进步，越学越迷茫</span>
                    </div>
                    <div class="wow fadeIn px-4 pb-4 mr-lg-5 mx-lg-5 pr-lg-5 px-lg-5" data-wow-delay=".2s">
                        <i class="fa fa-times fa-2x"></i>
                        <span style="font-weight:500; font-size:24px;">找不出驾驶毛病</span>
                        <span>学员学了多次，总感觉不安全，控车不稳，车身晃，路面驾驶有磕顿感。路考中容易因自身毛病踩坑</span>
                    </div>
                    <div class="wow fadeIn px-4 pb-4 mr-lg-5 mx-lg-5 pr-lg-5 px-lg-5" data-wow-delay=".2s">
                        <i class="fa fa-times fa-2x"></i>
                        <span style="font-weight:500; font-size:24px;">知识讲解不全面</span>
                        <span>开到哪说到哪，路面知识单一不全。路考知识及技巧讲解片面，路考中容易踩坑</span>
                    </div>
                    <div class="wow fadeIn px-4 pb-4 mr-lg-5 mx-lg-5 pr-lg-5 px-lg-5" data-wow-delay=".2s">
                        <i class="fa fa-times fa-2x"></i>
                        <span style="font-weight:500; font-size:24px;">口音重或解说拖沓，不清晰</span>
                    </div>
                    <div class="wow fadeIn px-4 pb-4 mr-lg-5 mx-lg-5 pr-lg-5 px-lg-5" data-wow-delay=".2s">
                        <i class="fa fa-times fa-2x"></i>
                        <span style="font-weight:500; font-size:24px;">花了钱，挨骂，没尊严</span>
                    </div>
                </div>
            
            
            
            </div>
            <div class="row text-center">
                <div class="col">
                    <div class="wow fadeIn px-4 pb-4 pb-lg-0" data-wow-delay=".2s">
                        <h2 class="text-center pb-3" style="font-size: 28px;">资深金牌女教练May, 解决您的一切烦恼！！！</h2>
                        <p class="text-center" style="font-size: 24px;">实力说话，路考通过学员榜，全部真实个案</p>
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
                    <a class="btn btn-primary js-scroll-trigger" href="{{ url('/courses') }}">View More</a>
                </div>
            </div>
        </div>
    </section>


@endsection