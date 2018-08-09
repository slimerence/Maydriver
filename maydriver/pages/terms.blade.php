@extends(_get_frontend_layout_path('frontend'))

@section('content')
    <header class="childhead" style="background-image:  url({{ asset('images/backgrounds/footer-v2.jpg') }}) ">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-12 my-auto text-center text-white">
                    <div class="weltext">
                        <h1 class="align-items-center">条款说明</h1>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section style="padding: 150px 0;">
        <div class="container wow fadeIn">
            <div class="row">
                <div class="col-lg-6">
                    <h2 class="text-center"> 缴费特别说明</h2>
                    <hr class="colored">
                    <p class="fs-rem">学费支付后，不能擅自退费，或转予他人使用。如因教练原因，未能完成练车或路考计划的，本驾校将退还未完成的那部分学费。学员确因特殊原因申请退费的，将收取所缴学费30%的毁约费用。
                    </p>
                </div>
                <div class="col-lg-6">
                    <h2 class="text-center">练车/排课须知</h2>
                    <hr class="colored">
                    <p class="fs-rem"> 所有下周课程将会在周末前安排妥当。May教练将与学员商议好双方下周适宜的最佳练车时段。学员须按时到达和教练预约的会面地点。学员未能在24小时前电话或短信通知教练而无故缺席预约好的课时，将会被收取一堂课的费用作为缺课费。
                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection