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
    <section style="padding: 150px 0;">
        <div class="container wow fadeIn">
            <div class="row">
                <div class="col-lg-6 my-auto">
                    <h2 class="text-center">L牌（初学许可）交规考试题库</h2>
                    <hr class="colored">
                    <p>链接：<a href="https://www.vicroads.vic.gov.au/licences/your-ls/get-your-ls/lpt" target="_blank">https://www.vicroads.vic.gov.au/licences/your-ls/get-your-ls/lpt</a></p>
                    <p class="fs-rem">安卓手机下载APP（App截图）<br/>
                        搜索关键字： 中文L牌vicroads test。IOS系统只有英文题库，搜索关键字：vicroads test L plate。
                    </p>
                    <ul>
                        <li>这个考试你必须年满16周岁方可参加</li>
                        <li>你可通过 <a href="http://www.vicroads.vic.gov.au" target="_blank">http://www.vicroads.vic.gov.au</a>网上预约，但必须使用有效的信用卡付款</li>
                        <li>也可以电话预约131171</li>
                        <li>本考试可以采用中文答题</li>
                        <li>初学许可证考试包括看视力表，检测视力</li>
                        <li>上机多项选择考试32题，必须答对25题，78%以上</li>
                        <li>考试通过后可获取 learnner permit licence，有效期10年</li>
                    </ul>
                </div>
                <div class="col-lg-6 text-center my-auto">
                    <img class="img-fluid rounded" style="max-height: 400px;" src="{{ asset('images/app.png') }}" alt="Info Image">
                </div>
                <div class="col-lg-6 text-center my-auto" >
                    <img class="img-fluid rounded" src="{{ asset('images/htest.jpg') }}" alt="Info Image" style="max-height: 500px;">
                </div>
                <div class="col-lg-6 my-auto">
                    <h2 class="text-center">风险认知测试（HPT测试）</h2>
                    <hr class="colored">
                    <p>链接：<a href="http://mylicence.sa.gov.au/hazard-perception-test" target="_blank">http://mylicence.sa.gov.au/hazard-perception-test</a></p>
                    <ul>
                        <li>通过风险认知测试後方可参加路试</li>
                        <li>年满18岁或以上可报考风险认知测试</li>
                        <li>风险认知测试的有效期为12个月，若逾期而未完成取得驾照，则需重考风险认知测试</li>
                    </ul>
                    <p>你会看到一些动画片段，这些片段描述了真实生活中可能遇到的情况，共28个动画短片播影。风险认知测试会测试你以驾驶者的观点，在不同的交通情况下，通过点击鼠标的方式，指出应该作出的反应(例如:减速丶停车或转方向等)。<br>
                        – Vicroads依据安全守则评估您的答案<br>
                        – 45 分钟内完成28个短片播放<br>
                        – 54% 或以上为合格分数<br>
                    </p>
                </div>

                <div class="col-lg-12 mt-5 ">
                    <h2 class="text-center">路考（DRIVE TEST）</h2>
                    <hr class="colored">
                    <p>路考时间会持续30--45分钟，每个考场都有自身的特点，强度和难度也不一样，建议考生一定要做好充足考前准备，比如熟悉考场路线和严格按照路考注意细节练习。</p>
                    <p>考试的车子也有要求，考官坐在乘客的位子看不清楚速度显示的车辆不能作为考试车辆；没有手闸的车子不能作为考试车辆；考试前检查中灯光不能符合考试要求的同样不能进行考试。</p>
                    <p class="mt-2">以下为各年龄段，各式学员获取维州驾照的必走程序，请各位对号入座：</p>
                    <ul>
                        <li>Learner Permit Test： L牌（初学者）交规测试(有效期10年)，电脑考题</li>
                        <li>Hezard Perception Test: 危险认知测试（有效期1年），电脑考题</li>
                        <li>Drive Test: 路考，路面驾考</li>
                    </ul>
                </div>
                <div class="col-lg-12 mt-5">
                    <h2 class="text-center">本地学员（无海外驾照，或海外驾照不适用）</h2>
                    <hr class="colored">
                    <div class="local-wrap">
                        <h3>16岁---18岁</h3>
                        <p class="fcolor-r">16岁以上可考L牌<i class="fa fa-arrow-right" aria-hidden="true"></i>120小时练车记录本（LOGBOOK）<i class="fa fa-arrow-right" aria-hidden="true"></i>危险认知测试<i class="fa fa-arrow-right" aria-hidden="true"></i>满18岁方可参加路考</p>
                        <p class="fcolor-g">路考通过<i class="fa fa-arrow-right" aria-hidden="true"></i>红P1（1年）<i class="fa fa-arrow-right" aria-hidden="true"></i>绿P2（3年）<i class="fa fa-arrow-right" aria-hidden="true"></i>正式驾照</p>
                        <h3>18岁---21岁</h3>
                        <p class="fcolor-r">L牌<i class="fa fa-arrow-right" aria-hidden="true"></i>120小时练车记录本（LOGBOOK）<i class="fa fa-arrow-right" aria-hidden="true"></i>危险认知测试<i class="fa fa-arrow-right" aria-hidden="true"></i>（L牌满1年）路考</p>
                        <p class="fcolor-g">路考通过<i class="fa fa-arrow-right" aria-hidden="true"></i>红P1（1年）<i class="fa fa-arrow-right" aria-hidden="true"></i>绿P2（3年）<i class="fa fa-arrow-right" aria-hidden="true"></i>正式驾照</p>
                        <h3>21岁---25岁</h3>
                        <p class="fcolor-r">L牌<i class="fa fa-arrow-right" aria-hidden="true"></i>危险认知测试<i class="fa fa-arrow-right" aria-hidden="true"></i>（L牌满6个月）路考</p>
                        <p class="fcolor-g">路考通过<i class="fa fa-arrow-right" aria-hidden="true"></i>绿P2（3年）<i class="fa fa-arrow-right" aria-hidden="true"></i>正式驾照</p>
                        <h3>25岁以上</h3>
                        <p class="fcolor-r">L牌<i class="fa fa-arrow-right" aria-hidden="true"></i>危险认知测试<i class="fa fa-arrow-right" aria-hidden="true"></i>（L牌满3个月）路考</p>
                        <p class="fcolor-g">路考通过<i class="fa fa-arrow-right" aria-hidden="true"></i>绿P2（3年）<i class="fa fa-arrow-right" aria-hidden="true"></i>正式驾照</p>
                    </div>
                </div>
                <div class="col-lg-12 mt-5 mb-5">
                    <h2 class="text-center">海外驾照</h2>
                    <hr class="colored">
                    <p>先预约办理海外驾照认证（Overseas License Verification），可网上预约也可到Vicroads路局办理预约。认证时间大约需要1个月左右，请携带好护照，驾照原件和翻译件<br>银行卡或Medicare card以及可以证明自己住址的信件等</p>
                    <div class="local-wrap">
                        <h3>认证后方可</h3>
                        <p class="fcolor-r">1L牌交规测试（但不颁发L牌照）<i class="fa fa-arrow-right" aria-hidden="true"></i>危险认知测试<i class="fa fa-arrow-right" aria-hidden="true"></i>路考</p>
                        <p class="fcolor-g">路考通过</p>
                        <ul>
                            <li class="fcolor-g"><i class="fa fa-arrow-right" aria-hidden="true"></i>绿P2（3年）</li>
                            <li class="fcolor-g"><i class="fa fa-arrow-right" aria-hidden="true"></i>正式驾照</li>
                        </ul>
                        <p><strong>注意：持海外驾照参加路考如果第一次路考未能通过者，就不能再持海外驾照在澳洲独立开车，必须到路局缴费申领L牌照（无需再参加L牌交规考）。驾车时副座上必须有持澳洲正式牌照的陪同人员。</strong></p>
                    </div>
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