<div class="container-fluid" id="h_5"  style="background-image:url({{URL::asset('images/bg/bg-full.png')}});">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-5">
                <h5>CẨM NANG <span style="color: #007bff">DOANH NGHIỆP</span></h5>
            </div>


            <div class="col-12 position-relative">
                <div id="owl-project" class="owl-carousel owl-theme">
                    @foreach($listFrontendCommon['camnangs'] as $key=>$item)
                        <div>
                            <a href="{{URL::to('cam-nang-doanh-nghiep/'.$item->path)}}">
                                <div class="items">
                                    <div class="img">
                                        <div class="img-link"
                                             style="background-image:url({{URL::to($item->image)}});">

                                        </div>
                                    </div>
                                    <h6>{{$item->title}}</h6>

                                    <h4 class="p-3 text-justify">{!! $item->description !!}</h4>

                                    <div class="p-3 text-center mb-3 mt-2">
                                        <a class="btn-chitiet" href="{{URL::to('cam-nang-doanh-nghiep/'.$item->path)}}">CHI
                                            TIẾT</a>
                                        {{--<a class="btn-chitiet" href="">BÁO GIÁ DỊCH VỤ</a>--}}
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>

                <button class="btn_pre"><i class="fas fa-angle-left"></i></button>
                <button class="btn_next"><i class="fas fa-angle-right"></i></button>
            </div>
        </div>
    </div>
</div>