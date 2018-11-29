<div class="container-fluid" id="h_1" style="background-image:url({{URL::asset('images/bg/bg-full.png')}});">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-5">
                <h5>CÁC DỊCH VỤ CỦA <span>CHÚNG TÔI</span></h5>
            </div>

            @foreach($data['services'] as $key=>$item)
                <div class="col-md-4 mb-3">
                    <a href="{{URL::to('dich-vu/'.$item->path)}}">
                        <div class="items wow fadeInDown">
                            {{--<div class="img">--}}
                                {{--<div class="img-link"--}}
                                     {{--style="background-image:url({{URL::asset('images/dichvu/1.jpg')}});">--}}

                                {{--</div>--}}
                            {{--</div>--}}
                            <div class="text-center icon-dv">
                                <i class="{{$item->icon}}"></i>
                            </div>
                            <h6 class="text-center">{{$item->title}}</h6>

                            <h4 class="p-3 text-center mb-4">{!! $item->description !!}</h4>

                            {{--<div class="p-3 text-center mb-3 mt-2">--}}
                                {{--<a class="btn-chitiet" href="">CHI TIẾT</a>--}}
                                {{--<a class="btn-chitiet" href="">BÁO GIÁ DỊCH VỤ</a>--}}
                            {{--</div>--}}
                        </div>
                    </a>
                </div>
            @endforeach

            <div class="col-12 text-center mb-3 mt-3">
                <a class="btn-chitiet" href="{{URL::to('/dich-vu.html')}}">XEM THÊM DỊCH VỤ KHÁC</a>
            </div>
        </div>
    </div>
</div>