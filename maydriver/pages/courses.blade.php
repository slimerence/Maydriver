@extends(_get_frontend_layout_path('frontend'))


@section('content')
    @include(_get_frontend_layout_path('frontend._childheader'))

    <section class="page-section bg-light" id="services">
        <div class="container">
            <div class="wow fadeIn text-center">
                <h2>墨尔本驾校价格</h2>
                <h1 style="font-size: 20px;">澳洲考驾照 | 澳洲学车</h1>
                <p class="mb-0">1堂=45分钟  套课价39元/堂 单次课40元/堂<br/>路考：教练车+教练陪同<br/>包考过：不限次数带路考考过为止
                </p>
            </div>
            <hr class="colored">
            <table class="table wow fadeIn pricetable table-hover">
                <caption>套餐费用不含GST，转账时需加10% GST，所缴纳费用有效期2年，过期无效。
                    <div class="mt-1 d-flex flex-wrap w-100">
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
                        <h3 class="text-left" style="font-size: 11px;"> 关于学员改课、缺席和取消课程的条例</h3>
                        <p class="fs-rem" style="font-size: 11px;">鉴于您访问本网站并和我们约课我们认为您已经和我们达成一致认可，如果您没能及时取消课程或者无通知缺席，将会产生一定的费用，在此我们提醒您在预约时予以阅读并理解。
                        </p>
                    </div>
                    <div class="col-lg-12">
                        <h3 class="text-left" style="font-size: 11px;">@取消课程或退课</h3>
                        <p class="fs-rem" style="font-size: 11px;"> 学员一旦预订课程或路考并支付费用后就不得取消课程，也不可转给他人使用。驾校有保留不予退款的权利。
                        </p>
                    </div>
                    <div class="col-lg-12">
                        <h3 class="text-left" style="font-size: 11px;">取消课程或退课特殊条例：</h3>
                        <p class="fs-rem" style="font-size: 11px;"> 如果是因为驾校原因，使得学员无法按原计划练车或者完成您的路考的，驾校将剩余的未完成部分学费退予您。
                        </p>
                    </div>
                    <div class="col-lg-12">
                        <h3 class="text-left" style="font-size: 11px;">@修改学车课程时间</h3>
                        <p class="fs-rem" style="font-size: 11px;"> 如果您在24小时前提前通知我们改课，我们将不收取任何费用。如果您的改课通知已经晚于开课前24小时，我们将收取一节课的费用作为课程调整费。<br>如果您在规定的时间内，没有准时抵达约定的练车或者路考地点，并且迟到时间超过10分钟，驾校将计入课程时间内或保留取消本次课程的权利，并不予退款。
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