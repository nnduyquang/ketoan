<div class="container-fluid" id="footer"
     style="background-image:url({{URL::asset('images/bg/bg_commercialista.jpg')}});">

    <div class="container" style="position: relative;z-index: 1">
        <div class="row">
            <div class="col-md-4 col-sm-6 col-12 instro">
                <img class="mr-3" src="{{URL::asset('images/logo/logo.png')}}" alt=""
                     style="width: 118px;height:auto;float:left;">
                <p class="text-center">
                    GIỚI THIỆU VỀ CÔNG TY TNHH <span style="color: #002752;font-weight: bold">NGUYỄN THẮNG</span><br><br>
                    <span>CÔNG TY KẾ TOÁN UY TÍN</span> <br><br>
                </p>
                <p class="text-justify">{{$listFrontendCommon['introduceFooter']->description}}</p>
            </div>
            <div class="col-md-4 col-sm-6 col-12">
                <h5 style="background-image:url({{URL::asset('images/bg/footer-bg-title-new.png')}});">DỊCH VỤ KẾ
                    TOÁN</h5>
                <ul class="middle">

                    @foreach($listFrontendCommon['servicesFooter'] as $key=>$item)
                        <li>
                            <a href="{{URL::to('dich-vu/'.$item->path)}}">{{$item->title}}</a>
                        </li>
                    @endforeach

                </ul>

            </div>
            <div class="col-md-4 col-sm-6 col-12" id="contact">
                <h5 style="background-image:url({{URL::asset('images/bg/footer-bg-title-new.png')}});">LIÊN HỆ CHÚNG
                    TÔI</h5>
                <ul>
                    <li class="d-flex align-items-center">
                        <i class="fas fa-archway"></i>
                        <div>
                            <p>Trụ sở chính: Lầu 2, Số 4 Đường D14A, P.Tây Thạnh, Q.Tân Phú. TP.HCM</p>
                        </div>
                    </li>
                    <li class="d-flex align-items-center">
                        <div class="pl-2 pr-2">
                        <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div>
                            <p>Văn phòng đại diện: {{$listFrontendCommon['address']}}</p>
                        </div>
                    </li>
                    <li class="d-flex align-items-center">
                        <i class="fas fa-phone"></i>
                        <p>{{$listFrontendCommon['phone-1']}} <br>
                            {{$listFrontendCommon['phone-2']}}</p>
                    </li>

                    <li class="d-flex align-items-center" sty>
                        <i class="far fa-envelope"></i>
                        <p style="word-break: break-all;">{{$listFrontendCommon['email']}}
                        </p>
                    </li>
                </ul>
            </div>

        </div>
    </div>

</div>
<div class="copy-right">
    <div class="container">
        <div class="row">
            <div class="col-12 pt-3 pb-3">
                <p class="text-white" style="font-size: 13px">Copyright © Phát triển bởi Smartlinks.vn</p>
            </div>
        </div>
    </div>
</div>