<div class="container-fluid" id="d_1" style="background-image:url({{URL::asset('images/bg/bg-full.png')}});">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="row">
                    <div class="col-12 text-center mb-5">
                        <h1 class="mb-4"><span class="text-dark">DỊCH VỤ CỦA</span> CHÚNG TÔI</h1>
                        <p style="line-height: 20px;width: 80%;margin: auto;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi aperiam debitis enim est
                            exercitationem illum laboriosam nemo quasi repudiandae? Atque enim illum molestias nihil
                            odit. Expedita fugit pariatur quae sapiente!</p>
                    </div>

                    @foreach($data['services'] as $key=>$item)
                        <div class="col-md-4 mb-3">
                            <a href="{{URL::to('dich-vu/'.$item->path)}}">
                                <div class="items">
                                    {{--<div class="img">--}}
                                    {{--<div class="img-link"--}}
                                    {{--style="background-image:url({{URL::asset('images/dichvu/1.jpg')}});">--}}

                                    {{--</div>--}}
                                    {{--</div>--}}
                                    <div class="text-center icon-dv">
                                        <i class="{{$item->icon}}"></i>
                                    </div>
                                    <h6 class="text-center">{{$item->title}}</h6>

                                    <p class="p-3 text-center mb-4">{!! $item->description !!}</p>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="col-md-3">
                @include('frontend.common.r-common.tt-lq')
                @include('frontend.common.r-common.dv-lq')
                @include('frontend.common.r-common.tags-lq')
            </div>
        </div>
    </div>
</div>