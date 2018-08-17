@extends(_get_frontend_layout_path('frontend'))


@section('content')
    @include(_get_frontend_layout_path('frontend._childheader'))

    <section class="page-section bg-light" id="services">
        <div class="container">
            <div class="wow fadeIn text-center">
                <h2>墨尔本驾校价格</h2>
                <p class="mb-0">1堂=45分钟  套课价39元/堂 单次课40元/堂<br/>路考：教练车+教练陪同<br/>包考过：不限次数带路考考过为止
                </p>
            </div>
            <hr class="colored">
            <table class="table wow fadeIn pricetable table-hover">
                <caption>套餐费用不含GST，转账时需加10% GST，所缴纳费用有效期2年，过期无效。
                    <div class="mt-1 d-flex w-100">
                        <div class="flex-fill"><span class="font-weight-bold">开户行：</span>Commonwealth Bank</div>
                        <div class="flex-fill"><span class="font-weight-bold">BSB:</span>063-574</div>
                        <div class="flex-fill"><span class="font-weight-bold">ACC:</span>1035 9798</div>
                        <div class="flex-fill"><span class="font-weight-bold">NAME:</span>SOFAR DRIVING SCHOOL</div></div>
                    <p>注*：学员使用网上转账缴费时，请转学费数额+GST（学费的10%），并留下手机号码作为Reference方便核对。</p>
                </caption>
                <thead>
                <tr>
                    <th scope="col">堂数</th>
                    <th scope="col">价格</th>
                    <th scope="col">含1考</th>
                    <th scope="col">包考过</th>
                </tr>
                </thead>

                <?php $output = "<tbody>";
                for ($row=1;$row<16;$row++){
                    $output .= "<tr><td>".($row*2)."堂</td>";
                    $output .= "<td>".($row*78)."</td>";
                    $output .= "<td>".($row*78+120)."</td>";
                    $output .= "<td>".($row*78+220)."</td></tr>";
                }
                $output .= "</tbody>";
                echo $output;
                ?>
            </table>
            <div class="wow fadeIn text-center">
                <p class="mb-0">学车无压力，报名有惊喜：凡购买套餐的学员，路考前获赠考前攻略包，路考通过后赠红、绿P及盲区镜一套</p>
            </div>
            <div class="container wow fadeIn">
                <div class="row" style="padding: 2em;    margin: 2em 0;    border: 1px solid;">
                    <div class="col-lg-12">
                        <h3 class="text-left" style="font-size: 11px;"> 缴费特别说明</h3>
                        <p class="fs-rem" style="font-size: 11px;">学费支付后，不能擅自退费，或转予他人使用。如因教练原因，未能完成练车或路考计划的，本驾校将退还未完成的那部分学费。学员确因特殊原因申请退费的，将收取所缴学费30%的毁约费用。
                        </p>
                    </div>
                    <div class="col-lg-12">
                        <h3 class="text-left" style="font-size: 11px;">练车/排课须知</h3>
                        <p class="fs-rem" style="font-size: 11px;"> 所有下周课程将会在周末前安排妥当。May教练将与学员商议好双方下周适宜的最佳练车时段。学员须按时到达和教练预约的会面地点。学员未能在24小时前电话或短信通知教练而无故缺席预约好的课时，将会被收取一堂课的费用作为缺课费。
                        </p>
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